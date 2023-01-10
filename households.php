<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Declared Household</title>

    <!-- Bootstrap-Select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/households.css">
    <!-- <link rel="stylesheet" href="assets/scss/mediaquery.css"> -->
    <link rel="stylesheet" href="assets/scss/sideMenu.css">

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

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
                    <span class="pageTitle">Declared Households</span>
                </div>

                <div class="col-md-4 d-none d-md-flex justify-content-end align-items-center">
                    <span class="accountType">Super Admin Account</span>
                </div>
            </div>
            <hr id="headerHR">
        </header>

        <!-- CONTENT START -->
        <div class="container-fluid content">
            <!-- Menu Buttons -->
            <div class="row d-none d-sm-flex justify-content-end align-items-center m-0" id="menuRow">
                <button class="menuBtn menu1 rounded-pill menu-active me-3" id="menu1">Families</button>
                <button class="menuBtn menu2 rounded-pill" id="menu2">Overview</button>
            </div>

            <!-- Data Table -->
            <div class="sectionDiv mx-0 mt-4" id="familiesBody">
                <!-- Options Row -->
                <div class="row gx-5 m-0 mb-1">
                    <!-- Show No. of Rows -->
                    <div class="col-lg-12 col-md-4 col-sm-6 col-12 d-flex align-items-center my-1 p-0" id="familiesLength"></div>
                    <!-- Output Buttons -->
                    <div class="d-none col-lg-6 d-lg-flex justify-content-lg-start p-0" id="familiesOutput">
                        <!-- Append Buttons Here -->
                    </div>
                    <!-- Filter -->
                    <div class="d-md-flex align-items-center col-lg-3 col-md-4 d-none"></div>
                    <!-- Search -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-0" id="familiesSearch"></div>
                </div>

                <!-- Table start   -->
                <table class="table table-stripped table-bordered dataTable table-hover display nowrap no-footer dtr-inline collapsed printTable" role="grid" cellspacing="0" id="familiesTbl" style="width:100%">
                    <thead class="tblHeadRow">
                        <tr>
                            <th class="tblHead">ID</th>
                            <th class="tblHead">Name</th>
                            <th class="tblHead">Age</th>
                            <th class="tblHead">Birthday</th>
                            <th class="tblHead">Purok</th>
                            <th class="tblHead">Members</th>
                            <th class="tblHead">Remarks</th>
                        </tr>


                    </thead>

                    <thead id="familiesTblHead">
                        <tr>
                            <!-- <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th> -->
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $filterMembers = "SELECT households.household_id, CONCAT(`last_name`, ', ', `first_name`) AS `full_name`, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS `age`, `birthday`, `purok`, `members_count`, `head_remarks` FROM `households` INNER JOIN `residents` ON households.hencrypted_id = residents.rencrypted_id ORDER BY households.household_id ASC";

                        $householdMember = "SELECT households.household_id, CONCAT(`last_name`, ', ', `first_name`) AS `full_name`, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS `age`, `birthday`, `purok`, `members_count` FROM `households` INNER JOIN `residents` ON households.household_id = residents.household_id WHERE NOT households.hencrypted_id = residents.rencrypted_id ORDER BY households.household_id ASC";
                        $isMember = executeQuery($householdMember);

                        $householdHead = "SELECT households.household_id, CONCAT(`last_name`, ', ', `first_name`) AS `full_name`, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS `age`, `birthday`, `purok`, `members_count`, `head_remarks` FROM `households` INNER JOIN `residents` ON households.hencrypted_id = residents.rencrypted_id ORDER BY households.household_id ASC";
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
                                </tr>';
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
                                    <td class="entryRow" scope="col" data-label="Remarks">' . '' . '</td>
                                </tr>';
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr id="familiesFooter">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="sectionDiv d-none m-3" id="overviewBody">
                <div class="overviewDiv">
                    <canvas id="overviewChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <!-- Bootstrap-select -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

    <!-- Data tables -->
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/households.js"></script>
    <script type="text/javascript" src="assets/js/sideMenu.js"></script>

    <!-- Active Link -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#households-link").addClass('nav-active');
            $("#households-md-link").addClass("nav-md-active");
        })
    </script>
</body>

</html>