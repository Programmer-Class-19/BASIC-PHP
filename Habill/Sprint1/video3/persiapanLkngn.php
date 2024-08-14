<?php 

// php pemula video 3
// persiapan lingkungan pengembangan

// ada hal yang kita harus pelajari:
// client-side vs. server-side scripting (programming)

// -CLIENT-SIDE SCRIPTING :
// definisi (Client-side scripting adalah kode yang dieksekusi oleh browser pengguna (klien). Bahasa pemrograman yang umum digunakan untuk client-side scripting adalah JavaScript, HTML, dan CSS).
// Ketika kita membuat website dengan html, css, javascript itu disebut dengan client-side scripting, kenapa?
// karena semua pemosresannya terjadi disisi client / dicomputer kalian masing"
// -SERVER-SIDE SCRIPTING :
// definisi : (Server-side scripting dalam PHP adalah proses menulis dan mengeksekusi script PHP di server untuk menghasilkan halaman web dinamis berdasarkan permintaan dari browser klien).
// saat website kalian di buat dengan Bahasa php didalamnya maka yang terjadi adalah pada saat kalian buka website nya lewat browser, browser tersebut mengirimkan sebuah request, jadi dia memnita sesuatu kepada server, nah dan web server banyak macamnya(apache,iis,nginx,tomcat,lightttp,dll), inilah yang mengelola request atau permintaan dari klien,(Bahasa pemograman yang jalan di server (PHP,ASP,Ruby,phyton)), Ketika halaman web yang dibuka didalamnya terdapat salah satu Bahasa diatas, maka servernya akan mengelola permintaan itu,
// contoh:
// kalian membuat sintaks html yang isinya h1(hello world), dihalaman tersebut tidak ada Bahasa php, nanti yang terjadi adalah web browser akan meminta request ke server, dan server akan membaca apakah di halaman tersebut ada Bahasa php atau tidak, kalua tidak web server akan langsung merespon permintaannya, jika ada Bahasa php, maka php akan mengeksekusi script tadi, nah nanti script akan membaca ada script echo, artinya dia akan mencetak sesuatu ke layar yang dikembalikan lagi sebagai respon ke client nya lagi,
// nah kenapa Bahasa pemograman server atau php ini tidak bisa di contek,
// script" Bahasa pemograman server tadi bisa terhubung ke database, sehingga website kita nanti dinamis,

// nah karena itu kita juga butuh: 
// 1.web server (apache)
// 2.bahasa pemograman (php)
// 3.database (MySQL)


// XAMPP 
// X = cross platform
// A = apache
// M = MariaDB
// P = PHP
// P = perl

// sejarah MariaDB
// (myssql sudah dibeli dengan sun dan sun udah dibeli oleh oracle, MySQL skrng hak ciptnya udah dimiliki oleh oracle, kemudian ada masalah di open source nya terus komunitasnya membuat sendiri versi open sourcenya dari MySQL menjadi MariaDB)


?>