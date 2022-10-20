<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_dinas.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Registrasi</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="wrapper">
            <div class="logo">
                <img src="/image/logo_sipaku.png" alt="">
            </div>
            <div class="text-center mt-4 name">
                SIPAKU
            </div>
            <label class="d-flex align-items-center justify-content-center">Registrasi Petugas</label>
            <form class="p-3 mt-3" action="/register-petugas" method="POST">
                @csrf
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="username" id="userName" placeholder="Username" required class="@error('username') is-invalid @enderror">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="email" name="email" id="email" placeholder="Email" required class="@error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="number" name="no_telp" id="no_telp" placeholder="No Telp" required class="@error('no_telp') is-invalid @enderror">
                    @error('no_telp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Password" required class="@error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <p style="font-size: 14px; color: #adb5bd;" class="d-flex flex-column justify-content-center align-items-center">Sudah Mempunyai Akun?
                    <a href="/login-dinas" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#daftar" data-bs-dismiss="modal">Login Sekarang</a>
                </p>
                <button class="btn mt-3" name="submit">Register</button>
            </form>
        </div>
    </div>
    
</body>

</html>