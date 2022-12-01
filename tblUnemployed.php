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
    <title>Unemployed</title>
    
    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Page Stylesheets -->
    <link rel="stylesheet" href="assets/css/tables.css">
    <link rel="stylesheet" href="assets/scss/profiles.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <link rel="stylesheet" href="assets/scss/modal.css">
    
    <!-- Virtual Select JS library -->
    <link rel="stylesheet" href="assets/css/virtual-select.min.css"> 

    <!-- nav.css -->
    <!-- <link rel="stylesheet" href="assets/css/navKabataanProfile.css"> -->

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
     

</head>

<body id="page-top">

    <div class="mainContainer d-block">
        <header>
            <div class="row headerRow">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
                    <i class="fa-solid fa-bars fa-2xl w-auto" id="hamburger"></i>
                    <span class="title longTitle">Unemployed</span>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-md-flex justify-content-md-end align-items-md-center">
                    <span class="accountType d-flex justify-content-end">Super Admin Account</span>
                </div>
            </div>
            <img src="assets/img/decorative.svg" alt="hr" class="img-fluid w-100 d-flex">
        </header>

        <div class="container-fluid content">

            <!-- Back button pabalik sa dashboard -->
            <div class="d-grid gap-2 d-md-block" id="backBtn">
                <a href="dashboard.php">
                    <button class="btn btn-primary" type="button">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                </a>
            </div>
            
            <!-- Menu Buttons 
            <div class="row d-flex justify-content-end align-ittems-center m-0">
                <button class="menuBtn menu1 rounded-pill clicked" id="kabataan">Kabataan</button>
                <button class="menuBtn menu2 rounded-pill" id="residents">Residents</button>
            </div>
            -->

            <!-- Kabataan Table Start -->
            <div class="sectionDiv mx-0 mt-4" id="sectionKabataan">
                <!-- Options Rows -->
                <div class="optionRow row gx-5 m-0 mb-1">
                    <!-- Show No. of Rows -->
                    <div class="col-lg-12 col-md-4 col-sm-6 col-12 d-flex align-items-center my-1 p-0" id="kabataanLength"></div>
                    <!-- Output Buttons -->
                    <div class="d-none col-lg-3 d-lg-flex justify-content-lg-start p-0" id="kabataanOutput"></div>
                    <!-- Filler Column -->
                    <div class="col-lg-3 d-none d-lg-flex"></div>
                    <!-- Filter -->
                    <div class="col-lg-3 col-md-6 col-sm-5 col-12 d-flex align-items-">
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
                                <option value="Saint Anthony ">Saint Anthony</option>
                                <option value="Sampaguita St.">Sampaguita St.</option>
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
                    <!-- Search -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0" id="kabataanSearch">
                        
                    </div>
                </div>

                <!-- Actual table -->
                <table class="table table-stripped table-bordered dataTable responsive display nowrap no-footer dtr-inline collapsed printTable" role="grid" cellspacing="0" id="kabataanTbl" style="width:100%">
                    <thead class="headTitle">
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Birthdate</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Civil status</th>
                            <th>Purok</th>
                            <th>Remarks</th>
                            <!-- <th class="actions">Actions</th> -->
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="entryRow" scope="col" data-label="Last Name">ALCALA</td>
                            <td class="entryRow" scope="col" data-label="First Name">NICOLE</td>
                            <td class="entryRow" scope="col" data-label="Middle Name">MATALOBOS</td>
                            <td class="entryRow" scope="col" data-label="Birthday">02/19/2001</td>
                            <td class="entryRow" scope="col" data-label="Age">21</td>
                            <td class="entryRow" scope="col" data-label="Gender">FEMALE</td>
                            <td class="entryRow" scope="col" data-label="Civil status">SINGLE</td>
                            <td class="entryRow" scope="col" data-label="Purok">PULONG KENDI</td>
                            <td class="entryRow" scope="col" data-label="Remarks">SK Scholar</td>
                            <!-- <td>
                                <div class="row m-0 d-flex justify-content-around align-items-center">
                                    <div class="col-4 d-flex justify-content-center align-items-center p-0">
                                        <button class="btn view actionBtn" type="button" data-bs-toggle="modal" data-bs-target="#viewMore"><i class="fa-solid fa-eye"></i></button>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center p-0">
                                        <button class="btn update actionBtn"><i class="fa-solid fa-pen"></i></i></button>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center p-0">
                                        <button class="btn btn-danger delete actionBtn"><i class="fa-solid fa-trash-can"></i></button>
                                    </div>
                                </div>
                            </td> -->
                        </tr>
                    
                        <?php
                        //     while ($row = mysqli_fetch_array($result)) {
                        //     echo '
                        //     <tr>
                        //         <td align="center"><input type="checkbox" class="checkitem"></td>
                        //         <td>' . $row["lastName"] . '</td>
                        //         <td>' . $row["firstName"] . '</td>
                        //         <td>' . $row["middleName"] . '</td>
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
                    </tbody>
                </table>
            </div>                

            <!-- Residents Table Start -->
            <div class="sectionDiv mx-0 mt-4 d-none" id="sectionResidents">
                <!-- Options Rows -->
                <div class="optionRow row gx-5 m-0 mb-1">
                    <!-- Show No. of Rows -->
                    <div class="col-lg-12 col-md-4 col-sm-6 col-12 d-flex align-items-center my-1 p-0" id="residentsLength"></div>
                    <!-- Output Buttons -->
                    <div class="d-none col-lg-4 d-lg-flex justify-content-lg-start p-0" id="residentsOutput"></div>
                    <!-- Filler Column -->
                    <div class="col-lg-2 d-none d-lg-flex"></div>
                    <!-- Filter -->
                    <div class="col-lg-3 col-md-6 col-sm-5 col-12 d-flex align-items-">
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
                                <option value="Saint Anthony ">Saint Anthony</option>
                                <option value="Sampaguita St.">Sampaguita St.</option>
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
                    <!-- Search -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0" id="residentsSearch">
                        
                    </div>
                </div>

                <!-- Actual table -->
                <table class="table table-stripped table-bordered dataTable responsive display nowrap no-footer dtr-inline collapsed printTable" role="grid" cellspacing="0" id="residentsTbl" style="width:100%">
                    <thead class="headTitle">
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Birthdate</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Civil status</th>
                            <th>Purok</th>
                            <th>Remarks</th>
                            <th class="actions">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="entryRow" scope="col" data-label="Last Name">PALALIMPA</td>
                            <td class="entryRow" scope="col" data-label="First Name">MICHAEL JOHN</td>
                            <td class="entryRow" scope="col" data-label="Middle Name">SEGURA</td>
                            <td class="entryRow" scope="col" data-label="Birthday">08/11/2000</td>
                            <td class="entryRow" scope="col" data-label="Age">22</td>
                            <td class="entryRow" scope="col" data-label="Gender">MALE</td>
                            <td class="entryRow" scope="col" data-label="Civil status">SINGLE</td>
                            <td class="entryRow" scope="col" data-label="Purok">Doña Regina 1</td>
                            <td class="entryRow" scope="col" data-label="Remarks">PUROK LEADER</td>
                            <td>
                                <div class="row m-0 d-flex justify-content-around align-items-center">
                                    <div class="col-4 d-flex justify-content-center align-items-center p-0">
                                        <button class="btn view actionBtn" type="button" data-bs-toggle="modal" data-bs-target="#viewMore"><i class="fa-solid fa-eye"></i></button>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center p-0">
                                        <button class="btn update actionBtn"><i class="fa-solid fa-pen"></i></i></button>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center p-0">
                                        <button class="btn btn-danger delete actionBtn"><i class="fa-solid fa-trash-can"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    
                        <?php
                        //     while ($row = mysqli_fetch_array($result)) {
                        //     echo '
                        //     <tr>
                        //         <td align="center"><input type="checkbox" class="checkitem"></td>
                        //         <td>' . $row["lastName"] . '</td>
                        //         <td>' . $row["firstName"] . '</td>
                        //         <td>' . $row["middleName"] . '</td>
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
                    </tbody>
                </table>
            </div> 

            <div class="sectionDiv mx-0 mt-4">
                <div class="modal fade" role="dialog" tabindex="-1" id="viewMore">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Kabataan Information</h4>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body m-0 px-4">
                                <div class="row rowContainer m-0 p-0">
                                    <div class="col align-self-center col-lg-8 col-md-8 col-sm-12 col-12 py-2">
                                        <p class="textName w-100 my-1">JUAN SANTOS DELA CRUZ</p>
                                        <p class="textGender w-100 my-1 mt-2">48 YEARS OLD</p>
                                        <p class="textAge w-100 my-1">Man</p>
                                    </div>
                                    <div class="col align-self-center"><img class="img-fluid imgContainer" src="assets/img/misc/qrcode.png"></div>
                                </div>
                                <div class="row rowContainer my-4 mx-0 p-0">
                                    <div class="col col-12 p-0">
                                        <div class="markerContainer px-2">
                                            <p class="modalMarker">Personal Information</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row gy-1">
                                            <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Birthday:</label>
                                                <p class="textRetrieved">02/19/2000</p>
                                            </div>
                                            <div class="col col-lg-8 col-md-8 col-sm-6 col-12"><label class="form-label modalLabel">Birthplace:</label>
                                                <p class="textRetrieved">CALAMBA CITY, LAGUNA</p>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Marital Status:</label>
                                                <p class="textRetrieved">SEPARATED</p>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Religion:</label>
                                                <p class="textRetrieved">CHRISTIAN</p>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Voter Type:</label>
                                                <p class="textRetrieved">REGISTERED</p>
                                            </div>
                                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12"><label class="form-label modalLabel">Disability:</label>
                                                <p class="textRetrieved">VISSION DISABILITY</p>
                                            </div>
                                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12"><label class="form-label modalLabel">Contact No:</label>
                                                <p class="textRetrieved">09123456789</p>
                                            </div>
                                            <div class="col col-lg-7 col-md-7 col-sm-6 col-12"><label class="form-label modalLabel">House No/Street/Subdivision:</label>
                                                <p class="textRetrieved">123 MABUHAY ST.&nbsp;</p>
                                            </div>
                                            <div class="col col-lg-5 col-md-5 col-sm-6 col-12"><label class="form-label modalLabel">Purok:</label>
                                                <p class="textRetrieved">PULONG KENDI</p>
                                            </div>
                                            <div class="col col-12"><label class="form-label modalLabel">Organization/s (if any):</label>
                                                <p class="textRetrieved">SAMAHAN NG MGA WALANG ASAWA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row rowContainer my-4 mx-0 p-0">
                                    <div class="col col-12 p-0">
                                        <div class="markerContainer px-2">
                                            <p class="modalMarker">Employment Status</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row gy-1">
                                            <div class="col col-lg-4 col-md-4 col-sm-6 col-12"><label class="form-label modalLabel">Employment Status:</label>
                                                <p class="textRetrieved">EMPLOYED</p>
                                            </div>
                                            <div class="col col-lg-5 col-md-5 col-sm-6 col-12"><label class="form-label modalLabel">Employee Type:</label>
                                                <p class="textRetrieved">CONTRACTUAL</p>
                                            </div>
                                            <div class="col col-lg-3 col-md-3 col-sm-3 col-12"><label class="form-label modalLabel">Public/Private:</label>
                                                <p class="textRetrieved">PUBLIC</p>
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-9 col-12"><label class="form-label modalLabel">Name of Employer/Company:</label>
                                                <p class="textRetrieved">DAVID M. CONSUNJI, INC.</p>
                                            </div>
                                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12"><label class="form-label modalLabel">Occupation:</label>
                                                <p class="textRetrieved">CONSTRUCTION WORKER</p>
                                            </div>
                                            <div class="col col-lg-6 col-md-6 col-sm-6 col-12"><label class="form-label modalLabel">Salary Range:</label>
                                                <p class="textRetrieved">10,000 - 20,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row rowContainer my-4 mx-0 p-0">
                                    <div class="col col-12 p-0">
                                        <div class="markerContainer px-2">
                                            <p class="modalMarker">House Declaration</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row gy-1">
                                            <div class="col col-12"><label class="form-label modalLabel">Head of the family:</label>
                                                <p class="textRetrieved">JUAN SANTOS DELA CRUZ</p>
                                            </div>
                                            <div class="col col-6"><label class="form-label modalLabel">Remarks:</label>
                                                <p class="textRetrieved">SOLO PARENT</p>
                                            </div>
                                            <div class="col col-6"><label class="form-label modalLabel">No. of members:</label>
                                                <p class="textRetrieved">5 to 10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Virtual Select JS Library -->
    <script type="text/javascript" src="assets/js/virtual-select.min.js"></script>

    <!-- Data tables -->
    <!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>  
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    
    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/profiles.js"></script>
    
</body>

</html>