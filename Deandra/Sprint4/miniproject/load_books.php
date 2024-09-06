<?php
$file = 'books.txt'; // Nama file tempat data buku disimpan

// Memeriksa apakah file ada
if (file_exists($file)) {
    // Membaca konten file dan mengubahnya kembali ke bentuk array
    $books = unserialize(file_get_contents($file)); //Fungsi unserialize() mengubah kembali data serial menjadi data sebenarnya.
} else {
    // Jika file tidak ada, inisialisasi array kosong
    $books = [];
}
?>

