<?php
session_start();
require "database/dbconn.inc.php";

if(!isset($_SESSION['people_id'])){
    if(isset($_POST['login'])){
        $unem = $_POST['unem'];
        $password = $_POST['password'];

        $search = "SELECT * FROM people_who_buy WHERE (people_username = '".$unem."' OR people_email = '".$unem."')";
        $searched = $conn -> query($search);

        if(mysqli_num_rows($searched) > 0){
            $userData = mysqli_fetch_assoc($searched);
            $user_password = $userData['people_password'];
            if(password_verify($password, $user_password)){
                $_SESSION['people_id'] = $userData['people_id'];
                header("Location: index.php");
            }else{
                $errors = "username or password is incorrect";
            }
        }
    }
}else{
    header("Location: account_info.php");
}


?>