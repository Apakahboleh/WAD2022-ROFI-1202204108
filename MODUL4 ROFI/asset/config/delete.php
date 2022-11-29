    <?php 

    require "connector.php";


    $id_mobil = $_GET["id"];

    mysqli_query($conn, "DELETE FROM showroom_rofi_table WHERE id_mobil = $id_mobil");

    if ( mysqli_affected_rows($conn) > 0 ) {
        echo "
            <script>
                alert ('Data Berhasil dihapus');
                document.location.href = '../pages/ListCar-Rofi.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert ('Data Gagal dihapus');
                document.location.href = '../pages/ListCar-Rofi.php';
            </script>
        ";

        echo mysqli_error($conn);
    }

    ?>