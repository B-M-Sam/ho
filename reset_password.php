<?php
    require "usage/resetHolder.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">

</head>
<body>
    
<!-- header section starts  -->

    
<!-- header section starts  -->

<header class="best">
   <div class="class" onclick="goToIndexS()">
        <i class="far fa-arrow-alt-circle-left"></i>
        <span>Back</span>
   </div>
</header>

<!-- header section ends  -->

<!-- header section ends  -->

<!-- login-form  -->

<div class="login-form-container">

    <form method="post">
        <h3>reset password</h3>
        <?php
            if(isset($errors)){ ?>
                <div class="error" style= "border: 1px solid gray; border-radius:5px; padding: 8px;">
                    <p><?php echo($errors); ?></p>
                </div>
            <?php }
        ?>
        <input type="password" name="password" placeholder="Enter New Password" id="" class="box">
        <input type="password" name="cpassword" placeholder="Confirm Password" id="" class="box">
        <input type="submit" name="creset" value="Confirm Reset" class="btn">
        <?php
            if(isset($yes)){ ?>
                <p>Go back to <span id="signup-btn" onclick="goToLogin()">Login</span></p>
            <?php }
                
        ?>
        
    </form>

</div>



<section class="footer">
    <div class="bottom">
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> &copy; 2022 - 23 all rights reserved. Powered by <span>Lunar Tights Group</span></div>
        
    </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>