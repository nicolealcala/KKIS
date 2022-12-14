<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Navigation</title>

    <!-- Fundamental Links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />



    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/sideMenu.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/kkis.ico">



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
            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./dashboard.php" class="d-flex justify-content-start align-items-center" id="dashboard-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-2">
                        <i class="icon fa-solid fa-chart-column" id="dashIcon"></i>
                    </div>
                    Dashboard
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./households.php" class="d-flex justify-content-start align-items-center" id="households-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-2">
                        <i class="icon fa-solid fa-house-chimney-user" id="householdsIcon"></i>
                    </div>
                    Declared Households
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./profiles-kabataan.php" class="d-flex justify-content-start align-items-center" id="profiles-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-2">
                        <i class="icon fa-solid fa-user-group" id="profilesIcon"></i>
                    </div>
                    Profiles
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./addEntry.php" class="d-flex justify-content-start align-items-center" id="add-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-2">
                        <i class="icon fa-solid fa-user-plus" id="addEntryIcon"></i>
                    </div>
                    Add New Entry
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./kkid.php" class="d-flex justify-content-start align-items-center" id="kkid-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-2">
                        <i class="icon fa-regular fa-id-card" id="kkidIcon"></i>
                    </div>
                    KK ID Card
                </a>
            </div>

            <div class="col-12 d-flex justify-content-start align-items-center my-3 p-0">
                <a href="./transactions.php" class="d-flex justify-content-start align-items-center" id="transactions-link">
                    <div class="iconContainer d-flex justify-content-start align-items-center me-2">
                        <i class="icon fa-solid fa-clock-rotate-left" id="transacIcon"></i>
                    </div>
                    Transaction History
                </a>
            </div>
        </div>

        <hr>

        <!-- Settings and Log out -->
        <div class="row mx-0 p-0" id="botOptions">
            <div class="col-12 my-1 p-0">
                <a href="./settings-user-manual.php">
                    Settings
                </a>
            </div>

            <hr>
            <div class="col-12 my-1 p-0">
                <a href="./index.php">
                    Log out
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
            <a class="navbar-brand d-flex align-items-center" href="#"><img class="me-1" src="assets/img/logos/kkis-brand.svg" alt="" width="50px" height="50px">KKIS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#smallNavMenu" aria-controls="smallNavMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="smallNavMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard.php" id="dashboard-md-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./households.php" id="households-md-link">Declared Households</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profiles.php" id="profiles-md-link">Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./addEntry.php" id="add-md-link">Add New Entry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./kkid.php" id="kkid-md-link">KK ID Card</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./transactions.php" id="transactions-md-link">Transaction History</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link nav-md-link" href="./settings-user-manual.php" id="transactions-md-link">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-md-link" href="./index.php" id="transactions-md-link">Log out</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/sideMenu.js"></script>
</body>

</html>