<?php
$siswa = [
    [
        "nama" => "Elhaqq",
        "NIK" => "123456",
        "Jurusan" => "Tekhnk",
        "Email" => "Elhaqq123@gmail.com"
    ],

    [
        "nama" => "Haqqi",
        "NIK" => "654321",
        "Jurusan" => "Design",
        "Email" => "Haqqi321@gmail.com"
        ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lath asociative</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <?php foreach($siswa as $sw) : ?>
    <ul>
        <li>Nama : <?= $sw["nama"]; ?></li> 
        <li>NIK : <?= $sw["NIK"]; ?></li>
        <li>Jurusan : <?= $sw["Jurusan"]; ?></li>
        <li>Email : <?= $sw["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    <?php
    $siswa2 =[
        [
            "nama" => "Elhaqq",
            "NIK" => "123456",
            "Jurusan" => "Tekhnk",
            "Email" => "Elhaqq123@gmail.com",
            "Tugas" => [80, 90, 100]
        ],

        [
            "nama" => "Haqqi",
            "NIK" => "654321",
            "Jurusan" => "Design",
            "Email" => "Haqqi321@gmail.com",
            "Tugas" => [75, 85, 95]
        ]
    ];
    echo $siswa2[1]["Tugas"][1];
    
    echo $siswa2[0]["Tugas"][2];
    ?>

</body>
</html>