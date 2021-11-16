<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "annonce";
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}
?>