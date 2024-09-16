<?php
$_GET["nama"] = "elhaqq";
$_GET["email"] = "elhaqq03@gmail.com";
var_dump($_GET);
?>

<?php
$Game = [
  [
    "nama" =>  "samurai",
    "size" => "6 GB",
    "pembuat" => "Tim Koei",
    "waktumain" => "15 jam",
    "gambar" => "samurai showdown.jpg"
  ],
  [
    "nama" =>  "Ghost of Tsushima",
    "size" => "8 GB",
    "pembuat" => "Omega Force",
    "waktumain" => "10 jam",
    "gambar" => "Ghost of Tsushima.jpg"
  ],
  [
    "nama" => "kenshin",
    "size" => "12 GB",
    "pembuat" => "SmartArt",
    "waktumain" => "9 jam",
    "gambar" => "kenshin.jpg"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Game</h1>
    <ul>
    <?php foreach( $Game as $gm ) : ?>
        <li>
          <a href="link1.php?nama=<?= $gm["nama"]; ?>&size=<?= $gm["size"]; ?>&pembuat=<?= $gm["pembuat"]; ?>&waktumain=<?= $gm["waktumain"];?>&gambar=<?= $gm["gambar"];?>"><?= $gm["nama"]; ?></a>
        </li>
    <?php endforeach;?>
    </ul>
</body>
</html>