<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update Entry</title>

    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">

    <!-- Virtual-Select JS -->
    <link rel="stylesheet" href="assets/css/virtual-select.min.css">
    
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/addUpdate.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <link rel="stylesheet" href="assets/scss/modal.css">
    
    <!-- navUpdate CSS -->
    <link rel="stylesheet" href="assets/css/navUpdateEntry.css">

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
            <div class="row documentHeadingRow p-0 m-0">
                <div class="col d-xxl-flex justify-content-xxl-start align-items-xxl-center col-12 p-0">
                    <div class="d-flex align-items-center justify-content-start headContainer">
                        <button class="btn rounded-circle border-0 d-flex d-sm-flex d-xxl-flex justify-content-center justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-center backBtn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="backIcon" style="width: auto;height: auto;font-size: 28px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"></path>
                            </svg>
                        </button>
                        <div class="col-10 d-flex justify-content-start align-items-center p-0">
                            <span class="title w-auto" id="titleUpdateEntry">Update Entry</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col p-0 mt-2"><img class="img-fluid" src="assets/img/misc/hr.svg"></div>
            </div>

            <div class="pageBody">
                <div class="sectionDiv">
                    <form method="post" id="updateForm">
                        <!-- Personal Info -->
                        <div class="row m-0 w-100">
                            <div class="col col-12 p-0">
                                <div class="d-flex d-xxl-flex align-items-center align-items-xxl-center markerDivUpdate rounded-4" id="markerPersonal"><span class="markerText ms-3">Personal Information</span></div>
                            </div>
                        </div>
                        <div class="row m-0 my-3 gy-3 gx-3">
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="kabataanFname">First Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="kabataanFname" required="">
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="kabataanMname">Middle Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="kabataanMname" required="">
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-8 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="kabataanLname">Last Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="kabataanLname" required="">
                            </div>
                            <div class="col col-lg-1 col-md-3 col-sm-4 col-12">
                                <label class="col-form-label required fieldLabel w-100" for="kabataanSuffix" id="kabataanSuffixLbl">Suffix</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="kabataanSuffix">
                            </div>
                            <div class="col col-lg-2 col-md-2 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentGender">Gender Preference</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentGender" required="">
                                    <option value="Man" selected="">Man</option>
                                    <option value="Woman">Woman</option>
                                    <option value="Transgender">Transgender</option>
                                    <option value="Non-binary/Non-conforming">Non-binary/Non-conforming</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentBday">Birthday</label>
                                <input class="form-control text-uppercase w-100 personalSelectBox" id="residentBday" type="date" required="">
                            </div>
                            <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentBplace">Birthplace</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="residentBplace" required="">
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentMstatus">Marital Status</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentMstatus" required="">
                                    <option value="Single" selected="">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Live-in">Live-in</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Annuled">Annuled</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentReligion">Religion</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentReligion" required="">
                                    <option value="Atheist" selected="">Atheist</option>
                                    <option value="Buddhist">Buddhist</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="disabilityDiv">
                                    <label class="col-form-label fieldLabel required w-100" for="disabilitySelect">Disability</label>
                                    <!-- Class form-select  removed from select element in Remarks -->
                                    <select class="text-uppercase houseSelectBox" multiple name="disability" data-search="false" data-silent-initial-value-set="true" id="disabilitySelect">
                                        <option value="None" selected="">None</option>
                                        <option value="Communication disability">Communication disability</option>
                                        <option value="Disability due to chronic illnes">Disability due to chronic illnes</option>
                                        <option value="Learning disability">Learning disability</option>
                                        <option value="Mental disability">Mental disability</option>
                                        <option value="Orthopedic disability">Orthopedic disability</option>
                                        <option value="Psychosocial disability">Psychosocial disability</option>
                                        <option value="Vission disability">Vission disability</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentContact">Contact No.</label>
                                <input class="form-control text-uppercase w-100" type="text" id="residentContact" placeholder="09XXXXXXXXX" inputmode="numeric" required="">
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12" for="residentVote">
                                <label class="col-form-label fieldLabel required w-100">Voter Type</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentVote" required="">
                                    <option value="Registered" selected="">Registered</option>
                                    <option value="Unregistered">Unregistered</option>
                                </select>
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-8 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentAddress">House No./Street/Subdivision</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="residentAddress" required="">
                            </div>
                            <div class="col col-lg-2 col-md-2 col-sm-4 col-12">Purok
                                <label class="col-form-label fieldLabel required w-100" for="residentPurok"></label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentPurok" required="">
                                    <option value="I" selected="">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option value="VI">VI</option>
                                    <option value="VII">VII</option>
                                </select>
                            </div>
                            <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel w-100" for="organization" id="organizationLbl">Organization (if any)</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="organization">
                            </div>
                        </div>
                
                        <div class="row m-0 gx-3 p-0" id="eRow">
                             <!-- Educational Info -->
                            <div class="col eStatus col-lg-6 col-md-12 col-sm-12 col-12" id="educCol">
                                <div class="d-flex d-sm-flex d-xxl-flex align-items-center align-items-sm-center align-items-xxl-center markerDivUpdate rounded-4 m-0" id="markerEduc">
                                    <input type="radio" id="educCheckUpdate" class="statusCheck ms-3" name="eInfo" checked="">
                                    <span class="markerText ms-2">Educational Status</span>
                                </div>
                            
                                <div class="row m-0 my-3 gy-3 gx-3">
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="educStatusLbl" for="selectEducStatus">Student Status</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" id="selectEducStatus" required="">
                                            <option value="Enrolled" selected="">Enrolled</option>
                                            <option value="Out-of-school-Youth">Out-of-school Youth</option>
                                            <option value="Working Student">Working Student</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="levelLbl" for="selectLevel">Level</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" id="selectLevel" required="">
                                            <option value="Pre-Elementary" selected="">Pre-elementary</option>
                                            <option value="Elementary">Elementary</option>
                                            <option value="Junior High School">Junior High School</option>
                                            <option value="Senior High School">Senior High School</option>
                                            <option value="Alternative Learning System">Alternative Learning System (ALS)</option>
                                            <option value="Diploma Course">Diploma Course</option>
                                            <option value="College">College</option>
                                            <option value="Graduate Studies">Graduate Studies</option>  
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-4 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="schoolTypeLbl" for="selectSchoolType">Public/Private</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" id="selectSchoolType" required="">
                                            <option value="Private" selected="">Private</option>
                                            <option value="Public">Public</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-12 col-md-12 col-sm-8 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="schoolLbl" for="inputSchool">Name of School</label>
                                        <input class="form-control educUserInput text-uppercase w-100" type="text" id="inputSchool" required="">
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="educIndustryLbl" for="selectEducOccupation">Work Industry</label>
                                        <select class="form-select text-uppercase w-100 educSelectBox" id="selectEducIndustry" required="">
                                            <option value="1" selected>Accounting</option>
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
                                        <label class="col-form-label educFieldLabel required w-100" id="educSalaryLbl" for="selectEducSalary">Salary Range</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" id="selectEducSalary" required="">
                                            <option value="1" selected="">Less than 10,000</option>
                                            <option value="2">10,000-20,999</option>
                                            <option value="3">21,000-30,999</option>
                                            <option value="4">31,000-40,999</option>
                                            <option value="5">41,000-50,999</option>
                                            <option value="6">More than 50,999</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Employment Info -->
                            <div class="col eStatus col-lg-6 col-md-12 col-sm-12 col-12" id="employCol">
                                <div class="d-flex d-sm-flex d-xxl-flex align-items-center align-items-sm-center align-items-xxl-center markerDivUpdate rounded-4" id="markerEmploy">
                                    <input type="radio" id="employCheckUpdate" class="statusCheck ms-3" name="eInfo">
                                    <span class="markerText ms-2">Employment Status</span>
                                </div>
                
                                <div class="row m-0 my-3 gy-3 gx-3">
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employStatusLbl" for="selectEmployStatus">Employee Status</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" id="selectEmployStatus" required="">
                                            <option value="Employed" selected="">Employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employTypeLbl" for="selectEmployeeType">Employee Type</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" id="selectEmployeeType" required="">
                                            <option value="Regular" selected="">Regular</option>
                                            <option value="Contractual">Contractual</option>
                                            <option value="Job Order">Job Order</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-4 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="companyTypeLbl" for="selectCompanyType">Public/Private</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" id="selectCompanyType" required="">
                                            <option value="Private" selected="">Private</option>
                                            <option value="Public">Public</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-12 col-md-12 col-sm-8 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employerLbl" for="inputEmployer">Name of Employer/Company/Business</label>
                                        <input class="form-control employUserInput text-uppercase w-100" type="text" id="inputEmployer" required="">
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employIndustryLbl" for="selectEmployOccupation">Work Industry</label>
                                        <select class="form-select text-uppercase w-100 employSelectBox" id="selectEmployIndustry" required="">
                                            <option value="1" selected>Accounting</option>
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
                                        <label class="col-form-label employFieldLabel required w-100" id="employSalaryLbl" for="selectEmploySalary">Salary Range</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" id="selectEmploySalary" required="">
                                            <option value="1" selected>Less than 10,000</option>
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
                        
                        <!-- House Declaration -->
                        <div class="row m-0">
                            <div class="col col-12 p-0">
                                <div class="d-flex d-xxl-flex align-items-center align-items-xxl-center markerDivUpdate rounded-4">
                                    <span class="markerText ms-3">House Declaration</span>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 my-3 gy-3 gx-3" id="householdRow">
                            <div class="col col-lg-2 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="headFname">First Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="headFname" required="">
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="headMname">Middle Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="headMname" required="">
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="headLname">Last Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="headLname" required="">
                            </div>
                            <div class="col col-lg-1 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="headEname" id="headEnameLbl">Suffix</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="headEname">
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="famCount">No.&nbsp; of Family Members</label>
                                <select class="form-select text-uppercase w-100 houseSelectBox" id="famCount" required="">
                                    <option value="less5">Less than 5</option>
                                    <option value="5 to 10">5 to 10</option>
                                    <option value="11 to 15">11 to 15</option>
                                    <option value="16 to 20">16 to 20</option>
                                    <option value="More than 20">More than 20</option>
                                </select>
                            </div>
                            <div class="col col-lg-2 col-md-6 col-sm-6 col-12" id="colRemarks">
                                <div class="remarkDiv">
                                    <label class="col-form-label fieldLabel required w-100" for="remarkDrop" id="remarksLbl">Remarks</label>
                                    <!-- Class form-select  removed from select element in Remarks -->
                                    <select class="text-uppercase houseSelectBox" multiple name="native-select" placeholder="Select Remarks" data-search="false" data-silent-initial-value-set="true" id="remarkDrop">
                                        <option value="soloLiving">Solo Living</option>
                                        <option value="soloParent">Solo Parent</option>
                                        <option value="teenPregnancy">Teenage Pregnancy</option>  
                                    </select>
                                </div>
                            </div> 
                        </div>
                        <div class="row d-flex d-md-flex d-lg-flex d-xxl-flex justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xxl-end gx-2" id="rowBtn">
                            <div class="col d-flex d-sm-flex d-md-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-xxl-end col-lg-2 col-md-4 col-sm-6 col-6 p-0">
                                <button class="btn controlBtn" id="clearBtn" type="button">Clear All</button>
                            </div>
                            <div class="col d-flex d-sm-flex d-md-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-xxl-end col-lg-2 col-md-4 col-sm-6 col-6 p-0">
                                    <button class="btn controlBtn" id="submitBtn" type="button" form="updateForm">Submit</button>
                            </div>
                        </div>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" role="dialog" tabindex="-1" id="modalUpdated">
                        <div class="modal-dialog h-100 m-auto d-flex align-items-center" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="m-0 d-flex justify-content-end align-items-center">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="row m-0">
                                        <div class="col col-12 p-0">
                                            <svg class="checkmark my-4" xmlns="https://www.svgrepo.com/show/137031/check.svg" viewBox="0 0 50 50">
                                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                            </svg>
                                        </div>
                                        <div class="col col-12">
                                            <h3 class="modalAlert text-center">Updated Entry</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Virtual-Select JS -->
    <script type="text/javascript" src="assets/js/virtual-select.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/updateEntry.js"></script>
</body>

</html>