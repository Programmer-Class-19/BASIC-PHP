<?php 

// // array 
// // membuat array 
// $hari = array ("kamis","minggu","senin","selasa");  --> Versi Lama 
// $bulan = ["april","juni","oktober","november"];     --> Versi Baru
// $arr = [123,"makannasi",true];
// // menampilkan array 
// //versi debugging (versi developer)
// var_dump ($hari);
// echo "<br><br>";
// print_r ($bulan);
// echo "<br><br>";
// //menampilkan 1 array pada elemen 
// echo $arr[0]; 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan array </title>
        <style> 
        .kotak {
            width: 30px;
            height: 30px;
            background-color:  #0000ff;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        
        
        
        .clear {
            clear: both;
        }
        
        </style>
    </head>
    <body>



    <?php $angka = [1,2,3,4,5,6,7,8,9]; 
    ?>
    <?php
    foreach($angka as $a) : ?>
    <div class="kotak"> <?= $a; ?> </div>    
    <?php endforeach; ?>

    <br><br><hr><br><br>
<?php   

$angka =  [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]; 
echo $angka[2][0];  // mencetak array multidimensi


?>
   <br><br><hr><br><br>

<?php
    foreach($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>
    <div class="kotak"> <?= $b; ?> </div>
    <?php endforeach; ?> 
    <div class="clear">  </div>   
    <?php endforeach; ?>

    </body>
</html>


