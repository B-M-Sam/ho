<?php
    require "../database/dbconn.inc.php";
   
   if(isset($_SESSION['admin_logged_in'])){
       header("Location: index.php");
   }
   if(isset($_SESSION['count'])){
       if($_SESSION['count'] != 5){
           header("Location: error.php");
       }
   }
    if(isset($_POST['signup'])){
        $name = $_POST['names'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $null = 0;
        $insertAdmin = "INSERT INTO admin_db(admin_name,admin_email,admin_password,status,owner) VALUES('".$name."','".$email."','".$hashed_password."','".$null."','".$null."')";
        $insertedAdmin = $conn -> query($insertAdmin);

        if($insertedAdmin){
            header("Location: index.php");
        }else{
            echo"Error While Connecting In Database";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register Page • Ishingiro Bakery Rwanda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">

</head>
<body>
    
    
<!-- header section starts  -->

<header class="best">
   <div class="class" onclick="goToIndexS()">
        <i class="far fa-arrow-alt-circle-left"></i>
        <span>Back</span>
   </div>
</header>

<!-- header section ends  -->



<!-- login-form  -->

<div class="signup-form-container">

    <form method="POST">
        <h3>admin signup form</h3>
        <?php
            if(isset($errors)){ ?>
                <div class="error" style= "border: 1px solid gray; border-radius:5px; padding: 8px;">
                    <p><?php echo($errors); ?></p>
                </div>
            <?php }
        ?>
        <input type="text" name="names" placeholder="Enter your names" id="" class="box" required>
        <input type="email" name="email" placeholder="Enter your email" id="" class="box" required>
        <input type="password" name="password" placeholder="Enter your password" id="" class="box" required>
        <div class="remember">
            <input type="checkbox" name="agree" value="remember" id="remember-me" required>
            <span>agree to <span onclick="goToTerms()">terms and condition</span> </span>
        </div>
        <input type="submit" name="signup" value="Sign Up" class="btn">
        
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
<script>
    function goToIndexS(){
        window.location.href="index.php";
    }
    function goToTerms(){
        window.location.href="adminterms.php";
    }
</script>
</body>
</html>