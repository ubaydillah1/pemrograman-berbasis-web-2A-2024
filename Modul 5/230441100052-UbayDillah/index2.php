<?php
session_start();

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $username = $_POST["username"];

    $conrrectUsername = "Ubay";
    $correctPassword = 'admin';

    if ($password === $correctPassword && $username === $conrrectUsername ) {
        $_SESSION['username'] = $username;
    } else {
        header('Location: index.php?error=invalid');
        exit();
    }
} else {
    if (isset($_POST["kembali"])) {
        
    } else {
        header('Location: index.php?error=invalid');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1</title>
    <link rel="stylesheet" href="style2.css">

    <!-- poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <form method="post" action="index.php">
        <input type="submit" class="logout" name="logout" value="Log Out">
    </form>
    
    <section>
        <h1>Selamat Datang <span class="bold"><?= $_SESSION["username"] ?></span> di Website CRUD Tambah Data Mahasiswa</h1>

        <form action="index3.php" method="post">
            <input type="submit" value="Lanjut" class="button" name="lanjut">
        </form>
    </section>

    <div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
</body>
</html>