<?php

//  INCLUDE VS REQUIRE :
// Pernyataan ini require juga digunakan untuk memasukkan berkas ke dalam kode PHP.
// Namun, ada satu perbedaan besar antara include dan require; ketika sebuah file 
// disertakan dengan pernyataan includedan PHP tidak dapat menemukannya, skrip akan
// terus dieksekusi.

// Jika kita melakukan contoh yang sama dengan menggunakan requirepernyataan tersebut, 
// pernyataan echo tidak akan dijalankan karena eksekusi skrip berhenti setelah requirepernyataan 
// tersebut menghasilkan kesalahan fatal.

// Gunakan require saat berkas dibutuhkan oleh aplikasi.
// Gunakan include saat berkas tidak diperlukan dan aplikasi akan dilanjutkan saat berkas 
// tidak ditemukan

// definisi if : pernyataan - mengeksekusi beberapa kode jika salah satu kondisinya benar.

// $_SERVER : adalah variabel super global PHP yang menyimpan informasi tentang header, paths, 
// dan skripct locatioin.

// $_REQUEST : adalah variabel super global PHP yang berisi data formulir yang dikirimkan, 
// dan semua data cookie.

// POST digunakan untuk mengirim data ke server untuk membuat/memperbarui sumber daya.
// Data yang dikirim ke server dengan POST disimpan di badan permintaan HTTP.


// ISSET : Fungsi isset() memeriksa apakah suatu variabel telah disetel, yang berarti 
// variabel tersebut harus dideklarasikan dan tidak bernilai NULL.
// Fungsi ini mengembalikan nilai true jika variabel ada dan bukan NULL, jika tidak maka 
// akan mengembalikan nilai false.
// Catatan: Jika beberapa variabel diberikan, maka fungsi ini akan mengembalikan nilai true hanya jika semua variabel ditetapkan.
// Tip: Suatu variabel dapat dibatalkan pengaturannya dengan fungsi unset()

// $_POST berisi serangkaian variabel yang diterima melalui metode HTTP POST.

// Untuk menambahkan item ke array yang ada, Anda dapat menggunakan [] sintaksis tanda kurung.

// file_put_contents() menulis data ke dalam sebuah file.

// Fungsi serialize() mengonversi representasi nilai yang dapat disimpan.
// Membuat data menjadi serial berarti mengubah suatu nilai menjadi serangkaian bit, sehingga 
// dapat disimpan dalam berkas, buffer memori, atau dikirimkan melalui jaringan.






include 'load_books.php'; // Memuat data buku dari file

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Mengecek apakah permintaan adalah POST
    if (isset($_POST['add'])) { // Jika tombol "Tambah Buku" ditekan
        $title = $_POST['title']; // Mengambil data dari input form
        $author = $_POST['author'];
        $year = $_POST['year'];
        $books[] = ["title" => $title, "author" => $author, "year" => $year]; // Menambahkan buku baru ke array
        file_put_contents('books.txt', serialize($books)); // Menyimpan data buku ke file


    } elseif (isset($_POST['update'])) { // Jika tombol "Perbarui Buku" ditekan
        $old_title = $_POST['old_title']; // Mengambil data dari input form
        $new_title = $_POST['new_title'];
        $new_author = $_POST['new_author'];
        $new_year = $_POST['new_year'];
        foreach ($books as &$book) { // Mengupdate buku berdasarkan judul lama
            if ($book['title'] === $old_title) {
                $book['title'] = $new_title;
                $book['author'] = $new_author;
                $book['year'] = $new_year;
            }
        }
        file_put_contents('books.txt', serialize($books)); // Menyimpan data buku yang diperbarui ke file


    } elseif (isset($_POST['delete'])) { // Jika tombol "Hapus Buku" ditekan
        $title = $_POST['title']; // Mengambil data dari input form
        $books = array_filter($books, function($book) use ($title) {
            return $book['title'] !== $title; // Menghapus buku berdasarkan judul
        });
        file_put_contents('books.txt', serialize($books)); // Menyimpan data buku yang diperbarui ke file
    }
    header('Location: index.php'); // Redirect ke halaman utama setelah operasi selesai

    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Buku</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menyertakan file CSS -->
</head>
<body>
    <header>
        <div class="container">
            <h1>MINI PROJECT</h1> <!-- Judul utama -->
        </div>
    </header>

    <div class="container">
        <!-- Formulir untuk menambah buku -->
        <section class="form-section">
            <h2>Tambah Buku</h2>
            <form method="post" action="">
                <label for="title">Judul :</label>
                <input type="text" name="title" required><br>
                <label for="author">Penulis :</label>
                <input type="text" name="author" required><br>
                <label for="year">Tahun Terbit :</label>
                <input type="text" name="year" required><br>
                <input type="submit" name="add" value="Tambah Buku"> <!-- Tombol untuk menambah buku -->
            </form>
        </section>

        <!-- Formulir untuk memperbarui buku -->
        <section class="form-section">
            <h2>Perbarui Buku</h2>
            <form method="post" action="">
                <label for="old_title">Judul Lama :</label>
                <input type="text" name="old_title" required><br>
                <label for="new_title">Judul Baru :</label>
                <input type="text" name="new_title" required><br>
                <label for="new_author">Penulis Baru:</label>
                <input type="text" name="new_author" required><br>
                <label for="new_year">Tahun Terbit Baru:</label>
                <input type="text" name="new_year" required><br>
                <input type="submit" name="update" value="Perbarui Buku"> <!-- Tombol untuk memperbarui buku -->
            </form>
        </section>

        <!-- Formulir untuk menghapus buku -->
        <section class="form-section">
            <h2>Hapus Buku</h2>
            <form method="post" action="">
                <label for="title">Judul Buku :</label>
                <input type="text" name="title" required><br>
                <input type="submit" name="delete" value="Hapus Buku"> <!-- Tombol untuk menghapus buku -->
            </form>
        </section>


        <!-- Menampilkan semua buku -->
        <section class="book-list">
            <h2>Daftar Buku</h2>
            <?php if (empty($books)): ?>
                <p class="no-data">Tidak ada buku dalam database.</p> <!-- Pesan ketika tidak ada buku -->
            <?php else: ?>
                <ul>
                    <?php foreach ($books as $book): ?>
                        <li>
                            <strong>Judul :</strong> <?php echo htmlspecialchars($book['title']); ?><br>
                            <strong>Penulis :</strong> <?php echo htmlspecialchars($book['author']); ?><br>
                            <strong>Tahun Terbit :</strong> <?php echo htmlspecialchars($book['year']); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </div>
</body>
</html>


