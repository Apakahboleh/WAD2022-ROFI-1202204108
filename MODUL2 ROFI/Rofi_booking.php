    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Booking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            footer {
                background-color: gray;
            }

            .form-sec {
                margin-bottom: 130px;
            }

            .img .col img {
                position: fixed;
                width: 500px;
                left: 30px;
            }

            label {
                display: block;
            }

            .btn {
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row mt-4">
                <div class="title text-center mt-5">
                    <h1 class="h1 mb-4">
                        Rent Your Car Now!
                    </h1>
                </div>
            </div>

            <div class="img">
                <div class="row">
                    <div class="col">
                        <img src="gambar/<?= $_GET["gambar"]; ?>" alt="">
                        <!-- kurang / pada gambar jadi src gambar tidak terpanggil -->
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top justify-content-center">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="Rofi_home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Booking</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <section class="form-sec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 offset-sm-5">
                        <form action="Rofi_mybooking.php" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">name</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="ROFI_1202204108" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Book Date</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div>

                            <div class="mb-3">
                                <label for="start" class="form-label">Start Time</label>
                                <input type="time" class="form-control" name="start" id="start">
                            </div>

                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration (Days)</label>
                                <input type="number" class="form-control" name="duration" id="duration">
                            </div>

                            <div class="mt-4">
                                <label class="form-group mb-2" for="">Choose Your Car</label>
                                <select class="form-select mb-3" name="tipe" id="jenis-mobil">
                                    <option selected >Toyota Rush</option>
                                    <option>Toyota Alya</option>
                                    <option>Honda Brio</option>
                                </select>
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="telp" class="form-control" name="phone" id="phone">
                            </div>

                            <label for="add" class="form-label">Add Service(s)</label>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="service[]" id="HP" value="Health Protocol">
                                <label class="form-check-label" for="HP">Health Protocol / Rp.25000</label>

                                <input type="checkbox" class="form-check-input" name="service[]" id="driver" value="Driver">
                                <label class="form-check-label" for="driver">Driver / Rp.100.000</label>

                                <input type="checkbox" class="form-check-input" name="service[]" id="fuel" value="Fuel Filled">
                                <label class="form-check-label" for="fuel">Fuel Filled / Rp.250.000</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-secondary bg-opacity-10">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="col-sm-12 text-center">
                            <p class="mt-3">
                                Created by ROFI_1202204108
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

    </html>