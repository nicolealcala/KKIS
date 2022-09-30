<?php
    $dbServername = "localhost"; //server name
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "KKIS"; //database name

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); //connect to database
    $query = "SELECT * FROM residentsProfile ORDER BY residentID ASC"; //query to select all data from table
    $result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kabataan Profile</title>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Page Stylesheets -->
    <link rel="stylesheet" href="assets/scss/kabataanProfile.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- Bootstrap-Select library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <!-- nav.css -->
    <link rel="stylesheet" href="assets/css/navResiProf.css">

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <!-- Nav -->
    <div class="navDiv">
        <?php include 'nav.php' ?>
    </div>

    <div id="wrapper">
        <div class="container-fluid content">
            <!-- Copy this to all pages-->
            <div class="row documentHeadingRow p-0 m-0">
                <div class="col d-flex align-self-center justify-content-xxl-start align-items-xxl-center col-12 p-0">
                    <h1 class="d-xxl-flex title" id="titleAddEntry">Kabataan Profile</h1>
                </div>
            </div>
            <div class="row m-0">
                <div class="col p-0"><img class="img-fluid" src="assets/img/misc/hr.svg"></div>
            </div>
            <!-- Copy End -->
            <div class="pageBody">
                <!-- Filter and Search -->
                <div class="row sortSearch m-0 mt-4 gx-4">
                    <!-- Filter -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 filterGroup d-flex justify-content-end align-items-center">
                        <select class="selectpicker text-uppercase w-100" data-live-search="true" title="Filter" id="filtering" multiple>
                            <optgroup label="Age" data-max-options="1">
                                <option value="bet1419">14-19 Years old</option>
                                <option value="bet2029">20-29 Years old</option>
                            </optgroup>
                            <optgroup label="Gender Preference" data-max-options="1">
                                <option value="man">Man</option>
                                <option value="woman">Woman</option>
                                <option value="trans">Transgender</option>
                                <option value="non">Non-binary/Non-conforming</option>
                            </optgroup>
                            <optgroup label="Marital Status" data-max-options="1">
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="livein">Live-in</option>
                                <option value="separated">Separated</option>
                                <option value="annuled">Annuled</option>
                                <option value="widowed">Widowed</option>
                            </optgroup>
                            <!-- <optgroup label="Purok" data-max-options="1">
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="livein">Live-in</option>
                                <option value="separated">Separated</option>
                                <option value="annuled">Live-in</option>
                                <option value="widow">Widowed</option>
                            </optgroup> -->
                            <optgroup label="Educational Status" data-max-options="1">
                                <option value="enrolled">Enrolled</option>
                                <option value="ousYouth">Out-of-School Youth</option>
                                <option value="workingStudent">Working Student</option>
                            </optgroup>
                            <optgroup label="Educational Level" data-max-options="1">
                                <option value="preElem">Pre-elementary</option>
                                <option value="elem">Elementary</option>
                                <option value="jhs">Junior High School</option>
                                <option value="shs">Senior High School</option>
                                <option value="als">Alternative Learning System</option>
                                <option value="dc">Diploma Course</option>
                                <option value="college">College</option>
                                <option value="gradStudies">Graduate Studies</option>    
                            </optgroup>
                            <optgroup label="Employment Status" data-max-options="1">
                                <option value="employed">Employed</option>
                                <option value="unemployed">Unemployed</option>
                            </optgroup>
                            <optgroup label="Employee Type" data-max-options="1">
                                <option value="regular">Regular</option>
                                <option value="contractual">Contranctual</option>
                                <option value="jo">Job Order</option>
                            </optgroup>
                            <optgroup label="School/Employer Type" data-max-options="1">
                                <option value="private">Private</option>
                                <option value="public">Public</option>
                            </optgroup>
                            <optgroup label="Salary Range" data-max-options="1">
                                <option value="less10">Less than 10,000</option>
                                <option value="bet1020">10,000-20,999</option>
                                <option value="bet2130">21,000-30,999</option>
                                <option value="bet3140">31,000-40,999</option>
                                <option value="bet4150">41,000-50,000</option>
                                <option value="more50">More than 50,000</option>
                            </optgroup>
                            <optgroup label="Remarks" data-max-options="2">
                                <option value="soloLiving">Solo Living</option>
                                <option value="soloParent">Solo Parent</option>
                                <option value="teenPregnancy">Teenage Pregnancy</option>  
                            </optgroup>

                        </select>
                    </div>
                    <!-- Search -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 searchGroup d-flex justify-content-end align-items-center">
                        <div class=" searchElement d-flex justify-content-end align-items-center">
                            <input class="form-control searchInput" type="text" placeholder="Search">
                            <button class="btn searchBtn" type="button">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Table -->
                <div class="row dataTable gx-4">
                    <div class="col-12">
                        <table id="example" class="table table-striped table-bordered display responsive nowrap" cellspacing="0" width="100%">
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
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" role="dialog" tabindex="-1" id="viewMore" >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="transform: translate(0%, 50%);">
                            <div class="modal-body m-0 px-4">
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
    
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <!-- <script src="assets/js/custom1.js"></script> -->
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="assets/js/kabataanProfile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
</body>

</html>