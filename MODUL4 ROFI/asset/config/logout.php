<?php 

session_start();
session_destroy();
session_unset();
$_SESSION = [];


setcookie("login", "", time() - 3600);
// setcookie("secure_1202204108", "", time() - 3600);
// setcookie("rofi_1202204108", "", time() - 3600);

header("Location: ../pages/Before-Rofi.php");
exit;
?>