<?php 

// membuat data mahasiswa

$mahasiswa = [
    ["jie qibiell", "0610202417", "teknik informatika", "jieqibiell@gmail.com"],
    ["mutss tiqq", "2409200117", "sistem management", "katiarraa_@gmail.com"],
    ["katiarraa biell", "1712202217", "cara kelanggengan", "mutssjie@gmail.com"]
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    

<h1>Daftar Mahasiswa</h1>

<!-- <ul>
    <li>jie qibiell</li>
    <li>0610202417</li>  NRP
    <li>teknik informatika</li>
    <li>qibiell@gmail.com</li>    // CARA LAMA
</ul> -->

<!-- <ul> -->
<!-- <?php foreach($mahasiswa as $mhs) : ?> -->
    <!-- <li><?= $mhs; ?></li> -->
<!-- <?php endforeach; ?> -->
<!-- </ul>           // CARA CEPET -->   


<?php foreach($mahasiswa as $mhs) :?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li> 
</ul>
<?php endforeach; ?>


<!-- ARRAY RUMERIK = ARRAY YANG INDEX NYA ANGKA  -->
<!-- ARRAY ASOSIATIF = INDEX NYA BUKAN LAGI ANGKA TAPI
INDEX NYA STRING, YANG INDEXNYA KITA BUAT SENDIRI UNTUK 
MENG ASOSIASIKAN KE NILAI YANG ADA DIDALAM ARRAYNYA -->




</body>
</html>