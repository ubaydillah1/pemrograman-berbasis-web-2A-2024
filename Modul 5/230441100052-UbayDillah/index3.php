<?php 
session_start();

if (isset($_POST["submit"])) {
   
} elseif (isset($_POST["submit_hapus"])) {

} elseif (!isset($_POST["lanjut"])) {
    header('Location: index.php');
    exit();
}

if (!isset($_SESSION["mhs"])) {
    $_SESSION["mhs"] = [
        [ 
            "nama" => "Ubay",
            "nim" => "230441100052",
            "alamat" => "Jakarta",
            "angkatan" => "2023"
        ],
    ];
}

if (isset($_POST["submit"])) {
    tambah();
}

if (isset($_POST["submit_hapus"])) {
    hapus($_POST["hapus_index"]);
}

function tambah() {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $angkatan = $_POST["angkatan"];
    $data_mhs = [
        "nama" => $nama, 
        "nim" => $nim,
        "alamat" => $alamat,
        "angkatan" => $angkatan
    ];

    $_SESSION["mhs"][] = $data_mhs;
}

function hapus($index) {
    if(isset($_SESSION["mhs"][$index])) {
        unset($_SESSION["mhs"][$index]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style3.css">

     <!-- poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>

    <form action="index2.php" method="post">
        <input type="submit" value="kembali" class="kembali" name="kembali">
    </form>

    <form method="post" action="index.php">
        <input type="submit" class="logout" name="logout" value="Log Out" id="logout">
    </form>


<div>
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="post" action="">
    
    <table class="input" border="1">
        <tr>
            <td colspan="2"><h2>Input Data Mahasiswa</h2></td>
        </tr>
        <tr>
            <td align="center"><label for="nama">Nama</label></td>
            <td><input type="text" id="nama" name="nama" autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="nim">NIM</label></td>
            <td><input type="text" id="nim" name="nim" autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="alamat">Alamat</label></td>
            <td><input type="text" id="alamat" name="alamat" autocomplete="off"></td>
        </tr>
        <tr>
            <td align="center"><label for="angkatan">Angkatan</label></td>
            <td><input type="text" id="angkatan" name="angkatan"  autocomplete="off"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" name="submit" class="button">Kirim</button></td>
        </tr>
    </table>
</form>

<table border="1" cellspacing="0" cellpadding="5" class="show">
    <tr>
        <td colspan="5"><h2>Data Mahasiswa</h2></td>
    </tr>
    <tr class="green">
        <td>Nama</td>
        <td>NIM</td>
        <td>Alamat</td>
        <td>Angkatan</td>
        <td>Action</td>
    </tr>
<?php foreach($_SESSION["mhs"] as $index => $m) : ?>
<tr>
    <td><?= $m["nama"] ?></td>
    <td><?= $m["nim"] ?></td>
    <td><?= $m["alamat"] ?></td>
    <td><?= $m["angkatan"] ?></td>

    <td>
        <form method="post" action="">
            <input type="hidden" name="hapus_index" value="<?= $index ?>">
            <button type="submit" name="submit_hapus" class="hapus">Hapus</button>
        </form>
    </td>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>
