    <?php

    require "connector.php";

    function insert($data) {
        global $conn;
        
        $nama_mobil = $data["nama_mobil"];
        $nama_pemilik = $data["nama_pemilik"];
        $merk = $data["merk_mobil"];
        $tanggal_beli = $data["tanggal_beli"];
        $deskripsi = $data["deskripsi"];
        // upload
        $gambar = upload_gambar();
        $status = $data["status"];

        if ( !$gambar ) {
            return false;
        }
        

        $query = "INSERT INTO showroom_rofi_table VALUES
                (NULL, '$nama_mobil', '$nama_pemilik', '$merk', '$tanggal_beli', '$deskripsi', '$gambar', '$status')
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
