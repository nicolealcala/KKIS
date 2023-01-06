<?php
// XAMPP

  include 'connection.php';

  session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Fundamental Links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
                            <a href="tblTotalCitizens.php"
                                style="background-color: #001E40; width: 100%; border-radius: 1em">
                                <div class="minorCategory" id="totalCitizens">
                                    <div class="texts w-100">
                                        <p id="whiteLbl">Total Citizens</p>
                                    </div>
                                    <div class="row m-0 align-self-end" style="z-index: 99">
                                        <div class="col-12 col-md-9 p-0">
                                            <!-- <p class="mcCount" id="citizensCount">
                                                10,102
                                            </p> -->
                                            <?php
                                                    $totalCitizens_query = "SELECT * FROM `residents`";
                                                    $totalCitizens_query_run = mysqli_query($conn,$totalCitizens_query);
                                                    if($dash_totalCitizens = mysqli_num_rows($totalCitizens_query_run)){

                                                        echo '<p class="mcCount" id="citizensCount"> '.$dash_totalCitizens.' </p>';

                                                    } else {
                                                        echo '<p class="mcCount" id="citizensCount"> No Data </p>';
                                                    }
                                            ?>
                                        </div>
                                        <div class="col-12 col-md-3 mb-2 align-self-end p-0">
                                            <button class="btn rounded-pill" type="button" id="viewBtn">View
                                                all</button>
                                        </div>
                                    </div>
                                    <div
                                        class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid" src="assets/img/dashboard/mc-totalCitizens.svg"
                                            alt="Total-Citizens" id="totalCitizens-img">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category2: General Citizens -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblGeneralCitizens.php"
                                style="background-color: #D7ECFA; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="genCitizens">
                                    <div class="texts">
                                        <p class="minorLbl">General Citizens</p>
                                        <span class="mcCount d-flex">8,644</span>
                                        <span class="percentage d-flex">85%</span>
                                    </div>
                                    <div
                                        class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img text-end"
                                            src="assets/img/dashboard/mc-genCitizens.png" alt="General-Citizens">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category3: Children -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblChildren.php"
                                style="background-color: #FFE5DB; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="children">
                                    <div class="texts">
                                        <p class="minorLbl">Children</p>
                                        <span class="mcCount d-flex">510</span>

                                        <?php

                                        ?>
                                        <span class="percentage d-flex">5%</span>
                                    </div>
                                    <div
                                        class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end"
                                            src="assets/img/dashboard/mc-children.png" alt="Children">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category4: Senior Citizens -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblSeniors.php"
                                style="background-color: #FFF4D1; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="senior">
                                    <div class="texts">
                                        <p class="minorLbl">Senior Citizens</p>
                                        <span class="mcCount d-flex">1,020</span>
                                        <span class="percentage d-flex">10%</span>
                                    </div>
                                    <div
                                        class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end"
                                            src="assets/img/dashboard/mc-seniorCitizens.png" alt="Senior-Citizens">
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
                                        <?php
                                            $disability_query = "SELECT `disability` FROM `residents` WHERE `disability` != 'None'";
                                            $disability_query_run = mysqli_query($conn,$disability_query);
                                            if($dash_disability = mysqli_num_rows($disability_query_run)){

                                                echo '<p class="mcCount d-flex"> '.$dash_disability.' </p>';

                                            } else {
                                                echo '<p class="mcCount d-flex"> 0 </p>';
                                            }
                                        ?>

                                        <!-- PERCENTAGE IS TAKEN FROM TOTAL NUMBER OF CITIZENS (a/b)*100 -->
                                        <?php

                                            $totalCitizens = "SELECT * FROM `residents`";
                                            $totalCitizens_comp = mysqli_query($conn,$totalCitizens);
                                            $dash_totalCitizens_comp = mysqli_num_rows($totalCitizens_comp);

                                            $disability_query = "SELECT `disability` FROM `residents` WHERE `disability` != 'None'";
                                            $disability_query_run = mysqli_query($conn,$disability_query);
                                            if($dash_disability = mysqli_num_rows($disability_query_run)){

                                            $percentage = ($dash_disability / $dash_totalCitizens_comp) * 100;
                                            $percentage_converted = intval($percentage);
                                            settype($percentage,'int');
                                                echo '<p class="percentage d-flex"> '.$percentage.'% </p>';

                                            } else {
                                                $percentage = ($dash_disability / $dash_totalCitizens_comp) * 100;
                                                $percentage_converted = intval($percentage);
                                                settype($percentage,'int');
                                                echo '<p class="percentage d-flex"> '.$percentage.'% </p>';
                                            }
                                        ?>
                                    </div>
                                    <div
                                        class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end"
                                            src="assets/img/dashboard/mc-pwd.png" alt="PWDs">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category6: Registered Voters -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblRegistedVoters.php"
                                style="background-color: #FFFCBB; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="registered">
                                    <div class="texts">
                                        <p class="minorLbl">Registered Voters</p>
                                        <?php
                                            $voterType_query = "SELECT `voter_type` FROM `residents` WHERE `voter_type` = 'Registered'";
                                            $voterType_query_run = mysqli_query($conn,$voterType_query);
                                            if($dash_voterType = mysqli_num_rows($voterType_query_run)){

                                                echo '<p class="mcCount d-flex"> '.$dash_voterType.' </p>';

                                            } else {
                                                echo '<p class="mcCount" id="citizensCount"> No Data </p>';
                                            }
                                        ?>
                                        <?php

                                            $totalCitizens = "SELECT * FROM `residents`";
                                            $totalCitizens_comp = mysqli_query($conn,$totalCitizens);
                                            $dash_totalCitizens_comp = mysqli_num_rows($totalCitizens_comp);

                                            $voterType_query = "SELECT `voter_type` FROM `residents` WHERE `voter_type` = 'Registered'";
                                            $voterType_query_run = mysqli_query($conn,$voterType_query);
                                            if($dash_voterType = mysqli_num_rows($voterType_query_run)){

                                            $percentage = ($dash_voterType / $dash_totalCitizens_comp) * 100;
                                            $percentage_converted = intval($percentage);
                                            settype($percentage,'int');
                                                echo '<p class="percentage d-flex"> '.$percentage.'% </p>';

                                            } else {
                                                $percentage = ($dash_voterType / $dash_totalCitizens_comp) * 100;
                                                $percentage_converted = intval($percentage);
                                                settype($percentage,'int');
                                                echo '<p class="percentage d-flex"> '.$percentage.'% </p>';
                                            }
                                        ?>
                                    </div>
                                    <div
                                        class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end"
                                            src="assets/img/dashboard/mc-registered.png" alt="Registered-Voters">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Mini Category7: Unregistered Voters -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 300px;">
                            <a href="tblUnregistedVoters.php"
                                style="background-color: #F8E7F8; width: 100%; border-radius: 1em;">
                                <div class="minorCategory row" id="unregistered">
                                    <div class="texts">
                                        <p class="minorLbl">Unregistered Voters</p>
                                        <?php
                                            $voterType_query = "SELECT `voter_type` FROM `residents` WHERE `voter_type` = 'Unregistered'";
                                            $voterType_query_run = mysqli_query($conn,$voterType_query);
                                            if($dash_voterType = mysqli_num_rows($voterType_query_run)){

                                                echo '<p class="mcCount d-flex"> '.$dash_voterType.' </p>';

                                            } else {
                                                echo '<p class="mcCount" id="citizensCount"> No Data </p>';
                                            }
                                        ?>

                                        <!-- PERCENTAGE IS FROM NUMBER OF RESIDENTS -->
                                        <?php

                                            $totalCitizens = "SELECT * FROM `residents`";
                                            $totalCitizens_comp = mysqli_query($conn,$totalCitizens);
                                            $dash_totalCitizens_comp = mysqli_num_rows($totalCitizens_comp);

                                            $voterType_query = "SELECT `voter_type` FROM `residents` WHERE `voter_type` = 'Unregistered'";
                                            $voterType_query_run = mysqli_query($conn,$voterType_query);
                                            if($dash_voterType = mysqli_num_rows($voterType_query_run)){

                                            $percentage = ($dash_voterType / $dash_totalCitizens_comp) * 100;
                                            $percentage_converted = intval($percentage);
                                            settype($percentage,'int');
                                                echo '<p class="percentage d-flex"> '.$percentage.'% </p>';

                                            } else {
                                                $percentage = ($dash_voterType / $dash_totalCitizens_comp) * 100;
                                                $percentage_converted = intval($percentage);
                                                settype($percentage,'int');
                                                echo '<p class="percentage d-flex"> '.$percentage.'% </p>';
                                            }
                                        ?>
                                    </div>
                                    <div
                                        class="miniImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                        <img class="img-fluid mc-img d-flex align-items-end"
                                            src="assets/img/dashboard/mc-unregistered.png" alt="Unregistered-Voters">
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
                                <div
                                    class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-totalYouth.png"
                                        alt="Total-Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category2 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblEnrolled.php">
                            <div class="category" id="enrolledYouth" style="background-color: #219EBC">
                                <div class="texts">
                                    <!-- <h1 class="count">3155</h1> -->
                                    <?php
                                        $enrolled_query = "SELECT `student_status` FROM `educational_info` WHERE `student_status` = 'ENROLLED'";
                                        $enrolled_query_run = mysqli_query($conn,$enrolled_query);
                                        if($dash_enrolled = mysqli_num_rows($enrolled_query_run)){

                                            echo '<h1 class="count"> '.$dash_enrolled.' </h1>';

                                        } else {
                                            echo '<p class="mcCount" id="citizensCount"> No Data </p>';
                                        }
                                    ?>
                                    <p class="subTitle">Enrolled Youth</p>
                                </div>
                                <div
                                    class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-enrolled.png"
                                        alt="Enrolled-Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category3 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblOutOfSchool.php">
                            <div class="category" id="ousYouth" style="background-color: #04496A">
                                <div class="texts">
                                    <?php
                                        $enrolled_query = "SELECT `student_status` FROM `educational_info` WHERE `student_status` = 'Out-of-school youth'";
                                        $enrolled_query_run = mysqli_query($conn,$enrolled_query);
                                        if($dash_enrolled = mysqli_num_rows($enrolled_query_run)){

                                            echo '<h1 class="count"> '.$dash_enrolled.' </h1>';

                                        } else {
                                            echo '<p class="mcCount" id="citizensCount"> No Data </p>';
                                        }
                                    ?>
                                    <p class="subTitle">Out-of-school Youth</p>
                                </div>
                                <div
                                    class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-out-of-school.png"
                                        alt="Out-of-school Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category4 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblWorkingStudent.php">
                            <div class="category" id="workingStudent" style="background-color: #F3CB69">
                                <div class="texts">
                                    <?php
                                        $enrolled_query = "SELECT `student_status` FROM `educational_info` WHERE `student_status` = 'Working Student'";
                                        $enrolled_query_run = mysqli_query($conn,$enrolled_query);
                                        if($dash_enrolled = mysqli_num_rows($enrolled_query_run)){

                                            echo '<h1 class="count"> '.$dash_enrolled.' </h1>';

                                        } else {
                                            echo '<p class="mcCount" id="citizensCount"> No Data </p>';
                                        }
                                    ?>
                                    <p class="subTitle">Working Student</p>
                                </div>
                                <div
                                    class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-workingStudents.png"
                                        alt="Out-of-school Youth">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category5 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblEmployed.php">
                            <div class="category" id="employed" style="background-color: #FFB703">
                                <div class="texts">
                                    <?php
                                        $employment_query = "SELECT `employment_status` FROM `employment_info` WHERE `employment_status` = 'Employed'";
                                        $employment_query_run = mysqli_query($conn,$employment_query);
                                        if($dash_employment = mysqli_num_rows($employment_query_run)){

                                            echo '<h1 class="count"> '.$dash_employment.' </h1>';

                                        } else {
                                            echo '<p class="mcCount" id="citizensCount"> No Data </p>';
                                        }
                                    ?>
                                    <p class="subTitle">Employed</p>
                                </div>
                                <div
                                    class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-employed.png"
                                        alt="Employed">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Category6 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
                        <a href="tblUnemployed.php">
                            <div class="category" id="unemployed" style="background-color: #FB8500">
                                <div class="texts">
                                    <?php
                                        $employment_query = "SELECT `employment_status` FROM `employment_info` WHERE `employment_status` = 'Unemployed'";
                                        $employment_query_run = mysqli_query($conn,$employment_query);
                                        if($dash_employment = mysqli_num_rows($employment_query_run)){

                                            echo '<h1 class="count"> '.$dash_employment.' </h1>';

                                        } else {
                                            echo '<p class="mcCount" id="citizensCount"> No Data </p>';
                                        }
                                    ?>
                                    <p class="subTitle">Unemployed</p>
                                </div>
                                <div
                                    class="dashboardImg d-flex justify-content-end align-items-end justfy-content-sm-center">
                                    <img class="img-fluid c-img" src="assets/img/dashboard/c-unemployed.png"
                                        alt="Employed">
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
        $(document).ready(function () {
            $("#dashboard-link").addClass("nav-active");
            $("#dashboard-md-link").addClass("nav-md-active");
        })
    </script>
</body>

</html>