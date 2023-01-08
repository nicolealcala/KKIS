<?php
// session_start();
require "connection.php";
require "modals.php";

$queryResidents = "SELECT  *, CONCAT(`last_name`, ', ', `first_name`) AS `full_name`, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS `age` FROM `residents` WHERE DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 > 29";
$resultResidents = executeQuery($queryResidents);


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
                    <button class="menuBtn menu1 rounded-pill me-3" id="kabataan">Kabataan</button>
                    <button class="menuBtn menu2 rounded-pill" id="residents">Residents</button>
                </div>
                <!-- RESIDENTS START -->
                <!-- Residents Table Start -->
                <div class="sectionDiv mx-0 mt-4" id="sectionResidents">
                    <!-- Options Rows -->
                    <div class="optionRow row gx-5 m-0 mb-1">
                        <!-- Show No. of Rows -->
                        <div class="col-lg-12 col-md-4 col-sm-6 col-12 d-flex align-items-center my-1 p-0" id="residentsLength"></div>
                        <!-- Output Buttons -->
                        <div class="d-none col-lg-6 d-lg-flex justify-content-lg-start p-0" id="residentsOutput"></div>
                        <!-- Filter -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex align-items-">
                        </div>
                        <!-- Search -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0" id="residentsSearch">

                        </div>
                    </div>

                    <!-- Actual table -->
                    <table class="table table-stripped table-bordered dataTable responsive display nowrap no-footer dtr-inline collapsed" role="grid" cellspacing="0" id="residentsTbl" style="width:100%">
                        <thead class="tblHeadRow">
                            <tr>
                                <th class="tblHead">Name</th>
                                <th class="tblHead">Gender</th>
                                <th class="tblHead">Age</th>
                                <th class="tblHead">Birthday</th>
                                <th class="tblHead">Civil status</th>
                                <th class="tblHead">Contact No.</th>
                                <th class="tblHead">Purok</th>
                                <th class="tblHead actions">Actions</th>
                            </tr>
                        </thead>

                        <thead id="residentsTblHead">
                            <tr>
                                <!-- <th class="tblHead"></th>
                                <th class="tblHead"></th>
                                <th class="tblHead"></th>
                                <th class="tblHead"></th>
                                <th class="tblHead"></th>
                                <th class="tblHead"></th>
                                <th class="tblHead"></th>
                                <th class="tblHead actions"></th> -->
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            while ($rowResidents = mysqli_fetch_array($resultResidents)) {
                                $residentName = $rowResidents['full_name'];
                                echo '
                                
                                <tr>
                                        <td class="entryRow" scope="col" data-label="Name">' . $rowResidents['full_name'] . '</td>
                                        <td class="entryRow" scope="col" data-label="Gender">' . $rowResidents['gender_preference'] . '</td>
                                        <td class="entryRow" scope="col" data-label="Age">' . $rowResidents['age'] . '</td>
                                        <td class="entryRow" scope="col" data-label="Birthday">' . $rowResidents['birthday'] . '</td>
                                        <td class="entryRow" scope="col" data-label=Marital Status"">' . $rowResidents['marital_status'] . '</td>
                                        <td class="entryRow" scope="col" data-label="ContactNo.">' . $rowResidents['contact_no'] . '</td>
                                        <td class="entryRow" scope="col" data-label="Purok">' . $rowResidents['purok'] . '</td>
                                        <td class="entryRow text-center" scope="col" data-label="Actions">
                                            <div class="row gy-2 mx-0" height="100%">
                                                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
                                                    <a class="btn btn-warning actionBtn" role="button" data-bs-toggle="modal" data-bs-target="#viewMore-' . $rowResidents['resident_id'] . '" data-id="' . $rowResidents['resident_id'] . '" href="#viewMore-' . $rowResidents['resident_id'].'"><i class="fa-regular fa-eye"></i></a> 
                                                </div>
                                            
                                                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
                                                    <a class="btn btn-primary actionBtn" value="" href="updateEntry.php?residentID=' . $rowResidents['rencrypted_id'] . '" role="button" aria-pressed="true"><i class="fa-solid fa-pen"></i></a>
                                                </div>

                                                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
                                                    <button class="btn btn-danger actionBtn" id="deleteEntry" onclick="warning()"><i class="fa-regular fa-trash-can"></i></button>
                                                    <script>
                                                        function warning(){
                                                            Swal.fire({
                                                                icon: "warning",
                                                                title: "Are you sure?",
                                                                text: "Deleting ' . $residentName . ' will completely remove this record.",
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                window.location.href = "./profiles-residents.php";
                                                                }
                                                            });
                                                        };
                                                    </script>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr id="residentsFooter">
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


                    <!-- Resident Modal -->
                    <?php
                    while ($rowResidents = mysqli_fetch_array($resultResidents)) {
                        $residentID = $rowResidents['resident_id'];
                        echo '
                    <div class="modal fade" role="dialog" tabindex="1" id="viewMore-' . $rowResidents['resident_id'] . '">
                        <div class="modal-dialog" id="modalDialogID" role="document">
                            <div class="modal-content" id="modalContentID">
                                <div class="modal-header" id="modalHeaderID">
                                    <h4 class="modal-title" id="modalTitleID">Kabataan Information</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <hr id="modalHR">
                                <div class="modal-body m-0" id="modalBodyID">
                                    <div class="row rowContainer mx-2" id="modalRow1">
                                        <div class="col col-lg-8 col-md-8 col-sm-12 col-12" id="textDiv">
                                            <p class="textName lastName w-100 my-1" id="textNameID">' . $rowResidents['full_name'] . '</p>
                                            <p class="textAge w-100 my-1 mt-2" id="textAgeID">' . $rowResidents['age'] . ' ' . 'YEARS OLD
                                            </p>
                                            <p class="textGender w-100 my-1" id="textGenderID">' . $rowResidents['gender_preference'] . '
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
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['birthday'] . ' </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Voter Type:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['voter_type'] . '
                                                    </p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Birthplace:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['birthplace'] . '</p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Contact No:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['contact_no'] . '</p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Marital Status:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['marital_status'] . '</p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Religion:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['religion'] . '</p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Disability:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['disability'] . '</p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Organization/s (if any):</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['organization'] . '</p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">House No./St./Subd.:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['house_address'] . '</p>
                                                </div>

                                                <div class="col-6" id="row2ContentDiv">
                                                    <label class="form-label modalLabel">Purok:</label>
                                                    <p class="textRetrieved" id="textRetrievedID">' . $rowResidents['purok'] . '</p>
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
                                        <div class="col" id="row2Body">';

                        $employmentCheck = "SELECT * FROM `employment_info` WHERE `resident_id` = $residentID";
                        $employmentResult = executeQuery($employmentCheck);
                        $employmentInfo = mysqli_fetch_array($employmentResult);

                        $employmentIndustryID = $employmentInfo['industry_id'];
                        $employmentSalaryID = $employmentInfo['salary_id'];

                        $employmentSalaryCheck = "SELECT * FROM salaries WHERE salary_id='$employmentSalaryID'";
                        $employmentSalaryResult = executeQuery($employmentSalaryCheck);
                        $employeeSalary = mysqli_fetch_array($employmentSalaryResult);

                        $employmentIndustryCheck = "SELECT * FROM industries WHERE industry_id='$employmentIndustryID'";
                        $employmentIndustryResult = executeQuery($employmentIndustryCheck);
                        $employeeIndustry = mysqli_fetch_array($employmentIndustryResult);

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
                                                        <p class="textRetrieved" id="textRetrievedID">' . $employeeIndustry['description'] . '</p>
                                                    </div>

                                                    <div class="col-6" id="row2ContentDiv">
                                                        <label class="form-label modalLabel">Salary Range:</label>
                                                        <p class="textRetrieved" id="textRetrievedID">' . $employeeSalary['description'] . '</p>
                                                    </div>
                                                ';
                        } else if ($educationInfo > 0) {
                            $educationCheck = "SELECT * FROM educational_info WHERE `resident_id` = $residentID";
                            $educationResult = executeQuery($educationCheck);
                            $educationInfo = mysqli_fetch_array($educationResult);

                            $educationIndustryID = $educationInfo['industry_id'];
                            $educationSalaryID = $educationInfo['salary_id'];

                            $educationIndustryCheck = "SELECT * FROM industries WHERE industry_id='$educationIndustryID'";
                            $educationIndustryResult = executeQuery($educationIndustryCheck);
                            $studentIndustry = mysqli_fetch_array($educationIndustryResult);

                            $educationSalaryCheck = "SELECT * FROM salaries WHERE salary_id='$educationSalaryID'";
                            $educationSalaryResult = executeQuery($educationSalaryCheck);
                            $studentSalary = mysqli_fetch_array($educationSalaryResult);

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
                                                                    <p class="textRetrieved" id="textRetrievedID">' . $educationInfo['student_status'] . '</p>
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
                                                                    <p class="textRetrieved" id="textRetrievedID">' . $studentIndustry['description'] . '</p>
                                                                </div>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Salary Range:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">' . $studentSalary['description'] . '</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ';
                            }
                        }
                        echo '
                                        

                                        <div class="row rowContainer my-4 mx-2" id="modalRow2">
                                            <div class="col col-12 p-0">
                                                <div class="markerContainer px-3" id="row2Header">
                                                    <p class="modalMarker" id="row2Title">House Declaration</p>
                                                </div>
                                            </div>';

                        $householdID = $rowResidents['household_id']; //getting the household id of the user
                        $queryHouseholds = "SELECT * FROM `households` WHERE household_id='$householdID'"; //getting the household details of the user
                        $householdResult = executeQuery($queryHouseholds);
                        $householdInfo = mysqli_fetch_array($householdResult);
                        echo '
                                            <div class="col" id="row2Body">
                                                <div class="row gy-1" id="row4Content">
                                                    <div class="col col-12" id="row4ContentDiv">
                                                        <label class="form-label modalLabel">Head of the family:</label>
                                                        <p class="textRetrieved" id="FamHead">' . $householdInfo['head_full_name'] . '</p>
                                                    </div>

                                                    <div class="col col-12" id="row4ContentDiv">
                                                        <label class="form-label modalLabel">Remarks:</label>
                                                        <p class="textRetrieved" id="textRetrievedID1">' . $householdInfo['head_remarks'] . '</p>
                                                    </div>

                                                    <div class="col col-12" id="row4ContentDiv">
                                                        <label class="form-label modalLabel">No. of members:</label>
                                                        <p class="textRetrieved" id="textRetrievedID1">' . $householdInfo['members_count'] . '</p>
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
                    </div>';
                    }
                    ?>
                    <!-- sectionKabataan end -->
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
                $("#residents").addClass("menu-active");
            })
        </script>
</body>

</html>