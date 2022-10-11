<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in/Sign Up</title>
    
    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/index2.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body style="background: url(&quot;assets/img/misc/background.webp&quot;)">
    <div id="index-wrapper">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center indexContent">
            <!-- Log in -->
            <div class="card d-flex justify-content-center mt-3 d-none" id="loginCard">
                <div class="card-body">
                    <div class="row m-0 w-100">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="assets/img/logos/LOGO.png" alt="KKIS-Logo" class="img-fluid logo">
                        </div>
                    </div>
                    <div class="row m-0 d-flex justify-content-center">
                        <div class="col-12 text-center">
                            <span class="cardHead">Welcome!</span>
                        </div>
                    </div>
                    <div class="row mx-3 my-0">
                        <div class="col-12 text-center p-0"><img class="img-fluid" src="assets/img/misc/hr.svg"></div>
                    </div>  
                    <!-- Form -->
                    <form id="loginForm" action="" method="post">
                        <!-- Fields -->
                        <div class="row gx-3 gy-3 fieldRow">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Username" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="password" placeholder="Password" required>
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
                            <img src="assets/img/logos/LOGO.png" alt="KKIS-Logo" class="img-fluid logo">
                        </div>
                    </div>
                    <div class="row m-0 d-flex justify-content-center">
                        <div class="col-12 text-center">
                            <span class="cardHead">Sign Up</span>
                        </div>
                    </div>
                    <div class="row mx-3 my-0">
                        <div class="col-12 text-center p-0"><img class="img-fluid" src="assets/img/misc/hr.svg"></div>
                    </div>
                    <!-- Form -->
                    <form id="signupForm" action="" method="post">
                        <!-- Fields -->
                        <div class="row gx-3 gy-3 fieldRow">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <input class="form-control" type="text" placeholder="First Name" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <input class="form-control" type="text" placeholder="Last Name" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <input class="form-control" type="date" placeholder="Birthday" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <input class="form-control" type="text" inputmode="numeric" placeholder="Contact No." maxlength="11" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Username" maxlength="30" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="password" placeholder="Password" maxlength="30" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="password" placeholder="Confirm Password" maxlength="30" required>
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
            <div class="card d-flex justify-content-center" id="forgotPassCard">
                <div class="card-head p-2 mt-2">
                    <div class="d-flex align-items-center justify-content-start headContainer">
                        <div class="d-flex justify-content-center align-items-center w-100 p-0">
                            <button class="btn rounded-circle border-0 d-flex d-sm-flex d-xxl-flex justify-content-center justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-center rbackBtn" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="backIcon" style="width: auto;height: auto;font-size: 28px;">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"></path>
                                </svg>
                            </button>    
                        <span class="resetPassHead">Reset Password</span>
                        </div>
                    </div>
                </div>
                <div class="card-body m-x mt-1 mb-1">
                    <form id="resetPassForm" action="" method="post">
                        <!-- Fields -->
                        <div class="row gx-3 gy-3 mx-2">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Username" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="password" placeholder="New Password" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="password" placeholder="Confirm New Password" required>
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

    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/index2.js"></script>
    
</body>