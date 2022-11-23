<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    
    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/dashboard.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    
    <!-- navAddUpdate CSS -->
    <link rel="stylesheet" href="assets/css/navDash.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <div class="mainContainer d-block">
        <header>
            <div class="row headerRow">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
                    <i class="fa-solid fa-bars fa-2xl w-auto" id="hamburger"></i>
                    <span class="title">Dashboard</span>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-md-flex justify-content-md-end align-items-md-center">
                    <span class="accountType d-flex justify-content-end">Super Admin Account</span>
                </div>
            </div>
            <img src="assets/img/decorative.svg" alt="hr" class="img-fluid w-100 d-flex">
        </header>

         <!-- CONTENT START -->
        <div class="container-fluid content">
            <div class="sectionDiv mx-0 mt-4 p-0">
                <!-- Minor Catagories -->
                <p class="sectionTitle">General Residents</p>
                <div class="carousel d-flex justify-content-center">
                    <div class="d-flex justify-content-center align-items-center" style="width: 500px;">
                        <a href="#" style="background-color: #001E40; width: 100%; border-radius: 1em">
                            <div class="minorCategory" id="totalCitizens">
                                <div class="texts">
                                    <p id="whiteLbl">Total Citizens</p>
                                    <p class="count d-flex align-self-end">10, 205</p>
                                </div>  
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid" src="assets/img/dashboard/mc-totalCitizens.svg" alt="Total-Citizens" id="totalCitizens-img">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                        <a href="#" style="background-color: #D7ECFA; width: 100%; border-radius: 1em;">
                            <div class="minorCategory" id="genCitizens">
                                <div class="texts">
                                    <p class="minorLbl">General Citizens</p>
                                    <span class="mcCount">8,644</span>
                                    <span class="percentage">85%</span>
                                </div>
                                <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-genCitizens.png" alt="General-Citizens">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                        <a href="#" style="background-color: #FFE5DB; width: 100%; border-radius: 1em;">
                            <div class="minorCategory" id="children">
                                <div class="texts">
                                    <p class="minorLbl">Children</p>
                                    <span class="mcCount">510</span>
                                    <span class="percentage">5%</span>
                                </div>
                                <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-children.png" alt="Children">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                        <a href="#" style="background-color: #FFF4D1; width: 100%; border-radius: 1em;">
                            <div class="minorCategory" id="senior">
                                <div class="texts">
                                    <p class="minorLbl">Senior Citizens</p>
                                    <span class="mcCount">1,020</span>
                                    <span class="percentage">10%</span>
                                </div>
                                <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-seniorCitizens.png" alt="Senior-Citizens">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                        <a href="#" style="background-color: #DDFFF8; width: 100%; border-radius: 1em;">
                            <div class="minorCategory" id="pwd">
                                <div class="texts">
                                    <p class="minorLbl">PWDs</p>
                                    <span class="mcCount">31</span>
                                    <span class="percentage">0.3%</span>
                                </div>
                                <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-pwd.png" alt="PWDs">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                        <a href="#" style="background-color: #FFFCBB; width: 100%; border-radius: 1em;">
                            <div class="minorCategory" id="registered">
                                <div class="texts">
                                    <p class="minorLbl">Registereed Voters</p>
                                    <span class="mcCount">8,391</span>
                                    <span class="percentage">82%</span>
                                </div>
                                <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-registered.png" alt="Registered-Voters">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 300px;" >
                        <a href="#" style="background-color: #F8E7F8; width: 100%; border-radius: 1em;">
                            <div class="minorCategory" id="unregistered">
                                <div class="texts">
                                    <p class="minorLbl">Unregistered Voters</p>
                                    <span class="mcCount">1,814</span>
                                    <span class="percentage">18%</span>
                                </div>
                                <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-unregistered.png" alt="Unregistered-Voters">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Categories -->
            <div class="dashCategories mx-0">
                <div class="card rounded-4 p-2">
                    <div class="card-body m-0">
                        <p class="sectionTitle">Katipunan ng Kabataan</p>
                        <div class="row m-0 mt-0 gx-5 gy-5 p-3 w-100">
                            <!-- Category1 -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                <a href="tblTotalYouth.php">
                                    <div class="category" id="totalYouth" style="background-color: #8ECAE6">
                                        <div class="texts">
                                            <h1 class="count">2019</h1>
                                            <p class="subTitle">Total Youth</p>
                                        </div>
                                        <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                            <img class="img-fluid c-img" src="assets/img/dashboard/c-totalYouth.png" alt="Total-Youth">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category2 -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                <a href="tblEnrolled.php">
                                    <div class="category" id="enrolledYouth" style="background-color: #219EBC">
                                        <div class="texts">
                                            <h1 class="count">2019</h1>
                                            <p class="subTitle">Enrolled Youth</p>
                                        </div>
                                        <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                            <img class="img-fluid c-img" src="assets/img/dashboard/c-enrolled.png" alt="Enrolled-Youth">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category3 -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                <a href="tblOutOfSchool.php">
                                    <div class="category" id="ousYouth" style="background-color: #04496A">
                                        <div class="texts">
                                            <h1 class="count">2019</h1>
                                            <p class="subTitle">Out-of-school Youth</p>
                                        </div>
                                        <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                            <img class="img-fluid c-img" src="assets/img/dashboard/c-out-of-school.png" alt="Out-of-school Youth">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category4 -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                <a href="tblWorkingStudent.php">
                                    <div class="category" id="workingStudent" style="background-color: #F3CB69">
                                        <div class="texts">
                                            <h1 class="count">2019</h1>
                                            <p class="subTitle">Working Student</p>
                                        </div>
                                        <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                            <img class="img-fluid c-img" src="assets/img/dashboard/c-workingStudents.png" alt="Out-of-school Youth">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category5 -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                <a href="tblEmployed.php">
                                    <div class="category" id="employed" style="background-color: #FFB703">
                                        <div class="texts">
                                            <h1 class="count">2019</h1>
                                            <p class="subTitle">Employed</p>
                                        </div>
                                        <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                            <img class="img-fluid c-img" src="assets/img/dashboard/c-employed.png" alt="Employed">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category6 -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                <a href="tblUnemployed.php">
                                    <div class="category" id="unemployed" style="background-color: #FB8500">
                                        <div class="texts">
                                            <h1 class="count">2019</h1>
                                            <p class="subTitle">Unemployed</p>
                                        </div>
                                        <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                            <img class="img-fluid c-img" src="assets/img/dashboard/c-unemployed.png" alt="Employed">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!-- Custome Script -->
    <script src="assets/js/dashboard.js"></script>
</body>
</html>