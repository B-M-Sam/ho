
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishingiro Bakery Rwanda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
</head>
<body>
<!-- header section starts  -->
<header class="header">
    <a href="#" class="logo"> Ishingiro Bakery </a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#popular">Popular</a>
        <a href="#menu">Menu</a>
        <a href="gallery.php">Gallery</a>
        <a href="staff.php">Staff</a>
        <a href="help.php">Help</a>
    </nav>
    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <?php
            if(isset($_SESSION['people_id'])){ 
                echo '<div id="cart-btn" class="fas fa-shopping-cart" onclick="goToCart()"></div>';
            }
        ?>
        <div id="login-btn" class="fas fa-user" onclick="goToLogin()"></div>
    </div>
</header>
<!-- header section ends  -->


