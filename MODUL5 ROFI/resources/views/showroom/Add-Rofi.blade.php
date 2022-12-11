@extends('partials.layouts')

@section('content')
    <head>
        <title>Halaman Tambah Mobil</title>
    </head>
    <div class="container tambah-title mt-5">
        <div class="row">
            <div class="col offset-sm-1">
                <h1>Tambah Mobil</h1>
                <p>Tambah Mobil Baru Anda Ke List Show Room</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-8 offset-sm-1">
                <form action="/showroom/store-create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Mobil</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="owner" class="form-label">Nama Pemilik</label>
                        <input type="text" name="owner" class="form-control" id="owner">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand Mobil</label>
                        <input type="text" name="brand" class="form-control" id="brand">
                    </div>

                    <div class="mb-3">
                        <label for="purchase_date" class="form-label">Tanggal Beli</label>
                        <input type="date" name="purchase_date" class="form-control" id="purchase_date">
                    </div>

                    <div class="form-floating mb-3">
                        <!-- <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px"></textarea> -->
                        <label for="floatingTextarea2">Description</label>
                        <input type="textarea" class="form-control" name="description" id="floatingTextarea2"
                            style="height: 100px">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <label class="mb-3" for="color">Status Pembayaran</label>
                    <div class="container d-flex align-items-center mb-3">
                        <select class="form-select" name="Status" id="jenis">
                            <li>
                                <option selected value="Lunas">Lunas</option>
                            </li>
                            <li>
                                <option value="Belum-Lunas">Belum-Lunas</option>
                            </li>
                        </select>
                    </div>

                    <button type="submit" name="selesai" class="btn btn-primary mt-5 mb-5 btn-lg">Selesai</button>
                </form>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
