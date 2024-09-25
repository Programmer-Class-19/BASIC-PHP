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
        .kotak:hover {
            transform: matrix3d();
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
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

    <?php 
        $mahasiswa = [
            "nama" => "syauqie",
            "kelas" => "12",
            "umur" => "19",
            ]
    ?>

    <?php echo $mahasiswa ["nama"]; ?>  
</body>
</html>



<?php 
    $santri = [
        ["syauqie", "teknik informatika", "universitas brawijaya"],
        ["zidan", "teknik perikanan", "unoversitas indonesia"]
    ];

        foreach ($santri as $san) {
            echo $san [0] ." ". $san [1] ." ". $san [2];
        }

?>  
<br>
<br>

<?php 

$santri = [
    "syauqie" => ["nama" => "syauqie", "jurusan" => "TI", "umur" => 19],
    "hilman" => ["nama" => "hilman", "jurusan" => "SPD", "umur" => 21]
];


// Membuat array asosiatif dengan dua data siswa
$siswa = [
    "siswa1" => [
        "nama" => "Andi",
        "umur" => 16,
        "kelas" => "10A"
    ],
    "siswa2" => [
        "nama" => "Budi",
        "umur" => 17,
        "kelas" => "11B"
    ]
];

// Menampilkan semua data siswa
foreach ($siswa as $key => $data) {
    echo "Data $key:\n";
    foreach ($data as $k => $v) {
        echo "$k: $v\n";
    }
    echo "\n";
}



