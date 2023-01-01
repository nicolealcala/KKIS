<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Declared Household</title>

    <!-- Fundamental links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/households.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <link rel="stylesheet" href="assets/scss/mq-sidenavmods.css">

    <!-- Virtual Select JS library -->
    <link rel="stylesheet" href="assets/css/virtual-select.min.css">

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <div id="left">
        <?php include 'sidenav.php'; ?>
    </div>

    <div id="right">
        <div id="rc">
            <div id="grey">
            </div>
        </div>

        <div id="pageContent">
            <div class="mainContainer">
                <header id="header">
                    <div class="row headerRow">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
                            <span id="expand" style="font-size:15px;cursor:pointer;color: #04496A;" onclick="openNav()">
                                <i class="fa-solid fa-bars fa-2xl w-auto"></i>
                            </span>
                            <span id="expandMobile" style="font-size:15px;cursor:pointer;color: #04496A;" onclick="">
                                <i class="fa-solid fa-bars fa-2xl w-auto"></i>
                            </span>
                            <span id="collapse" style="font-size:18px;cursor:pointer;color: #04496A;" onclick="closeNav()">
                                <i class="fa-solid fa-xmark fa-2xl w-auto"></i>
                            </span>
                            <span id="collapseMobile" style="font-size:18px;cursor:pointer;color: #04496A;" onclick=" ">
                                <i class="fa-solid fa-xmark fa-2xl w-auto">
                                </i>
                            </span>
                            <span id="pageTitle" class="title longTitle">Declared Households</span>
                        </div>
                        <div id="divAccountType" class="col-lg-4 col-md-4 d-none d-md-flex align-items-md-center">
                            <span class="accountType d-flex justify-content-end">Super Admin Account</span>
                        </div>
                    </div>
                    <!-- <img src="assets/img/decorative.svg" alt="hr" class="img-fluid w-100 d-flex"> -->
                    <hr id="headerHR">
                </header>

                <!-- CONTENT START -->
                <div class="container-fluid content">
                    <!-- Menu Buttons -->
                    <div class="row d-flex justify-content-end align-ittems-center m-0">
                        <button class="menuBtn menu1 rounded-pill clicked" id="families">Families</button>
                        <button class="menuBtn menu2 rounded-pill" id="overview">Overview</button>
                    </div>

                    <!-- Table -->
                    <div class="sectionDiv mx-0 mt-4" id="familiesBody">
                        <!-- Options Row -->
                        <div class="row gx-5 m-0 mb-1">
                            <!-- Show No. of Rows -->
                            <div class="col-lg-12 col-md-4 col-sm-6 col-12 d-flex align-items-center my-1 p-0" id="familiesLength"></div>
                            <!-- Output Buttons -->
                            <div class="d-none col-lg-6 d-lg-flex justify-content-lg-start p-0" id="familiesOutput"></div>
                            <!-- Filter -->
                            <div class="d-md-flex align-items-center col-lg-3 col-md-4 d-none">
                                <select class="selectpicker" multiple name="filter" data-live-search="true" title="Filter" placeholder="Filter" id="filtering">
                                    <optgroup label="Members">
                                        <option value="Less than 5">Less than 5</option>
                                        <option value="5 to 10">5 to 10</option>
                                        <option value="11 to 15">11 to 15</option>
                                        <option value="16 to 20">16 to 20</option>
                                        <option value="More than 20">More than 20</option>
                                    </optgroup>
                                    <optgroup label="Remarks">
                                        <option value="Purok Leader">Purok Leader</option>
                                        <option value="SK Scholar">SK Scholar</option>
                                        <option value="Solo Living">Solo Living</option>
                                        <option value="Solo Parent">Solo Parent</option>
                                        <option value="Teenage Pregnancy">Teenage Pregnancy</option>
                                    </optgroup>
                                </select>
                            </div>
                            <!-- Search -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0 align-middle" id="familiesSearch"></div>
                        </div>

                        <!-- Table start   -->
                        <table class="table table-stripped table-bordered dataTable responsive display nowrap no-footer dtr-inline collapsed printTable" role="grid" cellspacing="0" id="familiesTbl" style="width:100%">
                            <thead class="headTitle">
                                <tr>
                                    <th>Household ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Birthday</th>
                                    <th>Purok</th>
                                    <th>Members</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $householdMember = "SELECT households.household_id, CONCAT(`first_name`, ' ', `middle_name`, ' ', `last_name`) AS `full_name`, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS `age`, `birthday`, `purok`, `members_count` FROM `households` INNER JOIN `residents` ON households.household_id = residents.household_id WHERE NOT households.hencrypted_id = residents.rencrypted_id ORDER BY households.household_id ASC";
                                $isMember = executeQuery($householdMember);
                                
                                $householdHead = "SELECT households.household_id, CONCAT(`first_name`, ' ', `middle_name`, ' ', `last_name`) AS `full_name`, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS `age`, `birthday`, `purok`, `members_count`, `head_remarks` FROM `households` INNER JOIN `residents` ON households.hencrypted_id = residents.rencrypted_id ORDER BY households.household_id ASC";
                                $isHead = executeQuery($householdHead);

                                if ($isHead) {
                                    while ($rowHead = mysqli_fetch_array($isHead)) {
                                        echo '
                                            <tr style="background-color: #EFF0FA">
                                            <td class="entryRow" scope="col" data-label="ID">' . $rowHead["household_id"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Name">' . $rowHead["full_name"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Age">' . $rowHead["age"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Birthday">' . $rowHead["birthday"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Purok">' . $rowHead["purok"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Members">' . $rowHead["members_count"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Remarks">' . $rowHead["head_remarks"] . '</td>
                                            </tr>
                                            ';
                                    }
                                }

                                if ($isMember) {
                                    while ($rowMember = mysqli_fetch_array($isMember)) {
                                        echo '
                                            <tr>
                                            <td class="entryRow" scope="col" data-label="ID">' . $rowMember["household_id"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Name">' . $rowMember["full_name"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Age">' . $rowMember["age"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Birthday">' . $rowMember["birthday"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Purok">' . $rowMember["purok"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Members">' . $rowMember["members_count"] . '</td>
                                                <td class="entryRow" scope="col" data-label="Remarks">' . ' '. '</td>
                                            </tr>
                                            ';
                                    }
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="sectionDiv d-none m-3" id="overviewBody">
                        <div class="overviewDiv">
                            <canvas id="overviewChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <!-- Virtual Select JS -->
    <script type="text/javascript" src="assets/js/virtual-select.min.js"></script>

    <!-- Data tables -->
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/households.js"></script>

    <!-- Nav -->
    <script src="assets/js/sidenav.js"></script>
</body>

</html>