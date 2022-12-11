@extends('partials.layouts')

@section('content')
    <head>
        <title>Halaman Edit Mobil</title>
    </head>
    <style>
        .tambah-title img {
            width: 450px;
            position: absolute;
            border-radius: 2%;
        }

        .tambah-title {
            margin-top: 40px;
        }
    </style>
    <div class="container tambah-title">
        <div class="row">
            <div class="col">
                <h1>{{ $mobil->brand }}</h1>
                <p>Edit Mobil {{ $mobil->brand }}</p>
                <img class="mt-4" src="/image/{{ $mobil['image'] }}" alt="mobil">
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-5 offset-sm-6">
                <form action="/showroom/{{ $mobil['id'] }}/store-edit" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Mobil</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ $mobil['name'] }}">
                    </div>

                    <div class="mb-3">
                        <label for="owner" class="form-label">Nama Pemilik</label>
                        <input type="text" name="owner" class="form-control" id="owner"
                            value="{{ $mobil['owner'] }}">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Merk Mobil</label>
                        <input type="text" name="brand" class="form-control" id="brand"
                            value="{{ $mobil['brand'] }}">
                    </div>

                    <div class="mb-3">
                        <label for="purchase_date" class="form-label">Tanggal Beli</label>
                        <input type="text" name="purchase_date" class="form-control" id="purchase_date"
                            value="{{ $mobil['purchase_date'] }}">
                    </div>

                    <div class="form-floating mb-3">
                        <label for="floatingTextarea2">Description</label>
                        <input type="textarea" name="description" class="form-control" id="floatingTextarea2"
                            style="height: 100px" value="{{ $mobil['description'] }}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image"
                            value="{{ $mobil['image'] }}">
                    </div>

                    <label for="Status" class="mt-3 form-label">Status Pembayaran</label>
                    <div class="mt-auto">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="Status" id="lunas" value="Lunas"
                                <?php if ($mobil['Status'] == 'Lunas') {
                                    echo 'checked';
                                } ?>>
                            <label class="form-check-label" for="lunas">Lunas</label>
                        </div>

                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="Status" id="belum" value="Belum-Lunas"
                                <?php if ($mobil['Status'] == 'Belum-Lunas') {
                                    echo 'checked';
                                } ?>>
                            <label class="form-check-label" for="belum">Belum Lunas</label>
                        </div>
                    </div>

                    <button type="submit" style="width: 100%;" name="edit"
                        class="btn btn-primary mt-5 mb-5 btn-lg">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
