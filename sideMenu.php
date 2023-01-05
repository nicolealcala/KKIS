<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Navigation</title>

    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/sideMenu.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body>
    <div class="sideNav d-none d-lg-block">
        <div class="logoDiv my-4 d-flex justify-content-center align-items-center p-0">
            <img class="img-fluid" src="assets/img/logos/kkis-logo.png" alt="" id="logoContainer">
            <span id="logoTxt">KKIS</span>
        </div>

        <hr>

        <!-- Page Links -->
        <div class="row mx-0 my-4 p-0">
            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0" id="dashboard-link">
                <a href="./dashboard.php" class="d-flex justify-content-start align-items-center">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-3">
                        <i class="icon fa-solid fa-chart-column" id="dashIcon"></i>
                    </div>
                    <span class="linkTitle" id="dashTxt">Dashboard</span>
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./households.php" class="d-flex justify-content-start align-items-center" id="households-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-3">
                        <i class="icon fa-solid fa-house-chimney-user"></i>
                    </div>
                    <span class="linkTitle">Declared Households</span>
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./profiles.php" class="d-flex justify-content-start align-items-center" id="profiles-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-3">
                        <i class="icon fa-solid fa-user-group"></i>
                    </div>
                    <span class="linkTitle">Profiles</span>
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./addEntry.php" class="d-flex justify-content-start align-items-center" id="add-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-3">
                        <i class="icon fa-solid fa-user-plus"></i>
                    </div>
                    <span class="linkTitle" id="add-txt">Add New Entry</span>
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./kkid.php" class="d-flex justify-content-start align-items-center" id="kkid-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-3">
                        <i class="icon fa-regular fa-id-card"></i>
                    </div>
                    <span class="linkTitle">KK ID Card</span>
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./transactions.php" class="d-flex justify-content-start align-items-center" id="transactions-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-3">
                        <i class="icon fa-solid fa-clock-rotate-left"></i>
                    </div>
                    <span class="linkTitle">Transaction History</span>
                </a>
            </div>
        </div>

        <hr>

        <!-- Settings and Log out -->
        <div class="row mx-0 p-0" id="botOptions">
            <div class="col-12 my-1 p-0">
                <a href="./settings-user-manual.php">
                    <span class="linkTitle">Settings</span>
                </a>
            </div>

            <hr>
            <div class="col-12 my-1 p-0">
                <a href="./index.php">
                    <span class="linkTitle">Log out</span>
                </a>
            </div>
            <hr>
        </div>

        <!-- Copyright -->
        <footer>
            <p style="font-size: 14px; color: #808080">Copyright Here</p>
        </footer>
    </div>

    <!-- SMALL SCREEN NAV -->
    <nav class="d-flex d-lg-none navbar navbar-expand-lg navbar-light" id="smallNav">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#"><img class="me-3" src="assets/img/logos/kkis-brand.png" alt="">KKIS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#smallNavMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="smallNavMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./dashboard.php" id="dashboard-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./households.php" id="households-link">Declared Households</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profiles.php" id="profiles-link">Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./addEntry.php" id="add-link">Add New Entry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./kkid.php" id="kkid-link">KK ID Card</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./transactions.php" id="transactions-link">Transaction History</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/sideMenu.js"></script>
</body>

</html>