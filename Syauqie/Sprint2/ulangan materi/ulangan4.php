<?php
// $umur = array("Andi" => 25, "Budi" => 30, "Citra" => 28);

// foreach ($umur as $nama => $nilai) {
//     echo "$nama berumur $nilai tahun.<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ulangan 4</title>
    <style>
        .warna {
            background-color: white;
           
        }
        
    </style>
</head>
<body>
    <?php  
    // $i= "syauqie";
    // echo "$i";

    // for ($x= "0"; $x < 5; $x++) {
    //     echo "gilaa <br>";
    // }
    
    // $i=1;
    // while ($i <= 5) {
    //     echo "bussettt <br>";
    //     $i++;
    // }

    // $i=1;
    // do {
    //     echo "kiww <br>";
    //     $i++;
    // } while ($i <= 5);

    // $nama = [
    //     ["syauqie", "radhit", "zidan"],
    //     [1,2,3]
    // ]
//     echo $nama [0];
// echo "<br>";
//     foreach ($nama as $n) {
//         echo "$n";
//     }
// echo "<br>";
//     $nama [] = "syauqie"; 
//     var_dump($nama);
        // foreach ($nama as $n) {
        //     echo $n [0];
        // }

    $nama = [
        "nama" => "syauqie",
        "domisili" => "tangerang",
        "umur" => 19];

    foreach ($nama as $n => $isi) {  
            echo "<li>";
            echo "$n $isi"; 
            echo "</li>";
    } ?>

    <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 0; $i <= 7; $i++) { ?>
    <?php if ($i % 2 == 0) : ?>
        <tr class="warna">
    <?php else : ?>
        <tr>
    <?php endif; ?>
    <?php for ($j = 0; $j < 11; $j++) { ?>
        <?php if ($i % 2 != 0) : ?>
            <td style="background-color: black; color :aliceblue"><?php echo "$i, $j"; ?></td>
        <?php else : ?>
            <td><?php echo "$i, $j"; ?></td>
        <?php endif; ?>
    <?php } ?>
    </tr>
<?php } ?>
            
    </table>
</body>
</html>



<?php

class Produk {
    public  $judul = "ipin & upin",
            $penerbit = "lescopaque",
            $tanggal  = "13 june 2024";

    public function salam () {
        return "$this->judul $this->penerbit $this->tanggal";
    }
}

$produk1 = new produk ();
$produk1->judul = "upin & ipin";
$produk1->penerbit = "lescopa";
$produk1->tanggal = "8 agustus 2024";

// echo "$produk1->judul";
echo "film : " . $produk1->salam();
?>


<?php 
    function salam ($datang, $nama) {
        return "selamat, $datang, $nama";
    }

    echo salam("pagi", "syauqie")  
?>