@extends('back_end.layouts.main')

@section('section')
    <div class="mt-4">
      <h3>Pesan Tiket</h3>

      <div class="row mt-3">
        @foreach ($wisatas as $wisata)
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('storage/'. $wisata->img_wisata) }}" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">{{ $wisata->nama_wisata }}</h5>
                <p class="card-text">Rp. {{ number_format($wisata->harga_tiket, 0,',','.') }}</p>
                <a href="/ticket/form/{{ $wisata->id }}" class="btn btn-warning ">Beli Tiket</a>
              </div>
            </div>
          </div>     
        @endforeach
      </div>
    </div>
@endsection