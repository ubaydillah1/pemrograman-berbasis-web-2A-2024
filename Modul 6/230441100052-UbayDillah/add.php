<?php 
    include "functions.php";

    if (isset($_POST["submit"])) {
        tambah($_POST);
    };

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
<div>
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="post" >
    
    <table class="input" border="1">
        <tr>
            <td colspan="2"><h2>Input Data Mahasiswa</h2></td>
        </tr>
        <tr>
            <td align="center"><label for="nama">Nama</label></td>
            <td><input required type="text" id="nama" name="nama" autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="nim">NIM</label></td>
            <td><input required type="text" id="nim" name="nim" autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="umur">Umur</label></td>
            <td><input required type="text" id="umur" name="umur" autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="jenis_kelamin">Jenis Kelamin</label></td>
            <td><input required type="text" id="jenis_kelamin" name="jenis_kelamin"  autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="prodi">Prodi</label></td>
            <td><input required type="text" id="prodi" name="prodi"  autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="fakultas">Fakultas</label></td>
            <td><input required type="text" id="fakultas" name="fakultas"  autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="asal_kota">Asal Kota</label></td>
            <td><input required type="text" id="asal_kota" name="asal_kota"  autocomplete="off"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" name="submit" class="button">Kirim</button></td>
        </tr>
    </table>
</form>

    <a href="index.php" class="button-2">Lihat Data Mahasiswa</a>

</table>

</body>
</html>
