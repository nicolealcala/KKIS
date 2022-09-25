<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/kkis-logo.svg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- BS SideNav Stylesheet -->
    <link rel="stylesheet" href="assets/css/navDash.css">
    <!-- <link rel="stylesheet" href="assets/css/Sidebar-Menu-sidebar.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css"> -->
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body>
<!-- style="padding-left: 100px; padding-right:50px;" -->
    <!-- TEMPORARY SIDENAV -->
    <!-- <div id="wrapper" class="sidenav">
        <div id="sidebar-wrapper" style="width: 74px;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> </li>
                <li> </li>
                <li> </li>
                <li> </li>
            </ul>
        </div>
    </div> -->


    <!-- Nav -->
    <div class="navDiv">
        <?php include 'nav.php' ?>
    </div>

    <div class="pageContent">
    <!-- TITLE + GRADIENT LINE -->
    <div class="dashboard-title">
        <h1 class="title">Dashboard</h1><img class="gradient-line" style="padding-right: 23px;padding-bottom: 20px;" src="assets/img/decorative.png">
    </div>
    
    <!--CATEGORIES-->
    <section id="dashboard-summary" class="container-fluid;">
        <div class="row" id="row1" style="height: 257px;">
        
        <!-- CATEGORY 1 -->
            <a href="tblTotalYouth.php">
                <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <div id="total-youth" class="category"> <!-- style="width: 4px; height: 257px;"-->
                    <div id="texts">
                        <h1>2716</h1>
                        <p>Total Youth</p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img class="total-youth-img d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center fixed-bottom;" id="dashboard-vectors" src="assets/img/total-youth-img.png"></div>
                </div>
            </a>
            </div>

        <!-- CATEGORY 2 -->
            <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <a href="tblEnrolled.php">
                    <div id="enrolled-youth" class="category">
                    <div id="texts">
                        <h1>2716</h1>
                        <p>Enrolled Youth<br></p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img id="dashboard-vectors-1" class="fixed-bottom;" src="assets/img/enrolled-img.png"></div>
                </div>
                </a>
            </div>

        <!-- CATEGORY 3 -->
            <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <a href="tblOutOfSchool.php">
                <div id="out-of-school-youth" class="category">
                    <div id="texts">
                        <h1>2716</h1>
                        <p>Out-of-school Youth</p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img id="dashboard-vectors-2" class="fixed-bottom;" src="assets/img/out-of-scl-img.png"></div>
                </div>
                </a>
            </div>

        <!-- CATEGORY 4 -->    
            <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <a href="tblWorkingStudent.php">
                <div id="working-student" class="category">
                    <div id="texts">
                        <h1>2716</h1>
                        <p>Working Student</p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img id="dashboard-vectors-3" class="fixed-bottom;" src="assets/img/working-student-img.png"></div>
                </div>
                </a>
            </div>
        
        <!-- CATEGORY 5 -->
            <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <a href="tblEmployed.php">
                <div id="employed" class="category">
                    <div id="texts" style="height: 257px;">
                        <h1>2716</h1>
                        <p>Employed</p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img id="dashboard-vectors-4" class="fixed-bottom;" src="assets/img/employed-img.png"></div>
                </div>
                </a>
            </div>
    
        <!-- CATEGORY 6 -->
            <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <a href="tblUnemployed.php">
                    <div id="unemployed" class="category">
                    <div id="texts">
                        <h1>2716</h1>
                        <p>Unemployed<br></p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img id="dashboard-vectors-5" class="fixed-bottom;" src="assets/img/unemployed-img.png"></div>
                </div>
                </a>
            </div>

        <!-- CATEGORY 7 -->
            <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <a href="tblRegistedVoters.php">
                <div id="registered-voters" class="category">
                    <div id="texts">
                        <h1>2716</h1>
                        <p>Registered Voters</p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img id="dashboard-vectors-6" class="fixed-bottom;" src="assets/img/registered-voters-img.png"></div>
                </div>
                </a>
            </div>
         
        <!-- CATEGORY 8 -->
            <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <a href="tblUnregistedVoters.php">
                <div id="unregistered-voters" class="category">
                    <div id="texts" style="height: 257px;">
                        <h1>2716</h1>
                        <p>Unregistered Voters</p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img id="dashboard-vectors-7" class="fixed-bottom;" src="assets/img/unregistered-img.png"></div>
                </div>
                </a>
            </div>
    
        <!-- CATEGORY 9 -->
            <div class="col-lg-4 col-md-4" style="padding-bottom: 3em;margin-bottom: -1px;padding-top: 0px;">
                <a href="tblPWD.php">
                <div id="pwd" class="category">
                    <div id="texts">
                        <h1>2716</h1>
                        <p>PWDs<br></p>
                    </div>
                    <div class="dashboard-img img-fluid float-end"><img id="dashboard-vectors-8" class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center fixed-bottom;" src="assets/img/pwd-img.png"></div>
                </div>
                </a>
            </div>

        <!--END OF ROW-->
        </div>

        
    </section>
    </div>


    <!-- JS -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>