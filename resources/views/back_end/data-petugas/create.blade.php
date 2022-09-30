@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h2>Tambah Petugas</h2>

      <div class="row mt-4">
        <div class="col-md-8">
          <form action="/data-petugas" method="post">
            @csrf
            <div class="row g-3 mb-3">
              <div class="col-md">
                <div class="form-group">
                  <label for="username" class="form-label">Username :</label>
                  <input type="text" class="form-control" name="username" id="username">
                  @error('username')
                      {{ $message }}
                  @enderror
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label for="email" class="form-label">email :</label>
                  <input type="email" class="form-control" id="email" name="email">
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
                  <input type="number" class="form-control" name="no_telp" id="no_telp">
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
            <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
      
    </div>
@endsection