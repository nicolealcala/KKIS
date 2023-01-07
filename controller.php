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
                    //echo "<script>window.location.href = 'dashboard.php';</script>";
                   } else {
                        echo '<script>alert("Invalid email/password!")</script>';
                   }
            }     
        } 
    }



    // CHANGE PW

    if(isset($_POST["updatePassBtn"])) {     
        $currentpassword = $_POST["currentPassword"];
        $newpassword = $_POST['newPassword'];
        $confirmpassword = $_POST['confirmPassword'];
    
    
    if (!empty( $currentpassword) || !empty( $newpassword ) ||  !empty($confirmpassword)) {
    
        //QUERY for DATABASE
        $passwordquery = "SELECT * FROM `admins` WHERE `email` ='" . $_SESSION['email'] . "'";
    
        $passwordresult = executeQuery($passwordquery);
        $count = mysqli_num_rows($passwordresult);
    
        if ($count == 1) {
            while ($row = mysqli_fetch_assoc($passwordresult)) {
    
                //Data from Database
                $fetchpassword = $row['password'];
    
    
                if (!password_verify($currentpassword, $fetchpassword)) {
                    header("Location: settings-change-password.php?error=invalidcurrentpassword");
    
                } elseif ($newpassword == $currentpassword) {
                    header("Location: settings-change-password?error=samepassword");
    
                } else if ($newpassword != $confirmpassword){
                header("Location: settings-change-password.php?error=invalidconfirmpassword");
    
                
                }else if (password_verify($currentpassword, $fetchpassword)) {
                    
                    if ($newpassword == $confirmpassword) {
                        $password_raw = $_POST['newpassword'];
                        $number = preg_match('@[0-9]@', $password_raw);
                        $uppercase = preg_match('@[A-Z]@', $password_raw);
                        $lowercase = preg_match('@[a-z]@', $password_raw);
                        $specialChars = preg_match('@[^\w]@', $password_raw);
    
                        if (strlen($password_raw) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
                            header("Location: settings-change-password.php?password_not_strong");
                        
                        } else {
                            $hash = password_hash($password_raw, PASSWORD_DEFAULT);
    
                            $updatequery = "UPDATE admins SET password`='" . $hash . "' WHERE email` ='" . $_SESSION['email'] . "'";
                            executeQuery($updatequery);
                            header("Location: index.php");
                        }
                    }
    
                    else { 
                        header("Location: settings-change-password.php?error=invalid_confirm_password");
                    }
    
                }
            }
        }
    }
    else{
        header("Location: settings-change-password.php?error=all_fields_are_required");
    }
    }
?>