<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data["judul"]; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/Buku">Buku</a>
        </li>
        <li>
          <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
        </li>
    </div>
  </div>
</nav>