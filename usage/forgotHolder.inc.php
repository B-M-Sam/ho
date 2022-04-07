<?php
    session_start();
    require "database/dbconn.inc.php";
    if(isset($_POST['reset'])){
        $input = $_POST['unem'];
        //checking the user if exist in users table
        $search = "SELECT * FROM people_who_buy WHERE people_username = '".$input."'";
        $searched = $conn -> query($search);
        // checking if the query works
        if($searched){
            if(mysqli_num_rows($searched) > 0){
                $userInfo = mysqli_fetch_assoc($searched);
                $userEmail = $userInfo['people_email'];
                $_SESSION['username']= $userInfo['people_username'];
                //search if the user exist in forgot table links table
                $bet = "SELECT * FROM people_forget_password WHERE people_who_forgot_password = '".$userEmail."'";
                $beted = $conn -> query($bet);
                //checking if the query works
                if($beted){
                    if(mysqli_num_rows($beted) > 0){
                        $updateLink = uniqid("verify_link_update_");
                        //updating the table to keep the newupdate link;
                        $upd = "UPDATE people_forget_password SET generate_link = '".$updateLink."' WHERE people_who_forgot_password = '".$userEmail."'";
                        $updated = $conn -> query($upd);
                        //checking if the query is done
                        if($updated){
                            $fetchLink = "SELECT * FROM people_forget_password WHERE people_who_forgot_password = '".$userEmail."'";
                            $fetchLinked = $conn -> query($fetchLink);
                            if($fetchLinked){
                                $everything = mysqli_fetch_assoc($fetchLinked);
                                $_SESSION['toEmail'] = $everything['people_who_forgot_password'];
                                $_SESSION['link'] = strtolower($everything['generate_link']);
                                require "includes/sendMail.php"; 
                            }
                        }
                    }else{
                        $generateLink = uniqid("verify_link_");
                        //inserting the new forgetter in the link table
                        $forget = "INSERT INTO people_forget_password(people_who_forgot_password,generate_link) VALUES ('".$userEmail."','".$generateLink."')";
                        $forgotten = $conn -> query($forget);
                        if($forgotten){
                            $fetchLink = "SELECT * FROM people_forget_password WHERE people_who_forgot_password = '".$userEmail."'";
                            $fetchLinked = $conn -> query($fetchLink);
                            if($fetchLinked){
                                $everything = mysqli_fetch_assoc($fetchLinked);
                                $_SESSION['toEmail'] = $everything['people_who_forgot_password'];
                                $_SESSION['link'] = $everything['generate_link'];
                                require "includes/sendMail.php"; 
                            }                            
                        }
                    }
                }
            }else{
                //its here;
                $input = $_POST['unem'];
                //checking the user if exist in users table
                $searc = "SELECT * FROM people_who_buy WHERE people_email = '".$input."'";
                $searced = $conn -> query($searc);
                // checking if the query works
                if($searced){
                    if(mysqli_num_rows($searced) > 0){
                        $userInfo = mysqli_fetch_assoc($searced);
                        $userEmail = $userInfo['people_email'];
                        $_SESSION['username']= $userInfo['people_username'];
                        //search if the user exist in forgot table links table
                        $bet = "SELECT * FROM people_forget_password WHERE people_who_forgot_password = '".$userEmail."'";
                        $beted = $conn -> query($bet);
                        //checking if the query works
                        if($beted){
                            if(mysqli_num_rows($beted) > 0){
                                $updateLink = uniqid("verify_link_update_");
                                //updating the table to keep the newupdate link;
                                $upd = "UPDATE people_forget_password SET generate_link = '".$updateLink."' WHERE people_who_forgot_password = '".$userEmail."'";
                                $updated = $conn -> query($upd);
                                //checking if the query is done
                                if($updated){
                                    $fetchLink = "SELECT * FROM people_forget_password WHERE people_who_forgot_password = '".$userEmail."'";
                                    $fetchLinked = $conn -> query($fetchLink);
                                    if($fetchLinked){
                                        $everything = mysqli_fetch_assoc($fetchLinked);
                                        $_SESSION['toEmail'] = $everything['people_who_forgot_password'];
                                        $_SESSION['link'] = strtolower($everything['generate_link']);
                                        require "includes/sendMail.php"; 
                                    }
                                }
                            }else{
                                $generateLink = uniqid("verify_link_");
                                //inserting the new forgetter in the link table
                                $forget = "INSERT INTO people_forget_password(people_who_forgot_password,generate_link) VALUES ('".$userEmail."','".$generateLink."')";
                                $forgotten = $conn -> query($forget);
                                if($forgotten){
                                    $fetchLink = "SELECT * FROM people_forget_password WHERE people_who_forgot_password = '".$userEmail."'";
                                    $fetchLinked = $conn -> query($fetchLink);
                                    if($fetchLinked){
                                        $everything = mysqli_fetch_assoc($fetchLinked);
                                        $_SESSION['toEmail'] = $everything['people_who_forgot_password'];
                                        $_SESSION['link'] = $everything['generate_link'];
                                        require "includes/sendMail.php"; 
                                    }                            
                                }
                            }
                        }
                    }
                }
            }
        }
    }
            
?>