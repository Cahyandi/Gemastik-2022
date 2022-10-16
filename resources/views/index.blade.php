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
      {{-- <div class="container">
        <a class="navbar-brand" href="/">
          <img src="image/logo_sipaku.png" alt="" width="150" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarToggleExternalContent"
          aria-controls="navbarToggleExternalContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active text-white"
                aria-current="page"
                href="#beranda"
                >Beranda</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#daftarWisata"
                >Daftar Wisata</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#galeri">Gallery</a>
            </li>
            <li class="nav-item d-flex gap-3">
              <!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary fw-bold"
                data-bs-toggle="modal"
                data-bs-target="#login">
                Login
              </button>
              <button
                type="button"
                class="btn btn-primary fw-bold"
                data-bs-toggle="modal"
                data-bs-target="#daftar">
                Daftar
              </button>
            </li>
          </ul>
        </div>
      </div> --}}
      @include('layouts.navbar')
    </nav>

    @include('layouts.alert')

    <!-- Modal Box Login -->
    {{-- <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content d-flex p-4">
              <div class="modal-header mb-4">
                  <div class="header d-flex flex-column ">
                      <h5 class="modal-title fs-4" id="exampleModalLabel">Login</h5>
                      <p style="font-size: 14px; color: #adb5bd;">Perjalanan serumu dimulai di sini.</p>
                  </div>
                  <img src="/image/logo_sipaku.png" alt="" width="150">
              </div>
              <div class="modal-body">
                  <!--  -->
                  <form class="" action="authenticate" method="POST">
                      @csrf
                      <div class="form-field d-flex align-items-center pb-1">
                          <input type="text" name="username" placeholder="Masukkan Username" class="@error('username') is-invalid  @enderror" required>
                          @error('username')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="form-field d-flex align-items-center">
                          <input type="password" name="password" placeholder="Masukkan Password" class="@error('password') is-invalid @enderror" required>
                          @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <p style="font-size: 14px; color: #adb5bd;">Belum Mempunyai Akun?
                          <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar" data-bs-dismiss="modal">Daftar Sekarang</a>
                      </p>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="submit">Login</button>
                      </div>
                  </form>

              </div>
          </div>
      </div>
    </div> --}}
    @include('layouts.login')

    <!-- Modal Box Daftar -->
    {{-- <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="daftar" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content d-flex p-4">
              <div class="modal-header mb-4">
                  <div class="header d-flex flex-column ">
                      <h5 class="modal-title fs-4" id="exampleModalLabel">Daftar</h5>
                      <p style="font-size: 14px; color: #adb5bd;">Perjalanan serumu dimulai di sini.</p>
                  </div>
                  <img src="/image/logo_sipaku.png" alt="" width="150">
              </div>
              <div class="modal-body">
                  <!--  -->
                  <form class="" action="register" method="POST">
                      @csrf
                      <div class="form-field d-flex align-items-center pb-1">
                          <input type="text" name="name" id="userName" placeholder="Masukkan Nama">
                      </div>
                      <div class=" form-field d-flex align-items-center pb-1">
                          <input type="number" name="no_telp" id="userName" placeholder="Masukkan Telpon">
                      </div>
                      <div class="form-field d-flex align-items-center pb-1">
                          <input type="text" name="email" id="userName" placeholder="Masukkan Email">
                      </div>
                      <div class="form-field d-flex align-items-center pb-1">
                          <input type="text" name="username" id="userName" placeholder="Masukkan Username">
                      </div>
                      <div class="form-field d-flex align-items-center">
                          <input type="password" name="password" id="pwd" placeholder="Masukkan Password">
                      </div>
                      <p style="font-size: 14px; color: #adb5bd;">Sudah Mempunyai Akun?
                          <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar" data-bs-dismiss="modal">Login Sekarang</a>
                      </p>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="submit">Register</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div> --}}
    @include('layouts.registrasi')
    
    <!-- WELCOME -->
    <section class="welcome" id="beranda">
      <img src="image/ciremai_1.jpg" class="d-block w-100" alt="..." />
      <div class="carousel-caption d-md-block">
        <div class="container d-flex align-items-center flex-column">
          <label style="font-size: 2em">SELAMAT DATANG DI</label>
          <label style="font-size: 3em; font-weight: 700"
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
      class="daftar-wisata"
      id="daftarWisata"
      style="width: 100%; height: 100vh">
      <div class="container">
        <div class="d-flex flex-column">
          <span class="title fw-bold">DESTINASI WISATA</span>
          <label class="strip"></label>
        </div>
        <div
          id="carouselExampleCaptions"
          class="carousel slide"
          data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" style="height: 450px">
              <img src="/image/wisata_1.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption-destinasi d-md-block">
                <h3>Waduk Darma</h3>
                <p>Waduk darma adalah salah satu destinasi wisata kuningan</p>
                  @auth
                    <a href="/daftar-wisata">
                      <button type="button" class="btn btn-warning">
                        Yuk Cari Tahu Wisata Ini !!!
                      </button>
                    </a>
                  @else
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#login">Yuk Cari Tahu Wisata Ini !!!</button>
                  @endauth
              </div>
            </div>
            <div class="carousel-item" style="height: 450px">
              <img src="/image/wisata_2.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption-destinasi d-md-block">
                <h3>Curug Putri</h3>
                <p>
                  Some representative placeholder content for the second slide.
                </p>
                  @auth
                    <a href="/daftar-wisata">
                      <button type="button" class="btn btn-warning">
                      Yuk Cari Tahu Wisata Ini !!!
                    </button>
                  </a>
                  @else
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#login">Yuk Cari Tahu Wisata Ini !!!</button>
                  @endauth
              </div>
            </div>
            <div class="carousel-item" style="height: 450px">
              <img src="/image/wisata_3.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption-destinasi d-md-block">
                <h3>Curug</h3>
                <p>
                  Some representative placeholder content for the third slide.
                </p>
                  @auth
                    <a href="/daftar-wisata">
                      <button type="button" class="btn btn-warning">
                        Yuk Cari Tahu Wisata Ini !!!
                      </button>
                    </a>
                  @else
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#login">Yuk Cari Tahu Wisata Ini !!!</button>
                  @endauth
              </div>
            </div>
            <div class="carousel-item" style="height: 450px">
              <img src="/image/wisata_4.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption-destinasi d-md-block">
                <h3>Panembongan</h3>
                <p>
                  Some representative placeholder content for the third slide.
                </p>
                  @auth
                    <a href="./daftar_wisata.html">
                      <button type="button" class="btn btn-warning">
                        Yuk Cari Tahu Wisata Ini !!!
                      </button>
                    </a>
                  @else
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#login">Yuk Cari Tahu Wisata Ini !!!</button>
                  @endauth
              </div>
            </div>
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
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3 clearfix">
          @forelse ($wisatas as $index => $wisata)
            @if ($index > 3)
            <div class="col-md-3 d-none wisatacard">
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
            <div class="col col-md-3">
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

        <div class="inner container" style="background-color: #d9d9d930">
          <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 clearfix">
            @foreach ($inspirations as $inspiration)
            <div class="col">
              <div
                class="p-3 border bg-light"
                style="width: 250px; height: 300px">
                <img
                  src="{{ asset('storage/'.$inspiration->img_wisata) }}"
                  alt=""
                  style="width: 220px; height: 270px" />
                  {{ $inspiration->nama_wisata }}
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
              <h3 class="text-white">
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Silahkan login terlebih dahulu untuk booking ticket</button>
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
          <div class="col-md-4">
            <div class="p-3">
              <h4 class="fw-bold text-white">Tourism Information Center</h4>
              <label class="strip"></label>
              <p class="text-white">
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
