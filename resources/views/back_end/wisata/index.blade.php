@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h3>Daftar Wisata</h3>

      <div class="row my-3">
        <div class="col-md-3">
          @if ($petugasWisata == null && auth('dinas')->user()->role == 'petugas' )
            <a href="/dinas/wisata/create" class="btn btn-primary">Tambah Wisata</a>
          @elseif(auth('dinas')->user()->role !== 'petugas')
          {{ '' }}
          @else
          {{ '' }}
          @endif
        </div>
      </div>

      <div class="row mt-3 mb-4">
        @if (auth('dinas')->user()->role == 'petugas')
        {{-- {{ ddd($petugasWisata) }} --}}
          @if ($petugasWisata !== null)
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('storage/'. $petugasWisata->img_wisata) }}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">{{ $petugasWisata->nama_wisata }}</h5>
                  <p class="card-text">{!! $petugasWisata->deskripsi !!}</p>
                  <a href="/dinas/wisata/{{ $petugasWisata->id }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i></a>
                  <a href="/dinas/wisata/{{ $petugasWisata->id }}/edit" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a>
                  <form action="/dinas/wisata/{{ $petugasWisata->id }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="javascript: confirm('Yakin hapus data')"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </div>
              </div>
            </div>
          @else
          @endif
        @else
        @foreach ($wisatas as $wisata)
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="{{ asset('storage/'. $wisata->img_wisata) }}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{ $wisata->nama_wisata }}</h5>
                <p class="card-text">{!! $wisata->deskripsi !!}</p>
                <a href="/dinas/wisata/{{ $wisata->id }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                {{-- <a href="/dinas/wisata/{{ $wisata->id }}/edit" class="btn btn-success">Update</a>
                <form action="/dinas/wisata/{{ $wisata->id }}" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form> --}}
              </div>
            </div>
          </div>     
        @endforeach
        @endif
      </div>
    </div>
@endsection