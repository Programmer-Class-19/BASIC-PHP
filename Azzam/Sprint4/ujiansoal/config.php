<?php
define('BASEURL', 'http://localhost/BASIC-PHP/Azzam/Sprint4/ujiansoal/public/');

$host = 'localhost';
$db   = 'ujian';
$user = 'root'; // ganti sesuai user Anda
$pass = '';     // ganti sesuai password Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
