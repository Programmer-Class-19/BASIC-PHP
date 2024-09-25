<?php
include 'load_books.php'; // Memuat data buku dari file

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Mengecek apakah permintaan adalah POST
    if (isset($_POST['add'])) { // Jika tombol "Tambah Buku" ditekan
        $title = $_POST['title']; // Mengambil data dari input form yang pertama
        $author = $_POST['author'];
        $year = $_POST['year'];
        $books[] = ["title" => $title, "author" => $author, "year" => $year]; // Menambahkan buku baru ke array
        file_put_contents('books.txt', serialize($books)); // Menyimpan data buku ke file
    } elseif (isset($_POST['update'])) { // Jika tombol "Perbarui Buku" ditekan
        $old_title = $_POST['old_title']; // Mengambil data dari input form yang kedua
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
        $title = $_POST['title']; // Mengambil data dari input form yang ketiga
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
                <label for="title">Judul:</label>
                <input type="text" name="title" required><br>
                <label for="author">Penulis:</label>
                <input type="text" name="author" required><br>
                <label for="year">Tahun Terbit:</label>
                <input type="text" name="year" required><br>
                <input type="submit" name="add" value="Tambah Buku"> <!-- Tombol untuk menambah buku -->
            </form>
        </section>

        <!-- Formulir untuk memperbarui buku -->
        <section class="form-section">
            <h2>Perbarui Buku</h2>
            <form method="post" action="">
                <label for="old_title">Judul Lama:</label>
                <input type="text" name="old_title" required><br>
                <label for="new_title">Judul Baru:</label>
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
                <label for="title">Judul Buku:</label>
                <input type="text" name="title" required><br>
                <input type="submit" name="delete" value="Hapus Buku"> <!-- Tombol untuk menghapus buku -->
            </form>
        </section>

        <!-- Menampilkan semua buku -->
        <section class="book-list">
            <h2>Daftar Buku</h2>
            <?php if (empty($books)): ?>
                <p class="no-data">Tidak ada buku yang di input.</p> <!-- Pesan ketika tidak ada buku -->
            <?php else: ?>
                <ul>
                    <?php foreach ($books as $book): ?>
                        <li>
                            <strong>Judul:</strong> <?php echo htmlspecialchars($book['title']); ?><br>
                            <strong>Penulis:</strong> <?php echo htmlspecialchars($book['author']); ?><br>
                            <strong>Tahun:</strong> <?php echo htmlspecialchars($book['year']); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </div>
</body>
</html>
