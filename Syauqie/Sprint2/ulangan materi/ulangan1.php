<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ulangan</title>
    <style>
        .warna {
            background-color: wheat;
        }
    </style>
</head>
<body>
    <h3> menghitung 100 hari kemudian </h3>
    <?php echo time( ) ?>
    <?php echo date("l M d Y", time ()+60*60*24*100 ) ?>

    <h3>nebak hari kita lahir</h3>
    <?php echo date ("l", mktime(0,0,0,6,13,2006)) ?>

    <h3>mengubah tanggal menjadi detik</h3>
    <?php echo strtotime("13 june 2006") ?>

    <h3>membuat teks slmt dtg</h3>
    <?php 
        function salam ( $datang, $nama ) {
            return "selamat $datang, $nama";
        }
    ?>
    <h2><?= salam ( "pagi", "syauqie" );?></h2>

    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ( $x= 1; $x <= 8; $x++ ) : ?>
            <?php if ( $x % 2 == 1 ) : ?>
                <tr class="warna">
                    <?php else : ?>
                        <tr>
                        <?php endif; ?>
                            <?php for ( $b= 1; $b <= 10; $b++ ) { ?>
                                <td>
                                    <?= "$x,$b"; ?>
                                </td>
                                <?php } ?>
                        </tr>           
            <?php endfor; ?>
    </table>
    <br>
    <br>
    <?php 
        $i=10;
        if ( $i < 5 ) {
            echo "benar";
        }

        else if ( $i == 10 ) {
            echo "bingo!!";
        }

        else {
            echo "salah";
        }
    ?>
<br>
<br>
    <?php
$str = '123';
echo strlen($str); 

$str = 'syauqie';
echo strlen($str); 
?>
</body>
</html>