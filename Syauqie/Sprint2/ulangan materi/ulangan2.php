<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ulangan 2</title>
    <style>
        .warna {
            background-color: gray;
        }
    </style>
</head>
<body>
    <h3>echo</h3>
    <?php echo "syauqie bilah ganteng"; ?>

    <h3>print</h3>
    <?php print ("mauk abiss") ?>

    <h3>print_r</h3>
    <?php print_r("selamat datang") ?>

    <h3>var_dump</h3>
    <?php var_dump("selamat pagi") ?>

    <h3>sintax variable</h3>
    <?php 
    $i= 10;
    echo "$i";
    ?>

    <h3>sintax assignment</h3>
    <?php 
    $x = 10;
    $x *=10;
    echo "$x";
    ?>
    <br>
    <br>
    <?php //menggabungkan variable yang sama 
    $nama = "syauqie";
    $nama .= " ";
    $nama .= "billah";

    echo "$nama";
    ?>

    <h3>perbandingam\n</h3>
    <?php 
    var_dump(5 < 4);
    echo "<br>";
    var_dump(5 < 10);
    echo "<br>";
    var_dump(1 == "1");
    echo "<br>"; 
    ?>

    <h3>identitas</h3>
    <?php var_dump(1 === "1");
    echo "<br>";
    var_dump(1 != "1");
    ?>

    <h3>analogi</h3>
    <?php 
    $i = 10;
    var_dump(5 < 7 && 7 > 9); // satu salah semuanya salah
    var_dump(5 < 7 || 7 > 9); //salah satunya tetapi yang akan di tampilkan lebih utama yang true
    var_dump($i < 20 && $i % 4 == 1);
    ?>

    <h3>table dengaan penguglangan</h3>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ( $i= 1; $i <= 6; $i++ ) : ?>
            <?php if ( $i % 2 == 0 ) : ?>
                <tr class="warna">
                    <?php else : ?>
                        <tr>
                            <?php endif; ?>
                            <?php for ( $k= 1; $k <= 6; $k++ ) { ?>
                                <td>
                                    <?php echo "$i,$k"; ?>
                                </td>
                                <?php } ?>
                        </tr>
            <?php endfor; ?>
    </table>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ($i=1; $i <= 5; $i++) {
                for ( $k=1; $k <= 7; $k++ ) {
                    echo "<td>";
                        echo "$i,$k";
                    echo "</td>";
                }
            echo "</tr>";
        }
        ?>
    </table>
    <h3>function time</h3>
    <?php  
    echo time (); 
    echo date("d M Y", time()+60*60*24*100 ); //jangan lupa komanya
    ?>
    <h3>function date</h3>
    <?php echo date("l") ?>
    
</body>
</html>