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
      @include('layouts.navbar')
    </nav>

    @include('layouts.login')
    
    @include('layouts.registrasi')

    <img src="{{ asset('storage/'.$post->img) }}" alt="">
    <h5>{{ $post->wisata->nama_wisata }}</h5>
    <h5>{{ $post->user->name }}</h5>
    <p>{{ $post->caption }}</p>

    <hr>
    <form method="POST" action="{{ route('komentar.store', $post->id) }}">
        @csrf
        <textarea name="komentar"></textarea>
        <button>Submit Komentar</button>
    </form>
    <h4>Komentar</h4>
    @foreach ($komentars as $komentar)
        <div class="card">
            <p>{{ $komentar->user->name }}</p>
            <p>{{ $komentar->komentar }}</p>
        </div>
    @endforeach
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