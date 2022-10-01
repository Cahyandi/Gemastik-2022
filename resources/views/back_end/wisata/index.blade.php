@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h3>Daftar Wisata</h3>

      <div class="row my-3">
        <div class="col-md-3">
        <a href="/dinas/wisata/create" class="btn btn-primary">Tambah Wisata</a>
        </div>
      </div>

      <div class="row mt-3">
        @foreach ($wisatas as $wisata)
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('storage/'. $wisata->img_wisata) }}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{ $wisata->nama_wisata }}</h5>
                <p class="card-text">{{ $wisata->deskripsi }}</p>
                <a href="/dinas/wisata/{{ $wisata->id }}" class="btn btn-primary">Detail</a>
                <a href="/dinas/wisata/{{ $wisata->id }}/edit" class="btn btn-success">Update</a>
                <form action="/dinas/wisata/{{ $wisata->id }}" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              </div>
            </div>
          </div>     
        @endforeach
      </div>
    </div>
@endsection