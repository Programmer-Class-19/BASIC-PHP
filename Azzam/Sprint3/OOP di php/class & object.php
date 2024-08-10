<?php
class Motor {
    public $nama,
           $merk,
           $warna,
           $maxtopspeed,
           $harga;
}

$Motor1 = new Motor();
$Motor1->nama = "supra";
$Motor1->merk = "honda";
$Motor1->warna = "merah";
$Motor1->maxtopspeed = "125";
$Motor1->harga = "10000000";

echo "Motor : $Motor1->nama, $Motor1->merk";
?>