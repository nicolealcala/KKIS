<?php

    //include 'connection.php';

    //SIGN UP not final pa ito pero connected na sa db yung signup
    if(isset($_POST['signupBtn'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthday = $_POST['birthday'];
        $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO `login_credentials`(`firstName`, `lastName`, `birthday`, `contactNumber`, `email`, `password`) VALUES ('".$firstName."','".$lastName."','".$birthday."','".$contactNumber."','".$email."','".$password_hash."')";
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
    
        $query = "SELECT * FROM `login_credentials` WHERE email = '".$email."'";
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

    
?>