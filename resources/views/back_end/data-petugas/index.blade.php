@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h3>Data Petugas</h3>

      <div class="my-3">
        <a href="/data-petugas/create" class="btn btn-primary">Tambah Petugas</a>
      </div>

      <div class="row">
        <div class="col-md-8 border rounded">
          <table class="table mt-3">
            <thead>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dinas as $petugas)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $petugas->username }}</td>
                  <td>{{ $petugas->email }}</td>
                  <td>{{ $petugas->no_telp }}</td>
                  <td colspan="2">
                    <a href="/data-petugas/{{ $petugas->id }}/edit" class="btn btn-success">
                    <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="/data-petugas/{{ $petugas->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
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