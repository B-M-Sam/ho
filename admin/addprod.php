<?php
 session_start();
 require "../database/dbconn.inc.php";

 if(!isset($_SESSION['admin_logged_in'])){
     header("Location: error.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products | Ishingiro Bakery</title>
    <link rel="stylesheet" href="css/add.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <form method="post">
                <h2 class="title">Add Product Admin Panel</h2>
                <div class="box">
                    <p class="field-name">Name</p>
                    <input type="text" name="prodname">
                </div>
                <div class="box">
                    <p class="field-name">Manufacturer</p>
                    <input type="text" name="manu">
                </div>
                <div class="box">
                    <p class="field-name">Price</p>
                    <input type="text" name="price">
                </div>
                <div class="box">
                    <p class="field-name">Ingredients</p>
                    <textarea name="ingredients" cols="30" rows="5" style="resize:none;"></textarea>
                </div>
                <div class="box">
                    <p class="field-name">Preparation Time</p>
                    <input type="text" name="ptime">
                </div>
                <div class="box">
                    <p class="field-name">Picture</p>
                    <input type="file" name="pic">
                </div>
                <div class="box">
                    <input type="submit" name="Submit" Value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>