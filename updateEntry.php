<?php
require 'connection.php';
require 'modals.php';
include "assets/phpqrcode/qrlib.php";

$updateResidentID=$_GET['residentID']; //get the resident ID from $_POST

$queryLoadResidents="SELECT * FROM residents WHERE resident_id='$updateResidentID'";
$resultResidents=mysqli_query($conn, $queryLoadResidents);
$residents = mysqli_fetch_array($resultResidents);

$queryLoadEmployment="SELECT * FROM employment_info WHERE resident_id='$updateResidentID'";
$resultEmployment=mysqli_query($conn, $queryLoadEmployment);
$employment = mysqli_fetch_array($resultEmployment);

$queryLoadEducation="SELECT * FROM educational_info WHERE resident_id='$updateResidentID'";
$resultEducation=mysqli_query($conn, $queryLoadEducation);
$education=mysqli_fetch_array($resultEducation);

$residentID=$residents['resident_id'];
$householdID=$residents['household_id'];

$queryLoadHousehold="SELECT * FROM households WHERE household_id='$householdID'";
$resultHouseholds=mysqli_query($conn, $queryLoadHousehold);
$household=mysqli_fetch_array($resultHouseholds);

// Declaring variables

// Resident Info
$fName= "";
$mName= "";
$lName= "";
$genderPreference = "";
$religion = "";
$mStatus = "";
$disability = "";
$contactNumber = "";
$voterType = "";
$houseAddress = "";
$purok = "";
$organization = "";

// Household Info
$household_firstName="";
$household_middleName="";
$household_lastName="";
$household_membersCount="";
$household_remarks="";

// Educational Info
$educStatus = "";
$educLevel = "";
$schoolType = "";
$school = "";
$educIndustry =  "";
$educSalary = "";

// Employment Info
$employStatus = "";
$employeeType = "";
$employerType = "";
$employer = "";
$employIndustry = "";
$employSalary = "";

// Storing data db to variable

// Resident Info
$fName= $residents['first_name'];
$mName= $residents['middle_name'];
$lName= $residents['last_name'];
$birthday = $residents['birthday'];
$birthplace = $residents['birthplace'];
$genderPreference = $residents['gender_preference'];
$religion = $residents['religion'];
$mStatus = $residents['marital_status'];
$disability= $residents['disability'];
$contact = $residents['contact_no'];
$voterType = $residents['voter_type'];
$houseAddress = $residents['house_address'];
$purok = $residents['purok'];
$organization = $residents['organization'];

// Household Info
$hFname=$household['head_first_name'];
$hMname=$household['head_middle_name'];
$hLname=$household['head_last_name'];
$membersCount=$household['members_count'];
$remarks=$household['head_remarks'];

if (mysqli_num_rows($resultEducation)>0){
// Educational Info
$educStatus = $education['student_status'];
$educLevel = $education['student_level'];
$schoolType = $education['school_type'];
$school = $education['school_name'];
$educIndustry =  $education['industry_id'];
$educSalary = $education['salary_id'];
}

if (mysqli_num_rows($resultEmployment)>0){
// Employment Info
$employStatus = $employment['employment_status'];
$employeeType = $employment['employee_type'];
$employerType = $employment['employer_type'];
$employer = $employment['employer_name'];
$employIndustry = $employment['industry_id'];
$employSalary = $employment['salary_id'];
}

//update data

if (isset($_POST['submitBtn'])){
    // Household Info
    $hFname = $_POST['hFname'];
    $hMname = isset($_POST['hMName']) ?  $_POST['hMname'] : "";
    $hLname = $_POST['hLname'] . " " . $_POST['hSuffix'];
    $remarks = isset($_POST['remarks']) ? $_POST['remarks'] : "";
    $membersCount = $_POST['membersCount'];

    //Personal Info
    $residentID;
    $fName = $_POST['fName'];
    $mName = isset($_POST['mName']) ?  $_POST['mName'] : "";
    if (isset($_POST['suffix'])) {
        $lName = $_POST['lName'] . " " . $_POST['suffix'];
    } else {
        $lName = $_POST['lName'];
    }
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $birthplace = $_POST['birthplace'];
    $mStatus = $_POST['mStatus'];
    $religion = $_POST['religion'];
    $disability = $_POST['disability'];
    $contact = $_POST['contact'];
    $voterType = $_POST['voterType'];
    $address = $_POST['address'];
    $purok = $_POST['purok'];
    $organization = $_POST['organization'];
    $householdID; //foreign key
    $date_added = date("Y-m-d");
    $encryptedName = $fName . " " . $lName;

    // Educational Info
    $educStatus = isset($_POST['educStatus']) ? ($_POST['educStatus']) : null;
    $educlevel = isset($_POST['educLevel']) ? ($_POST['educLevel']) : "N/A";
    $schoolType = isset($_POST['schoolType']) ? ($_POST['schoolType']) : "N/A";
    $school = isset($_POST['schoolName']) ? ($_POST['schoolName']) : "N/A";
    $educIndustry =  isset($_POST['educIndustry']) ? ($_POST['educIndustry']) : "64"; //foreign key
    $educSalary = isset($_POST['educSalary']) ? ($_POST['educSalary']) : "1"; // foreign key

    // Employment Info
    $employStatus = isset($_POST['employeeStatus']) ? $_POST['employeeStatus'] : null;
    $employeeType = isset($_POST['employeeType']) ? $_POST['employeeType'] : "N/A";
    $employerType = isset($_POST['employerType']) ? $_POST['employerType'] : "N/A";
    $employer = isset($_POST['employerName']) ? $_POST['employerName'] : "N/A";
    $employIndustry = isset($_POST['employIndustry']) ? $_POST['employIndustry'] : "64"; //foreign key
    $employSalary = isset($_POST['employSalary']) ? $_POST['employSalary'] : "1"; //foreign key

    //FOR ENCRYPTED IDs
    $rEncrypt = $fName . " " . $mName . " " . $lName;
    $hEncrypt = $hFname . " " . $hMname . " " . $hLname;

    $ciphering = "AES-128-CTR"; //cipher method

    $iv_length = openssl_cipher_iv_length($ciphering); //Using OpenSSl Encryption method
    $options = 0;

    $encryption_iv = '1234567891011121'; // Non-NULL Initialization Vector for encryption   
    $encryption_key = "KKIS2022-2023"; // Storing the encryption key

    // Using openssl_encrypt() function to encrypt the data
    $encryptedResident = openssl_encrypt($rEncrypt, $ciphering, $encryption_key, $options, $encryption_iv);
    $encryptedHousehold = openssl_encrypt($hEncrypt, $ciphering, $encryption_key, $options, $encryption_iv);

    $updateResident="UPDATE `residents` SET `first_name`='$fName',`middle_name`='$mName',`last_name`='$lName' WHERE resident_id=$resident_id";
    $queryUpdateResident=mysqli_query($conn,$updateResident);
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add New Entry</title>

    <!-- Bootstrap-Select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/addUpdate.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <link rel="stylesheet" href="assets/scss/modal.css">
    <link rel="stylesheet" href="assets/scss/sideMenu.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/kkis.ico">


</head>

<body>

    <div class="expanded d-none d-lg-flex" id="leftPanel">
        <?php require('sideMenu.php'); ?>
    </div>

    <div class="mainContainer" id="mainPanel">
        <header class="d-lg-none d-flex" id="mdHeader">
            <!-- Append Small Nav here -->
        </header>
        <header class="d-none d-lg-block" id="lgHeader">
            <div class="row mx-0" id="headerRow">
                <div class="col-md-8 col-12 d-flex justify-content-start align-items-center">
                    <!-- <i class="fa-solid fa-bars me-4 d-none" id="hamburger" role="button"></i>
                    <i class="fa-solid fa-xmark me-4" id="close" role="button"></i> -->
                    <i class="fa-solid fa-arrow-left me-4" role="button" id="backPage"></i>
                    <span class="pageTitle">Update Entry</span>
                </div>

                <div class="col-md-4 d-none d-md-flex justify-content-end align-items-center">
                    <span class="accountType">Super Admin Account</span>
                </div>
            </div>
            <hr id="headerHR">
        </header>

        <!-- Content Start -->
        <div class="container-fluid content">
            <div class="sectionDiv">
                <form method="POST" id="addForm" class="mb-5">
                    <!-- Personal Info -->
                    <div class="card my-4">
                        <div class="row m-0">
                            <div class="col col-12 p-0">
                                <div class="d-flex d-xxl-flex align-items-center align-items-xxl-center markerDiv rounded-2" id="markerPersonal">Personal Information</div>
                            </div>
                        </div>
                        <div class="row m-0 my-3 gy-3 gx-3">
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="firstName">First Name</label>
                                <input class="form-control userInput text-uppercase w-100" name="fName" id="firstName" type="text" value="<?php echo $fName?>" required>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="middleName">Middle Name</label>
                                <input class="form-control userInput text-uppercase w-100" name="mName" id="middleName" type="text" value="<?php echo $mName ?>" required>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="lastName">Last Name</label>
                                <input class="form-control userInput text-uppercase w-100" name="lName" id="lastName" type="text" value="<?php echo $lName?>" required>
                            </div>

                            
                            <div class="col col-lg-3 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="genderPreference" >Gender Preference</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" name="gender" id="genderPreference" required>

                                <?php
                                $genderQuery=executeQuery($queryLoadResidents);
                                    while($row=mysqli_fetch_array($genderQuery)){
                                    ?>
                                    <option value="MAN" <?php if ('MAN'==$genderPreference) {echo " selected";}?>>Man</option>
                                    <option value="WOMAN" <?php if ('WOMAN'==$genderPreference) {echo " selected";}?>>Woman</option>
                                    <option value="TRANSGENDER" <?php if ('TRANSGENDER'==$genderPreference) {echo " selected";}?>>Transgender</option>
                                    <option value="NON-BINARY/NON-CONFORMING" <?php if ('NON-BINARY/NON-CONFORMING'==$genderPreference) {echo " selected";}?>>Non-binary/Non-conforming</option>
                                    <option value="PREFER NOT TO SAY" <?php if ('PREFER NOT TO SAY'==$genderPreference) {echo " selected";}?>>Prefer not to say</option>

                                    <?php
                                    } 
                                    ?>
                                    
                                </select>
                            </div>

                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="bday">Birthday</label>
                                <input class="form-control text-uppercase w-100 personalSelectBox" name="birthday" id="bday" type="date" value="<?php echo $birthday?>" required>
                            </div>

                            <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="bplace">Birthplace</label>
                                <input class="form-control userInput text-uppercase w-100" name="birthplace" id="bplace" type="text" value="<?php echo $birthplace?>" required>
                            </div>

                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="maritalStatus">Marital Status</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" name="mStatus" id="maritalStatus" placeholder="Select Marital Status " required>
                                    <?php
                                    $maritalQuery=executeQuery($queryLoadResidents);
                                    while($row=mysqli_fetch_array($maritalQuery)){
                                    ?>
                                    <option value="SINGLE"<?php if ('SINGLE'==$mStatus) {echo " selected";}?> >Single</option>
                                    <option value="MARRIED" <?php if ('MARRIED'==$mStatus) {echo " selected";}?> >Married</option>
                                    <option value="LIVE IN" <?php if ('LIVE IN'==$mStatusl) {echo " selected";}?> >Live-in</option>
                                    <option value="SEPARATED" <?php if ('SEPARATED'==$mStatus) {echo " selected";}?>>Separated</option>
                                    <option value="ANNULED" <?php if ('ANNULED'==$mStatus) {echo " selected";}?>>Annuled</option>
                                    <option value="WIDOWED" <?php if ('WIDOWED'==$mStatus) {echo " selected";}?>>Widowed</option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </div>

                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1 p-1" for="religionSelect">Religion</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" name="religion" id="religionSelect" required>
                                <?php
                                    $religionQuery=executeQuery($queryLoadResidents);
                                    while($row=mysqli_fetch_array($religionQuery)){
                                    ?>
                                    <option value="ATHEIST"<?php if ('ATHEIST'==$religion) {echo " selected";}?> >Atheist</option>
                                    <option value="BUDDHIST" <?php if ('BUDDHIST'==$religion) {echo " selected";}?>>Buddhist</option>
                                    <option value="CHRISTIAN" <?php if ('CHRISTIAN'==$religion) {echo " selected";}?>>Christian</option>
                                    <option value="MUSLIM" <?php if ('MUSLIM'==$religion) {echo " selected";}?>>Muslim</option>
                                    <option value="OTHERS" <?php if ('OTHERS'==$religion) {echo " selected";}?>>Others</option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </div>
                            
                            <div class="col col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="disabilityDiv">
                                    <label class="col-form-label fieldLabel required w-100 p-1" for="disabilitySelect">Disability</label>
                                    <!-- Class form-select  removed from select element in Disability -->
                                    <select class="selectpicker form-control text-uppercase houseSelectBox" multiple name="disability" data-selected-text-format="count > 3" id="disabilitySelect" required>
                                    <?php
                                    $disabilityQuery=executeQuery($queryLoadResidents);
                                    while($row=mysqli_fetch_array($disabilityQuery)){
                                    ?>
                                    <option value="NONE"<?php if ('NONE'==$disability) {echo " selected";}?> >NONE</option>
                                    <option value="COMMUNICATION DISABILITY" <?php if ('COMMUNICATION DISABILITY'==$disability) {echo " selected";}?>> Communication disability</option>
                                    <option value="LEARNING DISABILITY" <?php if ('LEARNING DISABILITY'==$disability) {echo " selected";}?>>Learning disability</option>
                                    <option value="MENTAL DISABILITY" <?php if ('MENTAL DISABILITY'==$disability) {echo " selected";}?>>Mental disability</option>
                                    <option value="ORTHOPEDIC DISABILITY" <?php if ('ORTHOPEDIC DISABILITY'==$disability) {echo " selected";}?>>Orthopedic disability</option>
                                    <option value="PYSCHOSOCIAL DISABILITY" <?php if ('PSYCHOSOCIAL DISABILITY'==$disability) {echo " selected";}?>>Psychosocial disability</option>
                                    <option value="VISION DISABILITY" <?php if ('VISION DISABILITY'==$disability) {echo " selected";}?>>Vision disability</option>
                                    <?php
                                    } 
                                    ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="contactNo">Contact No.</label>
                                <input class="form-control text-uppercase w-100" type="text" name="contact" id="contactNo" placeholder="09XXXXXXXXX" inputmode="numeric" value="<?php echo $contact ?>" required>
                            </div>

                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12" for="residentVote">
                                <label class="col-form-label fieldLabel required w-100 p-1">Voter Type</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" name="voterType" id="residentVote" required>
                                <?php
                                    $voterQuery=executeQuery($queryLoadResidents);
                                    while($row=mysqli_fetch_array($voterQuery)){
                                    ?>
                                    <option value="REGISTERED" <?php if ('REGISTERED'==$voterType) {echo " selected";}?>>Registered</option>
                                    <option value="UNREGISTERED" <?php if ('UNREGISTERED'==$voterType) {echo " selected";}?>>Unregistered</option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-8 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="residentAddress">House No./Street/Subdivision</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" name="address" id="residentAddress" value="<?php echo $houseAddress?>" required>
                            </div>
                            
                            <div class="col col-lg-2 col-md-2 col-sm-4 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="residentPurok">Purok</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" name="purok" id="residentPurok" required>
                                    <?php
                                    $purokQuery=executeQuery($queryLoadResidents);
                                    while($row=mysqli_fetch_array($purokQuery)){
                                    ?>
                                    <option value="CARDINAL" <?php if ('CARDINAL'==$purok) {echo " selected";}?>>Cardinal</option>
                                    <option value="CORDILLERA" <?php if ('CORDILLERA'==$purok) {echo " selected";}?>>Cordillera</option>
                                    <option value="DOÑA PETRA" <?php if ('DOÑA PETRA'==$purok) {echo " selected";}?>>Doña Petra</option>
                                    <option value="DOÑA REGINA 1"  <?php if ('DOÑA REGINA 1'==$purok) {echo " selected";}?>>Doña Regina 1</option>
                                    <option value="DOÑA REGINA 2"  <?php if ('DOÑA REGINA 2'==$purok) {echo " selected";}?>>Doña Regina 2</option>
                                    <option value="DOÑA REGINA 3"  <?php if ('DOÑA REGINA 3'==$purok) {echo " selected";}?>>Doña Regina 3</option>
                                    <option value="FAMILY VILLAGE"  <?php if ('FAMILY VILLAGE'==$purok) {echo " selected";}?>>Family Village</option>
                                    <option value="IRAQ"  <?php if ('IRAQ'==$purok) {echo " selected";}?>>Iraq</option>
                                    <option value="LOOBAN"  <?php if ('LOOBAN'==$purok) {echo " selected";}?>>Looban</option>
                                    <option value="MANGGAHAN"  <?php if ('MANGGAHAN'==$purok) {echo " selected";}?>>Manggahan</option>
                                    <option value="NAYON"  <?php if ('NAYON'==$purok) {echo " selected";}?>>Nayon</option>
                                    <option value="ORMOC"  <?php if ('ORMOC'==$purok) {echo " selected";}?>>Ormoc</option>
                                    <option value="PULONG KENDI"  <?php if ('PULONG KENDI'==$purok) {echo " selected";}?>>Pulong Kendi</option>
                                    <option value="PUTING KRUS"  <?php if ('PUTING KRUS'==$purok) {echo " selected";}?>>Puting Krus</option>
                                    <option value="SAINT ANTHONY"  <?php if ('SAINT ANTHONY'==$purok) {echo " selected";}?>>Saint Anthony </option>
                                    <option value="SAMPAGUITA ST."  <?php if ('SAMPAGUITA ST.'==$purok) {echo " selected";}?>>Sampaguita St.</option>
                                    <option value="SMOKEY MOUNTAIN"  <?php if ('SMOKEY MOUNTAIN'==$purok) {echo " selected";}?>>Smokey Mountain </option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </div>
                            
                            <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel w-100 p-1" for="org" id="organizationLbl">Organization (if any)</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" name="organization" id="org" value="<?php echo $organization ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2 my-2 mx-0">
                        <!-- Educational Info -->
                        <div class="col eStatus col-lg-6 col-md-12 col-sm-12 col-12 p-0">
                            <div class="card p-3" id="educCard">
                                <div class="d-flex align-items-center markerDiv rounded-2 m-0 w-100" id="markerEduc">
                                    <label class="d-flex align-items-center justify-content-start">
                                    <?php
                                    $educationQuery=executeQuery($queryLoadEducation);
                                    $row=mysqli_num_rows($educationQuery);
                                    ?>
                                        <input type="radio" id="educCheck" class="statusCheck" name="educInfo" <?php if ($row>0) {echo " checked";}?>>
                                        Educational Status
                                    
                                    </label>
                                </div>
                                
                                <div class="row m-0 my-3 gy-3 gx-3">
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100 p-1" id="educStatusLbl" for="selectEducStatus">Educational Status</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" name="educStatus" id="selectEducStatus" required>
                                        <?php
                                        $educationQuery=executeQuery($queryLoadEducation);
                                        while($row=mysqli_fetch_array($educationQuery)){
                                        ?>
                                            <option value="ENROLLED" <?php if ('ENROLLED'==$educStatus) {echo " selected";}?>>Enrolled</option>
                                            <option value="OUT-OF-SCHOOL YOUTH" <?php if ('OUT-OF-SCHOOL YOUTH'==$educStatus) {echo " selected";}?>>Out-of-school Youth</option>
                                            <option value="WORKING STUDENT" <?php if ('WORKING STUDENT'==$educStatus) {echo " selected";}?>>Working Student</option>
                                        </select>
                                        <?php } ?>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100 p-1" id="levelLbl" for="selectLevel">Level</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" name="educLevel" id="selectLevel" required>
                                        <?php 
                                        $educationQuery=executeQuery($queryLoadEducation);
                                        while($row=mysqli_fetch_array($educationQuery)) { ?>
                                            <option value="PRE-ELEMENTARY" <?php if ('PRE-ELEMENTARY'==$educLevel) {echo " selected";}?>>Pre-elementary</option>
                                            <option value="ELEMENTARY" <?php if ('ELEMENTARY'==$educLevel) {echo " selected";}?>>Elementary</option>
                                            <option value="JUNIOR HIGH SCHOOL" <?php if ('JUNIOR HIGH SCHOOL'==$educLevel) {echo " selected";}?>>Junior High School</option>
                                            <option value="SENIOR HIGH SCHOOL" <?php if ('SENIOR HIGH SCHOOL'==$educLevel) {echo " selected";}?>>Senior High School</option>
                                            <option value="ALTERNATIVE LEARNING SYSTEM" <?php if ('ALTERNATIVE LEARNING SYSTEM'==$educLevel) {echo " selected";}?>>Alternative Learning System (ALS)</option>
                                            <option value="DIPLOMA COURSE" <?php if ('DIPLOMA COURSE'==$educLevel) {echo " selected";}?>>Diploma Course</option>
                                            <option value="COLLEGE" <?php if ('COLLEGE'==$educLevel) {echo " selected";}?>>College</option>
                                            <option value="GRADUATE STUDIES" <?php if ('GRADUATE STUDIES'==$educLevel) {echo " selected";}?>>Graduate Studies</option>
                                        </select>
                                        <?php } ?>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-4 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100 p-1" id="schoolTypeLbl" for="selectSchoolType">School Type</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" name="schoolType" id="selectSchoolType" required>
                                        <?php 
                                        $educationQuery=executeQuery($queryLoadEducation);
                                        while($row=mysqli_fetch_array($educationQuery)) { ?>
                                            <option value="PRIVATE"  <?php if ('PRIVATE'==$schoolType) {echo " selected";}?>>Private</option>
                                            <option value="PUBLIC" <?php if ('PUBLIC'==$schoolType) {echo " selected";}?>>Public</option>
                                        <?php } ?>

                                        </select>
                                    </div>
                                    <div class="col col-lg-12 col-md-12 col-sm-8 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100 p-1" id="schoolLbl" for="inputSchool">Name of School</label>
                                        <input class="form-control educUserInput text-uppercase w-100" type="text" name="schoolName" id="inputSchool" value="<?php echo $school ?>" required>

                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100 p-1" id="educIndustryLbl" for="selectEducIndustry">Work Industry</label>
                                        <select class="form-select text-uppercase w-100 educSelectBox" name="educIndustry" id="selectEducIndustry" required>
                                        <?php 
                                        $educationQuery=executeQuery($queryLoadEducation);
                                        while($row=mysqli_fetch_array($educationQuery)) { ?>
                                            <option value="1" <?php if ('1'==$educIndustry) {echo " selected";}?>>Accounting</option>
                                            <option value="2" <?php if ('2'==$educIndustry) {echo " selected";}?>>Advertising and Marketing</option>
                                            <option value="3" <?php if ('3'==$educIndustry) {echo " selected";}?>>Aerospace</option>
                                            <option value="4" <?php if ('4'==$educIndustry) {echo " selected";}?>>Agriculture</option>
                                            <option value="5" <?php if ('5'==$educIndustry) {echo " selected";}?>>Animation</option>
                                            <option value="6" <?php if ('6'==$educIndustry) {echo " selected";}?>>Apparel and Fashion</option>
                                            <option value="7" <?php if ('7'==$educIndustry) {echo " selected";}?>>Architecture and Planning</option>
                                            <option value="8" <?php if ('8'==$educIndustry) {echo " selected";}?>>Arts and Crafts</option>
                                            <option value="9" <?php if ('9'==$educIndustry) {echo " selected";}?>>Automobile Engineering</option>
                                            <option value="10" <?php if ('10'==$educIndustry) {echo " selected";}?>>Auto Mechanics</option>
                                            <option value="11" <?php if ('11'==$educIndustry) {echo " selected";}?>>Aviation</option>
                                            <option value="12" <?php if ('12'==$educIndustry) {echo " selected";}?>>BPO</option>
                                            <option value="13" <?php if ('13'==$educIndustry) {echo " selected";}?>>Buy and Sell</option>
                                            <option value="14" <?php if ('14'==$educIndustry) {echo " selected";}?>>Casinos and Gambling</option>
                                            <option value="15" <?php if ('15'==$educIndustry) {echo " selected";}?>>Chemical</option>
                                            <option value="16" <?php if ('16'==$educIndustry) {echo " selected";}?>>Computer Technology</option>
                                            <option value="17" <?php if ('17'==$educIndustry) {echo " selected";}?>>Construction</option>
                                            <option value="18" <?php if ('18'==$educIndustry) {echo " selected";}?>>Cosmetics</option>
                                            <option value="19" <?php if ('19'==$educIndustry) {echo " selected";}?>>Design</option>
                                            <option value="20" <?php if ('20'==$educIndustry) {echo " selected";}?>>E-commerce</option>
                                            <option value="21" <?php if ('21'==$educIndustry) {echo " selected";}?>>Education</option>
                                            <option value="22" <?php if ('22'==$educIndustry) {echo " selected";}?>>Electrical Power</option>
                                            <option value="23" <?php if ('23'==$educIndustry) {echo " selected";}?>>Electronics</option>
                                            <option value="24" <?php if ('24'==$educIndustry) {echo " selected";}?>>Event Services</option>
                                            <option value="25" <?php if ('25'==$educIndustry) {echo " selected";}?>>Finance and Insurance Services</option>
                                            <option value="26" <?php if ('26'==$educIndustry) {echo " selected";}?>>Fishery</option>
                                            <option value="27" <?php if ('27'==$educIndustry) {echo " selected";}?>>Fitness and Wellness</option>
                                            <option value="28" <?php if ('28'==$educIndustry) {echo " selected";}?>>Furniture</option>
                                            <option value="29" <?php if ('29'==$educIndustry) {echo " selected";}?>>Food and Beverages</option>
                                            <option value="30" <?php if ('30'==$educIndustry) {echo " selected";}?>>Government</option>
                                            <option value="31" <?php if ('31'==$educIndustry) {echo " selected";}?>>Graphic Arts</option>
                                            <option value="32" <?php if ('32'==$educIndustry) {echo " selected";}?>>Healthcare and Welfare</option>
                                            <option value="33" <?php if ('33'==$educIndustry) {echo " selected";}?>>Hospitality Management</option>
                                            <option value="34" <?php if ('34'==$educIndustry) {echo " selected";}?>>Law Enforcement</option>
                                            <option value="35" <?php if ('35'==$educIndustry) {echo " selected";}?>>Legislative Office</option>
                                            <option value="36" <?php if ('36'==$educIndustry) {echo " selected";}?>>Luxury Goods and Jewelry</option>
                                            <option value="37" <?php if ('37'==$educIndustry) {echo " selected";}?>>Manufacturing</option>
                                            <option value="38" <?php if ('38'==$educIndustry) {echo " selected";}?>>Maritime</option>
                                            <option value="39" <?php if ('39'==$educIndustry) {echo " selected";}?>>Military</option>
                                            <option value="40" <?php if ('40'==$educIndustry) {echo " selected";}?>>Mining</option>
                                            <option value="41" <?php if ('41'==$educIndustry) {echo " selected";}?>>Packaging and Containers</option>
                                            <option value="42" <?php if ('42'==$educIndustry) {echo " selected";}?>>Performing Arts</option>
                                            <option value="43" <?php if ('43'==$educIndustry) {echo " selected";}?>>Personal Service</option>
                                            <option value="44" <?php if ('44'==$educIndustry) {echo " selected";}?>>Pharmaceutical</option>
                                            <option value="45" <?php if ('45'==$educIndustry) {echo " selected";}?>>Poultry</option>
                                            <option value="46" <?php if ('46'==$educIndustry) {echo " selected";}?>>Printing and Publishing</option>
                                            <option value="47" <?php if ('47'==$educIndustry) {echo " selected";}?>>Production</option>
                                            <option value="48" <?php if ('48'==$educIndustry) {echo " selected";}?>>Public Safety</option>
                                            <option value="49" <?php if ('49'==$educIndustry) {echo " selected";}?>>Photography and Film</option>
                                            <option value="50" <?php if ('50'==$educIndustry) {echo " selected";}?>>Quick Service Restaurant (QSR)</option>
                                            <option value="51" <?php if ('51'==$educIndustry) {echo " selected";}?>>Real Estate</option>
                                            <option value="52" <?php if ('52'==$educIndustry) {echo " selected";}?>>Recreational Facilities and Services</option>
                                            <option value="53" <?php if ('53'==$educIndustry) {echo " selected";}?>>Religious Institutions</option>
                                            <option value="54" <?php if ('54'==$educIndustry) {echo " selected";}?>>Retail Industry</option>
                                            <option value="55" <?php if ('55'==$educIndustry) {echo " selected";}?>>Shipping Services</option>
                                            <option value="56" <?php if ('56'==$educIndustry) {echo " selected";}?>>Staffing and Recruiting</option>
                                            <option value="57" <?php if ('57'==$educIndustry) {echo " selected";}?>>Supply Chain Management</option>
                                            <option value="58" <?php if ('58'==$educIndustry) {echo " selected";}?>>Telecommunications</option>
                                            <option value="59" <?php if ('59'==$educIndustry) {echo " selected";}?>>Transportation</option>
                                            <option value="60" <?php if ('60'==$educIndustry) {echo " selected";}?>>Tourism</option>
                                            <option value="61"<?php if ('61'==$educIndustry) {echo " selected";}?>>Utilities</option>
                                            <option value="62" <?php if ('62'==$educIndustry) {echo " selected";}?>>Veterinary</option>
                                            <option value="63"<?php if ('63'==$educIndustry) {echo " selected";}?>>Warehousing</option>
                                            <option value="64" <?php if ('64'==$educIndustry) {echo " selected";}?>>Others</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100 p-1" id="educSalaryLbl" for="selectEducSalary">Salary Range</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" name="educSalary" id="selectEducSalary" required>
                                        <?php 
                                        $educationQuery=executeQuery($queryLoadEducation);
                                        while($row=mysqli_fetch_array($educationQuery)) { ?>
                                            <option value="1" <?php if ('1'==$educSalary) {echo " selected";}?>>Less than 10,000</option>
                                            <option value="2" <?php if ('2'==$educSalary) {echo " selected";}?>>10,000-20,999</option>
                                            <option value="3" <?php if ('3'==$educSalary) {echo " selected";}?>>21,000-30,999</option>
                                            <option value="4" <?php if ('4'==$educSalary) {echo " selected";}?>>31,000-40,999</option>
                                            <option value="5" <?php if ('5'==$educSalary) {echo " selected";}?>>41,000-50,999</option>
                                            <option value="6" <?php if ('6'==$educSalary) {echo " selected";}?>>More than 50,999</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Employment Info -->
                        <div class="col eStatus col-lg-6 col-md-12 col-sm-12 col-12 p-0">
                            <div class="card p-3" id="employCard">
                                <div class="d-flex align-items-center markerDiv rounded-2 m-0 w-100" id="markerEmploy">
                                    <label class="d-flex align-items-center">
                                    <?php
                                    $employmentQuery=executeQuery($queryLoadEmployment);
                                    $row=mysqli_num_rows($employmentQuery);
                                    ?>
                                        <input type="radio" id="employCheck" class="statusCheck" name="employInfo" <?php if ($row>0) {echo " checked";}?>>
                                        Employment Status
                                    </label>
                                </div>
                                <div class="row m-0 my-3 gy-3 gx-3">
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100 p-1" id="employStatusLbl" for="selectEmployStatus">Employee Status</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" name="employeeStatus" id="selectEmployStatus" required>
                                        <?php
                                        $employmentQuery=executeQuery($queryLoadEmployment);
                                        $row=mysqli_num_rows($employmentQuery);
                                        ?>
                                            <option value="EMPLOYED" <?php if ('EMPLOYED'==$employStatus) {echo " selected";}?>>Employed</option>
                                            <option value="UNEMPLOYED" <?php if ('UNEMPLOYED'==$employStatus) {echo " selected";}?>>Unemployed</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100 p-1" id="employTypeLbl" for="selectEmployeeType">Employee Type</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" name="employeeType" id="selectEmployeeType" required>
                                        <?php
                                        $employmentQuery=executeQuery($queryLoadEmployment);
                                        $row=mysqli_num_rows($employmentQuery);
                                        ?>
                                            <option value="REGULAR" <?php if ('REGULAR'==$employeeType) {echo " selected";}?>>Regular</option>
                                            <option value="CONTRACTUAL" <?php if ('CONTRACTUAL'==$employeeType) {echo " selected";}?>>Contractual</option>
                                            <option value="JOB ORDER" <?php if ('JOB ORDER'==$employeeType) {echo " selected";}?>>Job Order</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-4 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100 p-1" id="employerTypeLbl" for="selectEmployerType">Employer Type</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" name="employerType" id="selectEmployerType" required>
                                            <option value="PRIVATE">Private</option>
                                            <option value="PUBLIC">Public</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-12 col-md-12 col-sm-8 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100 p-1" id="employerLbl" for="inputEmployer">Name of Employer/Company/Business</label>
                                        <input class="form-control employUserInput text-uppercase w-100" type="text" name="employerName" id="inputEmployer" required>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100 p-1" id="employIndustryLbl" for="selectEmployIndustry">Work Industry</label>
                                        <select class="form-select text-uppercase w-100 employSelectBox" name="employIndustry" id="selectEmployIndustry" required>
                                            <option value="1">Accounting</option>
                                            <option value="2">Advertising and Marketing</option>
                                            <option value="3">Aerospace</option>
                                            <option value="4">Agriculture</option>
                                            <option value="5">Animation</option>
                                            <option value="6">Apparel and Fashion</option>
                                            <option value="7">Architecture and Planning</option>
                                            <option value="8">Arts and Crafts</option>
                                            <option value="9">Automobile Engineering</option>
                                            <option value="10">Auto Mechanics</option>
                                            <option value="11">Aviation</option>
                                            <option value="12">BPO</option>
                                            <option value="13">Buy and Sell</option>
                                            <option value="14">Casinos and Gambling</option>
                                            <option value="15">Chemical</option>
                                            <option value="16">Computer Technology</option>
                                            <option value="17">Construction</option>
                                            <option value="18">Cosmetics</option>
                                            <option value="19">Design</option>
                                            <option value="20">E-commerce</option>
                                            <option value="21">Education</option>
                                            <option value="22">Electrical Power</option>
                                            <option value="23">Electronics</option>
                                            <option value="24">Event Services</option>
                                            <option value="25">Finance and Insurance Services</option>
                                            <option value="26">Fishery</option>
                                            <option value="27">Fitness and Wellness</option>
                                            <option value="28">Furniture</option>
                                            <option value="29">Food and Beverages</option>
                                            <option value="30">Government</option>
                                            <option value="31">Graphic Arts</option>
                                            <option value="32">Healthcare and Welfare</option>
                                            <option value="33">Hospitality Management</option>
                                            <option value="34">Law Enforcement</option>
                                            <option value="35">Legislative Office</option>
                                            <option value="36">Luxury Goods and Jewelry</option>
                                            <option value="37">Manufacturing</option>
                                            <option value="38">Maritime</option>
                                            <option value="39">Military</option>
                                            <option value="40">Mining</option>
                                            <option value="41">Packaging and Containers</option>
                                            <option value="42">Performing Arts</option>
                                            <option value="43">Personal Service</option>
                                            <option value="44">Pharmaceutical</option>
                                            <option value="45">Poultry</option>
                                            <option value="46">Printing and Publishing</option>
                                            <option value="47">Production</option>
                                            <option value="48">Public Safety</option>
                                            <option value="49">Photography and Film</option>
                                            <option value="50">Quick Service Restaurant (QSR)</option>
                                            <option value="51">Real Estate</option>
                                            <option value="52">Recreational Facilities and Services</option>
                                            <option value="53">Religious Institutions</option>
                                            <option value="54">Retail Industry</option>
                                            <option value="55">Shipping Services</option>
                                            <option value="56">Staffing and Recruiting</option>
                                            <option value="57">Supply Chain Management</option>
                                            <option value="58">Telecommunications</option>
                                            <option value="59">Transportation</option>
                                            <option value="60">Tourism</option>
                                            <option value="61">Utilities</option>
                                            <option value="62">Veterinary</option>
                                            <option value="63">Warehousing</option>
                                            <option value="64">Others</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100 p-1" id="employSalaryLbl" for="selectEmploySalary">Salary Range</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" name="employSalary" id="selectEmploySalary" required>
                                            <option value="1">Less than 10,000</option>
                                            <option value="2">10,000-20,999</option>
                                            <option value="3">21,000-30,999</option>
                                            <option value="4">31,000-40,999</option>
                                            <option value="5">41,000-50,999</option>
                                            <option value="6">More than 50,999</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- House Declaration -->
                    <div class="card p-3 my-4">
                        <div class="row m-0">
                            <div class="col col-12 p-0">
                                <div class="d-flex align-items-center markerDiv rounded-2">
                                    House Declaration
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 my-3 gy-3 gx-3" id="householdRow">
                            <div class="col col-lg-2 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="headFname">First Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" name="hFname" id="headFname" value="<?php echo $household_firstName?>" required>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="headMname">Middle Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" name="hMname" id="headMname" value="<?php echo $household_middleName?>" required>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="headLname">Last Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" name="hLname" id="headLname" value="<?php echo $household_lastName?>" required>
                            </div>
                            <div class="col col-lg-1 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="headSuffix" id="headSuffixLbl">Suffix</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" name="hSuffix" id="headSuffix">
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-6 col-12" id="colRemarks">
                                <div class="remarkDiv">
                                    <label class="col-form-label fieldLabel required w-100 p-1" for="remarkDrop" id="remarksLbl">Remarks</label>
                                    <!-- Class form-select  removed from select element in Remarks -->
                                    <select class="selectpicker form-control text-uppercase houseSelectBox" multiple name="remarks" placeholder="Select Remarks" data-selected-text-format="count > 3" id="remarkDrop">
                                    <?php
                                    $householdMembersQuery=executeQuery($queryLoadHousehold);
                                    while($row=mysqli_fetch_array($householdMembersQuery)){
                                    ?>
                                    <option value="PUROK LEADER " <?php if ('PUROK LEADER '==$household_remarks) {echo " selected";}?>>Purok Leader</option>
                                    <option value="SK SCHOLAR " <?php if ('SK SCHOLAR '==$household_remarks) {echo " selected";}?>>SK Scholar</option>
                                    <option value="SOLO LIVING " <?php if ('SOLO LIVING '==$household_remarks) {echo " selected";}?>>Solo Living</option>
                                    <option value="SOLO PARENT " <?php if ('SOLO PARENT '==$household_remarks) {echo " selected";}?>>Solo Parent</option>
                                    <option value="TEENAGE PREGNANCY " <?php if ('TEENAGE PREGNANCY '==$household_remarks) {echo " selected";}?>>Teenage Pregnancy</option>
                                    <?php
                                    } 
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-lg-2 col-md-6 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100 p-1" for="famCount">No.&nbsp; of Family Members</label>
                                <select class="form-select text-uppercase w-100 houseSelectBox" name="membersCount" id="famCount" required>
                                <?php
                                    $householdMembersQuery=executeQuery($queryLoadHousehold);
                                    while($row=mysqli_fetch_array($householdMembersQuery)){
                                    ?>
                                    <option value="LESS THAN 5" <?php if ('LESS THAN 5'==$household_membersCount) {echo " selected";}?>>Less than 5</option>
                                    <option value="5 to 10" <?php if ('5 to 10'==$household_membersCount) {echo " selected";}?>>5 to 10</option>
                                    <option value="11 to 15" <?php if ('11 to 15'==$household_membersCount) {echo " selected";}?>>11 to 15</option>
                                    <option value="16 to 20" <?php if ('16 to 20'==$household_membersCount) {echo " selected";}?>>16 to 20</option>
                                    <option value="MORE THAN 20" <?php if ('MORE THAN 20'==$household_membersCount) {echo " selected";}?> >More than 20</option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="row m-0 d-flex d-md-flex d-lg-flex d-xxl-flex justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xxl-end gx-2" id="rowBtn">
                        <div class="col d-flex d-sm-flex d-md-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-xxl-end col-lg-2 col-md-4 col-sm-12 col-12 p-0">
                            <button class="btn controlBtn" name="submitBtn" type="submit" form="addForm">Submit</button>
                        </div>
                    </div>
                </form>

                <!-- Added Modal -->
                <div class="modal fade center" role="dialog" tabindex="-1" id="modalAdded">
                    <div class="modal-dialog h-100 m-auto d-flex align-items-center" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="m-0 d-flex justify-content-end align-items-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row m-0">
                                    <div class="col col-12 p-0">
                                        <svg class="checkmark my-4" xmlns="https://www.svgrepo.com/show/137031/check.svg" viewBox="0 0 50 50">
                                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                        </svg>
                                    </div>
                                    <div class="col col-12">
                                        <h3 class="modalAlert text-center">The entry has been updated!</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Record Exist Modal -->
                <div class="modal fade center" role="dialog" tabindex="-1" id="recordExist">
                    <div class="modal-dialog h-100 m-auto d-flex align-items-center" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="m-0 d-flex justify-content-end align-items-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row m-0">
                                    <div class="col col-12 p-0">
                                        <svg class="checkmark my-4" xmlns="https://www.svgrepo.com/show/137031/check.svg" viewBox="0 0 50 50">
                                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                        </svg>
                                    </div>
                                    <div class="col col-12">
                                        <h3 class="modalAlert text-center">Record Already Exists</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap-select -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/updateEntry.js"></script>
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