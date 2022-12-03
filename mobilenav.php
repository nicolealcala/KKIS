<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile nav</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/scss/mobilenav2.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/gotham-black" rel="stylesheet">
</head>
<body>
    <div class="navContainer">
        <div id="mobNav">
            <!-- Row1 -->
            <div class="row">
                <!-- Dashboard -->
                <div class="" id="dashboard">
                    <a href="./dashboard.php">
                        <div class="tab col-3">
                            <div class="tabIcon">
                                <img src="./assets/img/navbar2/Dashboard_gray.svg" alt="">
                            </div>
                            <div class="tabName">Dashboard</div>
                        </div>
                    </a>
                </div>
                
                <!-- Declared Household -->
                <div class="" id="declaredHouseholds">
                    <a href="./households.php">
                        <div class="tab col-3">
                            <div class="tabIcon">
                                <img src="./assets/img/navbar2/Declared-Households_gray.svg" alt="">
                            </div>
                            <div class="tabName">Declared Households</div>
                        </div>
                    </a>
                </div>
                
                <!-- Profiles -->
                <div class="" id="profiles">
                    <a href="./profiles.php">
                        <div class="tab col-3">
                            <div class="tabIcon">
                                <img src="./assets/img/navbar2/Profiles_gray.svg" alt="">
                            </div>
                            <div class="tabName">Profiles</div>
                        </div>
                    </a>
                </div>
                
                <!-- Add New Entry -->
                <div class="" id="addNewEntry">
                    <a href="./addEntry.php">
                        <div class="tab col-3">
                            <div class="tabIcon">
                                <img src="./assets/img/navbar2/Add-New-Entry_gray.svg" alt="">
                            </div>
                            <div class="tabName">Add New Entry</div>
                        </div>
                    </a>
                </div>
                
            </div>

            <!-- Row2 -->
            <div class="row">
                <!-- Records -->
                <div id="records">
                    <a href="#">
                        <div class="tab col-3">
                            <div class="tabIcon">
                                <img src="./assets/img/navbar2/Records_gray.svg" alt="">
                            </div>
                            <div class="tabName">Records</div>
                        </div>
                    </a>
                </div>
                
                <!-- KK ID Card -->
                <div id="kkid">
                    <a href="./kkid.php">
                        <div class="tab col-3">
                            <div class="tabIcon">
                                <img src="./assets/img/navbar2/KK-ID-Card_gray.svg" alt="">
                            </div>
                            <div class="tabName">KK ID Card</div>
                        </div>
                    </a>
                </div>
                
                <!-- Transaction History -->
                <div id="transactionHistory">
                    <a href="./transactions.php">
                        <div class="tab col-3">
                            <div class="tabIcon">
                                <img src="./assets/img/navbar2/Transaction-History_gray.svg" alt="">
                            </div>
                            <div class="tabName">Transaction History</div>
                        </div>
                    </a>
                </div>

                <!-- About & Logout -->
                <div class="divAboutLogout col-3">
                    <!-- About -->
                    <a href="#">
                        <div class="aboutLogout">
                            <div class="tabName">About</div>
                        </div>
                    </a>
                    <!-- Log out -->
                    <a href="./index.php">
                        <div class="aboutLogout">
                            <span class="tabName">Log out</span>
                            <span class="tabIcon">
                                <img src="./assets/img/navbar2/Log-out.svg" alt="">
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</body>
</html>