<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Pakaian</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        h1, h2 {
            text-align: center;
            color: #007bff;
        }
        .form-container, .table-container {
            background-color: white;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .actions {
            text-align: center;
        }
        .error {
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    // Inisialisasi Pakaian
    if (!isset($_SESSION["pakaian"])) {
        $_SESSION["pakaian"] = [];
    }

    // Function to add a new item
    function tambahpakaian($merk, $harga, $stok, $model) {
        $_SESSION["pakaian"][] = [
            "merk" => $merk,
            "harga" => $harga,
            "stok" => $stok,
            "model" => $model
        ];
    }

    // Function to update an item
    function updatepakaian($index, $merk, $harga, $stok, $model) {
        $_SESSION["pakaian"][$index] = [
            "merk" => $merk,
            "harga" => $harga,
            "stok" => $stok,
            "model" => $model
        ];
    }

    // Function to delete an item
    function deletepakaian($index) {
        unset($_SESSION["pakaian"][$index]);
        $_SESSION["pakaian"] = array_values($_SESSION["pakaian"]);  // Re-index the array
    }

    // Function to reset data
    function resetData() {
        unset($_SESSION["pakaian"]);
        $_SESSION["pakaian"] = [];
    }

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["tambah_Pakaian"])) {
            if (isset($_POST['index']) && $_POST['index'] !== "") {
                updatepakaian($_POST['index'], $_POST["merk"], $_POST["harga"], $_POST["stok"], $_POST["model"]);
            } else {
                tambahpakaian($_POST["merk"], $_POST["harga"], $_POST["stok"], $_POST["model"]);
            }
        }

        if (isset($_POST['delete'])) {
            deletepakaian($_POST['index']);
        }

        if (isset($_POST['edit'])) {
            $editIndex = $_POST['index'];
            $editPakaian = $_SESSION["pakaian"][$editIndex];
        }

        if (isset($_POST['reset_data'])) {
            resetData();
        }

    }
    ?>

    <h1>TOKO PAKAIAN JAYA</h1>

    <div class="container">
        <!-- Form untuk Menambahkan / Edit Pakaian -->
        <div class="form-container">
            <h2><?php echo isset($editPakaian) ? 'Edit Pakaian' : 'Tambah Pakaian'; ?></h2>
            <form method="POST" action="">
                <input type="hidden" name="index" value="<?php echo isset($editIndex) ? $editIndex : ''; ?>">
                <label for="merk">Merk Pakaian :</label>
                <input type="text" id="merk" name="merk" value="<?php echo isset($editPakaian) ? $editPakaian['merk'] : ''; ?>" required>

                <label for="harga">Harga :</label>
                <input type="number" id="harga" name="harga" value="<?php echo isset($editPakaian) ? $editPakaian['harga'] : ''; ?>" required>

                <label for="stok">Stok :</label>
                <input type="number" id="stok" name="stok" value="<?php echo isset($editPakaian) ? $editPakaian['stok'] : ''; ?>" required>

                <label for="model">Model :</label>
                <select id="model" name="model" required>
                    <option value="">Pilih Model</option>
                    <option value="Kemeja" <?php echo isset($editPakaian) && $editPakaian['model'] == 'Kemeja' ? 'selected' : ''; ?>>Kemeja</option>
                    <option value="Batik" <?php echo isset($editPakaian) && $editPakaian['model'] == 'Batik' ? 'selected' : ''; ?>>Batik</option>
                    <option value="Gamis" <?php echo isset($editPakaian) && $editPakaian['model'] == 'Gamis' ? 'selected' : ''; ?>>Gamis</option>
                    <option value="Jubah" <?php echo isset($editPakaian) && $editPakaian['model'] == 'Jubah' ? 'selected' : ''; ?>>Jubah</option>
                    <option value="Koko" <?php echo isset($editPakaian) && $editPakaian['model'] == 'Koko' ? 'selected' : ''; ?>>Koko</option>
                    <option value="Celana" <?php echo isset($editPakaian) && $editPakaian['model'] == 'Celana' ? 'selected' : ''; ?>>Celana</option>
                    <option value="Kaos" <?php echo isset($editPakaian) && $editPakaian['model'] == 'Kaos' ? 'selected' : ''; ?>>Kaos</option>
                </select>

                <input type="submit" name="tambah_Pakaian" value="<?php echo isset($editPakaian) ? 'Update Pakaian' : 'Tambah Pakaian'; ?>">
                <input type="submit" name="reset_data" class="reset-button" value="Reset Data">
            </form>
        </div>

        <!-- Menampilkan Daftar Pakaian -->
        <div class="table-container">
            <h2>Daftar Pakaian</h2>
            <?php if (!empty($_SESSION["pakaian"])) { ?>
                <table>
                    <tr>
                        <th>Merk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Model</th>
                        <th class="actions">Actions</th>
                    </tr> 
                    <?php } ?>

                    <?php foreach ($_SESSION["pakaian"] as $index => $item) {  ?>
                        <tr>
                            <td><?php echo $item["merk"] ?></td>
                            <td>Rp. <?php echo $item["harga"] ?></td>
                            <td><?php echo $item["stok"] ?></td>
                            <td><?php echo $item["model"] ?></td>
                            <td class="actions">
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                    <input type="submit" name="edit" value="Edit">
                                </form>
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                                    <input type="submit" name="delete" value="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus pakaian ini?');">
                                                        
                               <?php } ?>
