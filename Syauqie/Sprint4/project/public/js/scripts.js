// scripts.js

document.addEventListener('DOMContentLoaded', function () {
    console.log('JavaScript is working!');

    // Fungsi untuk menampilkan konfirmasi hapus
    window.confirmDelete = function (url) {
        // Menampilkan pesan konfirmasi
        if (confirm("Apakah Kamu Yakin Akan Menghapus data ini??")) {
            // Mengarahkan pengguna ke URL hapus jika dikonfirmasi
            window.location.href = url;
        }
    };

    // Jika ada event listener tambahan atau fitur JavaScript lain, bisa ditambahkan di sini
});
