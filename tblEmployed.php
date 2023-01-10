<?php
session_start();
require "connection.php";
require "modals.php";

$queryEmployed = "SELECT *, CONCAT(`last_name`, ', ', `first_name`, ' ', `middle_name`) AS  full_name, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS age, employment_info.employment_status FROM `employment_info` RIGHT JOIN `residents` ON employment_info.resident_id = residents.resident_id WHERE `employment_status` = 'Employed' "; //query to select all data from table
$queryEmployedResult = executeQuery($queryEmployed); //execute query

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employed</title>

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
                    <span class="pageTitle">Employed</span>
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
                <!-- Kabataan Table Start -->
                <div class="sectionDiv mx-0 mt-4" id="sectionKabataan">
                    <!-- Options Rows -->
                    <div class="optionRow row gx-5 m-0 mb-1">
                        <!-- Show No. of Rows -->
                        <div class="col-lg-12 col-md-4 col-sm-6 col-12 d-flex align-items-center my-1 p-0" id="kabataanLength"></div>
                        <!-- Output Buttons -->
                        <div class="d-none col-lg-6 d-lg-flex justify-content-lg-start p-0" id="kabataanOutput"></div>
                        <!-- Filter -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-center">
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
                                <th class="tblHead">Civil status</th>
                                <th class="tblHead">Contatct No.</th>
                                <th class="tblHead">Purok</th>
                                <th class="tblHead">Employer Type</th>
                                <th class="tblHead actions">Actions</th>
                            </tr>
                        </thead>

                        <thead id="kabataanTblHead">
                            <tr>
                                <!-- <th></th>
                                <th></th>
                                <th></th>
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
                            while ($employed = mysqli_fetch_array($queryEmployedResult)) {
                                $employedID = $employed["resident_id"]; //get resident id
                                $employedEID = $employed["rencrypted_id"];
                            ?>

                                <tr>

                                    <td id="fullName" class="entryRow" scope="col" data-label="Name"><?php echo $employed["full_name"]; ?></td>

                                    <td id="gender" class="entryRow" scope="col" data-label="Gender"><?php echo $employed["gender_preference"]; ?></td>

                                    <td id="age" class="entryRow" scope="col" data-label="Age"><?php echo $employed["age"]; ?></td>

                                    <td id="birthday" class="entryRow" scope="col" data-label="Birthdate"><?php echo $employed["birthday"]; ?></td>

                                    <td id="civilStatus" class="entryRow" scope="col" data-label="Civil status"><?php echo $employed["marital_status"]; ?></td>

                                    <td id="contactNo" class="entryRow" scope="col" data-label="Contact No."><?php echo $employed["contact_no"]; ?></td>


                                    <td id="purok" class="entryRow" scope="col" data-label="Purok"><?php echo $employed["purok"]; ?></td>

                                    <td id="employer_type" class="entryRow" scope="col" data-label="Employer Type"><?php echo $employed["employer_type"]; ?></td>

                                    <td id="actions" class="entryRow" scope="col" data-label="Actions">
                                        <div class="row mx-0 p-0">
                                            <!-- View More -->
                                            <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center p-0">
                                                <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#viewMore<?php echo $outOfSchool["resident_id"]; ?>" data-id="<?php echo $outOfSchool["resident_id"]; ?>" href="#viewMore">View More</a>
                                            </div>
                                        </div>  
                                    </td>

                                </tr>

                                <!-- Kabataan Modal -->
                                <div class="modal fade" role="dialog" tabindex="1" id="viewMore<?php echo $employed["resident_id"]; ?>">
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
                                                        <p class="textName lastName w-100 my-1" id="textNameID"><?php echo $employed["full_name"]; ?></p>
                                                        <p class="textGender w-100 my-1 mt-2" id="textAgeID"><?php echo $employed["age"]; ?> YEARS OLD</p>
                                                        <p class="textAge w-100 my-1" id="textGenderID"><?php echo $employed["gender_preference"]; ?></p>
                                                    </div>
                                                    <div class="col align-self-center" id="divQR"><img class="imgContainer" id="imgQR" src="assets/img/misc/qrcode.png"></div>
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
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["birthday"]; ?></p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Voter Type:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["voter_type"]; ?></p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Birthplace:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["birthplace"]; ?></p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Contact No:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["contact_no"]; ?></p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Marital Status:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["marital_status"]; ?></p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Religion:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["religion"]; ?></p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Disability:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["disability"]; ?></p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Organization/s (if any):</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["organization"]; ?></p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">House No./St./Subd.:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["house_address"]; ?>.&nbsp;</p>
                                                            </div>
                                                            <div class="col-6" id="row2ContentDiv">
                                                                <label class="form-label modalLabel">Purok:</label>
                                                                <p class="textRetrieved" id="textRetrievedID"><?php echo $employed["purok"]; ?></p>
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
                                                    $employmentCheck = "SELECT * FROM employment_info WHERE resident_id = $employedID"; //check if resident has employment info
                                                    $employmentCheckResult = executeQuery($employmentCheck);

                                                    $educationCheck = "SELECT * FROM educational_info WHERE resident_id = $employedID"; //check if resident has educational info
                                                    $educationCheckResult = executeQuery($educationCheck);

                                                    if ($employment = mysqli_fetch_array($employmentCheckResult)) { //checking if the user is an employee
                                                    ?>
                                                        <div class="col" id="row2Body">
                                                            <div class="row gy-1" id="row2Content">
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Employment Status:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $employment["employment_status"]; ?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Employee Type:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $employment["employee_type"]; ?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Public/Private:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $employment["employer_type"]; ?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Name of Employer/Company:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $employment["employer_name"]; ?></p>
                                                                </div>

                                                                <?php
                                                                $industry_id = $employment["industry_id"]; // store industry_id to variable
                                                                $salary_id = $employment["salary_id"]; // store salary_id to variable

                                                                $industryCheck = "SELECT * FROM industries WHERE industry_id='$industry_id'";
                                                                $queryIndustryCheck = mysqli_query($conn, $industryCheck);

                                                                $salaryCheck = "SELECT * FROM salaries WHERE salary_id='$salary_id'";
                                                                $querySalaryCheck = mysqli_query($conn, $salaryCheck);
                                                                ?>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Occupation:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">
                                                                        <?php
                                                                        $industry = mysqli_fetch_array($queryIndustryCheck);
                                                                        echo $industry["description"];
                                                                        ?>
                                                                    </p>
                                                                </div>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Salary Range:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">
                                                                        <?php
                                                                        $salary = mysqli_fetch_array($querySalaryCheck);
                                                                        echo $salary["description"];
                                                                        ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php
                                                    } else if ($education = mysqli_fetch_array($educationCheckResult)) { //checking if the user is a student

                                                        if ($education["student_status"] == "ENROLLED") {
                                                        ?>
                                                            <div class="col" id="row2Body">
                                                                <div class="row gy-1" id="row2Content">
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Student Status:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["student_status"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Student Level:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["student_level"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Public/Private:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["school_type"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Name of School/University:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["school_name"]; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        } else if ($education["student_status"] == "OUT-OF-SCHOOL YOUTH") {
                                                        ?>
                                                            <div class="col" id="row2Body">
                                                                <div class="row gy-1" id="row2Content">
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Student Status:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["student_status"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Student Level:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["student_level"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Public/Private:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["school_type"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Name of School/University:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["school_name"]; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <div class="col" id="row2Body">
                                                                <div class="row gy-1" id="row2Content">
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Student Status:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["student_status"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Student Level:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["student_level"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Public/Private:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["school_type"]; ?></p>
                                                                    </div>
                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Name of School/University:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID"><?php echo $education["school_name"]; ?></p>
                                                                    </div>

                                                                    <?php

                                                                    $industry_id = $education["industry_id"]; // store industry_id to variable
                                                                    $salary_id = $education["salary_id"]; // store salary_id to variable

                                                                    $industryCheck = "SELECT * FROM industries WHERE industry_id='$industry_id'";
                                                                    $queryIndustryCheck = mysqli_query($conn, $industryCheck);

                                                                    $salaryCheck = "SELECT * FROM salaries WHERE salary_id='$salary_id'";
                                                                    $querySalaryCheck = mysqli_query($conn, $salaryCheck);
                                                                    ?>

                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Occupation:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID">
                                                                            <?php
                                                                            $industry = mysqli_fetch_array($queryIndustryCheck);
                                                                            echo $industry["description"];
                                                                            ?>
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-6" id="row2ContentDiv">
                                                                        <label class="form-label modalLabel">Salary Range:</label>
                                                                        <p class="textRetrieved" id="textRetrievedID">
                                                                            <?php
                                                                            $salary = mysqli_fetch_array($querySalaryCheck);
                                                                            echo $salary["description"];
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    <?php
                                                    }
                                                    $household_id = $employed["household_id"]; //getting the household id of the user
                                                    $householdCheck = "SELECT *, CONCAT(`head_first_name`, ', ', `head_first_name`, ' ', `head_middle_name`) AS `head_name` FROM households WHERE household_id = $household_id"; //getting the household details of the user
                                                    $householdCheckResult = executeQuery($householdCheck);
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
                                                            <?php
                                                            while ($household = mysqli_fetch_array($householdCheckResult)) {
                                                            ?>
                                                                <div class="col col-12" id="row4ContentDiv">
                                                                    <label class="form-label modalLabel">Head of the family:</label>
                                                                    <p class="textRetrieved" id="FamHead"><?php echo $household["head_name"]; ?></p>
                                                                </div>
                                                                <div class="col col-12" id="row4ContentDiv">
                                                                    <label class="form-label modalLabel">Remarks:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID1"><?php echo $household["head_remarks"]; ?></p>
                                                                </div>
                                                                <div class="col col-12" id="row4ContentDiv">
                                                                    <label class="form-label modalLabel">No. of members:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID1"><?php echo $household["members_count"]; ?></p>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div">
                                            </div>
                                        </div>
                                        <div id="modalOverlay"></div>
                                    </div>
                                    <!-- Kabataan Modal End -->
                                </div>

                            <?php
                            };
                            ?>
                        </tbody>
                        <tfoot>
                            <tr id="kabataanFooter">
                                <th></th>
                                <th></th>
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
            $("#kabataan").addClass("menu-active");
        })
    </script>
</body>

</html>