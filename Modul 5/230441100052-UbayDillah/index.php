<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login PHP</title>
    <link rel="stylesheet" href="style.css">
 
   <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="index2.php">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Name" id="username" name="username" autocomplete="off">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" autocomplete="off">

        <input type="submit" value="Log In" class="tombol">

        <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid'): ?>
            <p style="color:red;">Username atau password salah</p>
        <?php endif; ?>
    </form>
</body>
</html>
