<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
   
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     // Fungsi input($data): Digunakan untuk memvalidasi dan membersihkan data input 
    // dari pengguna

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $sekolah=input($_POST["sekolah"]);
        $jurusan=input($_POST["jurusan"]);
        $no_hp=input($_POST["no_hp"]);
        $alamat=input($_POST["alamat"]);



        //Query input menginput data kedalam tabel anggota
        $sql="insert into peserta (nama,sekolah,jurusan,no_hp,alamat) values
		('$nama','$sekolah','$jurusan','$no_hp','$alamat')";

        //Mengeksekusi query untuk memasukkan data ke database.
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:simple-website.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

    </div>
    <div class="form-group">
        <label>Sekolah:</label>
        <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah" required/>
    </div>
   <div class="form-group">
        <label>Jurusan :</label>
        <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" required/>
    </div>
            
    <div class="form-group">
        <label>Nomer Hp:</label>
        <input type="text" name="no_hp" class="form-control" placeholder="Masukan No Hp" required/>
    </div>
    <div class="form-group">
        <label>Alamat:</label>
        <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>
    </div>       

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>    

