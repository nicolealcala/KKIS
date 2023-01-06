<?php
//   session_start();
// if ($_SESSION['email'] != "") {
//     $email = $_SESSION['email'];
// } else {
//     header('Location:index.php');
// }
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
    <link rel="stylesheet" href="assets/scss/sideMenu.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/kkis.ico">
</head>

<body>
    <div class="expanded d-none d-lg-flex" id="leftPanel">
        <?php include 'sideMenu.php' ?>
    </div>

    <div class="mainContainer" id="mainPanel">
        <header class="d-lg-none d-flex" id="mdHeader">
            <!-- Append Small Nav here -->
        </header>
        <header class="d-none d-lg-block" id="lgHeader">
            <div class="row mx-0" id="headerRow">
                <div class="col-md-8 col-12 d-flex justify-content-start align-items-center">
                    <i class="fa-solid fa-bars me-4 d-none" id="hamburger" role="button"></i>
                    <i class="fa-solid fa-xmark me-4" id="close" role="button"></i>
                    <span class="pageTitle">Dashboard</span>
                </div>

                <div class="col-md-4 d-none d-md-flex justify-content-end align-items-center">
                    <span class="accountType">Super Admin Account</span>
                </div>
            </div>
            <hr id="headerHR">
        </header>


        <!-- CONTENT START -->
        <div class="container-fluid content">
            <div class="sectionDiv">
                <div class="row gx-5 mb-1">
                    <!-- Minor Catagories -->
                    <p class="sectionTitle">General Residents</p>
                    <div class="carousel d-flex justify-content-center">
                        <!-- Mini Category1: Total Citizens -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 500px;">
                            <a href="tblTotalCitizens.php" style="background-color: #001E40; width: 100%; border-radius: 1em">
                                <div class="minorCategory" id="totalCitizens">
                                    <div class="texts w-100">
                                        <p id="whiteLbl">Total Citizens</p>
                                    </div>
                                    <div class="row m-0 align-self-end" style="z-index: 99">
                                        <div class="col-12 col-md-9 p-0">
                                            <p class="mcCount" id="citizensCount">10, 205</p>
                                        </div>
                                        <div class="col-12 col-md-3 mb-2 align-self-end p-0">
                                            <button class="btn rounded-pill" type="button" id="viewBtn">View all</button>
                                        </div>
                                    </div>
                                    <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid" src="assets/img/dashboard/mc-totalCitizens.svg" alt="Total-Citizens" id="totalCitizens-img">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category2: General Citizens -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblGeneralCitizens.php" style="background-color: #D7ECFA; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="genCitizens">
                                    <div class="texts">
                                        <p class="minorLbl">General Citizens</p>
                                        <span class="mcCount d-flex">8,644</span>
                                        <span class="percentage d-flex">85%</span>
                                    </div>
                                    <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img text-end" src="assets/img/dashboard/mc-genCitizens.png" alt="General-Citizens">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category3: Children -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblChildren.php" style="background-color: #FFE5DB; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="children">
                                    <div class="texts">
                                        <p class="minorLbl">Children</p>
                                        <span class="mcCount d-flex">510</span>
                                        <span class="percentage d-flex">5%</span>
                                    </div>
                                    <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-children.png" alt="Children">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category4: Senior Citizens -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblSeniors.php" style="background-color: #FFF4D1; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="senior">
                                    <div class="texts">
                                        <p class="minorLbl">Senior Citizens</p>
                                        <span class="mcCount d-flex">1,020</span>
                                        <span class="percentage d-flex">10%</span>
                                    </div>
                                    <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-seniorCitizens.png" alt="Senior-Citizens">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category5: PWDs -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblPWD.php" style="background-color: #DDFFF8; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="pwd">
                                    <div class="texts">
                                        <p class="minorLbl">PWDs</p>
                                        <span class="mcCount d-flex">31</span>
                                        <span class="percentage d-flex">0.3%</span>
                                    </div>
                                    <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-pwd.png" alt="PWDs">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category6: Registered Voters -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblRegistedVoters.php" style="background-color: #FFFCBB; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="registered">
                                    <div class="texts">
                                        <p class="minorLbl">Registered Voters</p>
                                        <span class="mcCount d-flex">8,391</span>
                                        <span class="percentage d-flex">82%</span>
                                    </div>
                                    <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-registered.png" alt="Registered-Voters">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category7: Unregistered Voters -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblUnregistedVoters.php" style="background-color: #F8E7F8; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="unregistered">
                                    <div class="texts">
                                        <p class="minorLbl">Unregistered Voters</p>
                                        <span class="mcCount d-flex">1,814</span>
                                        <span class="percentage d-flex">18%</span>
                                    </div>
                                    <div class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end" src="assets/img/dashboard/mc-unregistered.png" alt="Unregistered-Voters">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Categories -->
            <div class="dashCategories mx-0">
                <p class="sectionTitle">Katipunan ng Kabataan</p>
                <div class="row gx-5 p-0" style="margin: 40px 0 10px 0">
                    <!-- Category1 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblTotalYouth.php">
                            <div class="category" id="totalYouth" style="background-color: #8ECAE6">
                                <div class="texts">
                                    <h1 class="count">5402</h1>
                                    <p class="subTitle">Total Youth</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-totalYouth.png" alt="Total-Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category2 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblEnrolled.php">
                            <div class="category" id="enrolledYouth" style="background-color: #219EBC">
                                <div class="texts">
                                    <h1 class="count">3155</h1>
                                    <p class="subTitle">Enrolled Youth</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-enrolled.png" alt="Enrolled-Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category3 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblOutOfSchool.php">
                            <div class="category" id="ousYouth" style="background-color: #04496A">
                                <div class="texts">
                                    <h1 class="count">362</h1>
                                    <p class="subTitle">Out-of-school Youth</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-out-of-school.png" alt="Out-of-school Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category4 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblWorkingStudent.php">
                            <div class="category" id="workingStudent" style="background-color: #F3CB69">
                                <div class="texts">
                                    <h1 class="count">586</h1>
                                    <p class="subTitle">Working Student</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-workingStudents.png" alt="Out-of-school Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category5 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblEmployed.php">
                            <div class="category" id="employed" style="background-color: #FFB703">
                                <div class="texts">
                                    <h1 class="count">966</h1>
                                    <p class="subTitle">Employed</p>
                                </div>
                                <div class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-employed.png" alt="Employed">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category6 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblUnemployed.php">
                            <div class="category" id="unemployed" style="background-color: #FB8500">
                                <div class="texts">
                                    <h1 class="count">333</h1>
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


    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custome Script -->
    <script src="assets/js/dashboard.js"></script>
    <script type="text/javascript" src="assets/js/sideMenu.js"></script>

    <!-- Active Link -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#dashboard-link").addClass("nav-active");
        })
    </script>
</body>

</html>