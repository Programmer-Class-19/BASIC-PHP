<?php 
    //variable scope / lingkup variable
//     $x  = 10;

//     function dolarx() {
//         global $x; //harus menggunakan key global agar variable global dapat diakses
//         echo $x;
//     }
//     dolarx();
//     '/n';
// ?>

<?php 
//     $_get["nama"] = ['syauqie']; // cara  memasukkan sbuah array associative di $_get cara pertama
//     $_get["nrp"] = ['siapa aja']; // cara  memasukkan sbuah array associative di $_get cara pertama
//     var_dump($_get);
// ?>

<?php 
$mahasiswa = [
    [
    "nrp" => "043040023",
    "nama" => "Sandhika Galih",
    "email" => "sandhikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "fto1.png"
    ],
    [
    "nama" => "Doddy Ferdiansyah",
    "nrp" => "033040001",
    "email" => "doddy@gmail.com",
    "jurusan" => "Teknik Industri",
    "gambar" => "fto2.png"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">            
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get and post</title>
</head>
<body>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
        <li><a href="get2.php?nama=<?php echo $mhs ["nama"]?>&gambar=<?php echo $mhs ["gambar"]?>&email=<?php echo $mhs["email"]?>&jurusan=<?php echo $mhs["jurusan"]?>"><?php echo $mhs['nama'] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>



















<!-- <hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php //foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="../foto/fto1.png" width = 100px;><?php// echo $mhs ["gambar"] ?></li>
            <li>//<?php //echo $mhs["nrp"] ?></li>
        </ul>
    <?php// endforeach;?>
</body>
</html> -->