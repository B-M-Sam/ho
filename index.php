
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





<section class="search-form-container">

    <form action="">
        <input type="search" name="" placeholder="Search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</section>
<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <span>Welcome Foodies</span>
        <h3>Different Spices For The Different Tastes 😋</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis unde dolores temporibus hic quam debitis tenetur harum nemo.</p>
        <a href="#popular" class="btn">Order now</a>
    </div>
    <div class="image">
        <img src="image/home-img.png" alt="" class="home-img">
        <img src="image/home-parallax-img.png" alt="" class="home-parallax-img">
    </div>
</section>
<!-- home section ends  -->
<!-- category section starts  -->
<section class="category">
    <a href="#" class="box">
        <img src="image/cat-1.png" alt="">
        <h3>Combo</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-2.png" alt="">
        <h3>Pizza</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-3.png" alt="">
        <h3>Burger</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-4.png" alt="">
        <h3>Chicken</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-5.png" alt="">
        <h3>Dinner</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-6.png" alt="">
        <h3>Coffee</h3>
    </a>
</section>
<!-- category section ends -->
<!-- about section starts  -->
<section class="about" id="about">
    <div class="image">
        <img src="image/about-img.png" alt="">
    </div>
    <div class="content">
        <span>Why Choose Us?</span>
        <h3 class="title">What's Make Our Food Delicious!</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ut explicabo, numquam iusto est a ipsum assumenda tempore esse corporis?</p>
        <a href="#" class="btn">Read more</a>
        <div class="icons-container">
            <div class="icons">
                <img src="image/serv-1.png" alt="">
                <h3>Fast Delivery</h3>
            </div>  
            <div class="icons">
                <img src="image/serv-2.png" alt="">
                <h3>Fresh Food</h3>
            </div>   
            <div class="icons">
                <img src="image/serv-3.png" alt="">
                <h3>Best Quality</h3>
            </div>  
            <div class="icons">
                <img src="image/serv-4.png" alt="">
                <h3>24/7 Support</h3>
            </div>           
        </div>
    </div>
</section>
<!-- about section ends -->
<!-- popular section starts  -->
<section class="popular" id="popular">
    <div class="heading">
        <span>Popular Food</span>
        <h3>Our Special Dishes</h3>
    </div>
    <div class="box-container">
        <form action="index.php?acs=<?php echo $prod_id ?>" method="post">
            <div class="box">
                <a class="fas fa-heart" onclick = "favorite()"></a>
                <div class="image">
                    <img src="image/food-1.png" alt="">
                </div>
                <div class="content">
                    <h3>Delicious Food</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span> (50) </span>
                    </div>
                    <div class="price">$40.00 <span>$50.00</span></div>
                    input
                    <input type="submit" class="btn" value="Add to cart" onclick = "cart()">
                </div>
            </div>
        </form>
        
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-2.png" alt="">
            </div>
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-3.png" alt="">
            </div>
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-4.png" alt="">
            </div>
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-5.png" alt="">
            </div>
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-6.png" alt="">
            </div>
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-7.png" alt="">
            </div>
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-8.png" alt="">
            </div>
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">$40.00 <span>$50.00</span></div>
                <a href="#" class="btn">Add to cart</a>
            </div>
        </div>

    </div>

</section>

<!-- popular section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="row-banner">
        <div class="content">
            <span>Double Cheese</span>
            <h3>Burger</h3>
            <p>With Coca Cola and Fries</p>
            <a href="#" class="btn">Order now</a>
        </div>
    </div>

    <div class="grid-banner">
        <div class="grid">
            <img src="image/banner-1.png" alt="">
            <div class="content">
                <span>Special Offer</span>
                <h3>Up to 50% off</h3>
                <a href="#" class="btn">Order now</a>
            </div>
        </div>
        <div class="grid">
            <img src="image/banner-2.png" alt="">
            <div class="content center">
                <span>Special Offer</span>
                <h3>Up to 25% extra</h3>
                <a href="#" class="btn">Order now</a>
            </div>
        </div>
        <div class="grid">        
            <img src="image/banner-3.png" alt="">
            <div class="content">
                <span>Limited Offer</span>
                <h3>100% Cashback</h3>
                <a href="#" class="btn">Order now</a>
            </div>
        </div>
    </div>

</section>


<section class="menu" id="menu">

    <div class="heading">
        <span>Our Menu</span>
        <h3>Our Top Dishes</h3>
    </div>

    <div class="box-container">

        <a href="#" class="box">
            <img src="image/menu-1.png" alt="">
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-2.png" alt="">
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-3.png" alt="">
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-4.png" alt="">
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-5.png" alt="">
            <div class="content">
                <h3>Delicious Food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

        <a href="#" class="box">
            <img src="image/menu-6.png" alt="">
            <div class="content">
                <h3>delicious food</h3>
                <div class="price">$40.00</div>
            </div>
        </a>

    </div>

</section>



<section class="footer">

    <div class="newsletter">
        <h3>Newsletter</h3>
        <form action="">
            <input type="email" name="" placeholder="Enter your email" id="">
            <input type="submit" value="Subscribe">
        </form>
    </div>

    <div class="box-container">

        <div class="box">
            <h3>Our menu</h3>
            <a href="#"><i class="fas fa-arrow-right"></i> Pizza</a>
            <a href="#"><i class="fas fa-arrow-right"></i> Burger</a>
            <a href="#"><i class="fas fa-arrow-right"></i> Chicken</a>
            <a href="#"><i class="fas fa-arrow-right"></i> Pasta</a>
            <a href="#"><i class="fas fa-arrow-right"></i> And more...</a>
        </div>

        <div class="box">
            <h3>Quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> Home</a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> About</a>
            <a href="#popular"> <i class="fas fa-arrow-right"></i> Popular</a>
            <a href="#menu"> <i class="fas fa-arrow-right"></i> Menu</a>
            <a href=""> <i class="fas fa-arrow-right"></i> Gallery</a>
            <a href=""> <i class="fas fa-arrow-right"></i> Staff</a>
            <a href=""> <i class="fas fa-arrow-right"></i> Help</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href="cart.php"> <i class="fas fa-arrow-right"></i> My Order</a>
            <a href="account_info.php"> <i class="fas fa-arrow-right"></i> My Account</a>
            <a href="#favorites.php"> <i class="fas fa-arrow-right"></i> My Favorite</a>
            <a href="tos.php"> <i class="fas fa-arrow-right"></i> Terms of use</a>
            <a href="pp.php"> <i class="fas fa-arrow-right"></i> Privacy Policy</a>
        </div>

        <div class="box">
            <h3>Opening Hours</h3>
            <p>Monday : 7:00am to 10:00pm</p>
            <p>Tuesday : 7:00am to 10:00pm</p>
            <p>Wednesday : 7:00am to 10:00pm</p>
            <p>Friday : 7:00am to 10:00pm</p>
            <p>Saturday and Sunday Closed</p>
        </div>

    </div>

    <div class="bottom">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> &copy; 2022 - 23 All Rights Reserved. Powered by <span>Lunar Tights Group</span></div>
        
    </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
    function favorite(){
    alert("am added in fav");
}

function cart(){
    alert("am added to cart");
}
</script>
</body>
</html>