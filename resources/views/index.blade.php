<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Custom css -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/splash.css" />
    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

    <!-- Box icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- or -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
      <link rel="shortcut icon" href="image/logo_sipaku.png" />
    <title>Sipaku</title>
  </head>

  <body>
    
    <section class="intro">
      <div class="logo-header d-flex flex-column justify-content-center align-items-center">
          <img class="logo" src="image/intro.png" alt="" width="100px">
          <div>
              <span class="logo" style="color: #01136f;">SI</span>
              <span class="logo" style="color: #04757d;">PA</span>
              <span class="logo" style="color: #01136f;"">KU.</span>
          </div>
      </div>
    </section>
    <nav
      class="navbar sticky-top navbar-expand-lg navbar-light navbar-default bgcolor">
      @include('layouts.navbar')
    </nav>
    @include('layouts.alert')
    @include('layouts.login')
    @include('layouts.registrasi')
    
    <!-- WELCOME -->
    <section class="welcome paralax" id="beranda">
      <img src="image/ciremai_1.jpg" class="d-block w-100" alt="..." />
      <div class="carousel-caption d-md-block">
        <div class="container d-flex align-items-center flex-column">
          <label class="title" style=" 2em; font-family: 'Nothing You Could Do', cursive;">SELAMAT DATANG DI</label>
          <label class="sub-title" style="font-size: 3em; font-weight: 700; font-family: 'Nothing You Could Do', cursive;"
            >PARIWISATA KUNINGAN</label
          >
          <p>Kabupaten Kuningan adalah sebuah kabupaten yang kaya akan wisatanya
            yang mana wisata alam nya begitu indah dan menarik.</p>
          <a href="/about">
            <button type="button" class="btn btn-outline-light rounded-3">
              Baca Selengkapnya
              <i class="bx bxs-chevron-right"></i></button
          ></a>
        </div>
      </div>
    </section>

    <!-- DAFTAR WISATA -->
    <section
      class="destinasi-wisata"
      id="daftarWisata"
      style="width: 100%; ">
      <div class="container">
        <div class="d-flex flex-column">
          <span class="title fw-bold">DESTINASI WISATA PILIHAN</span>
          <label class="strip"></label>
        </div>
        <div
          id="carouselExampleCaptions"
          class="carousel slide"
          data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach ($inspirations as $index => $inspiration)
              <div 
                class="
                  carousel-item 
                  @if ($index == 0)
                  active
                  @endif
                " 
                style="height: 450px"
              >
                <img src="{{ asset('storage/'.$inspiration->img_wisata) }}" class="d-block w-100" alt="..." />
                <div class="carousel-caption-destinasi d-md-block">
                  <h1 style="font-family: 'Nothing You Could Do', cursive; font-weight: 400px">{{ $inspiration->nama_wisata }}</h1>
                  <p style="font-size: 14px">{{Str::limit($inspiration->deskripsi, 200)}}</p>
                    @auth
                      <a href="{{ route('show.wisata', $inspiration->id) }}" class="btn btn-warning">
                        Yuk Cari Tahu Wisata Ini !!!
                      </a>
                    @else
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#login">Yuk Cari Tahu Wisata Ini !!!</button>
                    @endauth
                </div>
              </div>
            @endforeach
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- DAFTAR WISATA -->
    <section class="daftar-wisata" style="margin-bottom: 10em;">
      <div class="container">
        <div class="d-flex flex-column">
            <span class="title fw-bold">DAFTAR WISATA</span>
            <label class="strip"></label>
        </div>
        <div class="row clearfix">
          @forelse ($wisatas as $index => $wisata)
            @if ($index > 3)
            <div class="col-md-3 p-5 d-none wisatacard">
              <div class="card">
                <img src="/{{ asset('storage/'. $wisata->img_wisata) }}" class="card-img-top" alt="..." height="238px">
                <div class="card-body">
                  <h5 class="card-title">{{ $wisata->nama_wisata }}</h5>
                  <small>
                    <i class='bx bxs-map'></i>
                    {{ $wisata->alamat }}
                  </small>
                  <p class="card-text mt-3" style="color: #929293;">
                    {{Str::limit($wisata->deskripsi, 80)}}
                  </p>
                  <a href="{{ route('show.wisata', $wisata->id) }}" class="w-100 btn btn-warning text-white d-flex align-items-center justify-content-center">
                    Let's go 
                    <i class='bx bxs-chevron-right'></i>
                  </a>
                </div>
              </div>
            </div>
            @else
            <div class="col-md-3 p-3">
              <div class="card">
                <img src="{{ asset('storage/'. $wisata->img_wisata) }}" class="card-img-top" alt="..." height="238px">
                <div class="card-body">
                  <h5 class="card-title">{{ $wisata->nama_wisata }}</h5>
                  <small>
                    <i class='bx bxs-map'></i>
                    {{ $wisata->alamat }}
                  </small>
                  <p class="card-text mt-3" style="color: #929293;">
                    {{Str::limit($wisata->deskripsi, 80)}}
                  </p>
                  <a href="{{ route('show.wisata', $wisata->id) }}" class="w-100 btn btn-warning text-white d-flex align-items-center justify-content-center">
                    Let's go 
                    <i class='bx bxs-chevron-right'></i>
                  </a>
                </div>
              </div>
            </div>
            @endif
          @empty
            <h4 class="text-center">Belum ada data pariwisata yang terdaftar</h4>
          @endforelse
        </div>   
      </div>
      <div class="d-flex justify-content-center pt-4">
        <button onclick="showMoreWisata()" class="btnShowMore btn btn-primary">
          Lebih banyak 
          <i class='bx bxs-chevron-down'></i>
        </button>
        <button onclick="showMoreWisata()" class="btnHideMore d-none btn btn-primary">
          Lebih sedikit 
          <i class='bx bxs-chevron-up'></i>
        </button>
      </div>   
    </section>


    <!-- INPIRASI WISATA -->
    <section class="inspirasi-wisata" id="galeri">
      <div class="container">
        <div class="d-flex flex-column">
          <span class="title fw-bold">INPIRASI WISATA</span>
          <label class="strip"></label>
        </div>
        @auth
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Bikin Postingan</a>
        @endauth

        <div class="inner container" style="background-color: #d9d9d930">
          <div class="row d-flex justify-content-center row-cols-2 row-cols-sm-4 row-cols-lg-5 g-3 g-lg-4 clearfix">
            @foreach ($posts as $post)
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('storage/'.$post->img) }}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{ $post->user->name }}</h5>
                <small class="text-secondary">{{ $post->wisata->nama_wisata }}</small>
                <p class="card-text">{{ Str::limit($post->caption, 100, '...') }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Lihat Postingan</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <!-- E-TIKET -->
    <section class="tiket mb-5 mt-3">
      <div class="container">
        <div
          class="row content"
          style="
            background-image: url('image/wisata_2.jpg');
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
          ">
          <div
            class="col-sm-12 d-flex align-items-center justify-content-center">
            <div
              class="container d-flex flex-column justify-content-center align-items-center gap-2">
              <h3 class="text text-white fw-bold">
                Dapatkan Tiket Wisata dengan Membooking Tiket!!!
              </h3>
              @auth
                <a href="#daftarWisata">
                  <button
                    class="btn w-45 btn-block btn-primary"
                    style="height: 40px"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-email-subscribe">
                    Pesan Tiket Sekarang Juga!!!
                  </button>
                </a>
              @else
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Pesan tiket sekarang juga</button>
              @endauth
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOter -->
    <section class="footer">
      <div class="container">
        <div class="row g-2 justify-content-evenly">
          <div class="col-md-3">
            <div class="p-3">
              <img src="/image/logo_sipaku.png" alt="" width="250px" />
              <ul
                class="d-flex justify-content-flex-start align-items-center"
                style="list-style: none; gap: 10px; padding-right: 2rem">
                <li>
                  <a href="" class="text-decoration-none text-white"
                    ><i class="bx bxl-youtube"></i
                  ></a>
                </li>
                <li>
                  <a href="" class="text-decoration-none text-white"
                    ><i class="bx bxl-instagram"></i
                  ></a>
                </li>
                <li>
                  <a href="" class="text-decoration-none text-white"
                    ><i class="bx bxl-facebook-circle"></i
                  ></a>
                </li>
                <li>
                  <a href="" class="text-decoration-none text-white"
                    ><i class="bx bxl-tiktok"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-5">
            <div class="p-3 d-flex flex-column">
              <div class="d-flex flex-column pb-4">
                <h5 class="fw-bold text-white">Daftarkan Wisata Anda Sekarang Juga
                </h5>
                <a href="/registrasi-petugas">
                  <button
                    class="btn w-45 btn-block btn-outline-secondary">
                    Daftar
                  </button>
                </a>
              </div>

              <h4 class="fw-bold text-white">Tourism Information Center</h4>
              <label class="strip"></label>
              <p class="text-white" style="font-size: 14px;">
                Membutuhkan Informasi Tentang Pariwisata Kuningan? Hubungi Tim
                TIC Dinas Pariwisata Kuningan.
                <label class="d-flex"
                  ><i class="bx bxl-instagram"></i>instagram : @xxxxxxxxx</label
                >
              </p>
            </div>
          </div>
          <hr style="color: #fff" />
          <div class="col d-flex justify-content-center align-items-center">
            <p class="text-white" style="font-size: 10px">
              Copyright 2022 © Dinas Kebudayaan dan Pariwisata Pemerintah
              Kabupaten Kuningan
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Back to top button -->
    <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top" style="background-color: #04757d">
      <i class='bx bx-chevron-up text-white'></i>
    </button>


    <script src="/js/up_to_top.js"></script>
    <!-- JS -->
    <script src="./js/splash.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
      $(window).scroll(function () {
        $("nav").toggleClass("srolled", $(this).scrollTop() > 100);
      });

      function showMoreWisata(){
        const wisataCards= document.querySelectorAll('.wisatacard');
        const btnShowMore= document.querySelector('.btnShowMore');
        const btnHideMore= document.querySelector('.btnHideMore');
        wisataCards.forEach(wisataCard => {
          wisataCard.classList.toggle('d-none');
        });
        btnShowMore.classList.toggle('d-none');
        btnHideMore.classList.toggle('d-none');
      }
    </script>
  </body>
</html>
