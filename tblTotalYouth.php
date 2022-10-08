<?php
    $dbServername = "localhost"; //server name
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "kkis"; //database name

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); //connect to database
    $query = "SELECT * FROM residentsProfile ORDER BY residentID DESC";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Youth Table</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/kkis-logo.svg">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <!-- BS SideNav Stylesheet -->
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-sidebar.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/navDash.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/scss/dashboardYouthTbl.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <!-- Stylesheet for Titles -->
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
</head>

<body>
    <div class="navDiv">
        <?php include 'nav.php' ?>
    </div>


    <div class="wrapper">
        <div class="content">
            <!-- Start of Sidenav 
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
            End of Sidenav -->

            <!-- Page Header Starts Here -->
            <div class="row documentHeadingRow p-0 m-0">
                <div class="col d-xxl-flex justify-content-xxl-start align-items-xxl-center col-12 p-0">
                    <div class="d-flex align-items-center justify-content-start headContainer">
                        <button class="btn rounded-circle border-0 d-flex d-sm-flex d-xxl-flex justify-content-center justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-center backBtn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="backIcon" style="width: auto;height: auto;font-size: 28px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"></path>
                            </svg>
                        </button>
                        <div class="col-10 d-flex justify-content-start align-items-center p-0">
                            <span class="title title-back w-auto">Total Youth</span>
                        </div>
                    </div>
                </div>

                <div class="row m-0">
                    <div class="col p-0 mt-2"><img class="img-fluid" src="assets/img/misc/hr.svg"></div>
                </div>
            </div>
            <!-- Page Header Ends Here -->


            <!--SORT BUTTON
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
            </div>-->

            <br><br><br><br><br><br>

            <div class="pageBody">
                <div class="row">
                    <!-- TABLE -->
                    <div class="dataTable container">
                        <div class="dataPanel row">
                            <div class="col-lg-12">
                                <div class="data_table">
                                    <table id="example" class="table table-striped table-bordered display responsive nowrap"
                                        cellspacing="0" width="100%">
                                        <thead class="table-dark">
                                            <tr>
                                                <th></th>
                                                <th>Last name</th>
                                                <th>First name</th>
                                                <th>Middle name</th>
                                                <th>Suffix</th>
                                                <th>Birthdate</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Civil status</th>
                                                <th>Purok</th>
                                                <th>Actions</th>
                                            </tr>
                                            
                                        </thead>
                                        <?php
                                            while ($row = mysqli_fetch_array($result)) {
                                            echo '
                                            <tr>
                                                <td align="center"><input type="checkbox" class="checkitem"></td>
                                                <td>' . $row["lastName"] . '</td>
                                                <td>' . $row["firstName"] . '</td>
                                                <td>' . $row["middleName"] . '</td>
                                                <td>' . $row["suffix"] . '</td>
                                                <td>' . $row["birthDate"] . '</td>
                                                <td>' . $row["age"] . '</td>
                                                <td>' . $row["gender"] . '</td>
                                                <td>' . $row["civilStatus"] . '</td>
                                                <td>' . $row["purok"] . '</td>
                                                <td align="center">
                                                    <a id=' . $row["residentID"] . '" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewMore">view more</a>
                                    
                                                </td>

                                            </tr>
                                            ';
                                        }
                                        ?>

                                    </table>

                                    <!-- MODAL -->
                                    <div class="modal fade" role="dialog" tabindex="-1" id="viewMore" >
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="transform: translate(0%, 50%);">
                                                <div class="modal-body m-0 px-4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    <div class="row m-0 ">
                                                        <div class="col col-12">
                                                            <h4 class="modalAlert" style="color: #FFB703;">Other Information</h4>
                                                            <br>
                                                            <table class="modalAlert">
                                                                <thead class="table-light row" style="background-color: transparent;">
                                                                <!-- fake lang to, para lang maipakita yung itsura ng table if ever 
                                                                    connected na sa database -->   
                                                                <tr class="row">
                                                                        <th class="col-6" style="max-width:100%;">
                                                                            Birthplace
                                                                            <td class="col-6">Cabuyao, Laguna</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Religion
                                                                            <td class="col-6">Catholic</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Sex
                                                                            <td class="col-6">Female</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Educational Status
                                                                            <td class="col-6">Enrolled</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Household Monthly Salary
                                                                            <td class="col-6">90,000-100,000</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Number of People in Household
                                                                            <td class="col-6">4</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Contact Number
                                                                            <td class="col-6">09364587426</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Organization
                                                                            <td class="col-6">None</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Guardian
                                                                            <td class="col-6">Malou Pantoja</td>
                                                                        </th>
                                                                        <th class="col-6">
                                                                            Remarks
                                                                            <td class="col-6">None</td>
                                                                        </th>
                                                                    </tr>
                                                                </thead>

                                                                <?php
                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                    echo '
                                                                        <tr>
                                                                            <td align="center"><input type="checkbox" class="checkitem"></td>
                                                                            <td>' . $row["birthplace"] . '</td>
                                                                            <td>' . $row["religion"] . '</td>
                                                                            <td>' . $row["sex"] . '</td>
                                                                            <td>' . $row["educStatus"] . '</td>
                                                                            <td>' . $row["monthlySalary"] . '</td>
                                                                            <td>' . $row["peopleInHousehold"] . '</td>
                                                                            <td>' . $row["contactNum"] . '</td>
                                                                            <td>' . $row["organization"] . '</td>
                                                                            <td>' . $row["guardian"] . '</td>
                                                                            <td>' . $row["remarks"] . '</td>
                                                                            <td align="center">
                                                                            <a id=' . $row["residentID"] . '" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewMore">view more</a>                               
                                                                            </td>
                                                                        </tr>
                                                                        ';
                                                                    }
                                                                ?>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/custom1.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
</body>

</html>