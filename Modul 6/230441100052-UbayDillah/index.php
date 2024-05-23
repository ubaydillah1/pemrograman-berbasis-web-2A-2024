<?php 

    include "functions.php";
    
    $mahasiswa = query("SELECT * FROM data_mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">

     <!-- poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
<!-- <div>
    <div class="shape"></div>
    <div class="shape"></div>
</div> -->

<table border="1" cellspacing="0" cellpadding="5" class="show">
    <tr>
        <td colspan="9"><h2>Data Mahasiswa</h2></td>
    </tr>

    <tr class="green">
        <td>Nama</td>
        <td>NIM</td>
        <td>Umur</td>
        <td>Jenis Kelamin</td>
        <td>Prodi</td>
        <td>Fakultas</td>
        <td>Asal Kota</td>
        <td>Aksi</td>
    </tr>

    <?php foreach($mahasiswa as $row) : ?>
    <tr>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["umur"]; ?></td>
        <td><?= $row["jenis_kelamin"]; ?></td>
        <td><?= $row["prodi"]; ?></td>
        <td><?= $row["fakultas"]; ?></td>
        <td><?= $row["asal_kota"]; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>" class="ubah-button">ubah</a>
            <span> | </span>
            <a href="hapus.php?id=<?= $row["id"]; ?>" class="hapus-button">hapus</a>
        </td>
    </tr>
    <?php endforeach ?>

</table>

    <a href="add.php" class="button-2">Tambah mahasiswa</a>

</body>
</html>
