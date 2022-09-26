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
                    <li class="nav-item d-flex gap-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#login">
                            Login
                        </button>
                        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#daftar">
                            Daftar
                        </button>
                    </li>
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
                    <form class="" action="" method="POST">
                        <div class="form-field d-flex align-items-center pb-1">
                            <input  type="text" name="username"  placeholder="Masukkan Username" >
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <input  type="password" name="password"  placeholder="Masukkan Password">
                        </div>
                    </form>

                    <p style="font-size: 14px; color: #adb5bd;">Belum Mempunyai Akun?
                        <a href=""  class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar"  data-bs-dismiss="modal">Daftar Sekarang</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" name="submit">Login</button>
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
                    <form class="" action="" method="POST">
                        <div class="form-field d-flex align-items-center pb-1">
                            <input  type="text" name="name" id="userName" placeholder="Masukkan Nama"">
                        </div>
                        <div class="form-field d-flex align-items-center pb-1">
                            <input  type="number" name="telpon" id="userName" placeholder="Masukkan Telpon" >
                        </div>
                        <div class="form-field d-flex align-items-center pb-1">
                            <input  type="text" name="email" id="userName" placeholder="Masukkan Email" >
                        </div>
                        <div class="form-field d-flex align-items-center pb-1">
                            <input  type="text" name="username" id="userName" placeholder="Masukkan Username" >
                        </div>
                        <div class="form-field d-flex align-items-center">
                            <input  type="password" name="password" id="pwd" placeholder="Masukkan Password">
                        </div>
                    </form>

                    <p style="font-size: 14px; color: #adb5bd;">Sudah Mempunyai Akun?
                        <a href=""  class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar"  data-bs-dismiss="modal">Login Sekarang</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" name="submit">Login</button>
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

    <section class="daftar-wisata" style="width: 100%; height: 100vh; background-color: aquamarine;">
        <div class="container">
            <span class="title">DESNITASI WISATA</span>
            <label></label>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
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

</body>

</html>