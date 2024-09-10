<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <h1>HALLOOO SELAMAT PAGI</h1>
    <?php if (isset ($_POST["submit"])) : ?>
    <table border=1px cellspacing=0 cellpadding=10>
        <tr>
            <th>USERNAME</th>
            <th><?php echo $_POST["username"] ?></th>
        </tr>
        <tr>
            <th>E-MAIL</th>
            <th><?php echo $_POST["email"] ?></th>
        </tr>
        <tr>
            <th>PASSWORD</th>
            <th><?php echo $_POST["password"] ?></th>
        </tr>
    </table>
    <?php endif; ?>
    <a href="login1.php">Logout</a>
</body>
</html>