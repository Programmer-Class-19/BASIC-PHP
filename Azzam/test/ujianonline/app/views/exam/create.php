<!DOCTYPE html>
<html>
<head>
    <title>Tambah Ujian</title>
</head>
<body>
    <h1>Tambah Ujian Baru</h1>
    <form action="<?php echo BASEURL; ?>/index.php?action=create" method="POST">
        <label for="ujian">Judul :</label>
        <input type="text" name="ujian" id="ujian" required>
        <br>
        
        <label for="waktu">Waktu :</label>
        <input type="time" name="waktu" id="waktu" required>
        <br>
        
        <label for="no_absen">No Absen :</label>
        <input type="number" name="no_absen" id="no_absen" required>
        <br>
        
        <label for="nilai">Nilai :</label>
        <input type="number" name="nilai" id="nilai" required>
        <br>
        
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ujian</title>
</head>
<body>
    <h1>Daftar Ujian</h1>
    <a href="<?php echo BASEURL; ?>/index.php?action=create">Buat Ujian Baru</a>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Nilai</th>
                <th>No Absen</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($exam)): ?>
                <?php foreach ($exam as $ujian): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ujian['title']); ?></td>
                        <td><?php echo htmlspecialchars($ujian['description']); ?></td>
                        <td><?php echo htmlspecialchars($ujian['date']); ?></td>
                        <td><?php echo htmlspecialchars($ujian['nilai']); ?></td>
                        <td><?php echo htmlspecialchars($ujian['absen']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada ujian yang ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
