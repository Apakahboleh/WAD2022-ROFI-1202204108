    <?php 

    $conn = mysqli_connect("localhost", "root", "1202204108", "wad_modul4_rofi");

    function register($item) {
        global $conn;

        $nama = $item["nama"];
        $email = $item["email"];
        $password = $item["password"];
        $password2 = $item["password2"];
        $no_hp = $item["no_hp"];


        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' ");
        if ( mysqli_fetch_assoc($result) ) {
            echo "
                <script>
                    alert ('Emailmu sudah terdaftar');
                    document.location.href = 'Register-Rofi.php';
                </script>
            ";

            return false;
        } 

        if ( $password !== $password2 ) {
            echo "
                <script>
                    alert ('Passwordmu tidak sesuai');
                    document.location.href = 'Register-Rofi.php';
                </script>
            ";

            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users VALUES
            (NULL, '$nama', '$email', '$password', '$no_hp')
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }



    ?>