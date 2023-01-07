<?php 
session_start();
include "connection.php";

$queryKabataanTbl = "SELECT * FROM residents"; //query to select all data from table
$resultKabataanTbl = mysqli_query($conn, $queryKabataanTbl); //execute query

$queryResidentsTbl = "SELECT * FROM residents"; //query to select all data from table
$resultResidentsTbl = mysqli_query($conn, $queryResidentsTbl); //execute query


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
                                <th class="actions">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            $queryKabataan = "SELECT *, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS age FROM residents WHERE DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 BETWEEN 15 AND 30";

                            $resultAge = mysqli_query($conn, $queryKabataan);

                            while ($row = mysqli_fetch_array($resultKabataanTbl)) {
                                while ($row = mysqli_fetch_array($resultAge)) 
                            {
                                $age = $row['age'];
                                $_SESSION['age'] = $age;
 
                                ?>

                                <tr>

                                <?php
                                    $resident_id=$row['resident_id']; //get resident id

                                    $employmentCheck="SELECT * FROM employment_info WHERE resident_id='$resident_id'"; //check if resident has employment info
                                    $queryEmploymentCheck =mysqli_query($conn,$employmentCheck);

                                    $educationCheck="SELECT * FROM educational_info WHERE resident_id='$resident_id'"; //check if resident has educational info
                                    $queryEducationCheck =mysqli_query($conn,$educationCheck);

                                ?>
                                    
                                    <td id="lastName" class="entryRow" scope="col" data-label="Last Name"><?php echo $row["last_name"]; ?></td>
                                    <td id="firstName" class="entryRow" scope="col" data-label="First Name"><?php echo $row["first_name"]; ?></td>
                                    <td id="middleName" class="entryRow" scope="col" data-label="Middle Name"><?php echo $row["middle_name"]; ?></td>
                                     <td id="birthday" class="entryRow" scope="col" data-label="Birthday"><?php echo $row["birthday"]; ?></td>
                                    <td id="age" class="entryRow" scope="col" data-label="Age"><?php echo $_SESSION['age']?></td>
                                    <td id="gender" class="entryRow" scope="col" data-label="Gender"><?php echo $row["gender_preference"]; ?></td>
                                    <td id="civilStatus" class="entryRow" scope="col" data-label="Civil status"><?php echo $row["marital_status"]; ?></td>
                                    <td id="purok" class="entryRow" scope="col" data-label="Purok"><?php echo $row["purok"]; ?></td>
                                    <td id="remarks" class="entryRow" scope="col" data-label="Remarks"><?php echo $row["remarks"]; ?></td>
                                    <td id="actions" class="entryRow" scope="col" data-label="Actions">
                            
                                        <a class="btn view viewMore actionBtn profile" data-bs-toggle="modal" data-bs-target="#viewMore<?php echo $row['resident_id']?>" data-id="<?php echo $row['resident_id']; ?>" href="#viewMore"><i class="fa-solid fa-eye"></i></a>
                                        <a href="updateEntry.php?residentID=<?php echo $row["resident_id"] ?>" value="" class="btn update edit actionBtn" role="button" aria-pressed="true"><i class="fa-solid fa-pen"></i></a>
                                        <a class="btn btn-danger btn-sm" role="button" aria-pressed="true" href="#"> <i class="fa-solid fa-trash-can"></i></a>
                            
                                    </td>
                            
                                </tr>
                                    
                                <!-- Kabataan Modal -->
                                <div class="modal fade" role="dialog" tabindex="1" id="viewMore<?php echo $row['resident_id']?>">
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
                                                        <p class="textName lastName w-100 my-1" id="textNameID"><?php echo $row['last_name'].' '.$row['first_name'].' '.$row['middle_name'] ?></p>
                                                        <p class="textGender w-100 my-1 mt-2"id="textAgeID"><?php echo $_SESSION['age'] ?> YEARS OLD</p>
                                                        <p class="textAge w-100 my-1" id="textGenderID"><?php echo $row['gender_preference']?></p>
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
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['birthday']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Voter Type:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['voter_type']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Birthplace:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['birthplace']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Contact No:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['contact_no']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Marital Status:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['marital_status']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Religion:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['religion']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Disability:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['disability']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Organization/s (if any):</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['organization']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">House No./St./Subd.:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['house_address']?>.&nbsp;</p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Purok:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['purok']?></p>
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
                                                
                                                if(mysqli_num_rows($queryEmploymentCheck)>0){ //checking if the user is an employee
                                                        $employment=mysqli_fetch_array($queryEmploymentCheck); //fetching the data from the database for employment details
                                                ?>
                                                <div class="col" id="row2Body">
                                                    <div class="row gy-1" id="row2Content">
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employment Status:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employment['employment_status']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employee Type:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employment['employee_type']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Public/Private:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employment['employer_type']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Name of Employer/Company:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employment['employer_name']?></p>
                                                        </div>

                                                        <?php 
                                                        $industry_id=$employment['industry_id']; // store industry_id to variable
                                                        $salary_id=$employment['salary_id']; // store salary_id to variable

                                                        $industryCheck="SELECT * FROM industries WHERE industry_id='$industry_id'";
                                                        $queryIndustryCheck =mysqli_query($conn,$industryCheck);

                                                        $salaryCheck="SELECT * FROM salaries WHERE salary_id='$salary_id'";
                                                        $querySalaryCheck =mysqli_query($conn,$salaryCheck);
                                                        ?>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Occupation:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">
                                                                <?php 
                                                                $industry=mysqli_fetch_array($queryIndustryCheck);
                                                                echo $industry['description']; 
                                                                ?>
                                                            </p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Salary Range:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">
                                                                <?php 
                                                                $salary=mysqli_fetch_array($querySalaryCheck);
                                                                echo $salary['description']; 
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php 
                                                }

                                                if(mysqli_num_rows($queryEducationCheck)>0) { //checking if the user is a student
                                                    $education=mysqli_fetch_array($queryEducationCheck); //fetching the data from the database for education details	

                                                    if ($education['student_status']=="ENROLLED") 
                                                    {
                                                        ?>                                                      
                                                        <div class="col" id="row2Body">
                                                            <div class="row gy-1" id="row2Content">
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Status:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_status']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Level:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_level']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Public/Private:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_type']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Name of School/University:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_name']?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }

                                                    if ($education['student_status']=="OUT-OF-SCHOOL YOUTH") 
                                                    {
                                                        ?>                                                      
                                                        <div class="col" id="row2Body">
                                                            <div class="row gy-1" id="row2Content">
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Status:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_status']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Level:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_level']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Public/Private:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_type']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Name of School/University:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_name']?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    
                                                    if ($education['student_status']=="WORKING STUDENT")
                                                    {
                                                        ?>                                                      
                                                        <div class="col" id="row2Body">
                                                            <div class="row gy-1" id="row2Content">
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Status:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_status']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Level:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_level']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Public/Private:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_type']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Name of School/University:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_name']?></p>
                                                                </div>

                                                                <?php

                                                                $industry_id=$education['industry_id']; // store industry_id to variable
                                                                $salary_id=$education['salary_id']; // store salary_id to variable

                                                                $industryCheck="SELECT * FROM industries WHERE industry_id='$industry_id'";
                                                                $queryIndustryCheck =mysqli_query($conn,$industryCheck);

                                                                $salaryCheck="SELECT * FROM salaries WHERE salary_id='$salary_id'";
                                                                $querySalaryCheck =mysqli_query($conn,$salaryCheck);
                                                                ?>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Occupation:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">
                                                                    <?php 
                                                                    $industry=mysqli_fetch_array($queryIndustryCheck);
                                                                    echo $industry['description']; 
                                                                    ?>
                                                                    </p>
                                                                </div>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Salary Range:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">
                                                                    <?php 
                                                                    $salary=mysqli_fetch_array($querySalaryCheck);
                                                                    echo $salary['description']; 
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
                                                    $household_id=$row['household_id']; //getting the household id of the user
                                                    $householdCheck="SELECT * FROM households WHERE household_id='$household_id'"; //getting the household details of the user
                                                    $queryHouseholdCheck = mysqli_query($conn,$householdCheck);

                                                    $household=mysqli_fetch_array($queryHouseholdCheck);
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
                                                                    <p class="textRetrieved" id="FamHead"><?php echo $household['head_first_name'].' '. $household['head_middle_name'].' '. $household['head_last_name'] ?></p>
                                                                </div>
                                                                <div class="col col-12" id="row4ContentDiv">
                                                                    <label class="form-label modalLabel">Remarks:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID1"><?php echo $household['head_remarks']?></p>
                                                                </div>
                                                                <div class="col col-12" id="row4ContentDiv">
                                                                    <label class="form-label modalLabel">No. of members:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID1"><?php echo $household['members_count']?></p>
                                                                </div>
                                                            </div>
                                                        </div>          
                                                    </div>
                                            <!-- <div class="modal-footer">
                                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                            </div> -->
                                            <?php
                                            } 
                                            ?>

                                        </div>
                                        <div id="modalOverlay"></div>
                                    </div>
                                </div>  


                                <script>
                                    $('.viewMore<?php echo $row["residentID"]?>').click(function()
                                    {
                                        
                                        var firstName = <?php echo $row['lastName'] ?>
                                        alert (firstName);
                                    }
                                    );
                                </script>

                            <?php
                            }
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
                            $queryResidents = "SELECT *, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 AS age FROM residents WHERE DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), birthday)), '%Y') + 0 NOT BETWEEN 15 AND 30";

                            $resultAge = mysqli_query($conn, $queryResidents);

                            while ($row = mysqli_fetch_array($resultResidentsTbl)) {
                                while ($row = mysqli_fetch_array($resultAge)) 
                            {
                                $age = $row['age'];
                                $_SESSION['age'] = $age;
 
                                ?>

                                <tr>

                                <?php
                                    $resident_id=$row['resident_id']; //get resident id

                                    $employmentCheck="SELECT * FROM employment_info WHERE resident_id='$resident_id'"; //check if resident has employment info
                                    $queryEmploymentCheck =mysqli_query($conn,$employmentCheck);

                                    $educationCheck="SELECT * FROM educational_info WHERE resident_id='$resident_id'"; //check if resident has educational info
                                    $queryEducationCheck =mysqli_query($conn,$educationCheck);

                                ?>
                                    
                                    <td id="lastName" class="entryRow" scope="col" data-label="Last Name"><?php echo $row["last_name"]; ?></td>
                                    <td id="firstName" class="entryRow" scope="col" data-label="First Name"><?php echo $row["first_name"]; ?></td>
                                    <td id="middleName" class="entryRow" scope="col" data-label="Middle Name"><?php echo $row["middle_name"]; ?></td>
                                     <td id="birthday" class="entryRow" scope="col" data-label="Birthday"><?php echo $row["birthday"]; ?></td>
                                    <td id="age" class="entryRow" scope="col" data-label="Age"><?php echo $_SESSION['age']?></td>
                                    <td id="gender" class="entryRow" scope="col" data-label="Gender"><?php echo $row["gender_preference"]; ?></td>
                                    <td id="civilStatus" class="entryRow" scope="col" data-label="Civil status"><?php echo $row["marital_status"]; ?></td>
                                    <td id="purok" class="entryRow" scope="col" data-label="Purok"><?php echo $row["purok"]; ?></td>
                                    <td id="remarks" class="entryRow" scope="col" data-label="Remarks"><?php echo $row["remarks"]; ?></td>
                                    <td id="actions" class="entryRow" scope="col" data-label="Actions">
                            
                                        <a class="btn view viewMore actionBtn profile" data-bs-toggle="modal" data-bs-target="#viewMore<?php echo $row['resident_id']?>" data-id="<?php echo $row['resident_id']; ?>" href="#viewMore"><i class="fa-solid fa-eye"></i></a>
                                        <a href="updateEntry.php?residentID=<?php echo $row["resident_id"] ?>" value="" class="btn update edit actionBtn" role="button" aria-pressed="true"><i class="fa-solid fa-pen"></i></a>
                                        <a class="btn btn-danger btn-sm" role="button" aria-pressed="true" href="#"> <i class="fa-solid fa-trash-can"></i></a>
                            
                                    </td>
                            
                                </tr>
                                    
                                <!-- Residents Modal -->
                                <div class="modal fade" role="dialog" tabindex="1" id="viewMore<?php echo $row['resident_id']?>">
                                    <div class="modal-dialog" id="modalDialogID" role="document">
                                        <div class="modal-content" id="modalContentID">
                                            <div class="modal-header" id="modalHeaderID">
                                                <h4 class="modal-title" id="modalTitleID">Resident Information</h4>
                                                <button type="button" id="" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <hr id="modalHR">
                                            <div class="modal-body m-0" id="modalBodyID">
                                                <div class="row rowContainer mx-2" id="modalRow1">
                                                    <div class="col col-lg-8 col-md-8 col-sm-12 col-12" id='textDiv'>
                                                        <p class="textName lastName w-100 my-1" id="textNameID"><?php echo $row['last_name'].',  '.$row['first_name'].' '.$row['middle_name'] ?></p>
                                                        <p class="textGender w-100 my-1 mt-2"id="textAgeID"><?php echo $_SESSION['age'] ?> YEARS OLD</p>
                                                        <p class="textAge w-100 my-1" id="textGenderID"><?php echo $row['gender_preference']?></p>
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
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['birthday']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Voter Type:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['voter_type']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Birthplace:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['birthplace']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Contact No:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['contact_no']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Marital Status:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['marital_status']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Religion:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['religion']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Disability:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['disability']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Organization/s (if any):</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['organization']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">House No./St./Subd.:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['house_address']?>.&nbsp;</p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Purok:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $row['purok']?></p>
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
                                                
                                                if(mysqli_num_rows($queryEmploymentCheck)>0){ //checking if the user is an employee
                                                        $employment=mysqli_fetch_array($queryEmploymentCheck); //fetching the data from the database for employment details
                                                ?>
                                                <div class="col" id="row2Body">
                                                    <div class="row gy-1" id="row2Content">
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employment Status:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employment['employment_status']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employee Type:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employment['employee_type']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Employer/Company:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employment['employer_name']?></p>
                                                        </div>
                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Public/Private:</label>
                                                            <p class="textRetrieved" id="textRetrievedID"><?php echo $employment['employer_type']?></p>
                                                        </div>
                                                        
                                                        <?php 
                                                        $industry_id=$employment['industry_id']; // store industry_id to variable
                                                        $salary_id=$employment['salary_id']; // store salary_id to variable

                                                        $industryCheck="SELECT * FROM industries WHERE industry_id='$industry_id'";
                                                        $queryIndustryCheck =mysqli_query($conn,$industryCheck);

                                                        $salaryCheck="SELECT * FROM salaries WHERE salary_id='$salary_id'";
                                                        $querySalaryCheck =mysqli_query($conn,$salaryCheck);
                                                        ?>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Occupation:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">
                                                                <?php 
                                                                $industry=mysqli_fetch_array($queryIndustryCheck);
                                                                echo $industry['description']; 
                                                                ?>
                                                            </p>
                                                        </div>

                                                        <div class="col-6" id="row2ContentDiv">
                                                            <label class="form-label modalLabel">Salary Range:</label>
                                                            <p class="textRetrieved" id="textRetrievedID">
                                                                <?php 
                                                                $salary=mysqli_fetch_array($querySalaryCheck);
                                                                echo $salary['description']; 
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php 
                                                }

                                                if(mysqli_num_rows($queryEducationCheck)>0) { //checking if the user is a student
                                                    $education=mysqli_fetch_array($queryEducationCheck); //fetching the data from the database for education details	

                                                    if ($education['student_status']=="ENROLLED") 
                                                    {
                                                        ?>                                                      
                                                        <div class="col" id="row2Body">
                                                            <div class="row gy-1" id="row2Content">
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Status:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_status']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Level:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_level']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Public/Private:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_type']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Name of School/University:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_name']?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }

                                                    if ($education['student_status']=="OUT-OF-SCHOOL YOUTH") 
                                                    {
                                                        ?>                                                      
                                                        <div class="col" id="row2Body">
                                                            <div class="row gy-1" id="row2Content">
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Status:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_status']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Level:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_level']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Public/Private:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_type']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Name of School/University:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_name']?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    
                                                    if ($education['student_status']=="WORKING STUDENT")
                                                    {
                                                        ?>                                                      
                                                        <div class="col" id="row2Body">
                                                            <div class="row gy-1" id="row2Content">
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Status:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_status']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Student Level:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['student_level']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Public/Private:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_type']?></p>
                                                                </div>
                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Name of School/University:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID"><?php echo $education['school_name']?></p>
                                                                </div>

                                                                <?php

                                                                $industry_id=$education['industry_id']; // store industry_id to variable
                                                                $salary_id=$education['salary_id']; // store salary_id to variable

                                                                $industryCheck="SELECT * FROM industries WHERE industry_id='$industry_id'";
                                                                $queryIndustryCheck =mysqli_query($conn,$industryCheck);

                                                                $salaryCheck="SELECT * FROM salaries WHERE salary_id='$salary_id'";
                                                                $querySalaryCheck =mysqli_query($conn,$salaryCheck);
                                                                ?>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Occupation:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">
                                                                    <?php 
                                                                    $industry=mysqli_fetch_array($queryIndustryCheck);
                                                                    echo $industry['description']; 
                                                                    ?>
                                                                    </p>
                                                                </div>

                                                                <div class="col-6" id="row2ContentDiv">
                                                                    <label class="form-label modalLabel">Salary Range:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID">
                                                                    <?php 
                                                                    $salary=mysqli_fetch_array($querySalaryCheck);
                                                                    echo $salary['description']; 
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
                                                    $household_id=$row['household_id']; //getting the household id of the user
                                                    $householdCheck="SELECT * FROM households WHERE household_id='$household_id'"; //getting the household details of the user
                                                    $queryHouseholdCheck = mysqli_query($conn,$householdCheck);

                                                    $household=mysqli_fetch_array($queryHouseholdCheck);
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
                                                                    <label class="form-label modalLabel1">Head of the family:</label>
                                                                    <p class="textRetrieved" id="FamHead"><?php echo $household['head_first_name'].' '. $household['head_middle_name'].' '. $household['head_last_name'] ?></p>
                                                                </div>
                                                                <div class="col col-6" id="row4ContentDiv">
                                                                    <label class="form-label modalLabel1">Remarks:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID1"><?php echo $household['head_remarks']?></p>
                                                                </div>
                                                                <div class="col col-6" id="row4ContentDiv">
                                                                    <label class="form-label modalLabel1">No. of members:</label>
                                                                    <p class="textRetrieved" id="textRetrievedID1"><?php echo $household['members_count']?></p>
                                                                </div>
                                                            </div>
                                                        </div>          
                                                    </div>
                                            <!-- <div class="modal-footer">
                                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                            </div> -->
                                            <?php
                                            } 
                                            ?>

                                        </div>
                                        <div id="modalOverlay"></div>
                                    </div>
                                </div>  


                                <script>
                                    $('.viewMore<?php echo $row["residentID"]?>').click(function()
                                    {
                                        
                                        var firstName = <?php echo $row['lastName'] ?>
                                        alert (firstName);
                                    }
                                    );
                                </script>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap-select -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- Virtual Select JS Library -->
    <!-- <script type="text/javascript" src="assets/js/virtual-select.min.js"></script> -->

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
        })
    </script>
</body>

</html>