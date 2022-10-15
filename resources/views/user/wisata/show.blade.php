@extends('user.master')

@section('content')
<main>
    <section class="content-1" style="margin-top: -110px;">
        <img src="{{ asset('storage/'. $wisata->img_wisata) }}" alt="" style="width: 100%; height: 400px; object-fit: cover;">
        <div class="caption  d-md-block">
            <div class="container d-flex align-items-center flex-column">
                <h1>Wisata {{ $wisata->nama_wisata }}</h1>
                <p>Lokasi Wisata Waduk Darma berada di {{ $wisata->alamat }}</p>
            </div>
        </div>        
    </section>

    <section class="deskripsi">
        <div class="container">
            <div class="d-flex flex-column pt-5 mt-5">
                <span class="fw-bold fs-4">DESKRIPSI WISATA</span>
                <label class="strip"></label>
            </div>
            <div class="row g-2 justify-content-between align-items-center ">
                <div class="col-md-6" style="color: #939394;">
                    <p>{{ $wisata->deskripsi }}</p>
                </div>
                <div class="col-md-5">
                    {{-- <h1>GEOLOCATION</h1> --}}
                    <div id="leafletMap-registration" style="height: 300px;width:100%;"></div>
                    <input type="hidden" value="{{ $wisata->latitude }}" id="latitude">
                    <input type="hidden" value="{{ $wisata->longitude }}" id="longitude">
                </div>
                <h3 class="pb-3 pt-3"><label style="color: #fe8903;">Harga: Rp.{{ number_format($wisata->harga_tiket,0,',','.') }} /</label> Orang</h3>

                <div class="d-flex flex-column pt-5">
                    <span class="fw-bold fs-4">Fasilitas Wisata</span>
                    <label class="strip"></label>

                    <ul>
                        <li>Area Kemping</li>
                        <li>Kolam Renang Anak-anak</li>
                        <li>Perahu Motor</li>
                        <li>Cottage</li>
                    </ul>
                </div>
                <div class="d-flex flex-column pt-5 pb-5 mb-5">
                    <span class="fw-bold fs-4">Booking Tiket Wisata </span>
                    <button type="button" class="btn btn-info text-white w-25" data-bs-toggle="modal" data-bs-target="#tiket" >
                        Klik Untuk Booking Tiket!!!
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Box Tiket -->
        <div class="modal fade" id="tiket" tabindex="-1" aria-labelledby="tiket" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content d-flex p-4">
                    <div class="modal-header mb-4">
                        <div class="header d-flex flex-column ">
                            <h5 class="modal-title fs-4" id="exampleModalLabel">Tiket</h5>
                            <p style="font-size: 14px; color: #adb5bd;">Booking Tiket Untuk Memulai Perjalan Wisata</p>
                        </div>
                        <img src="/image/logo_sipaku.png" alt="" width="150">
                    </div>
                    <div class="modal-body">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="/ticket/form/{{ $wisata->id }}" class="btn btn-primary" name="submit">Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <hr>
        <div class="row justify-content-between">
            <section class="col-md-6">
                <h3 class="mb-5">Ulasan Orang Lain</h3>
                @if ($ulasans->count())
                    @php
                        $jumlahRating= 0;
                        $totalRating= 0;
                    @endphp
                    @foreach ($ulasans as $ulasan)
                        @php
                            $jumlahRating++;
                            $totalRating+= $ulasan->rating;
                        @endphp
                        <div class="mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('image/user.png') }}" style="width: 40px; margin-right: 10px">
                                <b class="me-2">{{ $ulasan->user->username }}</b>
                                <small>{{ $ulasan->created_at->diffForHumans() }}</small>
                                <span class="mx-2">|</span>
                                <small class="d-flex align-items-center">
                                    <i class='bx bxs-star text-warning me-1' style="font-size: 20px"></i>
                                    {{ $ulasan->rating }}
                                </small>
                            </div>
                            <p class="ms-5">{{ $ulasan->komentar }}</p>
                        </div>
                    @endforeach
                    <h4 class="mt-5 d-flex align-items-center">
                        Rata-rata Rating: 
                        <i class='bx bxs-star text-warning ms-3 me-1' style="font-size: 30px"></i>
                        {{ Str::limit($totalRating / $jumlahRating, 3, ' ') }}
                    </h4>
                @else
                    <div class="alert alert-warning" role="alert">
                        <h5>Belum ada ulasan</h5>
                        <p>Jadilah orang pertama yang berkomentar dan memberikan rating</p>
                    </div>
                @endif
            </section>
            <div class="col-md-4">
                <h3 class="mb-5">Berikan Ulasan</h3>
                <form method="POST" action="{{ route('storeulasan.wisata', $wisata->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="komentar" class="form-label">Masukan Komentar Anda :</label>
                        <textarea class="form-control" style="background: #f7f5f5; min-height: 150px" id="komentar" name="komentar" rows="3"></textarea>
                        @error('komentar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Berikan Rating Tempat Wisata</label>
                        <div class="mt-2 d-flex">
                            <label for="1" onClick="beriRating(1)">
                                <i class='bx bx-star text-warning rating1' style="font-size: 40px"></i>
                            </label>
                            <input type="radio" class="d-none" id="1" name="rating" value="1" style="width: auto !important">
                            {{--  --}}
                            <label for="2" onClick="beriRating(2)">
                                <i class='bx bx-star text-warning rating2' style="font-size: 40px"></i>
                            </label>
                            <input type="radio" class="d-none" id="2" name="rating" value="2" style="width: auto !important">
                            {{--  --}}
                            <label for="3" onClick="beriRating(3)">
                                <i class='bx bx-star text-warning rating3' style="font-size: 40px"></i>
                            </label>
                            <input type="radio" class="d-none" id="3" name="rating" value="3" style="width: auto !important">
                            {{--  --}}
                            <label for="4" onClick="beriRating(4)">
                                <i class='bx bx-star text-warning rating4' style="font-size: 40px"></i>
                            </label>
                            <input type="radio" class="d-none" id="4" name="rating" value="4" style="width: auto !important">
                            {{--  --}}
                            <label for="5" onClick="beriRating(5)">
                                <i class='bx bx-star text-warning rating5' style="font-size: 40px"></i>
                            </label>
                            <input type="radio" class="d-none" id="5" name="rating" value="5" style="width: auto !important">
                        </div>
                        @error('rating')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div style="display: flex; justify-content: right">
                        <button class="btn btn-primary">Kirim Komentar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<script>
    function beriRating(rating){
        const rating1= document.querySelector('.rating1');
        const rating2= document.querySelector('.rating2');
        const rating3= document.querySelector('.rating3');
        const rating4= document.querySelector('.rating4');
        const rating5= document.querySelector('.rating5');
        rating1.classList.add('bx-star');
        rating1.classList.remove('bxs-star');
        rating2.classList.add('bx-star');
        rating2.classList.remove('bxs-star');
        rating3.classList.add('bx-star');
        rating3.classList.remove('bxs-star');
        rating4.classList.add('bx-star');
        rating4.classList.remove('bxs-star');
        rating5.classList.add('bx-star');
        rating5.classList.remove('bxs-star');
        if (rating == 1) {
            rating1.classList.toggle('bx-star');
            rating1.classList.toggle('bxs-star');
        } else if(rating == 2) {
            rating1.classList.toggle('bx-star');
            rating1.classList.toggle('bxs-star');
            rating2.classList.toggle('bx-star');
            rating2.classList.toggle('bxs-star');
        } else if(rating == 3) {
            rating1.classList.toggle('bx-star');
            rating1.classList.toggle('bxs-star');
            rating2.classList.toggle('bx-star');
            rating2.classList.toggle('bxs-star');
            rating3.classList.toggle('bx-star');
            rating3.classList.toggle('bxs-star');
        } else if(rating == 4) {
            rating1.classList.toggle('bx-star');
            rating1.classList.toggle('bxs-star');
            rating2.classList.toggle('bx-star');
            rating2.classList.toggle('bxs-star');
            rating3.classList.toggle('bx-star');
            rating3.classList.toggle('bxs-star');
            rating4.classList.toggle('bx-star');
            rating4.classList.toggle('bxs-star');
        } else if(rating == 5) {
            rating1.classList.toggle('bx-star');
            rating1.classList.toggle('bxs-star');
            rating2.classList.toggle('bx-star');
            rating2.classList.toggle('bxs-star');
            rating3.classList.toggle('bx-star');
            rating3.classList.toggle('bxs-star');
            rating4.classList.toggle('bx-star');
            rating4.classList.toggle('bxs-star');
            rating5.classList.toggle('bx-star');
            rating5.classList.toggle('bxs-star');
        }
    }
    // you want to get it of the window global
    const providerOSM = new GeoSearch.OpenStreetMapProvider();
      const latitude = document.querySelector('#latitude').value;
      const longitude = document.querySelector('#longitude').value;
  
      //leaflet map
      var leafletMap = L.map('leafletMap-registration', {
      fullscreenControl: true,
      // OR
      fullscreenControl: {
          pseudoFullscreen: false // if true, fullscreen to page width and height
      },
      minZoom: 8
      }).setView([latitude, longitude], 15);
  
      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(leafletMap);
      
      let theMarker = {};
      theMarker = L.marker([latitude,longitude]).addTo(leafletMap);
  
      leafletMap.on('click',function(e) {
          let latitude  = e.latlng.lat.toString().substring(0,15);
          let longitude = e.latlng.lng.toString().substring(0,15);
          // document.getElementById("latitude").value = latitude;
          // document.getElementById("longitude").value = longitude;
          let popup = L.popup()
              .setLatLng([latitude,longitude])
              .setContent("Kordinat : " + latitude +" - "+  longitude )
              .openOn(leafletMap);
  
          if (theMarker != undefined) {
              leafletMap.removeLayer(theMarker);
          };
          theMarker = L.marker([latitude,longitude]).addTo(leafletMap);  
      });
</script>
@endsection