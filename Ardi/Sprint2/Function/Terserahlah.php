<?php

function salam($nama) {
    date_default_timezone_set('Asia/Jakarta');
    $jam = date('H');
    // Tentukan salam berdasarkan waktu
    if ($jam >= 5 && $jam < 12) {
        $salam = "Selamat pagi, ";
    } elseif ($jam >= 12 && $jam < 15) {
        $salam = "Selamat siang, ";
    } elseif ($jam >= 15 && $jam < 18) {
        $salam = "Selamat sore, ";
    } elseif ($jam >= 19 && $jam < 23) {
        $salam = "Selamat malam, ";
    } elseif ($jam >= 1 && $jam < 4) {
        $salam = "Jangan Lupa Tahajud & Sholat Shubuh, ";
    }

    // Gabungkan salam dengan nama
    return $salam . $nama . "!";
}

// Contoh penggunaan
$nama_anda = "Laila";
$waktu_sekarang = date("H:i:s");
$salam = "Selamat";
echo salam($nama_anda);