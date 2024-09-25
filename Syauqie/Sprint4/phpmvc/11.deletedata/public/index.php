<?php 
    if (!session_id() ) session_start(); //tidak membutuhkan kurung kurawal saat yang ingin ditampilkan hanya 1 baris saja
    require_once '../app/init.php'; //init ini yang nanti akan memanggil semua file yang kita butuhin yang dinamakan bootstraping dimana kita panggil 1 file dan file itu memanggil aeluruh aplikasi mvcnya
    $app = new App;
?>