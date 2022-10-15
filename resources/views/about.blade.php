<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom css -->
    <link rel="stylesheet" href="/css/main.css">

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

    <title>about</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-default" style="background-color: #546E7A;">
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
                        <a class="nav-link active text-white" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/#daftarWisata">Daftar Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/#galeri">Gallery</a>
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

    <!-- TENTANG -->
    <section class="tentang" style="margin-bottom: 10em;">
        <div class="container d-flex align-items-center justify-content-center flex-column">
            <div class="d-flex flex-column m-5">
                <span class="title fw-bold">TENTANG KAMI</span>
                <label class="strip"></label>
            </div>
            <div class="row g-2 justify-content-evenly align-items-center ">
                <div class="col-md-6 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, beatae nostrum
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
                <div class="col-md-3">
                    <img src="./image/logo_disporar.png" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="content mb-5 pb-5 pt-5" style="background-color: #546E7A; width: 100%; height: 100%;">
        <div class="container d-flex align-items-center flex-column p-5">
            <h1 class="text-white text-center" style="width: 65%;">BERWISATA DI <label style="color: #F7FA7C;">KABUPATEN
                    KUNINGAN</label>? Let’s go</h1>
            <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#login">Login
                Sekarang!!!
            </button>
        </div>

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
                        <form class="" action="" method="POST">
                            <div class="form-field d-flex align-items-center pb-1">
                                <input type="text" name="username" placeholder="Masukkan Username">
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <input type="password" name="password" placeholder="Masukkan Password">
                            </div>
                        </form>

                        <p style="font-size: 14px; color: #adb5bd;">Belum Mempunyai Akun?
                            <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar"
                                data-bs-dismiss="modal">Daftar Sekarang</a>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" name="submit">Login</button>
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
                        <form class="" action="" method="POST">
                        <div class="form-field d-flex align-items-center pb-1">
                            <input type="text" name="name" id="userName" placeholder="Masukkan Nama">
                        </div>
                        <div class=" form-field d-flex align-items-center pb-1">
                                <input type="number" name="telpon" id="userName" placeholder="Masukkan Telpon">
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
                        </form>

                        <p style="font-size: 14px; color: #adb5bd;">Sudah Mempunyai Akun?
                            <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar"
                                data-bs-dismiss="modal">Login Sekarang</a>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" name="submit">Login</button>
                    </div>
                </div>
            </div>
        </div> --}}
        @include('layouts.registrasi')
    </section>

    <!-- VISI MISI -->
    <section class="Visi-misi" style="margin-bottom: 10em;">
        <div class="container d-flex align-items-center justify-content-center flex-column">
            <div class="d-flex flex-column m-5 align-items-center justify-content-center" >
                <span class="title fw-bold">VISI DAN MISI DISPORAR KABUPATEN KUNINGAN</span>
                <label class="strip"></label>
            </div>
            <div class="row g-2 justify-content-evenly align-items-center ">
                <div class="col-md-3 mb-5">
                    <img src="./image/logo_disporar.png" alt="" style="width: 100%;">
                </div>
                <div class="col-md-6 ps-5">
                    <div class="text mb-3">
                        <h3>Visi</h3>
                        <p>“Terwujudnya Insan Pemuda, Olahraga Dan Pariwisata Yang Unggul Serta Saing Tahun 2018”</p>
                    </div>
                    <div class="text">
                        <h3>Misi</h3>
                        <ul>
                            <li>Meningkatkan Sarana dan Prasarana Pendukung Operasional Dinas.</li>
                            <li>Meninngkatkan Pembinaan Dan Peran Pemuda Sekaligus Pengembangan Potensi SDM Pemuda Secara Berkesinambungan.</li>
                            <li>Meningkatkan Pembinaan Dan Pengembangan Olahraga Dan Pendidikan, Olahraga Rekreasi, Dan Olahraga Prestasi.</li>
                            <li>Meningkatkan dan mengembangkan potensi pariwisata dalam rangka menjadikan Kuningan sebagai Daerah Tujuan Wisata.</li>
                            <li>Meningkatkan dan mengembangkan jejaring pemasaran pariwisata.</li>
                            <li>Mengembangkan kemitraan dan kerjasama antar stakeholder terkait pengembangan kepariwisataan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>

</html>