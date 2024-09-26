<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href ="<?= BASEURL;?>/CSS/bootstrap.css">
</head>
<body>
    <ul class="nav nav-pills">
        <div class="container">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">PHP MVC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
    </div>
    </ul>