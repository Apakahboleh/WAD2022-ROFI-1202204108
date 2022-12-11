@extends("partials.layouts")

@section("content")
<head>
    <title>Halaman Home</title>
</head>
<style>
    .title {
        margin-top: 3cm;
    }

    .mycar {
        bottom: 30px;
        width: 20%;
        position: relative;
        bottom: 90px;
    }
    .foot {
        position: relative;
        bottom: 120px;
    }

    .foot img {
        width: 100px;
        right: 30px;
    }

</style>

<div class="container title">
    <div class="row">
        <div class="col">
            <h1>Selamat Datang Di</h1>
            <h1>Show Room {{ Auth::user()->name }} </h1>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, saepe? Lorem ipsum dolor sit amet consectetur adipisicing elit . Sint veritatis expedita<br> </small>
        </div>

        <div class="col">
            <img src="https://cdn.motor1.com/images/mgl/LeLmG/s1/mercedes-benz-concept-eqg-side-view.webp" style="border-radius: 3%;" width="520px" alt="">
        </div>
        
        <a href="/ListCar">
            <button class="mycar btn btn-primary" name="mycar">MyCar</button>
        </a>
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
                <small style="bottom:90px" class="copyright">ROFI_1202204108</small>
            </div>
        </div>
    </div>
    </div>
</footer>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('berhasilLogin'))
            toastr.success('Login Berhasil Di Lakukan')
        @endif
    </script>

@endsection
