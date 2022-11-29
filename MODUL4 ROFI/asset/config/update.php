    <?php 
    require "user_connector.php";

    function update_user($item) {
        global $conns;

        $id = $item["id"];
        $nama = $item["nama"];
        $email = $item["email"];
        $password = $item["password"];
        $no_hp = $item["no_hp"];
        $password2 = $item["password2"];

        if ( $password !== $password2 ) {
            echo "
                <script>
                    alert ('Passwordmu tidak sesuai');
                </script>
            ";

            return false;
        }

        // enkripsi password
        // $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE users SET
                    nama = '$nama',
                    email = '$email',
                    password = '$password',
                    no_hp = '$no_hp'
                WHERE id = $id
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    ?>