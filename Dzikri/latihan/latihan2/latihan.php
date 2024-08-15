<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: blue;
        }
    </style>
</head>
<body>

  <table border="1" cellpadding="10" cellspacing="0">
      <?php for($i = 1; $i <= 5; $i++) : ?>
        <?php if($i % 2 == 1):?>
        <tr  class="warna-baris">
        <?php else :?>
        <tr>
        <?php endif;?>
            <?php for($j = 1; $j <= 8; $j++) : ?>
                <td><?php echo "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
      <?php endfor;?>
  </table>

</body>
</html>