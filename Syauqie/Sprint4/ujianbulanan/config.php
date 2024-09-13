<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "ujianbulanan";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("koneksi failed: " . mysqli_connect_error());
}
?>
