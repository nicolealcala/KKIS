
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/kkis-logo.svg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <!-- AJAX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <!-- BS Login Stylesheet -->
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/scss/index.css">
</head>

<body style="background: url(&quot;assets/img/gradient-bg.webp&quot;);">
    <section class="position-relative py-4 py-xl-5">

        <!-- TOP ROW/PANEL - Logo -->
        <div class="row mb-5" id="top-panel" style="margin-top: 0px;margin-left: 0px;">
            <div class="col col-xxl-3 col-xl-3 col-lg-3 col-xs-12"><img class="d-flex justify-content-start" id="logo" src="assets/img/kkis-logo.svg" style="margin-top: -5px;width: 150px;"></div>
            <div class="col col-xxl-3 col-xl-3 col-lg-3 col-sm-2"></div>
            <div class="col col-xxl-3 col-xl-3 col-lg-3"></div>
            <div class="col col-xxl-3 col-xl-3 col-lg-3"></div>
        </div>

        <!-- FORM PANEL -->
        <div class="container" id="login-panel">
            <div class="row d-flex justify-content-center" style="margin-top: 5.5em;">
                <div class="col-md-6 col-xl-4 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center col-xxl-6 col-xl-6 col-md-8 col-xs-12">
                    <div class="card d-xxl-flex justify-content-xxl-center mb-5" style="border-radius: 27px;height: 550px;border-width: 3px;border-top-color: rgb(142);border-right-color: 202,;border-bottom-color: 230;;border-left-color: 202 ;width: 500px;padding: 1em;padding-top: 3em;box-shadow: 0px 0px 20px 0px #aeaeae;">
                        <div class="card-body d-flex flex-column align-items-center" style="height: 395px;">
                            <div style="margin-bottom: 3em;">
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <h1 class="welcome-sign" style="font-family: poppins;--bs-body-font-weight: bold;color: rgb(255, 183, 3);">Welcome!</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center align-items-xxl-center"><img class="d-xxl-flex" src="assets/img/decorative.png"></div>
                                </div>
                            </div>
                            <form class="text-center" id="input-panel" method="post">
                                <!--put action="./check-login.php" inside the form tag pag koconnect na-->
                                <div class="mb-3"><input class="form-control" id="username" type="text" name="username" placeholder="Username" required=""></div>
                                <div class="mb-3"><input class="form-control" id="password" type="password" name="password" placeholder="Password" required=""></div>
                            
                            <!-- LOGIN BUTTON -->
                                <div class="mb-2" style="margin-top: 2.5em;"><button class="btn btn-primary d-block w-100 rounded-pill" id="login-btn" type="submit" style="height: 45px;"><a href="/dashboard.php" style="color:#fff;">Log-in</a></button></div>
                                <p class="d-xxl-flex justify-content-xxl-center" id="signup-phrase">Don't have an account yet? <a href="#" class="signup-txt"> Sign up</a></p>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://github.com/pipwerks/PDFObject/blob/master/pdfobject.min.js"></script>
</body>

</html>