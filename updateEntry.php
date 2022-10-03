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
                                <label class="col-form-label required fieldLabel w-100" for="kabataanEname" id="kabataanEnameLbl">Suffix</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="kabataanEname">
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
                                </select>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentReligion">Religion</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentReligion" required="">
                                    <option value="Atheist" selected="">Atheist</option>
                                    <option value="Buddhist">Buddhist</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Muslim">Muslim</option>
                                </select>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentDisability">Disability</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentDisability" required="">
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
                                    <option value="1" selected="">I</option>
                                    <option value="2">II</option>
                                    <option value="3">III</option>
                                    <option value="4">IV</option>
                                    <option value="5">V</option>
                                    <option value="6">VI</option>
                                    <option value="7">VII</option>
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
                                            <option value="enrolled" selected="">Enrolled</option>
                                            <option value="ousYouth">Out-of-school Youth</option>
                                            <option value="wStudent">Working student</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="levelLbl" for="selectLevel">Level</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" id="selectLevel" required="">
                                            <option value="preElem" selected="">Pre-elementary</option>
                                            <option value="elem">Elementary</option>
                                            <option value="jhs">Junior High School</option>
                                            <option value="shs">Senior High School</option>
                                            <option value="als">Alternative Learning System (ALS)</option>
                                            <option value="dc">Diploma Course</option>
                                            <option value="college">College</option>
                                            <option value="gradStudies">Graduate Studies</option>    
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-4 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="schoolTypeLbl" for="selectSchoolType">Public/Private</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" id="selectSchoolType" required="">
                                            <option value="private" selected="">Private</option>
                                            <option value="public">Public</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-12 col-md-12 col-sm-8 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="schoolLbl" for="inputSchool">Name of School</label>
                                        <input class="form-control educUserInput text-uppercase w-100" type="text" id="inputSchool" required="">
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="educIndustryLbl" for="selectEducOccupation">Work Industry</label>
                                        <select class="form-select text-uppercase w-100 educSelectBox" id="selectEducIndustry" required="">
                                            <option value="A01">Accounting</option>
                                            <option value="A02">Advertising and Marketing</option>
                                            <option value="A03.">Aerospace</option>
                                            <option value="A04">Agriculture</option>
                                            <option value="A05">Animation</option>
                                            <option value="A06">Apparel and Fashion</option>
                                            <option value="A07">Architecture and Planning</option>
                                            <option value="A08">Arts and Crafts</option>
                                            <option value="A09">Automobile Engineering</option>
                                            <option value="A10">Auto Mechanics Industry</option>
                                            <option value="A11">Aviation</option>
                                            <option value="B01">BPO</option>
                                            <option value="B02">Buy and Sell</option>
                                            <option value="C01">Casinos and Gambling</option>
                                            <option value="C02">Chemical Industry</option>
                                            <option value="C03">Computer Technology</option>
                                            <option value="C04">Construction</option>
                                            <option value="C05">Cosmetics</option>
                                            <option value="D01">Design</option>
                                            <option value="E01">E-commerce</option>
                                            <option value="E02">Education</option>
                                            <option value="E03">Electrical Power</option>
                                            <option value="E04">Electronics</option>
                                            <option value="E05">Event Services</option>
                                            <option value="F01">Finance and Insurance Services</option>
                                            <option value="F02">Fishery</option>
                                            <option value="F03">Fitness and Wellness</option>
                                            <option value="F04">Furniture</option>
                                            <option value="F05">Food and Beverages</option>
                                            <option value="G01">Government</option>
                                            <option value="G02">Graphic Arts</option>
                                            <option value="H01">Healthcare and Welfare</option>
                                            <option value="H02">Hospitality Industry</option>
                                            <option value="L01">Law Enforcement</option>
                                            <option value="L02">Legislative Office</option>
                                            <option value="L03">Luxury Good and Jewelry</option>
                                            <option value="M01">Manufacturing</option>
                                            <option value="M02">Maritime</option>
                                            <option value="M03">Military</option>
                                            <option value="M04">Mining</option>
                                            <option value="P01">Packaging and Containers</option>
                                            <option value="P02">Performing Arts</option>
                                            <option value="P03">Personal Service</option>
                                            <option value="P04">Pharmaceutical</option>
                                            <option value="P05">Poultry</option>
                                            <option value="P06">Printing and Publishing</option>
                                            <option value="P07">Production</option>
                                            <option value="P08">Public Safety</option>
                                            <option value="P09">Photography and Film</option>
                                            <option value="Q01">Quick Service Restaurant (QSR)</option>
                                            <option value="R01">Real Estatee</option>
                                            <option value="R02">Recreational Facilities and Services</option>
                                            <option value="R03">Religious Institutions</option>
                                            <option value="R04">Retail Industrry</option>
                                            <option value="S01">Shipping Services</option>
                                            <option value="S02">Staffing and Recruiting</option>
                                            <option value="S03">Suply Chain Management</option>
                                            <option value="T01">Telecommunication</option>
                                            <option value="T02">Transportation</option>
                                            <option value="T03">Tourism</option>
                                            <option value="U01">Utilities</option>
                                            <option value="V01">Veterinary</option>
                                            <option value="W01">Warehousing</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label educFieldLabel required w-100" id="educSalaryLbl" for="selectEducSalary">Salary Range</label>
                                        <select class="form-select educSelectBox text-uppercase w-100" id="selectEducSalary" required="">
                                            <option value="less10" selected="">Less than 10,000</option>
                                            <option value="bet1020">10,000-20,999</option>
                                            <option value="bet2130">21,000-30,999</option>
                                            <option value="bet3139">31,000-40,999</option>
                                            <option value="bet4150">41,000-50,000</option>
                                            <option value="more50">More than 50,000</option>
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
                
                                <div class="row m-0 my-3 gy-3 gx-3" id="formRow">
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employStatusLbl" for="selectEmployStatus">Employee Status</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" id="selectEmployStatus" required="">
                                            <option value="employed" selected="">Employed</option>
                                            <option value="unemployed">Unemployed</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employTypeLbl" for="selectEmployeeType">Employee Type</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" id="selectEmployeeType" required="">
                                            <option value="regular" selected="">Regular</option>
                                            <option value="contractual">Contractual</option>
                                            <option value="jo">Job Order</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-4 col-md-4 col-sm-4 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="companyTypeLbl" for="selectCompanyType">Public/Private</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" id="selectCompanyType" required="">
                                            <option value="private" selected="">Private</option>
                                            <option value="public">Public</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-12 col-md-12 col-sm-8 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employerLbl" for="inputEmployer">Name of Employer/Company/Business</label>
                                        <input class="form-control employUserInput text-uppercase w-100" type="text" id="inputEmployer" required="">
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employIndustryLbl" for="selectEmployOccupation">Work Industry</label>
                                        <select class="form-select text-uppercase w-100 employSelectBox" id="selectEmployIndustry" required="">
                                            <option value="A01">Accounting</option>
                                            <option value="A02">Advertising and Marketing</option>
                                            <option value="A03.">Aerospace</option>
                                            <option value="A04">Agriculture</option>
                                            <option value="A05">Animation</option>
                                            <option value="A06">Apparel and Fashion</option>
                                            <option value="A07">Architecture and Planning</option>
                                            <option value="A08">Arts and Crafts</option>
                                            <option value="A09">Automobile Engineering</option>
                                            <option value="A10">Auto Mechanics Industry</option>
                                            <option value="A11">Aviation</option>
                                            <option value="B01">BPO</option>
                                            <option value="B02">Buy and Sell</option>
                                            <option value="C01">Casinos and Gambling</option>
                                            <option value="C02">Chemical Industry</option>
                                            <option value="C03">Computer Technology</option>
                                            <option value="C04">Construction</option>
                                            <option value="C05">Cosmetics</option>
                                            <option value="D01">Design</option>
                                            <option value="E01">E-commerce</option>
                                            <option value="E02">Education</option>
                                            <option value="E03">Electrical Power</option>
                                            <option value="E04">Electronics</option>
                                            <option value="E05">Event Services</option>
                                            <option value="F01">Finance and Insurance Services</option>
                                            <option value="F02">Fishery</option>
                                            <option value="F03">Fitness and Wellness</option>
                                            <option value="F04">Furniture</option>
                                            <option value="F05">Food and Beverages</option>
                                            <option value="G01">Government</option>
                                            <option value="G02">Graphic Arts</option>
                                            <option value="H01">Healthcare and Welfare</option>
                                            <option value="H02">Hospitality Industry</option>
                                            <option value="L01">Law Enforcement</option>
                                            <option value="L02">Legislative Office</option>
                                            <option value="L03">Luxury Good and Jewelry</option>
                                            <option value="M01">Manufacturing</option>
                                            <option value="M02">Maritime</option>
                                            <option value="M03">Military</option>
                                            <option value="M04">Mining</option>
                                            <option value="P01">Packaging and Containers</option>
                                            <option value="P02">Performing Arts</option>
                                            <option value="P03">Personal Service</option>
                                            <option value="P04">Pharmaceutical</option>
                                            <option value="P05">Poultry</option>
                                            <option value="P06">Printing and Publishing</option>
                                            <option value="P07">Production</option>
                                            <option value="P08">Public Safety</option>
                                            <option value="P09">Photography and Film</option>
                                            <option value="Q01">Quick Service Restaurant (QSR)</option>
                                            <option value="R01">Real Estatee</option>
                                            <option value="R02">Recreational Facilities and Services</option>                                            <option value="R03">Religious Institutions</option>
                                            <option value="R04">Retail Industrry</option>
                                            <option value="S01">Shipping Services</option>
                                            <option value="S02">Staffing and Recruiting</option>
                                            <option value="S03">Suply Chain Management</option>
                                            <option value="T01">Telecommunication</option>
                                            <option value="T02">Transportation</option>
                                            <option value="T03">Tourism</option>
                                            <option value="U01">Utilities</option>
                                            <option value="V01">Veterinary</option>
                                            <option value="W01">Warehousing</option>
                                        </select>
                                    </div>
                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 colHolder">
                                        <label class="col-form-label employFieldLabel required w-100" id="employSalaryLbl" for="selectEmploySalary">Salary Range</label>
                                        <select class="form-select employSelectBox text-uppercase w-100" id="selectEmploySalary" required="">
                                            <option value="less10" selected="">Less than 10,000</option>
                                            <option value="bet1020">10,000-20,999</option>
                                            <option value="bet2130">21,000-30,999</option>
                                            <option value="bet3140">31,000-40,999</option>
                                            <option value="bet4150">41,000-50,000</option>
                                            <option value="more50">More than 50,000</option>
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