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
    <link rel="stylesheet" href="assets/scss/signUpPage.css">
    

    <!-- Virtual Select  JS library -->
    <link rel="stylesheet" href="assets/css/virtual-select.min.css"> 
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center indexContent">
            <div class="row m-0 w-100">
                <div class="col-12">
                    <img src="assets/img/logos/LOGO.png" alt="KKIS-Logo" class="img-fluid logo">
                </div>
            </div>
            <div class="card d-flex justify-content-center">
                <div class="card-body">
                    <div class="row m-0 d-flex justify-content-center">
                        <div class="col-12 text-center">
                            <h1 class="cardHead">Welcome back!</h1>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-12 text-center p-0"><img class="img-fluid" src="assets/img/misc/hr.svg"></div>
                    </div>
                    <!-- Form -->
                    <form id="loginform" action="" method="post">
                        <!-- Fields -->
                        <div class="row m-4 gx-3 gy-3 ">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Username" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Password" required>
                            </div>
                        </div>
                        <!-- Log in btn -->
                        <div class="row m-0 mt-4" id="rowBtn">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                    <button class="btn login rounded-pill mt-3" name="loginBtn" type="submit" form="loginform">Log in</button>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <p class="mt-2" id="signup-phrase">Don't have an account yet? <a href="dashboard.php" class="signup-txt"> Sign up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>