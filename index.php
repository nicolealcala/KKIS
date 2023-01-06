<?php
// XAMPP

include 'connection.php';


session_start();
session_destroy();
session_start();


include 'controller.php';


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in/Sign Up</title>

    <!-- Fundamental Links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/css/animatedBG.css">
    <link rel="stylesheet" href="assets/scss/index.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <link rel="stylesheet" href="assets/scss/sideMenu.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/kkis.ico">
</head>

<body>

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">

            <div id="index-wrapper">
                <div class="container-fluid d-flex justify-content-center align-items-center indexContent">
                    <!-- Log in -->
                    <div class="card d-flex justify-content-center mt-3" id="loginCard">
                        <div class="card-body">
                            <div class="row m-0 w-100">
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="assets/img/logos/kkis-logo.png" alt="KKIS-Logo">
                                </div>
                            </div>
                            <div class="row m-0 d-flex justify-content-center">
                                <div class="col-12 text-center">
                                    <span class="cardHead">Welcome!</span>
                                </div>
                            </div>
                            <div class="row mx-3 my-0">
                                <div class="col-12 text-center p-0"><img class="img-fluid hrSvg" src="assets/img/misc/hr.svg"></div>
                            </div>
                            <!-- Form -->
                            <form id="loginForm" action="" method="post">
                                <!-- Fields -->
                                <div class="row gx-3 gy-3 fieldRow">
                                    <div class="col-12">
                                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-12 mt-2 d-flex justify-content-center">
                                        <a href="#" id="forgotPassText">Forgot Password?</a>
                                    </div>
                                </div>
                                <!-- Log in btn -->
                                <div class="row m-0 mt-3" id="rowBtn">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <button class="btn controlBtn rounded-pill mt-3" name="loginBtn" type="submit" form="loginForm" id="loginBtn">Log in</button>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <p class="mt-2 text-center" id="signup-phrase">Don't have an account yet? <a href="#" class="signup-txt" id="signupLink">Sign up</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Sign Up -->
                    <div class="card d-flex justify-content-center d-none" id="signupCard">
                        <div class="card-body">
                            <div class="row m-0 w-100">
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="assets/img/logos/kkis-logo.png" alt="KKIS-Logo">
                                </div>
                            </div>
                            <div class="row m-0 d-flex justify-content-center">
                                <div class="col-12 text-center">
                                    <span class="cardHead">Sign Up</span>
                                </div>
                            </div>
                            <div class="row mx-3 my-0">
                                <div class="col-12 text-center p-0"><img class="img-fluid hrSvg" src="assets/img/misc/hr.svg"></div>
                            </div>
                            <!-- Form -->
                            <form id="signupForm" action="" onSubmit="return validate();" method="post">
                                <!-- Fields -->
                                <div class="row gx-3 gy-3 fieldRow">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input class="form-control text-capitalize" type="text" name="firstName" placeholder="First Name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input class="form-control text-capitalize" type="text" name="lastName" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input class="form-control" type="date" name="birthday" placeholder="Birthday" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input class="form-control" type="text" name="contactNumber" inputmode="numeric" placeholder="Contact No." maxlength="11" required>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control" type="email" name="email" placeholder="Email" maxlength="30" required>
                                    </div>
                                    <div class="col-12">

                                        <!-- Added pattern as a criteria for secured password -->
                                        <input class="form-control" type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter, and should be at least 8 or more characters" placeholder="Password" maxlength="30" required>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" maxlength="30" required>
                                    </div>
                                </div>
                                <!-- Sign up btn -->
                                <div class="row m-0 mt-3" id="rowBtn">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <button class="btn controlBtn rounded-pill mt-3" name="signupBtn" type="submit" form="signupForm" id="signupBtn">Sign up</button>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <p class="mt-2 text-center" id="login-phrase">Already have an account? <a href="#" class="login-txt" id="loginLink">Log in</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- Forgot Password -->
                    <div class="card d-flex justify-content-center d-none" id="forgotPassCard">
                        <div class="card-head p-2 mt-2">
                            <div class="d-flex align-items-center justify-content-start headContainer">
                                <div class="d-flex justify-content-center align-items-center w-100 p-0">
                                    <i role="button" class="backIcon fa-solid fa-arrow-left me-3" id="rbackBtn"></i>
                                    <span class="resetPassHead d-flex justify-content-center">Reset Password</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body m-x mt-1 mb-1">
                            <form id="resetPassForm" action="" method="post">
                                <!-- Fields -->
                                <div class="row gx-3 gy-3 mx-2">
                                    <div class="col-12">
                                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="oldPassword" placeholder="Old Password" required>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="newPassword" placeholder="New Password" required>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm New Password" required>
                                    </div>
                                </div>
                                <!-- Reset Pass btn -->
                                <div class="row m-0 mt-2">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <button class="btn controlBtn rounded-pill mt-3" name="resetBtn" type="submit" form="resetPassForm" id="resetBtn">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>


    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/index.js"></script>
    <script type="text/javascript" src="assets/js/formValidation.js"></script>
</body>