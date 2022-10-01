<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">

    <link rel="stylesheet" href="assets/scss/dashboardNew.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- navAddUpdate CSS -->
    <link rel="stylesheet" href="assets/css/navDash.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <!-- Nav -->
    <div class="navDiv">
        <?php include 'nav.php' ?>
    </div>

    <div id="wrapper">
        <div class="container-fluid content">
            <!-- Copy this to all pages-->
            <div class="row documentHeadingRow p-0 m-0">
                <div class="col d-flex align-self-center justify-content-xxl-start align-items-xxl-center col-12 p-0">
                    <h1 class="d-xxl-flex title" id="titleAddEntry">Dashboard</h1>
                </div>
            </div>
            <div class="row m-0">
                <div class="col p-0"><img class="img-fluid" src="assets/img/misc/hr.svg"></div>
            </div>
            <!-- Copy End -->
            <div class="pageBody">
                <div class="row m-0 mt-5 gx-4 gy-4 p-0 w-100">
                    <!-- Category1 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblTotalYouth.php">
                            <div class="category" id="totalYouth">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">Total Youth</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/total-youth-img.png" alt="Total-Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category2 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblEnrolled.php">
                            <div class="category" id="enrolledYouth">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">Enrolled Youth</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/enrolled-img.png" alt="Enrolled-Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category3 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblOutOfSchool.php">
                            <div class="category" id="ousYouth">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">Out-of-school Youth</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/out-of-scl-img.png" alt="Out-of-school Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category4 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblWorkingStudent.php">
                            <div class="category" id="workingStudent">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">Working Student</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/working-student-img.png" alt="Out-of-school Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category5 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblEmployed.php">
                            <div class="category" id="employed">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">Employed</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/employed-img.png" alt="Employed">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category6 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblUnemployed.php">
                            <div class="category" id="unemployed">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">Unemployed</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/unemployed-img.png" alt="Employed">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category7 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblRegistedVoters.php">
                            <div class="category" id="registeredVoter">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">Registered Voters</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/registered-voters-img.png" alt="Registered-Voters">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category8 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblUnregistedVoters.php">
                            <div class="category" id="unregisteredVoter">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">Unregistered Voters</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/unregistered-img.png" alt="Unregistered-Voters">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category9 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <a href="tblPWD.php">
                            <div class="category" id="pwd">
                                <div class="texts">
                                    <h1 class="count">2019</h1>
                                    <p class="subTitle">PWDs</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/pwd-img.png" alt="Unregistered-Voters">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>