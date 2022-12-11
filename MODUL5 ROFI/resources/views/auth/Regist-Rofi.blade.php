<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        h1 {
            margin-top: 4cm;
        }

        .daftar-btn {
            width: 30%;
        }

        .img img {
            height: 100%;
            width: 50%;
            left: -50px;
            position: absolute;
        }
    </style>
</head>

<body>
    <div class="img col">
        <img src="/image/auth.jpg" alt="">
    </div>

    <div class="title container mb-4">
        <div class="row">
            <div class="col-sm-6 offset-sm-6">
                <h1 class="mt-3">Register</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-6">
                <form action="/auth/regist-user" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $messages }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor Handphone</label>
                        <input type="telp" name="no_hp" class="form-control" id="no_hp">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        {{-- <input type="password" name="password" class="form-control" id="password"> --}}
                        <input id="password" type="password" class="form-control
                        @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        {{-- @error('password')
                            <div class="alert alert-danger mt-1">{{ "Minimal Password 5 Karakter" }}</div>
                        @enderror --}}
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                        {{-- <input type="password" name="password2" class="form-control" id="password2"> --}}
                        <input id="password2" type="password" class="form-control
                        @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                    </div>


                    <button type="submit" name="daftar"
                        class="daftar-btn btn btn-outline-primary btn-lg mb-3">Daftar</button>
                    <!-- <p>Anda sudah punya akun?<button name="getLogin" class="btn btn-transparant">Login!</button></p> -->
                    <p>Anda sudah punya akun? <a href="/auth/login">Login!</a> </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('berhasilLogout'))
            toastr.success('We Miss U Already :)')
        @endif
    </script>
</body>

</html>
