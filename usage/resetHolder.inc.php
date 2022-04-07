<?php
    session_start();
    require "database/dbconn.inc.php";
    $forgotter = $_SESSION['toEmail'];
    $userLink = $_GET['link'];
    //checking the actual link in the database table
    $loadLInk = "SELECT * FROM people_forget_password WHERE people_who_forgot_password = '".$forgotter."'";
    $loadLInked = $conn -> query($loadLInk);
    if($loadLInked){
        $data = mysqli_fetch_assoc($loadLInked);
        $link = $data['generate_link'];
        if($userLink == $link){
            if(isset($_POST['creset'])){
                
                $new_pass = $_POST['password'];
                $new_pass2 = $_POST['cpassword'];

                if($new_pass == $new_pass2){
                    $password = password_hash($new_pass, PASSWORD_DEFAULT);
                    $ceck = "UPDATE people_who_buy SET people_password = '".$password."' WHERE people_email = '".$forgotter."'";
                    $cecked = $conn -> query($ceck);

                    if($cecked){
                        $errors = "Password Resetted";
                        $yes = "yes";
                    }

                }else{
                    $errors = "Passwords do not match";
                }
            }
        }else{
            header("Location: index.php");
        }
    }else{
        $errors = "Can't connect to the server now";
    }
?>
