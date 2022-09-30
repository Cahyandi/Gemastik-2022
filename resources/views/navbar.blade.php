<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom css -->
    <link rel="stylesheet" href="/css/main.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Box icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Navbar</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light ">
        <div class="container ">
            <a class="navbar-brand" href="#">
                <img src="/image/logo_sipaku.png" alt="" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Daftar Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Gallery</a>

                    </li>
                    @if (!Auth::check())
                        <li class="nav-item d-flex gap-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#login">
                                Login
                            </button>
                            <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#daftar">
                                Daftar
                            </button>
                        </li>
                    @else
                        <li class="nav-item d-flex gap-3">
                            <!-- Button trigger modal -->
                            <a href="logout" class="btn btn-primary fw-bold">Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal Box Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
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
                            <input type="text" name="username" placeholder="Masukkan Username">
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <input type="password" name="password" placeholder="Masukkan Password">
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
    </div>

    <!-- Modal Box Daftar -->
    <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="daftar" aria-hidden="true">
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
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="slider">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/img_1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <div class="container d-flex align-items-baseline flex-column">
                            <h5>SELAMAT DATANG</h5>
                            <h1>PARIWISATA KUNINGAN</h1>
                            <button type="button" class="btn btn-info text-white">Baca Selengkapnya
                                <i class='bx bxs-chevron-right'></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/image/img_2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <div class="container d-flex align-items-center flex-column">
                            <h5>SELAMAT DATANG DI</h5>
                            <h1>PARIWISATA KUNINGAN</h1>
                            <button type="button" class="btn text-white" style="background-color: #6610f2;">Baca Selengkapnya
                                <i class='bx bxs-chevron-right'></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/image/img_3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <div class="container d-flex align-items-baseline flex-column">
                            <h5>Hayu Berwisata Di</h5>
                            <h1>Kabupaten KUNINGAN</h1>
                            <button type="button" class="btn btn-info text-white">Baca Selengkapnya
                                <i class='bx bxs-chevron-right'></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" style="width: 5%!important;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next" style="width: 5%!important;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="daftar-wisata" style="width: 100%; height: 100vh;">
        <div class="container">
            <div class="d-flex flex-column">
                <span class="title fw-bold">DESTINASI WISATA</span>
                <label class="strip"></label>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 450px;">
                        <img src="/image/wisata_1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption-destinasi d-none d-md-block">
                            <h3>Waduk Darma</h3>
                            <p>Waduk darma adalah salah satu destinasi wisata kuningan</p>
                            <button type="button" class="btn btn-warning">Yuk Cari Tahu Wisata Ini !!!</button>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 450px;">
                        <img src="/image/wisata_2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption-destinasi d-none d-md-block">
                            <h3>Curug Putri</h3>
                            <p>Some representative placeholder content for the second slide.</p>
                            <button type="button" class="btn btn-warning">Yuk Cari Tahu Wisata Ini !!!</button>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 450px;">
                        <img src="/image/wisata_3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption-destinasi d-none d-md-block">
                            <h3>Curug</h3>
                            <p>Some representative placeholder content for the third slide.</p>
                            <button type="button" class="btn btn-warning">Yuk Cari Tahu Wisata Ini !!!</button>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 450px;">
                        <img src="/image/wisata_4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption-destinasi d-none d-md-block">
                            <h3>Panembongan</h3>
                            <p>Some representative placeholder content for the third slide.</p>
                            <button type="button" class="btn btn-warning">Yuk Cari Tahu Wisata Ini !!!</button>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="inspirasi-wisata">
        <div class="container">
            <div class="d-flex flex-column">
                <span class="title fw-bold">INPIRASI WISATA</span>
                <label class="strip"></label>
            </div>

            <div class="inner container" style="background-color: #D9D9D930;">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light" style="width: 250px; height: 300px;">
                            <img src="image/wisata_3.jpg" alt="" style="width: 220px; height: 270px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row g-2 justify-content-center">
                <div class="col-md-3">
                    <div class="p-3">
                        <img src="/image/logo_sipaku.png" alt="" width="250px">
                        <ul class="d-flex justify-content-flex-start align-items-center" style="list-style: none; gap: 10px; padding-right: 2rem; ">
                            <li><a href="" class="text-decoration-none text-white"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="" class="text-decoration-none text-white"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="" class="text-decoration-none text-white"><i class='bx bxl-facebook-circle'></i></a></li>
                            <li><a href="" class="text-decoration-none text-white"><i class='bx bxl-tiktok'></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 ">
                        <h4 class="fw-bold text-white">Tourism Information Center</h4>
                        <label class="strip"></label>
                        <p class="text-white">Membutuhkan Informasi Tentang Pariwisata Kuningan?
                            Hubungi Tim TIC Dinas Pariwisata Kuningan.
                            <label class="d-flex"><i class='bx bxl-instagram'></i>instagram : @xxxxxxxxx</label></p>
                    </div>
                </div>
                <hr style="color: #fff;">
                <div class="col d-flex justify-content-center align-items-center">
                    <p class="text-white fs-7">Copyright 2022 © Dinas Kebudayaan dan Pariwisata Pemerintah Kabupaten Kuningan</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>