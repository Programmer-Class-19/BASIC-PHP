<?php 
    // echo "halloooo!!";
    // echo "<br>";

    // print (1234567);
    // echo "<br>";

    // var_dump("syauqie ganteng");
    // echo "<br>"

    // $nama = 123;
    // echo "$nama";

    // $x = 10;
    // $x *= 10;
    // echo "$x";

    // $x = "syauqie";
    // $x .= " ";
    // $x .= "syauqie";
    // echo "$x";

    // var_dump(100 > 1000);
    // var_dump(300 % 2 == 0);

    // var_dump(1 === 1);
    // var_dump(1 != 1);

    // var_dump(100 < 5 && 100 > 10);
    // var_dump(100 < 5 || 100 > 10);

    // for ( $i=1; $i <50; $i++ ) {
    //     echo "syauqie <br>";
    // }
    // $i= 10;

    // while ( $i < 15  ) {
    //     echo "$i";
    //     $i++;
    // }

    // $i=1;
    // do {
    //     echo "syauqie <br>";
    //     $i++;
    // } while ( $i < 7 );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna{
            background-color: burlywood;
        }

        .td {
            background-color: black;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php 
            for ( $i=1; $i <= 3; $i++ ) {
                echo "<tr>";
                    for ( $j=1; $j <= 5; $j++ ) {
                        echo "<td> $i,$j </td>";
                    }
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php for ( $i=1; $i <= 5; $i++ ) { ?>
            <?php if ( $i % 2 == 0 ) : ?>
                <tr class="warna">
                <?php else : ?>
            <tr>
                <?php endif; ?>
                <?php for ( $j=1; $j <= 10; $j++ ) : ?>
                    <td>
                        <?php echo "$i,$j"; ?>
                    </td>
                <?php endfor; ?>
            </tr>
            <?php } ?>
    </table>
</body>
</html>

<?php  
// // echo time();
// echo date ("l", time()+60*60*24*10);

// echo mktime(0,0,0,1,1,1);
// echo date("l d M Y", mktime(0,0,0,6,13,2006));

// echo strtotime("13 june 2006");
?>

<?php  
$i = array (1,2,3,4,"syauqie"); 
// // echo $i [4]; 
// // var_dump($i);
// print_r($i);
$i [] = 1000;
var_dump($i); 
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: green;
            margin: 3px;
            text-align: center;
            float: left;
            transition: 1s;
            line-height: 30px;
            color: white;
        }

        .kotak :hover {
            transform: rotate(360deg);
            border-radius: 50%;
        } 

        .clear {
            clear: both;
        }

        .kotak2 {
            width: 70px;
            height: 70px;
            background-color: green;
            margin: 3px;
            text-align: center;
            float: left;
            transition: 1s;
            line-height: 70px;
            color: white;
        }
    </style>
</head>
<body>
    <?php $angka = [1,2,3,4,5,6,7,8,9,10]; ?>
    <?php $huruf = ["a","b","c","d"]; ?>
    <?php for ($i= 0; $i < count($huruf); $i++) { ?>
        <div class="kotak"><?php echo $huruf [$i]; ?></div>
        <?php } ?>

        <div class="clear"></div>
    <?php $nama = ["syauqie","zidan","radit"] ?>
    <?php foreach ( $nama as $n) : ?>
        <div class="kotak2"><?php echo $n; ?></div>
        <?php endforeach; ?>
<div class="clear"></div>
        <?php $data = [
            ["syauqie","mauk","13 juni 2006"],
            ["zidan","mauk","14 juli 2005"]
            ] ?>
        <?php foreach ($data as $d) { ?>
            <li><?php echo $d [0]; ?></li>
            <li><?php echo $d [1]; ?></li>
            <li><?php echo $d [2]; ?></li>
        <?php } ?>

        <br>
        <br>

        <?php  
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]];
?>
    <?php foreach ($angka as $ang) : ?>
        <?php foreach ($ang as $a) : ?>
            <div class="kotak"><?php echo "$a"; ?></div>
        <?php endforeach; ?>
            <div class="clear"></div>
    <?php endforeach; ?>

    <?php $siswa = [
        "nama" => "syauqie",
        "kelas" => "19",
        "umur" => "12",
    ] ?>

    <?php foreach ($siswa as $s => $isi) { ?>
        <li><?php echo  "$s $isi"; ?></li>    
    <?php } ?>
</body>
</html>