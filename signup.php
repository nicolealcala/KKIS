<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign-up</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/kkis-logo.svg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="assets/css/index.compiled.css">
    <link rel="stylesheet" href="assets/scss/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/scss/signup.css">
</head>

<body style="background: url(&quot;assets/img/gradient-bg.png&quot;);">
    <section class="position-relative py-4 py-xl-5">

        <!-- TOP ROW/PANEL - Logo -->
        <div class="row mb-5" id="top-panel" style="margin-top: 0px;margin-left: 0px;">
            <div class="col col-xxl-3 col-xl-3 col-lg-3 col-xs-12"><img class="d-flex justify-content-start" id="logo" src="assets/img/kkis-logo.svg" style="margin-top: -5px;width: 150px;"></div>
            <div class="col col-xxl-3 col-xl-3 col-lg-3 col-sm-2"></div>
            <div class="col col-xxl-3 col-xl-3 col-lg-3"></div>
            <div class="col col-xxl-3 col-xl-3 col-lg-3"></div>
        </div>

        <div class="container" id="signup-panel">
            <div class="row d-flex justify-content-center" style="margin-top: 3.25em;">
                <div class="col-md-6 col-xl-4 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center col-xxl-10 col-xl-10 col-md-10 col-xs-12">
                    <div class="card d-xxl-flex justify-content-xxl-center" style="border-radius: 27px;height: 650px;border-width: 3px;border-top-color: rgb(142);border-right-color: 202,;border-bottom-color: 230;border-left-color: 202,;width: 800px;padding: 1em;padding-top: 2.25em;box-shadow: 0px 0px 20px 0px #aeaeae;">
                        <div class="card-body d-flex flex-column align-items-center"> <!--style="height: 430px;"-->
                            <div style="margin-bottom: 3em;">
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <h1 class="welcome-sign" style="font-family: poppins;--bs-body-font-weight: bold;color: rgb(255, 183, 3);">Sign-up</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center align-items-xxl-center"><img class="d-xxl-flex" src="assets/img/decorative.png"></div>
                                </div>
                            </div>
                            <form class="text-center" method="post">
                                <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center" >
                                    <div class="col col-xxl-5 col-xl-5 col-lg-5 col-md-6 ">
                                        <div class="mb-3"><input class="form-control d-xl-flex" type="text" name="firstName" placeholder="First Name" style="height: 45px;"></div>
                                        <div class="mb-3"><input class="form-control" type="text" name="middleName" placeholder="Middle Name" style="height: 45px;"></div>
                                        <div class="mb-3"><input class="form-control" type="text" name="lastName" placeholder="Last Name" style="height: 45px;"></div>
                                        <div class="mb-3"><input class="form-control" type="text" name="suffix" placeholder="Suffix" style="height: 45px;"></div>
                                    </div>
                                    <div class="col col-xxl-5 col-xl-5 col-lg-5 col-md-6 ">
                                        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="height: 45px;"></div>
                                        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" style="height: 45px;"></div>
                                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="height: 45px;"></div>
                                        <div class="mb-3"><input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password" style="height: 45px;"></div>
                                    </div>
                                </div>
                                <div class="mb-2 row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center" style="margin-top: 2.5em;"><button class="btn btn-primary d-block w-100 rounded-pill" id="signup-btn" type="submit" style="height: 45px;">Sign-up</button></div>
                                <p class="d-xxl-flex justify-content-xxl-center" id="login-phrase">Already have an account? <a href="index.php" class="login-txt"> Log-in</a></p>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>