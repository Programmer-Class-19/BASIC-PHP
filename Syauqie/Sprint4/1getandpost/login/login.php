<?php 
    if ( isset ($_POST["submit"])) {
        if ( $_POST["nama"] == "admin" && $_POST["password"] == "1234") {
            header ("location : admin.php");
            exit;
        }
        else {
            $error = true;
        }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if (isset ($error)) : ?>
    <p style= "color:red; font-style:italic;">username / password anda salah</p>
    <?php endif; ?>
    <ul>
        <form action="admin.php" method="post">
        <li>
            <label for="username">Username</label>
            <input type="text" name="nama" id="username">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Kirim</button>
        </li>
        </form>
    </ul>
</body>
</html>