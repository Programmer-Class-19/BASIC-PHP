<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];

    $query = "INSERT INTO crud  VALUES ('$name', '$email', '$phone')";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Tambah User</h2>
    <form method="POST" action="">  
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Telepon:</label><br>
        <input type="text" name="phone" required><br><br>

        <input type="submit" name="submit" value="Tambah">
    </form>
    <br>
    <a href="index.php">Kembali ke daftar user</a>
</body>
</html>
