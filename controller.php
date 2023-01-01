<?php

    //include 'connection.php';

    //SIGN UP 
    if(isset($_POST['signupBtn'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthday = $_POST['birthday'];
        $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO `admins`(`first_name`, `last_name`, `birthday`, `contact_no`, `email`, `password`) VALUES ('".$firstName."','".$lastName."','".$birthday."','".$contactNumber."','".$email."','".$password_hash."')";
        if(executeQuery($query)){
        header('Location: index.php');
        }
    } 

    // LOGIN BTN 

    if(isset($_POST['loginBtn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        //$hash = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "SELECT * FROM `admins` WHERE email = '".$email."'";
        $accounts = executeQuery($query);

        if(mysqli_num_rows($accounts) > 0) {
            while($account = mysqli_fetch_assoc($accounts)) {
                if(password_verify($password,$account['password'])){
                    $_SESSION['firstName'] = $account['firstName'];
                    $_SESSION['lastName'] = $account['lastName'];
                    $_SESSION['birthday'] = $account['birthday'];
                    $_SESSION['contactNumber'] = $account['contactNumber'];
                    $_SESSION['email'] = $account['email'];
    
                    header('Location: dashboard.php');  
                    //echo "<script>window.location.href='dashboard.php';</script>";
                   } else {
                        echo '<script>alert("Invalid email/password!")</script>';
                   }
            }     
        } 
    }


    // CHANGE PASSWORD

    if(isset($_POST['resetBtn'])){
        $oldPassword = $_POST["oldPassword"];
        $newPassword = $_POST["newPassword"];
        $confirmPassword = $_POST["confirmPassword"];


        $passwordQuery = "SELECT * FROM `admins` WHERE `email` ='".$_SESSION['email']."'";

        $passwordResult = executeQuery($passwordQuery);
        $count=mysqli_num_rows($passwordResult);

        if($count==1){
            while($row = mysqli_fetch_assoc($passwordResult)){
                $fetchPassword = $row['password'];

                if(!password_verify($oldPassword,$fetchPassword)){
                    header("Location:index.php?error=invalidoldpassword");
                } elseif($newPassword==$oldPassword){
                    header("Location:index.php?error=samepassword");
                } else if(!password_verify($oldPassword,$fetchPassword)){

                    if($newPassword == $confirmPassword){
                        $passwordRaw == $confirmPassword;
                        $password_hash = password_hash($passwordRaw,PASSWORD_DEFAULT);

                        $updateQuery = "UPDATE `admins` SET `password` = '".$password_hash."' WHERE `email`= '".$_SESSION['email']."'";
                        executeQuery($updateQuery);
                        header("Location:index.php?error=passwordchanged");
                    } else {
                        header("Location:index.php?error=invalidconfirmpassword");
                    }
                    
                }
            }
        }

    }


?>