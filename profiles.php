<?php
    // $dbServername = "localhost"; //server name
    // $dbUsername = "root";
    // $dbPassword = "";
    // $dbName = "KKIS"; //database name

    // $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); //connect to database
    // $query = "SELECT * FROM residentsProfile ORDER BY residentID ASC"; //query to select all data from table
    // $result = mysqli_query($conn, $query);

    // include 'connection.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kabataan Profile</title>
    
    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Virtual Select JS library -->
    <link rel="stylesheet" href="assets/css/virtual-select.min.css"> 

    <!-- Custom Page Stylesheets -->
    <link rel="stylesheet" href="assets/scss/profiles.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- nav.css -->
    <link rel="stylesheet" href="assets/css/navKabataanProfile.css">

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    
    <!-- Favicon -->
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
                <div class="col col-lg-7 col-md-7 col-sm-12 col-12 p-0 mb-4">
                    <h1 class="title h-auto">Profiles</h1><img src="assets/img/misc/hr.svg">
                </div>
                <div class="col d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center col-lg-5 col-md-5 col-sm-12 col-12 p-0 m-0">
                    <input type="radio" id="kabataan" class="d-none" name="slider" checked>
                    <input type="radio" id="resident" class="d-none" name="slider">
                    <div class="d-lg-flex divNav">
                        <label class="form-label d-flex d-lg-flex d-xl-flex justify-content-center align-items-center menuTitle kabataan" for="kabataan">Kabataan</label>
                        <label class="form-label d-flex d-lg-flex d-xl-flex justify-content-center align-items-center menuTitle resident" for="resident">Residents</label>
                        <div class="slider"></div>
                    </div>
                </div>
            </div>
            <!-- Copy End -->
            <div class="pageBody">
                <!-- Filter and Search -->
                <div class="row sortSearch m-0 mt-4 gy-2 gx-4">
                    <!-- Search -->
                    <div class="col-lg-3 col-md-6 col-sm-7 col-12">
                        <div class=" searchElement d-flex justify-content-center align-items-center">
                            <input class="form-control searchInput" type="text" placeholder="Search">
                            <button class="btn searchBtn" type="button">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Filter -->
                    <div class="col-lg-2 col-md-6 col-sm-5 col-12">
                        <select class="selectpicker text-uppercase" multiple name="filter" data-live-search="true" title="Filter" id="filtering" data-show-value-as-tags="true">
                            <optgroup label="Age">
                                <option value="bet1419">14-19 Years old</option>
                                <option value="bet2029">20-29 Years old</option>
                            </optgroup>
                            <optgroup label="Gender Preference">
                                <option value="man">Man</option>
                                <option value="woman">Woman</option>
                                <option value="trans">Transgender</option>
                                <option value="non">Non-binary/Non-conforming</option>
                            </optgroup>
                            <optgroup label="Marital Status">
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="livein">Live-in</option>
                                <option value="separated">Separated</option>
                                <option value="annuled">Annuled</option>
                                <option value="widowed">Widowed</option>
                            </optgroup>
                            <optgroup label="Disability">
                                <option value="None">None</option>
                                <option value="Communication disability">Communication disability</option>
                                <option value="Disability due to chronic illnes">Disability due to chronic illnes</option>
                                <option value="Learning disability">Learning disability</option>
                                <option value="Mental disability">Mental disability</option>
                                <option value="Orthopedic disability">Orthopedic disability</option>
                                <option value="Psychosocial disability">Psychosocial disability</option>
                                <option value="Vission disability">Vission disability</option>
                            </optgroup>
                            <optgroup label="Purok">
                                <option value="Cardinal">Cardinal</option>
                                <option value="Cordillera">Cordillera</option>
                                <option value="Doña Petra">Doña Petra</option>
                                <option value="Doña Regina 1">Doña Regina 1</option>
                                <option value="Doña Regina 2">Doña Regina 2</option>
                                <option value="Doña Regina 3">Doña Regina 3</option>
                                <option value="Family Village">Family Village</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Looban">Looban</option>
                                <option value="Manggahan">Manggahan</option>
                                <option value="Nayon">Nayon</option>
                                <option value="Ormoc">Ormoc</option>
                                <option value="Pulong Kendi">Pulong Kendi</option>
                                <option value="Puting Krus">Puting Krus</option>
                                <option value="Saint Anthony ">Saint Anthony </option>
                                <option value="Sampaguita St.">IraSampaguita St.</option>
                                <option value="Smokey Mountain">Smokey Mountain </option>
                            </optgroup>
                            <optgroup label="Educational Status">
                                <option value="Enrolled">Enrolled</option>
                                <option value="Out-of-School Youth">Out-of-School Youth</option>
                                <option value="Working Student">Working Student</option>
                            </optgroup>
                            <optgroup label="Educational Level">
                                <option value="Pre-elementary">Pre-elementary</option>
                                <option value="Elementary">Elementary</option>
                                <option value="Junior High School">Junior High School</option>
                                <option value="Senior High School">Senior High School</option>
                                <option value="Alternative Learning System">Alternative Learning System</option>
                                <option value="Diploma Course">Diploma Course</option>
                                <option value="College">College</option>
                                <option value="Graduate Studies">Graduate Studies</option>    
                            </optgroup>
                            <optgroup label="Employment Status">
                                <option value="Employed">Employed</option>
                                <option value="Unemployed">Unemployed</option>
                            </optgroup>
                            <optgroup label="Employee Type">
                                <option value="Regular">Regular</option>
                                <option value="Contractual">Contranctual</option>
                                <option value="Job Order">Job Order</option>
                            </optgroup>
                            <optgroup label="School/Employer Type">
                                <option value="Private">Private</option>
                                <option value="Public">Public</option>
                            </optgroup>
                            <optgroup label="Salary Range">
                                <option value="1">Less than 10,000</option>
                                <option value="2">10,000-20,999</option>
                                <option value="3">21,000-30,999</option>
                                <option value="4">31,000-40,999</option>
                                <option value="5">41,000-50,000</option>
                                <option value="6">More than 50,000</option>
                            </optgroup>
                            <optgroup label="Remarks">
                                <option value="soloLiving">Solo Living</option>
                                <option value="Solo Parent">Solo Parent</option>
                                <option value="Teenage Pregnancy">Teenage Pregnancy</option>  
                            </optgroup>

                        </select>
                    </div>
                </div>
                <!-- Table -->
                <div class="printTable">
                    <div class="row dataTable gx-4">
                        <div class="col-12">
                            <table id="kabataanTbl" class="table table-striped table-bordered display responsive nowrap" cellspacing="0" width="100%">
                                <thead class="tableKabataan">
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
                            //     while ($row = mysqli_fetch_array($result)) {
                            //     echo '
                            //     <tr>
                            //         <td align="center"><input type="checkbox" class="checkitem"></td>
                            //         <td>' . $row["lastName"] . '</td>
                            //         <td>' . $row["firstName"] . '</td>
                            //         <td>' . $row["middleName"] . '</td>
                            //         <td>' . $row["suffix"] . '</td>
                            //         <td>' . $row["birthDate"] . '</td>
                            //         <td>' . $row["age"] . '</td>
                            //         <td>' . $row["gender"] . '</td>
                            //         <td>' . $row["civilStatus"] . '</td>
                            //         <td>' . $row["purok"] . '</td>
                            //         <td align="center">
                            //             <a id=' . $row["residentID"] . '" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewMore">view more</a>
                        
                            //         </td>

                            //     </tr>
                            //     ';
                            // }
                            ?>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="residentTable d-none">
                    <div class="row dataTable gx-4">
                        <div class="col-12">
                            <table id="residentTbl" class="table table-striped table-bordered display responsive nowrap" cellspacing="0" width="100%">
                                <thead class="tableResident">
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
                            //     while ($row = mysqli_fetch_array($result)) {
                            //     echo '
                            //     <tr>
                            //         <td align="center"><input type="checkbox" class="checkitem"></td>
                            //         <td>' . $row["lastName"] . '</td>
                            //         <td>' . $row["firstName"] . '</td>
                            //         <td>' . $row["middleName"] . '</td>
                            //         <td>' . $row["suffix"] . '</td>
                            //         <td>' . $row["birthDate"] . '</td>
                            //         <td>' . $row["age"] . '</td>
                            //         <td>' . $row["gender"] . '</td>
                            //         <td>' . $row["civilStatus"] . '</td>
                            //         <td>' . $row["purok"] . '</td>
                            //         <td align="center">
                            //             <a id=' . $row["residentID"] . '" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewMore">view more</a>
                        
                            //         </td>

                            //     </tr>
                            //     ';
                            // }
                            ?>
                            </table>
                        </div>
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
                                                // while ($row = mysqli_fetch_array($result)) {
                                                // echo '
                                                //     <tr>
                                                //         <td align="center"><input type="checkbox" class="checkitem"></td>
                                                //         <td>' . $row["birthplace"] . '</td>
                                                //         <td>' . $row["religion"] . '</td>
                                                //         <td>' . $row["sex"] . '</td>
                                                //         <td>' . $row["educStatus"] . '</td>
                                                //         <td>' . $row["monthlySalary"] . '</td>
                                                //         <td>' . $row["peopleInHousehold"] . '</td>
                                                //         <td>' . $row["contactNum"] . '</td>
                                                //         <td>' . $row["organization"] . '</td>
                                                //         <td>' . $row["guardian"] . '</td>
                                                //         <td>' . $row["remarks"] . '</td>
                                                //         <td align="center">
                                                //         <a id=' . $row["residentID"] . '" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewMore">view more</a>                               
                                                //         </td>
                                                //     </tr>
                                                //     ';
                                                // }
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
    
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Virtual Select JS Library -->
    <script type="text/javascript" src="assets/js/virtual-select.min.js"></script>

    <!-- Data tables -->
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/profiles.js"></script>
    
</body>

</html>