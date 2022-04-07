<?php
    session_start();
    require "database/dbconn.inc.php";
    if(!isset($_SESSION['people_id'])){
        header("Location: index.php");
    }else{
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart • Ishingiro Bakery Rwanda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">

</head>
<body>
    
<!-- header section starts  -->

<header class="best">
   <div class="class" onclick="goToIndex()">
        <i class="far fa-arrow-alt-circle-left"></i>
        <span>Back</span>
   </div>
</header>

<!-- header section ends  -->



<!-- shopping-cart section  -->

<section class="shopping-cart-container">

    <div class="products-container">

        <h3 class="title">Your Cart</h3>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/menu-1.png" alt="">
                <div class="content">
                    <h3>delicious food</h3>
                    <span> quantity : </span>
                    <input type="text" name="qty" id="quantity" >
                    <br>
                    <span> price : </span>
                    <input type="text" name="qty"  id="unit">
                    <br>
                    <span class="price" id="txtresult"></span>
                </div>
            </div>

            

        </div>

    </div>

    <div class="cart-total">

        <h3 class="title"> Cart Total </h3>

        <div class="box">

            <h3 class="subtotal"> Subtotal : <span>$200</span> </h3>
            <h3 class="total"> Total : <span>$200</span> </h3>

            <a href="#" class="btn">proceed to checkout</a>

        </div>

    </div>

</section>




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
    var num = document.getElementById("quantity");
    var unit = document.getElementById("unit");

    num.innerHTML = "harahiye";
</script>
</body>
</html>
