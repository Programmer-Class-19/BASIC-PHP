<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan Toko Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 30px;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .form-container {
            width: 45%;
        }

        .table-container {
            width: 50%;
            margin-right: 30px;
        }

        h1,
        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .reset-button {
            background-color: #d9534f;
        }

        .reset-button:hover {
            background-color: #c9302c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        .error {
            background-color: #f2dede;
            color: #a94442;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php 
        session_start();

        if (!isset($_SESSION['baran'])) {
            $_SESSION['barang'] = [];
        }

        function tambahbarang($nama, $harga, $stok, $kategori, $totalHarga) {
            $_SESSION['barang'] [] = [
                'nama_barang' => $nama,
                'harga' => $harga,
                'stok' => $stok,
                'kategori' => $kategori,
                'total_harga' => $totalHarga
            ];
        }

        function resetdata () {
            unset ($_SESSION['barang']);
            $_SESSION['barang'] = [];
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['tambah_barang'])) {
                $totalHarga = $_POST['harga'] * $_POST['stok'];
                tambahbarang(
                    $_POST['nama_barang'],
                    $_POST['harga'],
                    $_POST['stok'],
                    $_POST['kategori'],
                    $totalHarga
                );
            };

            if (isset($_POST['reset_data'])) {
                resetdata();
            }
        }
    ?>

<h1>TOKO SRC</h1>

<div class="container">
    <!-- Form untuk Menambahkan Barang -->
    <div class="form-container">
        <h2>Tambah Barang</h2>
        <form method="POST" action="">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang">

            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga">

            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok">

            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori">
                <option value="">Pilih Kategori</option>
                <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Pakaian">Pakaian</option>
                <option value="Makanan">Makanan</option>
                <option value="Makanan">Minuman</option>
                <option value="Alat Tulis">Alat Tulis</option>
                <option value="Alat Kantor">Alat Kantor</option>
                <option value="Alat Olahraga">Alat Olahraga</option>
            </select>

            <input type="submit" name="tambah_barang" value="Tambah Barang">
            <input type="submit" name="reset_data" class="reset-button" value="Reset Data">

        </form>

    </div>

    <div class="table-container">
        <?php if (!empty($_SESSION['barang'])) : ?>
            <?php $totalhargakeseluruhan = 0; ?>
            <table>
                <tr>
                    <th>NAMA BARANG</th>
                    <th>HARGA</th>
                    <th>STOK</th>
                    <th>KATEGORI</th>
                    <th>TOTAL HARGA</th>
                </tr>
            

            <?php foreach ($_SESSION['barang'] as $item) : ?>
                    <?php $totalHarga = $item ['harga'] * $item ['stok']; ?>
                    <?php $totalhargakeseluruhan += $totalHarga ?>
                <tr>
                    <td><?php echo $item ['nama_barang'] ?></td>
                    <td>Rp. <?php echo $item ['harga'] ?></td>
                    <td><?php echo $item ['stok'] ?></td>
                    <td><?php echo $item ['kategori'] ?></td>
                    <td><?php echo $totalHarga  ?></td>
                </tr>
            <?php endforeach; ?>
                <tr style='font-weight: bold;'>
                    <td colspan='4'>Total Keseluruhan Harga</td>
                    <td><?php echo $totalhargakeseluruhan; ?></td>
                </tr>
            </table>
            <?php else : ?>
                <div class='error'>Tidak ada barang di toko saat ini.</div>
            <?php endif; ?>

    </div>
</body>
</html>