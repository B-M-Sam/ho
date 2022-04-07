<?php
    session_start();
    require "database/dbconn.inc.php";
    if(isset($_POST['signup'])){
        $people_name = $_POST['names'];
        $people_username = $_POST['username'];
        $people_email = $_POST['email'];
        $password = $_POST['password'];

        if(strlen($password) >= 8){
            $people_password = password_hash($password, PASSWORD_DEFAULT);
            $search = "SELECT * FROM people_who_buy WHERE (people_username = '".$people_username."')";
            $searched = $conn -> query($search);

            if(mysqli_num_rows($searched) != 0){
               $errors = "The Username already exist";
            }else{
                $emailing =  "SELECT * FROM people_who_buy WHERE (people_email = '".$people_email."')";
                $emailed = $conn -> query($emailing);
                if(mysqli_num_rows($emailed) != 0){
                    $errors = "This Email is already in use";
                }else{
                    $insert = "INSERT INTO people_who_buy(people_name,people_username,people_email,people_password) VALUES ('".$people_name."','".$people_username."','".$people_email."','".$people_password."')";
                    $inserted = $conn -> query($insert);
            
                    if($inserted){
                        header("Location: login.php");
                    }
                }
            }
        }else{
            $errors = "The password must be between 8 and 25 characters";
        }
    }

?>