<?php
// session_start();
require "connection.php";
require "modals.php";


//KABATAAN --------------
$queryKabataan = "SELECT  *, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS `age` FROM `residents` WHERE DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 BETWEEN 15 AND 30";
$resultKabataan = executeQuery($queryKabataan);
$rowKabataan = mysqli_fetch_array($resultKabataan);
$kabataan_id = $rowKabataan['resident_id']; //get kabataan id

// RESIDENTS --------------
$queryResidents = "SELECT * DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS `age` FROM `residents` WHERE DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y' + 0 > 29";
$resultResidents = executeQuery($queryResidents);
$rowResident = mysqli_fetch_array($resultResidents);
$resident_id = $rowResident['resident_id']; //get resident id

//check if resident has employment info
$employmentCheck = "SELECT * FROM `employment_info` WHERE `resident_id` = $kabataan_id";
$employmentResult = executeQuery($employmentCheck);
$employmentInfo = mysqli_fetch_array($employmentResult);

//check if resident has educational info
$educationCheck = "SELECT * FROM educational_info WHERE `resident_id` = $kabataan_id";
$educationResult = executeQuery($educationCheck);
$educationInfo = mysqli_fetch_array($educationResult);

// EMPLOYMENT Foreign Key IDs to variable
$employmentIndustryID = $employmentInfo['industry_id'];
$employmentSalaryID = $employmentInfo['salary_id'];

// Retrieve EMPLOYMENT foreign key value from salary table
$employmentSalaryCheck = "SELECT * FROM salaries WHERE salary_id='$employmentSalaryID'";
$employmentSalaryResult = executeQuery($employmentSalaryCheck);
$employeeSalary = mysqli_fetch_array($employmentSalaryResult);

// Retrieve EMPLOYMENT foreign key value from industry table
$employmentIndustryCheck = "SELECT * FROM industries WHERE industry_id='$employmentIndustryID'";
$employmentIndustryResult = executeQuery($employmentIndustryCheck);
$employeeIndustry = mysqli_fetch_array($employmentIndustryResult);

// EDUCATION Foreign Key IDs to variable
$educationIndustryID = $educationInfo['industry_id'];
$educationSalaryID = $educationInfo['salary_id'];

// Retrieve EDUCATION foreign key value from industry table
$educationIndustryCheck = "SELECT * FROM industries WHERE industry_id='$educationIndustryID'";
$educationIndustryResult = executeQuery($educationIndustryCheck);
$studentIndustry = mysqli_fetch_array($educationIndustryResult);

// Retrieve EDUCATION foreign key value from salary table
$educationSalaryCheck = "SELECT * FROM salaries WHERE salary_id='$educationSalaryID'";
$educationSalaryResult = executeQuery($educationSalaryCheck);
$studentSalary = mysqli_fetch_array($educationSalaryResult);

//Retrieve Household Info of KABATAAN
$householdID = $rowKabataan['household_id']; //getting the household id of the user
$queryHouseholds = "SELECT * FROM `households` WHERE household_id='$householdID'"; //getting the household details of the user
$householdResult = executeQuery($queryHouseholds);
$householdInfo = mysqli_fetch_array($householdResult);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profiles</title>

    <!-- Custom Page Stylesheets -->
    <link rel="stylesheet" href="assets/scss/viewModal.css">
    <link rel="stylesheet" href="assets/scss/profiles.css">
    <!-- <link rel="stylesheet" href="assets/scss/mediaquery.css"> -->
    <!-- <link rel="stylesheet" href="assets/scss/modal.css"> -->
    <link rel="stylesheet" href="assets/scss/sideMenu.css">

    <!-- Bootstrap-Select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
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
                    <span class="pageTitle">Profiles</span>
                </div>

                <div class="col-md-4 d-none d-md-flex justify-content-end align-items-center">
                    <span class="accountType">Super Admin Account</span>
                </div>
            </div>
            <hr id="headerHR">
        </header>

        <!-- Content Start -->
        <div class="container-fluid content" id="contentID">
            <div class="sectionDiv">
                <!-- Menu Buttons -->
                <div class="row d-flex justify-content-end align-ittems-center m-0">
                    <button class="menuBtn menu1 rounded-pill clicked" id="kabataan">Kabataan</button>
                    <button class="menuBtn menu2 rounded-pill" id="residents">Residents</button>
                </div>

                <!-- Kabataan Table Start -->
                <div class="sectionDiv mx-0 mt-4" id="sectionKabataan">
                    <!-- Options Rows -->
                    <div class="optionRow row gx-5 m-0 mb-1">
                        <!-- Show No. of Rows -->
                        <div class="col-lg-12 col-md-4 col-sm-6 col-12 d-flex align-items-center my-1 p-0" id="kabataanLength"></div>
                        <!-- Output Buttons -->
                        <div class="d-none col-lg-6 d-lg-flex justify-content-lg-start p-0" id="kabataanOutput"></div>
                        <!-- Filter -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-">
                        </div>
                        <!-- Search -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0" id="kabataanSearch">

                        </div>
                    </div>

                    <!-- Actual table -->
                    <table class="table table-stripped table-bordered dataTable responsive display nowrap no-footer dtr-inline collapsed printTable" role="grid" cellspacing="0" id="kabataanTbl" style="width:100%">
                        <thead class="headTitle">
                            <tr>
                                <th>Name</th>
                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Civil status</th>
                                <th>Purok</th>
                                <th class="actions">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($rowKabataan) {

                                echo '<tr>
                                        <td class="entryRow" scope="col" data-label="Name">' . $rowKabataan['last_name'] . '" "' . $rowKabataan['first_name'] . '" "' . $rowKabataan['middle_name'] . '</td>
                                        <td class="entryRow" scope="col" data-label="Gender">' . $rowKabataan['gender_preference'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Age">' . $rowKabataan['age'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Birthday">' . $rowKabataan['birthday'] . '<td>
                                        <td class="entryRow" scope="col" data-label=Marital Status"">' . $rowKabataan['marital_status'] . '<td>
                                        <td class="entryRow" scope="col" data-label="ContactNo.">' . $rowKabataan['contact_no'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Purok">' . $rowKabataan['purok'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Actions">
                                            <a class="btn btn-warning actionBtn profile" role="button" data-bs-toggle="modal" data-bs-target="#viewMore' . $rowKabataan['resident_id'] . 'data-id="' . $rowKabataan['resident_id'] . '" href="#viewMore"><i class="fa-solid fa-eye"></i></a> 

                                            <a href="updateEntry.php?residentID=' . $rowKabataan['resident_id'] . 'class="btn btn-primary actionBtn" role="button" value="" aria-pressed="true"><i class="fa-solid fa-pen"></i></a>

                                            <button class="btn btn-danger deleteBtn" id="deleteEntry"><i class="fa-solid fa-trash-can"></button>
                                                <script>$("#deleteEntry").click(warning(' . $rowKabataan['last_name'] . '" "' . $rowKabataan['first_name'] . '" "' . $rowKabataan['middle_name'] . ')
                                        
                                        <td>
                                    ';
                            }
                            ?>
                        </tbody>
                    </table>


                    <!-- Kabataan Modal -->
                    <div class="modal fade" role="dialog" tabindex="1" id="viewMore<?php echo $row['resident_id'] ?>">
                        <div class="modal-dialog" id="modalDialogID" role="document">
                            <div class="modal-content" id="modalContentID">
                                <div class="modal-header" id="modalHeaderID">
                                    <h4 class="modal-title" id="modalTitleID">Kabataan Information</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <hr id="modalHR">
                                <div class="modal-body m-0" id="modalBodyID">
                                    <div class="row rowContainer mx-2" id="modalRow1">
                                        <div class="col col-lg-8 col-md-8 col-sm-12 col-12" id='textDiv'>
                                            <p class="textName lastName w-100 my-1" id="textNameID">
                                                <?php echo  $rowKabataan['last_name'] . '" "' . $rowKabataan['first_name'] . '" "' . $rowKabataan['middle_name']?>
                                            </p>
                                            <p class="textAge w-100 my-1 mt-2" id="textAgeID">
                                                <?php echo $rowKabataan['age'] . ' ' ?> YEARS OLD
                                            </p>
                                            <p class="textGender w-100 my-1" id="textGenderID">
                                                <?php echo $rowKabataan['gender_preference'] ?>
                                            </p>
                                        </div>

                                        <div class="col align-self-center" id="divQR">
                                            <img class="imgContainer" id="imgQR" src="assets/img/misc/qrcode.png">
                                        </div>
                                    </div>

                                    <div class="row rowContainer my-4 mx-2" id="modalRow2">
                                        <div class="col col-12 p-0">
                                            <div class="markerContainer px-3" id="row2Header">
                                                <p class="modalMarker" id="row2Title">Personal Information</p>
                                            </div>
                                        </div>

                                        <div class="col" id="row2Body">
                                            <div class="row gy-1" id="row2Content">
                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Birthday:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['birthday'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Voter Type:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['voter_type'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Birthplace:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['birthplace'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Contact No:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['contact_no'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Marital Status:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['marital_status'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Religion:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['religion'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Disability:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['disability'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Organization/s (if any):</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['organization'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">House No./St./Subd.:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['house_address'] ?>
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Purok:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">
                                                        <?php echo $rowKabataan['purok'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row rowContainer my-4 mx-2" id="modalRow2">
                                        <div class="col col-12 p-0">
                                            <div class="markerContainer px-3" id="row2Header">
                                                <p class="modalMarker" id="row2Title">Status</p>
                                            </div>
                                        </div>
                                        <div class="col" id="row2Body">
                                            <?php

                                            if ($employmentInfo > 0) { //checking if the user is an employee
                                                echo '
                                                        <div class="row gy-1" id="row2Content">
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Employment Status:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">' . $employmentInfo['employment_status'] . '</p>
                                                                </div>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Employee Type:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">' . $employmentInfo['employee_type'] . '</p>
                                                                </div>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Public/Private:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">' . $employmentInfo['employer_type'] . '</p>
                                                                </div>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Name of Employer/Company:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">' . $employmentInfo['employer_name'] . '</p>
                                                                </div>

        
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Occupation:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">' .
                                                    $employeeIndustry['description'] . '

                                                                    </p>
                                                                </div>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Salary Range:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">' .
                                                    $employeeSalary['description'] . '
                                                                    </p>
                                                                </div>
                                                            </div>';
                                            } else if ($educationInfo > 0) {
                                                if ($educationInfo['student_status'] == "ENROLLED") {
                                                    echo '
                                                               <div class="col" id="row2Body">
                                                                <div class="row gy-1" id="row2Content">
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Student Status:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_status'] . '</p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Student Level:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_level'] . '</p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Public/Private:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['school_type'] . '</p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Name of School/University:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['school_name'] . '</p>
                                                                    </div>
                                                                </div>
                                                            </div> ';
                                                } else if ($educationInfo['student_status'] == "OUT-OF-SCHOOL YOUTH") {
                                                    echo '
                                                                <div class="col" id="row2Body">
                                                                    <div class="row gy-1" id="row2Content">
                                                                        <div class="col-12" id="row2ContentDiv">
                                                                            <label class="form-label modalLabel">Student Status:</label>
                                                                            <p class="textRetrieved" id="textRetrievedID">' .  $educationInfo['student_status'] . '</p>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                } else {
                                                    echo '
                                                                <div class="col" id="row2Body">
                                                                    <div class="row gy-1" id="row2Content">
                                                                        <div class="col-6" id="row2ContentDiv">
                                                                            <label class="form-label modalLabel">Student Status:</label>
                                                                            <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_status'] . '</p>
                                                                        </div>
                                                                        <div class="col-6" id="row2ContentDiv">
                                                                            <label class="form-label modalLabel">Student Level:</label>
                                                                            <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_level'] . '</p>
                                                                        </div>
                                                                        <div class="col-6" id="row2ContentDiv">
                                                                            <label class="form-label modalLabel">Public/Private:</label>
                                                                            <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['school_type'] . '</p>
                                                                        </div>
                                                                        <div class="col-6" id="row2ContentDiv">
                                                                            <label class="form-label modalLabel">Name of School/University:</label>
                                                                            <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['school_name'] . '</p>
                                                                        </div>

                                                                        <div class="col-6" id="row2ContentDiv">
                                                                            <label class="form-label modalLabel">Occupation:</label>
                                                                            <p class="textRetrieved" id="textRetrievedID">' .
                                                        $studentIndustry['description'] . '</p>
                                                                        </div>

                                                                        <div class="col-6" id="row2ContentDiv">
                                                                            <label class="form-label modalLabel">Salary Range:</label>
                                                                            <p class="textRetrieved" id="textRetrievedID">' . $studentSalary['description'] . '
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                }
                                            }
                                            ?>
                                        </div>

                                        <div class="row rowContainer my-4 mx-2" id="modalRow2">
                                            <div class="col col-12 p-0">
                                                <div class="markerContainer px-3" id="row2Header">
                                                    <p class="modalMarker" id="row2Title">House Declaration</p>
                                                </div>
                                            </div>

                                            <div class="col" id="row2Body">
                                                <div class="row gy-1" id="row4Content">
                                                    <div class="col col-12" id="row4ContentDiv">
                                                        <label class="form-label modalLabel">Head of the family:</label>
                                                        <p class="textRetrieved" id="FamHead"><?php echo $householdInfo['head_full_name'] ?></p>
                                                    </div>

                                                    <div class="col col-12" id="row4ContentDiv">
                                                        <label class="form-label modalLabel">Remarks:</label>
                                                        <p class="textRetrieved" id="textRetrievedID1"><?php echo $householdInfo['head_remarks'] ?></p>
                                                    </div>

                                                    <div class="col col-12" id="row4ContentDiv">
                                                        <label class="form-label modalLabel">No. of members:</label>
                                                        <p class="textRetrieved" id="textRetrievedID1"><?php echo $householdInfo['members_count'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="modalOverlay"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Kabataan Modal end -->
                    </div>
                    <!-- sectionKabataan end -->
                </div>
                <!-- sectionDiv end -->
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
                                <option value="Vision disability">Vision disability</option>
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
                                <option value="Contractual">Contractual</option>
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
                        <?php
                        while ($rowResident) {

                            echo '<tr>
                                        <td class="entryRow" scope="col" data-label="Name">' . $rowResident['last_name'] . '" "' . $rowResident['first_name'] . '" "' . $rowResident['middle_name'] . '</td>
                                        <td class="entryRow" scope="col" data-label="Gender">' . $rowResident['gender_preference'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Gender">' . $rowResident['age'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Gender">' . $rowResident['birthday'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Gender">' . $rowResident['marital_status'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Gender">' . $rowResident['contact_no'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Gender">' . $rowResident['purok'] . '<td>
                                        <td class="entryRow" scope="col" data-label="Actions">
                                            <a class="btn btn-warning actionBtn profile" role="button" data-bs-toggle="modal" data-bs-target="#viewMore' . $rowResident['resident_id'] . 'data-id="' . $rowResident['resident_id'] . '" href="#viewMore"><i class="fa-solid fa-eye"></i></a> 

                                            <a href="updateEntry.php?residentID=' . $rowResident['resident_id'] . 'class="btn btn-primary actionBtn" role="button" value="" aria-pressed="true"><i class="fa-solid fa-pen"></i></a>

                                            <button class="btn btn-danger deleteBtn" id="deleteEntry"><i class="fa-solid fa-trash-can"></button>
                                                <script>$("#deleteEntry").click(warning(' . $rowResident['last_name'] . '" "' . $rowResident['last_name'] . '" "' . $rowResident['middle_name'] . ')
                                        
                                        <td>
                                    ';
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Residents Modal -->
                <div class="modal fade" role="dialog" tabindex="1" id="viewMore<?php echo $row['resident_id'] ?>">
                    <div class="modal-dialog" id="modalDialogID" role="document">
                        <div class="modal-content" id="modalContentID">
                            <div class="modal-header" id="modalHeaderID">
                                <h4 class="modal-title" id="modalTitleID">Kabataan Information</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <hr id="modalHR">
                            <div class="modal-body m-0" id="modalBodyID">
                                <div class="row rowContainer mx-2" id="modalRow1">
                                    <div class="col col-lg-8 col-md-8 col-sm-12 col-12" id='textDiv'>
                                        <p class="textName lastName w-100 my-1" id="textNameID">
                                            <?php echo  $rowResident['last_name'] . '" "' . $rowResident['last_name'] . '" "' . $rowResident['middle_name'] ?>
                                        </p>
                                        <p class="textAge w-100 my-1 mt-2" id="textAgeID">
                                            <?php echo $rowKabataan['age'] . ' ' ?> YEARS OLD
                                        </p>
                                        <p class="textGender w-100 my-1" id="textGenderID">
                                            <?php echo $rowKabataan['gender_preference'] ?>
                                        </p>
                                    </div>

                                    <div class="col align-self-center" id="divQR">
                                        <img class="imgContainer" id="imgQR" src="assets/img/misc/qrcode.png">
                                    </div>
                                </div>

                                <div class="row rowContainer my-4 mx-2" id="modalRow2">
                                    <div class="col col-12 p-0">
                                        <div class="markerContainer px-3" id="row2Header">
                                            <p class="modalMarker" id="row2Title">Personal Information</p>
                                        </div>
                                    </div>

                                    <div class="col" id="row2Body">
                                        <div class="row gy-1" id="row2Content">
                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Birthday:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['birthday'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Voter Type:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['voter_type'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Birthplace:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['birthplace'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Contact No:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['contact_no'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Marital Status:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['marital_status'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Religion:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['religion'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Disability:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['disability'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Organization/s (if any):</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['organization'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">House No./St./Subd.:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['house_address'] ?>
                                                </p>
                                            </div>

                                            <div class="col-6" id="row2ContentDiv">
                                                <label class="form-label modalLabel">Purok:</label>
                                                <p class="textRetrieved" id="textRetrievedID">
                                                    <?php echo $rowKabataan['purok'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row rowContainer my-4 mx-2" id="modalRow2">
                                    <div class="col col-12 p-0">
                                        <div class="markerContainer px-3" id="row2Header">
                                            <p class="modalMarker" id="row2Title">Status</p>
                                        </div>
                                    </div>
                                    <div class="col" id="row2Body">
                                        <?php

                                        if ($employmentInfo > 0) { //checking if the user is an employee
                                            echo '
                                                <div class="row gy-1" id="row2Content">
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employment Status:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">' . $employmentInfo['employment_status'] . '</p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employee Type:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">' . $employmentInfo['employee_type'] . '</p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Public/Private:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">' . $employmentInfo['employer_type'] . '</p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Name of Employer/Company:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">' . $employmentInfo['employer_name'] . '</p>
                                                        </div>

        
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Occupation:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">' . $employeeIndustry['description'] . '

                                                            </p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Salary Range:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">' . $employeeSalary['description'] . '
                                                            </p>
                                                        </div>
                                                    </div>';
                                        } else if ($educationInfo > 0) {
                                            if ($educationInfo['student_status'] == "ENROLLED") {
                                                echo '
                                                    <div class="col" id="row2Body">
                                                        <div class="row gy-1" id="row2Content">
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Status:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_status'] . '</p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Level:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_level'] . '</p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Public/Private:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['school_type'] . '</p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Name of School/University:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['school_name'] . '</p>
                                                            </div>
                                                        </div>
                                                    </div> ';
                                            } else if ($educationInfo['student_status'] == "OUT-OF-SCHOOL YOUTH") {
                                                echo '
                                                    <div class="col" id="row2Body">
                                                        <div class="row gy-1" id="row2Content">
                                                            <div class="col-12" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Status:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' .  $educationInfo['student_status'] . '</p>
                                                            </div>
                                                        </div>
                                                    </div>';
                                            } else {
                                                echo '
                                                    <div class="col" id="row2Body">
                                                        <div class="row gy-1" id="row2Content">
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Status:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_status'] . '</p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Level:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_level'] . '</p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Public/Private:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['school_type'] . '</p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Name of School/University:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['school_name'] . '</p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                label class="form-label modalLabel">Occupation:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $studentIndustry['description'] . '</p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Salary Range:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">' . $studentSalary['description'] . '
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>';
                                            }
                                        }
                                        ?>
                                    </div>

                                    <div class="row rowContainer my-4 mx-2" id="modalRow2">
                                        <div class="col col-12 p-0">
                                            <div class="markerContainer px-3" id="row2Header">
                                                <p class="modalMarker" id="row2Title">House Declaration</p>
                                            </div>
                                        </div>

                                        <div class="col" id="row2Body">
                                            <div class="row gy-1" id="row4Content">
                                                <div class="col col-12" id="row4ContentDiv">
                                                    <label class="form-label modalLabel">Head of the family:</label>
                                                    <p class="textRetrieved" id="FamHead"><?php echo $householdInfo['head_full_name'] ?></p>
                                                </div>

                                                <div class="col col-12" id="row4ContentDiv">
                                                    <label class="form-label modalLabel">Remarks:</label>
                                                    <p class="textRetrieved" id="textRetrievedID1"><?php echo $householdInfo['head_remarks'] ?></p>
                                                </div>

                                                <div class="col col-12" id="row4ContentDiv">
                                                    <label class="form-label modalLabel">No. of members:</label>
                                                    <p class="textRetrieved" id="textRetrievedID1"><?php echo $householdInfo['members_count'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="modalOverlay"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Resident Modal end -->
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap-select -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

    <!-- Data tables -->
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/profiles.js"></script>
    <script type="text/javascript" src="assets/js/sideMenu.js"></script>

    <!-- Active Link -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#profiles-link").addClass('nav-active');
            $("#profiles-md-link").addClass("nav-md-active");
        })
    </script>
</body>

</html>