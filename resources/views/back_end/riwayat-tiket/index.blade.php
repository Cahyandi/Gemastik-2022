@extends('back_end.layouts.main')

@section('section')
<div class="mt-4">
  <h3>Riwayat Ticket</h3>

  <div class="row mt-4">
    <div class="col-md-10 border rounded">
      <table class="table mt-3">
        <thead>
          <tr>
            <th>No</th>
            <th>No Tiket</th>
            <th>Username</th>
            <th>Nama Pemesan</th>
            <th>Wisata</th>
            <th>Status</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        {{-- {{ ddd($tikets) }} --}}
        <tbody>
          @foreach ($tikets as $tiket)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $tiket->no_ticket }}</td>
              <td>{{ $tiket->user->username }}</td>
              <td>{{ $tiket->nama_pemesan }}</td>
              <td>{{ $tiket->wisata->nama_wisata }}</td>
              <td>{{ $tiket->status }}</td>
              <td colspan="2" class="text-center">
                <a href="/riwayat-ticket/validate/{{ $tiket->no_ticket }}" class="btn btn-success">Validasi Pembayaran</a>
                <form action="/data-petugas" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection