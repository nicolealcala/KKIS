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
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/scss/dashboardYouthTbl.css">
    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <!-- Stylesheet for Titles -->
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
</head>

<body>

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

            <!-- TITLE , BACK BTN & GRADIENT LINE-->
            <div class="top-panel row">
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
                    <h1 class="title">Total Youth</h1>
                    <div>
                        <img class="gradient-line"
                            style="padding-right: 23px; padding-left: 60px;margin-bottom: 15px;padding-bottom: 20px;"
                            src="assets/img/decorative.png">
                    </div>
                </div>
            </div>


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
            </div> -->

            <br><br><br><br><br><br>
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