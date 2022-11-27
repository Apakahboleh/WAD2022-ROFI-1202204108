<?php 

require "../config/user_connector.php";

$user = cek_user("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
</head>
<body>
    <h1>Tampilan User</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
            <th>password</th>
            <th>no_hp</th>
        </tr>

        <?php foreach ( $user as $u ) : ?>
        <tr>
            <td><?= $u["id"]; ?></td>
            <td><?= $u["nama"] ?></td>
            <td><?= $u["email"]; ?></td>
            <td><?= $u["password"] ?></td>
            <td><?= $u["no_hp"] ?></td>
        </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>