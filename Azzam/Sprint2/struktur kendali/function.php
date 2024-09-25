<?php
    function sapa ($waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu, $nama";
    }
    function salam ($waktu = "Back", $nama = "Admin") {
        return "Welcome $waktu, $nama";
    }
    function say ($tinggal = "Bye", $nama = "Admin") {
        return "Good $tinggal, $nama";
    }
    function bantu ($pergi = "bay", $nama = "Admin") {
        return "Good $pergi, $nama";
    }
    function prey ($bagus = "Nice", $hari = "Day") {
        return "Have a $bagus, $hari";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?= sapa("Pagi", "Elhaqq"); ?></h1>
    <h2><?= salam("to our web", "Haqqi");?></h2>
    <h3><?= say("Morning", "Admin");?></h3>
    <h4><?= bantu("Bye", "Visitor");?></h4>
    <h1><?= prey("Nice", "Day");?></h1>
    
</body>
</html>