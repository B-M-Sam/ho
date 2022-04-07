<?php
session_start();
require "../database/dbconn.inc.php";
if(isset($_SESSION['admin_logged_in'])){
    header("Location: home.php");
}
if(isset($_POST['login'])){
    $email = $_POST['unem'];
    $password = $_POST['password'];

    $chck = "SELECT * FROM admin_db WHERE admin_email = '".$email."'";
    $chckd = $conn -> query($chck);

    if($chckd){
        if(mysqli_num_rows($chckd)  > 0){
            $get = mysqli_fetch_assoc($chckd);
            $inter  = $get['admin_password'];

            if(password_verify($password, $inter)){
                $_SESSION['admin_logged_in'] = $get['admin_no'];

                if(isset($_SESSION['admin_logged_in'])){
                    $owner = 4;
                    $searchOwner = "SELECT * FROM admin_db WHERE owner = '".$owner."'";
                    $searchedowner = $conn -> query($searchOwner);

                    if($searchedowner){
                        if(mysqli_num_rows($searchedowner) > 0){
                            $ownerData = mysqli_fetch_assoc($searchedowner);
                            $_SESSION['owner_email'] = $ownerData['admin_email'];
                            $_SESSION['owner_name'] = $ownerData['admin_name'];
                            $_SESSION['suspect_email'] = $get['admin_email'];
                            $_SESSION['suspect_name'] = $get['admin_name'];
                            $date = date("d-m-Y");
                            $time = date("H:i:s");
                            require "../includes/sendMessage.php";
                        }
                    }
                    
                }

                



            }else{
                $errors = "Passwords do not match";
            }
        }else{
            $errors = "admin not found";
        }
    }else{
        $errors = "error while connecting to the database";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login Page  |  Ishingiro Bakery </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">

</head>
<body style="text-transform: capitalize">
    
<!-- header section starts  -->

    
<!-- header section starts  -->

<header class="best">
   <div class="class" onclick="goToIndexS()">
        <i class="far fa-arrow-alt-circle-left"></i>
        <span style="display: flex">Hey! <span style="margin-left:8px;" onclick = "admin()">     Admin</span> </span>
   </div>
</header>

<!-- header section ends  -->


<!-- header section ends  -->

<!-- login-form  -->

<div class="login-form-container">

    <form method="post">
        <h3>login form</h3>
        <?php
            if(isset($errors)){ ?>
                <div class="error" style= "border: 1px solid gray; border-radius:5px; padding: 8px;">
                    <p><?php echo($errors); ?></p>
                </div>
            <?php }
        ?>
        <input type="text" name="unem" placeholder="Email" id="" class="box" required>
        <input type="password" name="password" placeholder="Password" id="" class="box" required>
        <input type="submit" name="login" value="Login Now" class="btn">
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


<script>
 var count = 0;
function admin(){ 
    count++; 
    if(count % 5 == 0){
        window.location.href = "adminsignup.php";
    }
}
</script>
</body>
</html>