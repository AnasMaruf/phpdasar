<?php
// Koneksikan ke database 
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

// Ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, 'SELECT * FROM mahasiswa');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1;; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Delete</a>
                </td>
                <td>
                    <img src="img/<?= $row['gambar']; ?>" width="50">
                </td>
                <td><?= $row['npm']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['jurusan']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>