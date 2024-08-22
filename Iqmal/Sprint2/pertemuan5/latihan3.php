<?php 
$mahasiswa = [["farid", "18764687276", "bsinis", "email"]

];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>


<h1>Daftar mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
  <li><?php echo $mhs[0]; ?></li>
  <li><?php echo $mhs[1]; ?></li>
  <li><?php echo $mhs[2]; ?></li>
  <li><?php echo $mhs[3]; ?></li>
<ul>

    
</ul>
<?php endforeach; ?>


    
</body>
</html>