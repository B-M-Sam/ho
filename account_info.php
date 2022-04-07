<?php

    session_start();
    require "database/dbconn.inc.php";
    if(isset($_SESSION['people_id'])){
        $user = $_SESSION['people_id'];
        $get = "SELECT * FROM people_who_buy WHERE people_id = $user";
        $gett = $conn -> query($get);
        if($gett){
            $usera = mysqli_fetch_assoc($gett);
            $user_name = $usera['people_name'];
            $user_username = $usera['people_username'];
            $user_user_email = $usera['people_email'];
            $user_user_status = $usera['people_active_status'];
        }
    }
    
    if(isset($_GET['askqw'])){
        $asking = $_GET['askqw'];
        if($asking == "perm"){
            session_destroy();
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account • <?php echo $user_name  ?> • Ishingiro Bakery</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class="bg-light" style="background-image:url('image/bg.jpg'); background-size: cover;margin-top:-37px;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3"  style="border:2px solid blue;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="col-sm-4 bg-info rounded-left">
                        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <h2 class="font-weight-bold mt-4"><?php echo $user_name ?></h2>
                            <p>Customer</p>
                            <i class="fa fa-sign-out mb-4" style="font-size: 12px;cursor:pointer;"aria-hidden="true" onclick="logout()">Log out</i>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-right">
                        <h3 class="mt-3 text-center">Information</h3>
                        <hr class="badge-primary mt-0 w-25">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Email:</p>
                                <h6 class="text-muted"><?php echo $user_user_email ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Username</p>
                                <h6 class="text-muted">@<?php echo $user_username ?></h6>
                            </div>
                        </div>
                        <h4 class="mt-3">Orders</h4>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Completed</p>
                                <h6 class="text-muted">12</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Pending</p>
                                <h6 class="text-muted">None</h6>
                            </div>
                        </div>
                        <hr class="bg-primary">
                        <ul class="list-unstyled d-flex-justify-content-center mt-4">
                            <li><i class="far fa-edit px-3 h4 text-info" style="cursor:pointer; font-size:16px" onclick="edit_info()">  Edit</i> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <script>
        function logout(){
            window.location.href="account_info.php?askqw=perm";
        }
        function edit_info(){
            alert("this stupid want to take a picture");
        }
    </script>
</body>
</html>