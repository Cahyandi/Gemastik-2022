<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom css -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/daftar_wisata.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Box icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Daftar-wisata</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-default" style=" background: linear-gradient(to bottom,rgb(0 0 0 / 50%) 0,rgb(0 0 0 / 30%) 100%) !important;">
        {{-- <div class="container ">
            <a class="navbar-brand" href="#">
                <img src="/image/logo_sipaku.png" alt="" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="./index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#daftarWisata">Daftar Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#galeri">Gallery</a>

                    </li>
                    <li class="nav-item d-flex gap-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal"
                            data-bs-target="#login">
                            Login
                        </button>
                        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal"
                            data-bs-target="#daftar">
                            Daftar
                        </button>
                    </li>
                </ul>
            </div>
        </div> --}}
      @include('layouts.navbar')
    </nav>

    @include('layouts.login')
    
    @include('layouts.registrasi')

    <section class="content-1" style="margin-top: -110px;">
            <img src="./image/waduk_darma.jpg" alt="" style="width: 100%; height: 400px; object-fit: cover;">
            <div class="caption d-none d-md-block">
                <div class="container d-flex align-items-center flex-column">
                    <h1>Wisata Waduk Darma</h1>
                    <p>Lokasi Wisata Waduk Darma berada di Jagara Kecamatan Darma Kabupaten Kuningan</p>
                </div>
            </div>        
    </section>

    <section class="deskripsi">
        <div class="container">
            <div class="d-flex flex-column pt-5 mt-5">
                <span class="fw-bold fs-4">DESKRIPSI WISATA</span>
                <label class="strip"></label>
            </div>
            <div class="row justify-content-evenly align-items-center ">
                <div class="col-6" style="color: #939394;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, beatae nostrum
                    pariatur aliquid itaque alias deserunt quaerat labore reiciendis praesentium, doloribus atque id
                    quas odit odio cupiditate corrupti numquam eum. Tempora eius nostrum molestiae excepturi laboriosam
                    accusamus ad optio consectetur vero, ab magni recusandae ea quia cupiditate nemo modi quos animi
                    ipsum sed voluptatem explicabo veritatis eos. Nulla, libero dolor.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, beatae nostrum pariatur aliquid
                    itaque alias deserunt quaerat labore reiciendis praesentium, doloribus atque id quas odit odio
                    cupiditate corrupti numquam eum. Tempora eius nostrum molestiae excepturi laboriosam accusamus ad
                    optio consectetur vero, ab magni recusandae ea quia cupiditate nemo modi quos animi ipsum sed
                    voluptatem explicabo veritatis eos. Nulla, libero dolor.
                </div>
                <div class="col-6">
                    <h1>GEOLOCATION</h1>
                </div>
                <h3 class="pb-3 pt-3"><label style="color: #fe8903;">Harga: Rp.0000 /</label> Orang</h3>

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
                        <button type="button" class="btn btn-primary" name="submit">Booking</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <!-- FOOTER -->
    <section class="footer">
        <div class="container">
            <div class="row g-2 justify-content-evenly">
                <div class="col-md-3">
                    <div class="p-3">
                        <img src="/image/logo_sipaku.png" alt="" width="250px">
                        <ul class="d-flex justify-content-flex-start align-items-center"
                            style="list-style: none; gap: 10px; padding-right: 2rem; ">
                            <li><a href="" class="text-decoration-none text-white"><i class='bx bxl-youtube'></i></a>
                            </li>
                            <li><a href="" class="text-decoration-none text-white"><i class='bx bxl-instagram'></i></a>
                            </li>
                            <li><a href="" class="text-decoration-none text-white"><i
                                        class='bx bxl-facebook-circle'></i></a></li>
                            <li><a href="" class="text-decoration-none text-white"><i class='bx bxl-tiktok'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 ">
                        <h4 class="fw-bold text-white">Tourism Information Center</h4>
                        <label class="strip"></label>
                        <p class="text-white">Membutuhkan Informasi Tentang Pariwisata Kuningan?
                            Hubungi Tim TIC Dinas Pariwisata Kuningan.
                            <label class="d-flex"><i class='bx bxl-instagram'></i>instagram : @xxxxxxxxx</label>
                        </p>
                    </div>
                </div>
                <hr style="color: #fff;">
                <div class="col d-flex justify-content-center align-items-center">
                    <p class="text-white fs-7">Copyright 2022 © Dinas Kebudayaan dan Pariwisata Pemerintah Kabupaten
                        Kuningan</p>
                </div>
            </div>
        </div>
    </section>
    </section>
</body>
</html>