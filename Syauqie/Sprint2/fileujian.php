<?php 
    // echo time();


    function contoh ($waktu, $nama) {
        return "$waktu, $nama";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo contoh("pagi","syauqie"); ?></p>
</body>
</html>

<?php 

// $nama = ["syauqie", 19, true ];

// print_r ($nama);
// echo $nama [0];




$santri = [
    "nama" => "syauqie",
    "angkatan" => 19,
    "umur" => 19
];

echo "halo " . $santri ["nama"] . " angkatan kamu " . $santri ["angkatan"] . " kamu berumur " . $santri ["umur"];
?>



<?php 

function santribaru( $nama, $angkatan, $umur) {
    return "halo, $nama, $angkatan, $umur";
}

echo santribaru("syauqie", 19, 19);




?>
