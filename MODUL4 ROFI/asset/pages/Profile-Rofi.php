<?php
ob_start();
session_start();

require "../config/update.php";

$id = $_GET["id"];
$user = cek_user("SELECT * FROM users WHERE id = $id ")[0];

if (isset($_POST["update"])) {

  if (update_user($_POST) > 0) {
    echo "
      <script>
          alert ('Profilmu telah diperbarui');
      </script>
    ";
    // echo mysqli_error($conn);

  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    h1 {
      font-family: poppins;
      font-weight: light;
      font-size: 50px;
    }

    .navbut {
      width: 80%;
      margin-left: 40px;
    }

    .update {
      width: 10%;
    }
  </style>
  <link rel="stylesheet" href="../style/index.css">
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-lg
  <?php
  if (isset($_POST["color"])) {
    echo $_POST['color'];
    setcookie("warna", $_POST["color"], time() + 20);
  } else if (update_user($_POST) < 0) {
    echo "
      <script>
          alert ('Tolong dirubah beberapa, lalu pilih warna');
          document.location.href = 'Profile-Rofi.php';
      </script>
    ";
    echo 'bg-primary';
  }

  ?>">
    <div class="wadah container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="row">
          <div class="for-link navbar-nav">
            <a class="navbar-brand" href="Home-Rofi.php">Home</a>
            <a class="linkcar nav-link" href="ListCar-Rofi.php">MyCar</a>
          </div>
        </div>

        <div class="row ms-auto">
          <div class="mt-1 mx-5 navbar-nav for-link">
            <a href="Add-Rofi.php">
              <button class="navbut btn btn-light">Add Car</button>
            </a>
          </div>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION["nama"]; ?>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
          </ul>
        </div>

      </div>
    </div>
  </nav>


  <section>
    <div class="container profile mt-3 mb-4">
      <div class="col offset-sm-5">
        <h1>Profile</h1>
      </div>
    </div>

    <div class="container">
      <div class="col">
        <form action="" method="post">
          <input type="hidden" name="id" id="id" value="<?= $user["id"]; ?>">
          <div class="mb-3 row ">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" name="email" readonly class="form-control-plaintext" id="email" value="<?= $user["email"]; ?>" readonly>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" name="nama" class="form-control" id="nama" value="<?= $user["nama"] ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="no_hp" class="col-sm-3 col-form-label">No Handphone</label>
            <div class="col-sm-9">
              <input type="telp" name="no_hp" class="form-control" id="no_hp" value="<?= $user["no_hp"]; ?>">
            </div>
          </div>

          <div class="row">
            <hr style="height:2px; color:#333; background-color:#333;">
          </div>
          <br>
          <div class="mb-3 row">
            <label for="password" class="col-sm-3 col-form-label">Kata Sandi</label>
            <div class="col-sm-9">
              <input type="password" name="password" class="form-control" id="password" value="<?= $user["password"] ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="password2" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
            <div class="col-sm-9">
              <input type="password" name="password2" class="form-control" id="password2" value="<?= $user["password"] ?>">
            </div>
          </div>

          <!-- <div class="mb-3 row">
            <label for="warna" class="col-sm-3 col-form-label">Warna Navbar</label>
            <div class="col-sm-9">
              <input type="text" name="warna" class="form-control" id="warna" >
            </div>
          </div> -->
          <div class="container d-flex align-items-center mb-3">
            <label class="mb-2 col-2" for="color">Warna Navbar</label>
            <select class="form-select offset-sm-1" name="color" id="color">
              <option selected value="bg-primary">Blue Rose</option>
              <option value="bg-warning">Fresh Orange</option>
              <option value="bg-dark">Dark Mate</option>
              <option value="bg-secondary">Monocrhome</option>
              <option value="bg-success">Green Canyon</option>
              <option value="bg-danger">Red Diamond</option>
            </select>
          </div>

          <div class="mb-3 row align-center">
            <center>
              <button name="update" class="update btn btn-primary">Update</button>
            </center>
          </div>

        </form>

      </div>
    </div>
  </section>

  <footer>
    <div class="container mt-2 mb-5">
      <div class="foot row">
        <div class=" col-sm-12">
          <img src="../images/logo-ead.png" width="100px" alt="">
          <small class="mx-5 copyright">ROFI_1202204108</small>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>