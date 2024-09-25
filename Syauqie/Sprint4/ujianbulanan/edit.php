<?php
include 'config.php';

$id = $_GET['id'];
$query = "SELECT * FROM crud WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$user = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];

    $query = "UPDATE crud SET 
    name        = '$name', 
    email       = '$email', 
    phone       = '$phone' 
    WHERE id    = $id";
    mysqli_query($koneksi, $query);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="name" value="<?= $user['name']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $user['email']; ?>" required><br><br>

        <label>Telepon:</label><br>
        <input type="text" name="phone" value="<?= $user['phone']; ?>" required><br><br>

        <input type="submit" name="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Kembali ke daftar user</a>
</body>
</html>
