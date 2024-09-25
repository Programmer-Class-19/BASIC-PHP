<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Pakaian</title>
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

    // Function to reset data
    function resetData() {
        unset($_SESSION["pakaian"]);
        $_SESSION["pakaian"] = [];
    }

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["tambah_Pakaian"])) {
            tambahpakaian($_POST["merk"], $_POST["harga"], $_POST["stok"], $_POST["model"]);
}

        if (isset($_POST['reset_data'])) {
            resetData();
        }
    }
    ?>

    <h1><?php echo($_SERVER['REQUEST_METHOD'] = "TOKO PAKAIAN JAYA"); ?></h1>

    <div class="container">
        <!-- Form untuk Menambahkan Pakaian -->
        <div class="form-container">
            <h2>Pakaian</h2>
            <form method="POST" action="">
                <label for="merk">Merk Pakaian :</label>
                <input type="text" id="merk" name="merk"  >

                <label for="harga">Harga :</label>
                <input type="number" id="harga" name="harga"  >

                <label for="stok">Stok :</label>
                <input type="number" id="stok" name="stok" >

                <label for="model">model :</label>
                <select id="model" name="model" >
                    <option value="">Pilih Model</option>
                    <option value="Kemeja">Kemeja</option>
                    <option value="Batik">Batik</option>
                    <option value="Gamis">Gamis</option>
                    <option value="Jubah">Jubah</option>
                    <option value="Koko">Koko</option>
                    <option value="Celana">Celana</option>
                    <option value="Kaos">Kaos</option>
                </select>

                <input type="submit" name="tambah_Pakaian" value="Tambah Pakaian">
                <input type="submit" name="reset_data" class="reset-button" value="Reset Data">
            </form>
            
        </div>

        <!-- Menampilkan Daftar Pakaian -->
        <div class="table-container">
            <h2>Daftar Pakaian</h2>
            
            <!-- menampilkan item di tabel -->
        <?php if (!empty($_SESSION["pakaian"])) { ?>
            <table border="1" cellspacing = 0px cellpadding = 10px   >
                <tr>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Model</th>
                </tr>
    
                <?php foreach ($_SESSION["pakaian"] as $item) { ?>
                    <tr>
                        <td> <?php echo $item["merk"] ?></td>
                        <td>Rp. <?php echo $item["harga"] ?> </td>
                        <td> <?php echo $item["stok"] ?></td>
                        <td> <?php echo $item["model"] ?></td>
                    </tr>
                
                <?php } ?>
                </table>
                <?php } else {  
                    echo "<div class='error'>Barang kosong saat ini.</div>";
                } ?>
            
        </div>
    </div>
</body>
</html>
<?php 
echo "asslamu'alaikum"
?>