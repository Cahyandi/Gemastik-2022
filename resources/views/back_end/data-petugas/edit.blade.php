@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h2>Edit Petugas</h2>
      {{-- {{ ddd($petugas) }} --}}
      <div class="row mt-4">
        <div class="col-md-8">
          <form action="/data-petugas/{{ $petugas->id }}" method="post"  class="bg-secondary bg-opacity-10 p-4 rounded">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $petugas->id }}">
            <input type="hidden" name="password_old" value="{{ $petugas->password }}">
            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="username" class="form-label">Username :</label>
                  <input type="text" class="form-control" name="username" id="username" value="{{ $petugas->username }}">
                  @error('username')
                      {{ $message }}
                  @enderror
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label for="email" class="form-label">email :</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ $petugas->email }}">
                  @error('email')
                      {{ $message }}
                  @enderror
                </div>
              </div>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="no_telp" class="form-label">No Telp :</label>
                  <input type="number" class="form-control" name="no_telp" id="no_telp" value="{{ $petugas->no_telp }}">
                  @error('no_telp')
                      {{ $message }}
                  @enderror
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label for="password" class="form-label">Password :</label>
                  <input type="password" class="form-control" id="password" name="password">
                  @error('password')
                      {{ $message }}
                  @enderror
                </div>
              </div>
            </div>
            <input type="hidden" name="role" value="petugas">
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
        </div>
      </div>
      
    </div>
@endsection