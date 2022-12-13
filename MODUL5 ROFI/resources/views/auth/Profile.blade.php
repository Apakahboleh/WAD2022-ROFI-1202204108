    @extends('partials.layouts')

    @section('content')
        <head>
            <title>Halaman Credential Profile</title>
        </head>
        <section>
            <div class="container profile mt-3 mb-4">
                <div class="col offset-sm-5">
                    <h1>Profile</h1>
                </div>
            </div>

            <div class="container">
                <div class="col">
                    <form action="/update-profile/{{ Auth::user()->id }}" method="post">
                        @csrf
                        @method("put")
                        <input type="hidden" name="id" id="id" value="">
                        <div class="mb-3 row ">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" readonly class="form-control-plaintext" id="email"
                                    value="{{ Auth::user()->email }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_hp" class="col-sm-3 col-form-label">No Handphone</label>
                            <div class="col-sm-9">
                                <input type="telp" name="no_hp" class="form-control" id="no_hp"
                                    value="{{ Auth::user()->nomor _hp }}">
                            </div>
                        </div>

                        <div class="row">
                            <hr style="height:2px; color:#333; background-color:#333;">
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label">Kata Sandi</label>
                            <div class="col-sm-9">
                                <input id="password" type="password" class="form-control
                                @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="password_confirmation" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                            <div class="col-sm-9">
                                <input type="password" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" name="password_confirmation">
                            </div>
                        </div>

                        <div class="container d-flex align-items-center mb-3">
                            <label class="mb-2 col-2" for="color">Warna Navbar</label>
                            <select class="form-select offset-sm-1" name="color" id="color">
                                <option selected value="bg-primary">Blue Rose</option>
                                <option value="bg-warning">Fresh Orange</option>
                                <option value="bg-dark">Dark Mate</option>
                                <option value="bg-secondary">Monocrhome</option>
                                <option value="bg-success">Green Canyon</option>
                                <option value="bg-danger">Red Diamond</option>
                            </select>
                        </div>

                        <div class="mb-3 row align-center">
                            <center>
                                <button name="update" class="update btn btn-primary btn-lg">Update</button>
                                <a href="/auth/{{ Auth::user()->id }}/delete-account" class="update btn btn-danger mx-3 btn-lg">Delete</a>
                            </center>
                        </div>

                    </form>

                </div>
            </div>
        </section>

        <footer>
            <div class="container mt-2 mb-5">
                <div class="foot row">
                    <div class=" col-sm-12">
                        <img src="/image/logo-ead.png" width="100px" alt="">
                        <small class="mx-5 copyright">ROFI_1202204108</small>
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
            @if (Session::has('profileUpdate'))
                toastr.success('Profile Kamu Sukses Di Update')
            @endif
        </script>
    @endsection
