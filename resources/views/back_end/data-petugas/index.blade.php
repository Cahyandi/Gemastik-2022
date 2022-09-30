@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h3>Data Petugas</h3>

      <div class="my-3">
        <a href="/data-petugas/create" class="btn btn-primary">Tambah Petugas</a>
      </div>

      <table class="table table-striped mt-3">
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
                <a href="/data-petugas/{{ $petugas->id }}/edit" class="btn btn-success">Edit</a>
                <form action="/data-petugas/{{ $petugas->id }}" method="post" class="d-inline">
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
@endsection