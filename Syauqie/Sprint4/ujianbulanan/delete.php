<?php
include 'config.php';

$id = intval($_GET['id']); // Mengubah nilai menjadi integer

$query = "DELETE FROM crud WHERE id = $id";
mysqli_query($koneksi, $query);

header('Location: index.php');  
?>
