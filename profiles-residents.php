<?php
session_start();
require "connection.php";

//GER KABATAAN LIST
$kabataan = "SELECT *, CONCAT(`last_name`, ', ', `first_name`, ' ', `middle_name`) AS  full_name, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS age, households.head_remarks FROM `residents` LEFT JOIN `households` ON residents.household_id = households.household_id WHERE DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 BETWEEN 14 AND 31";
$kabataanResult = executeQuery($kabataan);
$kabataanRow = mysqli_fetch_array($kabataanResult);
$kabataanID = $kabataanRow["resident_id"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profiles Kabataan</title>

    <!-- Bootstrap-Select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    
    <!-- Custom Page Stylesheets -->
    <link rel="stylesheet" href="assets/scss/viewModal.css">
    <link rel="stylesheet" href="assets/scss/profiles.css">
    <link rel="stylesheet" href="assets/scss/sideMenu.css">
    
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
                        <thead class="tblHeadRow">
                            <tr>
                                <th class="tblHead">Name</th>
                                <th class="tblHead">Gender</th>
                                <th class="tblHead">Age</th>
                                <th class="tblHead">Birthdate</th>
                                <th class="tblHead">Civil Status</th>
                                <th class="tblHead">Contact No.</th>
                                <th class="tblHead">Purok</th>
                                <th class="tblHead">Remarks</th>
                                <th class="tblHead actions">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            // While start
                            while ($kabataanRow = mysqli_fetch_array($kabataanResult)) {
                                $kabataanID = $kabataanRow["resident_id"];
                            ?>
                                <tr>
                                    <td id="lastName" class="entryRow" scope="col" data-label="Last Name"><?php echo $kabataanRow["full_name"]; ?></td>
                                    <td id="firstName" class="entryRow" scope="col" data-label="First Name"><?php echo $kabataanRow["gender_preference"]; ?></td>
                                    <td id="middleName" class="entryRow" scope="col" data-label="Middle Name"><?php echo $kabataanRow["age"]; ?></td>
                                    <td id="birthday" class="entryRow" scope="col" data-label="Birthday"><?php echo $kabataanRow["birthday"]; ?></td>
                                    <td id="age" class="entryRow" scope="col" data-label="Age"><?php echo $kabataanRow["marital_status"]; ?></td>
                                    <td id="gender" class="entryRow" scope="col" data-label="Gender"><?php echo $kabataanRow["contact_no"]; ?></td>
                                    <td id="civilStatus" class="entryRow" scope="col" data-label="Civil status"><?php echo $kabataanRow["purok"]; ?></td>
                                    <td id="purok" class="entryRow" scope="col" data-label="Purok"><?php echo $kabataanRow["head_remarks"]; ?></td>
                                    <td id="actions" class="entryRow" scope="col" data-label="Actions">
                                        <div class="row mx-0">
                                            <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                                                <a class="btn btn-warning view viewMore actionBtn profile" data-bs-toggle="modal" data-bs-target="#viewMore<?php echo $kabataanRow["resident_id"]; ?>" data-id="<?php echo $kabataanRow["resident_id"]; ?>" href="#viewMore"><i class="fa-solid fa-eye"></i></a>
                                            </div>

                                            <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                                                <a href="updateEntry.php?residentID=<?php echo $kabataanRow["rencrypted_id"]; ?>" value="" class="btn btn-primary update edit actionBtn" role="button" aria-pressed="true"><i class="fa-solid fa-pen"></i></a>
                                            </div>

                                            <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                                                <a class="btn btn-danger btn-sm" role="button" aria-pressed="true" href="#"> <i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            };
                            ?>
                        </tbody>
                    </table>

                    <!-- Kabataan Modal -->
                    <?php
                    // While start
                    while ($kabataanStatus = mysqli_fetch_array($kabataanResult)) {
                        $kabataanStatusID = $kabataanStatus["resident_id"];
                    ?>
                        <div class="modal fade" role="dialog" tabindex="1" id="viewMore<?php echo $kabataanStatus["resident_id"]; ?>">
                            <div class="modal-dialog" id="modalDialogID" role="document">
                                <div class="modal-content" id="modalContentID">
                                    <div class="modal-header" id="modalHeaderID">
                                        <h4 class="modal-title" id="modalTitleID">Kabataan Information</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <hr id="modalHR">
                                    <div class="modal-body m-0" id="modalBodyID">
                                        <!-- Personal Info Basic -->
                                        <div class="row rowContainer mx-2" id="modalRow1">
                                            <div class="col col-lg-8 col-md-8 col-sm-12 col-12" id='textDiv'>
                                                <p class="textName lastName w-100 my-1" id="textNameID"><?php echo $kabataanStatus["full_name"]; ?></p>
                                                <p class="textGender w-100 my-1 mt-2" id="textAgeID"><?php echo $kabataanStatus["age"]; ?> YEARS OLD</p>
                                                <p class="textAge w-100 my-1" id="textGenderID"><?php echo $kabataanStatus["gender_preference"]; ?></p>
                                            </div>
                                            <div class="col align-self-center" id="divQR">
                                                <img class="imgContainer" id="imgQR" src="assets/img/misc/qrcode.png">
                                            </div>
                                        </div>
                                        <!-- Personal Info All -->
                                        <div class="row rowContainer my-4 mx-2" id="modalRow2">
                                            <div class="col col-12 p-0">
                                                <div class="markerContainer px-3" id="row2Header">
                                                    <p class="modalMarker" id="row2Title">Personal Information</p>
                                                </div>
                                            </div>

                                            <div class="col" id="row2Body">
                                                <div class="row gy-1" id="row2Content">
                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Birthday:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["birthday"]; ?></p>
                                                    </div>
                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Voter Type:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["voter_type"]; ?></p>
                                                    </div>
                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Birthplace:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["birthplace"]; ?></p>
                                                    </div>
                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Contact No:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["contact_no"]; ?></p>
                                                    </div>

                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Marital Status:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["marital_status"]; ?></p>
                                                    </div>

                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Religion:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["religion"]; ?></p>
                                                    </div>

                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Disability:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["disability"]; ?></p>
                                                    </div>

                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Organization/s (if any):&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["organization"]; ?></p>
                                                    </div>

                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">House No./St./Subd.:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["house_address"]; ?>.&nbsp;</p>
                                                    </div>
                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Purok:&nbsp;</label>
                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $kabataanStatus["purok"]; ?></p>
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
                                            <?php

                                            $employmentCheck = "SELECT * FROM `employment_info` WHERE `resident_id` = $kabataanStatusID";
                                            $employmentResult = executeQuery($employmentCheck);

                                            $educationCheck = "SELECT * FROM educational_info WHERE `resident_id` = $kabataanStatusID";
                                            $educationResult = executeQuery($educationCheck);

                                            if ($employmentInfo = mysqli_fetch_array($employmentResult)) { //checking if the user is an employee
                                                $employmentIndustryID = $employmentInfo["industry_id"]; //get ID of the foreign industry
                                                $employmentSalaryID = $employmentInfo["salary_id"]; //get ID of the Foreign salary

                                                $employmentSalaryCheck = "SELECT * FROM salaries WHERE salary_id='$employmentSalaryID'"; //get value of salaryID 
                                                $employmentSalaryResult = executeQuery($employmentSalaryCheck);
                                                $employeeSalary = mysqli_fetch_array($employmentSalaryResult);

                                                $employmentIndustryCheck = "SELECT * FROM industries WHERE industry_id='$employmentIndustryID'"; //get value of Industry ID
                                                $employmentIndustryResult = executeQuery($employmentIndustryCheck);
                                                $employeeIndustry = mysqli_fetch_array($employmentIndustryResult);
                                            ?>
                                                <div class="col" id="row2Body">
                                                    <div class="row gy-1" id="row2Content">
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employment Status:&nbsp;</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employmentInfo["employment_status"]; ?></p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employee Type:&nbsp;</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employmentInfo["employee_type"]; ?></p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Public/Private:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employmentInfo["employer_type"]; ?></p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Name of Employer/Company:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employmentInfo["employer_name"]; ?></p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Occupation:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">
                                                                <?php echo $employeeIndustry["industry_id"]; ?>
                                                            </p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Salary Range:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">
                                                                <?php echo $employeeSalary["salary_id"]; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                                ;
                                            } //if end
                                            else if ($educationInfo = mysqli_fetch_array($educationResult)) { //checking if the user is a student
                                                $educationIndustryID = $educationInfo["industry_id"]; //get ID of foreign industry
                                                $educationSalaryID = $educationInfo["salary_id"]; //get id of foreign salary

                                                $educationIndustryCheck = "SELECT * FROM industries WHERE industry_id='$educationIndustryID'";
                                                $educationIndustryResult = executeQuery($educationIndustryCheck);
                                                $studentIndustry = mysqli_fetch_array($educationIndustryResult);

                                                $educationSalaryCheck = "SELECT * FROM salaries WHERE salary_id='$educationSalaryID'";
                                                $educationSalaryResult = executeQuery($educationSalaryCheck);
                                                $studentSalary = mysqli_fetch_array($educationSalaryResult);

                                                if ($educationInfo["student_status"] == "ENROLLED") {
                                                ?>
                                                    <div class="col" id="row2Body">
                                                        <div class="row gy-1" id="row2Content">
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Status:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["student_status"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Level:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["student_level"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Public/Private:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["school_type"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Name of School/University:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["school_name"]; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php
                                                ;
                                                } //if end 
                                                else if ($educationInfo["student_status"] == "OUT-OF-SCHOOL YOUTH") {
                                                ?>
                                                    <div class="col" id="row2Body">
                                                        <div class="row gy-1" id="row2Content">
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Status:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["student_status"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Level:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["student_level"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Public/Private:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["school_type"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Name of School/University:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["school_name"]; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                } //else if end 
                                                else {
                                                ?>
                                                    <div class="col" id="row2Body">
                                                        <div class="row gy-1" id="row2Content">
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Status:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["student_status"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Student Level:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["student_level"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Public/Private:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["school_type"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Name of School/University:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $educationInfo["school_name"]; ?></p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Occupation:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">
                                                                    <?php echo $studentIndustry["description"]; ?>
                                                                </p>
                                                            </div>

                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Salary Range:</label>
                                                                <p class="textRetrieved" id="textRetrievedID">
                                                                    <?php echo $studentSalary["description"]; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- row2body end -->
                                                    </div>
                                                    <!-- rowContainer end -->
                                                    <!-- </div> -->
                                            <?php
                                                }; //else end
                                            } //elseif end
                                            ?>
                                            <!-- rowContainer End -->
                                        </div>

                                        <?php
                                        $householdID = $kabataanStatus["household_id"]; //getting the household id of the user
                                        $householdCheck = "SELECT *, CONCAT(`head_last_name`, ', ', `head_first_name`, ' ', `head_middle_name`) AS  head_full_name, FROM households WHERE household_id=$householdID"; //getting the household details of the user
                                        $queryHouseholdCheck = executeQuery($householdCheck);
                                        $household = mysqli_fetch_array($queryHouseholdCheck);
                                        ?>
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
                                                        <p class="textRetrieved" id="FamHead"><?php echo $household["head_full_name"]; ?></p>
                                                    </div>

                                                    <div class="col col-12" id="row4ContentDiv">
                                                        <label class="form-label modalLabel">Remarks:</label>
                                                        <p class="textRetrieved" id="textRetrievedID1"><?php echo $household["head_remarks"]; ?></p>
                                                    </div>

                                                    <div class="col col-12" id="row4ContentDiv">
                                                        <label class="form-label modalLabel">No. of members:</label>
                                                        <p class="textRetrieved" id="textRetrievedID1"><?php echo $household["members_count"]; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="modalOverlay"></div>
                                </div>
                            </div>
                            
                            <!-- </div> -->
                        <?php
                    };
                        ?>
                        <!-- Modal end -->
                        </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap-select -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

        <!-- Data tables -->
        <!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->
        <script src="assets/js/datatables.min.js"></script>
        <script src="assets/js/pdfmake.min.js"></script>
        <script src="assets/js/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

        <!-- Custom Script -->
        <script type="text/javascript" src="assets/js/profiles.js"></script>
        <script type="text/javascript" src="assets/js/sideMenu.js"></script>

        <!-- Active Link -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#profiles-link").addClass('nav-active');
                $("#profiles-md-link").addClass("nav-md-active");
            });
        </script>
</body>

</html>