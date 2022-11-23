<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav2</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/scss/nav2.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/gotham-black" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div id="sideNav">
            <!-- Logo -->
            <div class="logoDiv">
                <img src="./assets/img/navbar2 img/KKIS-logo.svg" alt="">
                <span>KKIS</span>
            </div>

            <!-- <hr id="navHR"> -->
            <!-- Tabs -->
            <div class="navLink">
                <!-- Dashboard -->
                <a href="#">
                    <div class="tab">
                        <span class="tabIcon">
                            <img src="./assets/img/navbar2/Dashboard_gray.svg" alt="">
                        </span>
                        <span class="tabName">Dashboard</span>
                    </div>
                </a>
                <!-- Declared Household -->
                <a href="#">
                    <div class="tab">
                        <span class="tabIcon">
                            <img src="./assets/img/navbar2/Declared-Households_gray.svg" alt="">
                        </span>
                        <span class="tabName">Declared Households</span>
                    </div>
                </a>
                <!-- Profiles -->
                <a href="#">
                    <div class="tab">
                        <span class="tabIcon">
                            <img src="./assets/img/navbar2/Profiles_gray.svg" alt="">
                        </span>
                        <span class="tabName">Profiles</span>
                    </div>
                </a>
                <!-- Add New Entry -->
                <a href="#">
                    <div class="tab">
                        <span class="tabIcon">
                            <img src="./assets/img/navbar2/Add-New-Entry_gray.svg" alt="">
                        </span>
                        <span class="tabName">Add New Entry</span>
                    </div>
                </a>
                <!-- Records -->
                <a href="#">
                    <div class="tab">
                        <span class="tabIcon">
                            <img src="./assets/img/navbar2/Records_gray.svg" alt="">
                        </span>
                        <span class="tabName">Records</span>
                    </div>
                </a>
                <!-- KK ID Card -->
                <a href="#">
                    <div class="tab">
                        <span class="tabIcon">
                            <img src="./assets/img/navbar2/KK-ID-Card_gray.svg" alt="">
                        </span>
                        <span class="tabName">KK ID Card</span>
                    </div>
                </a>
                <!-- Transaction History -->
                <a href="#">
                    <div class="tab">
                        <span class="tabIcon">
                            <img src="./assets/img/navbar2/Transaction-History_gray.svg" alt="">
                        </span>
                        <span class="tabName">Transaction History</span>
                    </div>
                </a>
            </div>

            <!-- <hr id="navHR"> -->

            <!-- About & Log out -->
            <div id="bottomNav">
                <!-- About -->
                <a href="#">
                    <div id="aboutBtn">
                        <span class="tabName">About</span>
                    </div>
                </a>
                <!-- Log out -->
                <a href="#">
                    <div id="logOutBtn">
                        <span class="tabName">Log out</span>
                        <span class="tabIcon">
                            <img src="./assets/img/navbar2/Log-out.svg" alt="">
                        </span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Rounded corner -->
        <div class="roundedCorner">
            <div class="grey"></div>
        </div>
    </div>

    <!-- Script -->
    <!-- <script src="nav2.js"></script> -->
</body>
</html>