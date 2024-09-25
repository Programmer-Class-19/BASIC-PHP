<?php 

        // ARRAY YANG SEDANG KITA PELAJARI ADALAH ARRAY NUMERIC KARENA INDEXNYA ANGKA

        //LALU ADA ARRAY ASSOCIATIF UNTUK LEBIH MENGIDENTITASI DATA DAN INDEXNYA ADALAH STRINK YANG DIBUAT SENDIRI UNTUK MENGASOSISASIKAN NILAINYA

    // nilai yang berada di dalam array disebut elemen
    //pasangan antara key dan value, keynya adalah index angka, yan dimulai dari nol
    // membuat array dengan cara lama
    //jika bertipe string menggunakan kutip dua 
    $hari = array("senin", "selasa", "rabu" ); //yang lama

    $bulan = ["januari", "februari", "maret"];//cara baru boleh tipe data yang berbeda

    $arr1 = [123, "senin", true]; //tipe yang berbeda

    //menampilkan array dengan echo, var_dump, dan print_r

    //echo

    echo "dengan echo :";
    echo "<br>";
    echo "<br>";

    echo $bulan [0]; //menggunakan elemen index dari nol


    echo "<br>";
    echo "<br>";

    //var_dump

    echo "dengan var_dump :";
    echo "<br>";
    echo "<br>";

    var_dump ($hari);

    //print_r

    echo "<br>";
    echo "<br>";
    echo "dengan print_r :";
    echo "<br>";
    echo "<br>";

    print_r($arr1);

    //menambahkan elemen baru dalam array

    $hari [] = "kamis";
    $hari [] = "jum'at";
    
    var_dump($hari);
?>
    <!-- melakukan pengulangan pada array -->
     <br>
     <br>
     <br>

    <?php $angka = ["1","2","3","4","5","6"]; ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>pengulangan</title>
<!-- fungsi count untuk menyuruh php menghittung sendiri elemen dalam variable tersbut  -->

<!-- foreach bermakna "untuk setiap"  -->
        <style>
            .cara1 {
                background-color: black;
                color: wheat;
                width: 50px;
                height: 50px;
                float: left;
                line-height: 50px;
                margin: 3px;
                text-align: center;
            }
            .cara2 {
                background-color: black;
                color: wheat;
                width: 50px;
                height: 50px;
                float: left;
                line-height: 50px;
                margin: 3px;
                text-align: center;
            }
            .cara3 {
                background-color: black;
                color: wheat;
                width: 50px;
                height: 50px;
                float: left;
                line-height: 50px;
                margin: 3px;
                text-align: center;
            }

            .clear { clear: both; } 
            /* membersihkan float nya */
        </style>
    </head>
    <body>
        <h3>cara pertama</h3>
        <?php for ( $i = 0; $i < count($angka); $i++ ) { ?> 
            <div class="cara1"><?php echo $angka [$i]; ?></div>
        <?php } ?>
            
        <div class="clear"></div>

        <h3>cara kedua</h3>

        <?php foreach( $angka as $a) { ?>
            <div class="cara2"><?php echo "$a"; ?></div>
            <?php } ?>

            <div class="clear"></div>

            <h3>cara ketiga</h3>
        <?php foreach ($angka as $a) : ?>
            <div class="cara3"><?php echo "$a"; ?></div>
            <?php endforeach ?>
            <div class="clear"></div>
        

    </body>
    </html>

<?php  
    $mahasiswa = [
        ["syauqie", "13 juni 2006", "programmer"],
        ["nande", "13 juni 2024", "multimedia"],
        ["dea", "13 juni 2024", "multimedia"]
        ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ( $mahasiswa as $m ) { ?>
    <ul>
        <li>nama :<?php echo $m [0]; ?></li>
        <li>ttl :<?php echo $m [1]; ?></li>
        <li>jurusan :<?php echo $m [2]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>