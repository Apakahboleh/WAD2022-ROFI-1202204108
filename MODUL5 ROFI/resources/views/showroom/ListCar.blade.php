@extends('partials.layouts')
@section('content')
    <head>
        <title>Halaman List Car</title>
    </head>
    <div class="container tambah-title mt-5">
        <div class="row">
            <div class="col offset-sm-1">
                <h1>My Show Room</h1>
                <p>List Show Room Rofi - 1202204108</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach ($mobil as $car)
                <div class="col offset-sm-1">
                    <div class="card" style="width: 25rem;">
                        <img src="/image/{{ $car["image"] }}" style="border-radius: 2%;" width="520px" alt=""
                            class="card-img-top" alt="...">
                        <div class="item card-body">
                            <h5 class="card-title">{{ $car['brand'] }}</h5>
                            <p class="card-text">
                                <?php
                                $text = $car['description'];
                                if (strlen($text) > 5) {
                                    $text = substr($text, 0, 30) . '...';
                                    echo $text;
                                }
                                ?>

                            </p>

                            <a href="/showroom/{{ $car['id'] }}/detail-car">
                                <button style="width: 40%;" class="btn btn-primary">Detail</button>
                            </a>
                            {{-- <a href="/showroom/{{ $car['id'] }}/hapus">
                                <button style="width: 40%;" class="btn btn-danger delete" data-id="{{ $car["id"] }}">Hapus</button>
                            </a> --}}
                            <a href="/showroom/{{ $car['id'] }}/hapus" class="delete btn btn-danger" data-nama="{{ $car->nama }}" data-id="{{ $car->id }}" style="width: 40%;">Hapus</a>

                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    @if ( Session::has('success') )
        toastr.error('Mobilmu Berhasil Di Hapus')
    @endif
    </script>

    <script>
        @if (Session::has('tambah'))
            toastr.success('Mobilmu telah Di Tambah')
        @endif
    </script>

    <script>
        @if (Session::has('edit'))
            toastr.success('Mobilmu Berhasil Di Edit')
        @endif
    </script>
@endsection
