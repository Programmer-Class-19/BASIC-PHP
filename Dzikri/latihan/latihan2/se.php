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

// Initialize barang session variable if not set
if (!isset($_SESSION['barang'])) {
    $_SESSION['barang'] = [];
}

// Function to add a new item
function tambahBarang($nama, $harga, $stok, $kategori, $totalharga)
{
    $_SESSION['barang'][] = [
        'nama_barang' => $nama,
        'harga' => $harga,
        'stok' => $stok,
        'kategori' => $kategori,
        'total_harga' => $totalharga
    ];
}

// Function to reset data
function resetData()
{
    $_SESSION['barang'] = [];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tambah_barang'])) {
        $totalharga = $_POST['harga'] * $_POST['stok'];
        tambahBarang(
            $_POST['nama_barang'],
            $_POST['harga'],
            $_POST['stok'],
            $_POST['kategori'],
            $totalharga
        );
    }

    if (isset($_POST['reset_data'])) {
        resetData();
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

        <!-- Menampilkan Daftar Barang -->
        <div class="table-container">
            <h2>daftar barang di toko</h2>
            <?php
            
            // Display items in a table
            if (!empty($_SESSION['barang'])) {

                $total = 0;
                
                echo "<table>";
                echo "<tr><th>Nama Barang</th><th>Harga</th><th>Stok</th><th>Kategori</th><th>Total Harga</th></tr>";

                foreach ($_SESSION['barang'] as $item) {
                    $totalHargabarang = $item['harga'] * $item['stok'];
                    $total += $totalHargabarang;
                    echo "<tr>";
                    echo "<td>" . $item['nama_barang'] . "</td>";
                    echo "<td>Rp. " . $item['harga'] . "</td>";
                    echo "<td>" . $item['stok'] . "</td>";
                    echo "<td>" . $item['kategori'] . "</td>";
                    echo "<td>" . $totalHargabarang . "</td>";
                    echo "</tr>";
                }

                // Display overall totals   
                echo "<tr style='font-weight: bold;'>";
                echo "<td colspan='4'>Total Keseluruhan Harga</td>";
                echo "<td>Rp. ". $total. "</td>";
                echo "</tr>";

                echo "</table>";
            } else {
                echo "<div class='error'>Tidak ada barang di toko saat ini.</div>";
            }
            ?>

        </div>
    </div>
</body>

</html>