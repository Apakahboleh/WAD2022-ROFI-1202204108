    <?php

    require "connector.php";

    // Bagian function edit
    function edit($data) {
        global $conn;

        $id_mobil = $data["id_mobil"];
        $nama_mobil = $data["nama_mobil"];
        $nama_pemilik = $data["pemilik_mobil"];
        $merk = $data["merk_mobil"];
        $tanggal_beli = $data["tanggal_beli"];
        $deskripsi = $data["deskripsi"];
        $foto_lama = $data["foto_lama"];

        $fotoError = $_FILES["foto_mobil"]["error"];

        if ( $fotoError === 4 ) {
        $foto = $foto_lama;
        echo "
            <script>
                alert ('Pengeditan Berhasil Dilakukan');
                document.location.href = 'ListCar-Rofi.php';
            </script>
        ";

        } else {
        $foto = upload_gambar();
        }
        
        $status_pembayaran = $data["status_pembayaran"];

        $query = "UPDATE showroom_rofi_table SET
                    nama_mobil = '$nama_mobil',
                    pemilik_mobil = '$nama_pemilik',
                    merk_mobil = '$merk',
                    tanggal_beli = '$tanggal_beli',
                    deskripsi = '$deskripsi',
                    foto_mobil = '$foto',
                    status_pembayaran = '$status_pembayaran'
                WHERE id_mobil = $id_mobil
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    function upload_gambar() {

        $namaFoto = $_FILES["foto_mobil"]["name"];
        $tmp_name = $_FILES["foto_mobil"]["tmp_name"];
        $errorFoto = $_FILES["foto_mobil"]["error"];
        $sizeFoto = $_FILES["foto_mobil"]["size"];
    
        if ( $errorFoto === 4 ) {
            echo "
                <script>
                    alert ('Silahkan Upload Foto Terlebih Dahulu');
                </script>
            ";
    
            return false;
        }
    
    
        $formatGambarBenar = ["jpg", "jpeg", "png", "jfif"];
        $formatGambar = explode(".", $namaFoto);
        $formatGambar = strtolower(end($formatGambar));
        if ( !in_array($formatGambar, $formatGambarBenar) ) {
            echo "
                <script>
                    alert ('Yang Diupload Harus Foto');
                </script>
            ";
    
            return false;
        }
    
        if ( $sizeFoto > 500000000 ) {
            echo "
                <script>
                    alert ('Ukuran Gambar Terlalu Besar');
                </script>
            ";
    
            return false;
        }
    
        $randomFormatName = uniqid();
        $randomFormatName .= ".";
        $randomFormatName .= $namaFoto;
    
        move_uploaded_file($tmp_name, "../images/" . $randomFormatName);
    
        return $randomFormatName;
    
    
    }


    ?>