<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Voters Table</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/kkis-logo.svg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <!-- BS SideNav Stylesheet -->
    <link rel="stylesheet" href="/assets/css/Sidebar-Menu-sidebar.css">
    <link rel="stylesheet" href="/assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="/assets/css/Navbar-Right-Links-icons.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/assets/css/dashboardYouthTbl.css">
</head>

<body>
    <!-- Start of Sidenav -->
    <div id="wrapper" class="sidenav">
        <div id="sidebar-wrapper" style="width: 74px;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> </li>
                <li> </li>
                <li> </li>
                <li> </li>
            </ul>
        </div>
    </div>
    <!-- End of Sidenav -->

    <!-- TITLE , BACK BTN & GRADIENT LINE-->
    <div class="row top-panel">
        <div class="col d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-md-end justify-content-lg-end justify-content-xl-end justify-content-xxl-end col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-1 col-xs-1"
            style="margin-top: 16px;margin-right: 12px;padding-right: 32px;">
            <a href="dashboard.php">
            <button class="back-tbn btn btn-primary back-btn rounded-pill" type="button"
                style="width: 50px;height: 50px;text-align: center;margin-right: -56px;padding-left: 0px;padding-right: 0px;margin-left: 55px;"><i
                    class="fas fa-arrow-left"></i>
            </button>
        </a>
        </div>

        <div class="dashboard-title col back-btn col-md-5 col-sm-1 col-xs-3"
            style="margin: 16px 0px 0px;margin-right: 65px;padding-left: 0px;padding-right: 0px;margin-left: 55px;">
            <h1 class="title" >Registered Voters</h1><img class="gradient-line" style="padding-right: 23px; padding-left: 60px;margin-bottom: 15px;padding-bottom: 20px;"
            src="/assets/img/decorative.png">
        </div>
    </div>


    <!--SORT BUTTON-->
    <div class="sort-panel row">
        <div class="sort-title col">
            <p>Sort by</p>
        </div>
        <select id="sort-btn" class="select col-4" style="margin-left: 5em;">
            <option disabled selected></option>
            <option value="A-Z">A-Z</option>
            <option value="Age">Age</option>
            <option value="Purok">Purok</option>
        </select>
    </div>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>
