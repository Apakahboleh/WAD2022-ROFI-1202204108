<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main Before</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .title {
            margin-top: 3cm;
        }
        h1 {
            font-family: poppins;
            font-weight: bold;
            font-size: 50px;
        }

        .foot .copyright p {
            margin-top: 30cm;
        }

        .foot img {
            width: 100px;
            right: 30px;
        }

        button {
            width: 10%;
            margin-top: -15%;
        }

        footer {
            margin-top: -5%;
            padding-left: 250px;
        }

    </style>

    <link rel="stylesheet" href="../style/index.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="wadah container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="row">
                    <div class="for-link navbar-nav">
                        <a class="navbar-brand fs-4" href="#">Home</a>
                    </div>
                </div>

                <div class="row ms-auto">
                    <div class="for-link navbar-nav">
                        <a class="linkcar navbar-brand fs-4" href="/auth/login">Login</a>
                    </div>
                </div>

                <div class="row ms-auto">
                    <div class="for-link navbar-nav">
                        <a class="linkcar navbar-brand fs-4" href="/auth/register">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container title">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang Di</h1>
                <h1>Show Room</h1>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, saepe? Lorem ipsum dolor sit amet consectetur adipisicing elit . Sint veritatis expedita<br> </small>
            </div>

            <div class="col">
                <img src="https://cdn.motor1.com/images/mgl/LeLmG/s1/mercedes-benz-concept-eqg-side-view.webp" style="border-radius: 3%;" width="520px" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/image/logo-ead.png" width="100px" alt="">
            </div>
        </div>
    </div>

    <footer>
        <div class="container mt-5">
            <div class="foot row">
                <div class=" col-sm-12">
                    <small class="copyright">ROFI_1202204108</small>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('berhasilDaftar'))
            toastr.success('Akunmu Berhasil Di Buat :D')
        @endif
    </script>
</body>

</html>
