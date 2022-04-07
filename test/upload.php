<?php
    require "test_db.inc.php";    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploads</title>
</head>
<body>
<form action="" method="post">
   <?php
    $select = "SELECT * FROM example";
    $selected = $connection -> query($select);

    while($cat = mysqli_fetch_array($selected)){
        echo $cat['name']. ' price: '.$cat['price'] ;
    }
   ?>
</form>
    
</body>
</html>