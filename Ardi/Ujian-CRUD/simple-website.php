<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>Data Mahasiswa</title>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Pak Tua Thanos Tutorial</span>
    </nav>
<div class="container">
    <br>
    <h4><center>Daftar Mahasiswa</center></h4>
<?php

    include "koneksi.php";

    //cek apakah kiriman form dari method post
    if (isset($_GET['id_peserta'])) {
        $id_peserta=htmlspecialchars($_GET["id_peserta"]);

        $sql="delete from peserta where id_peserta='$id_peserta' ";
        $hasil=mysqli_query($kon,$sql);

        //kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:simple-website.php");

        }
        else {
            echo "<div class='alert-danger'> Data Gagal Dihapus.</div>";

        }
    }
?>


    <tr class="table-danger">
            <br>
        <thead>
        <tr>
        <table class="my-3 table table-bordered">
            <tr class="table-primary">
            <th>No</th>
            <th>Nama</th>
            <th>Sekolah</th>
            <th>Jurusan</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
            
        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql="select * from peserta order by id_peserta desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["sekolah"];?></td>
                <td><?php echo $data["jurusan"];?></td>
                <td><?php echo $data["pekerjaan"];?></td>
                <td><?php echo $data["alamat"];?></td>
                <td>
                    <a href="updatetan.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_peserta=<?php echo $data['id_peserta']; ?>" class="btn btn-danger" role="button">Delete"></a>
                </td>
            </tr>   
            </tbody>
            <?php
        }
        ?>
    <table>
    <a href="halaman.php" class="btn btn-primary" role="button">Tambah Data</a>        
</div>
</body>
</html>