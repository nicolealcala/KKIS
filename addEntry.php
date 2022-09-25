<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add New Entry</title>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">

    <link rel="stylesheet" href="assets/css/virtual-select.min.css">

    <link rel="stylesheet" href="assets/css/addUpdate.css">
    <link rel="stylesheet" href="assets/css/mediaquery.css">

    <!-- navAddUpdate CSS -->
    <link rel="stylesheet" href="assets/css/navAddUpdate.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <!-- Nav -->
    <div class="navDiv">
        <?php include 'nav.php' ?>
    </div>

    <!-- pageContent -->
    <div class="pageContent">
    <div id="wrapper">
        <div class="container-fluid content">
            <div class="row documentHeadingRow p-0 m-0">
                <div class="col d-xxl-flex align-self-center justify-content-xxl-start align-items-xxl-center col-12 p-0">
                    <h1 class="d-xxl-flex title" id="titleAddEntry">Add Entry</h1>
                </div>
            </div>
            <div class="row m-0">
                <div class="col p-0"><img src="assets/img/misc/hr.svg"></div>
            </div>
            <div class="generateBody">
                <div class="sectionDiv">
                    <div class="row m-0 w-100">
                        <div class="col col-12 p-0">
                            <div class="d-flex d-xxl-flex align-items-center align-items-xxl-center markerDiv rounded-4" id="markerPersonal"><span class="markerText ms-3">Personal Information</span></div>
                        </div>
                    </div>
                    <form>
                        <div class="row m-0 my-3 gy-3 gx-3">
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentFname">First Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="residentFname" required="">
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentMname">Middle Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="residentMname" required="">
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-8 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentLname">Last Name</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="residentLname" required="">
                            </div>
                            <div class="col col-lg-1 col-md-3 col-sm-4 col-12">
                                <label class="col-form-label fieldLabel w-100" for="residentEname">Extension</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentEname">
                                    <option value="none" selected>None</option>
                                    <option value="Jr.">Jr.</option>
                                    <option value="Sr.">Sr.</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                </select>
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
                            <div class="col col-lg-2 col-md-2 col-sm-4 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="residentPurok">Purok</label>
                                <select class="form-select text-uppercase w-100 personalSelectBox" id="residentPurok" required="">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                            <div class="col col-lg-3 col-md-4 col-sm-12 col-12">
                                <label class="col-form-label fieldLabel w-100" for="organization" id="organizationLbl">Organization (if any)</label>
                                <input class="form-control userInput text-uppercase w-100" type="text" id="organization">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="sectionDiv">
                    <div class="row m-0 gx-3 p-0" id="eRow">
                        <div class="col eStatus col-lg-6 col-md-12 col-sm-12 col-12" id="educCol">
                            <div class="d-flex d-sm-flex d-xxl-flex align-items-center align-items-sm-center align-items-xxl-center markerDiv rounded-4 m-0" id="markerEduc">
                                <input type="radio" id="educCheck" class="statusCheck ms-3" name="eInfo" checked="">
                                <span class="markerText ms-2">Educational Status</span>
                            </div>
                            <form class="eForm" id="educForm">
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
                                        <label class="col-form-label educFieldLabel required w-100" id="educOccupationLbl" for="inputEducOccupation">Occupation</label>
                                        <input class="form-control educUserInput text-uppercase w-100" type="text" id="inputEducOccupation" required="">
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
                            </form>
                        </div>
                        <div class="col eStatus col-lg-6 col-md-12 col-sm-12 col-12" id="employCol">
                            <div class="d-flex d-sm-flex d-xxl-flex align-items-center align-items-sm-center align-items-xxl-center markerDiv rounded-4" id="markerEmploy">
                                <input type="radio" id="employCheck" class="statusCheck ms-3" name="eInfo">
                                <span class="markerText ms-2">Employment Status</span>
                            </div>
                            <form class="eForm" id="employForm">
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
                                        <label class="col-form-label employFieldLabel required w-100" id="employOccupationLbl" for="inputEmployOccupation">Occupation</label>
                                        <input class="form-control employUserInput text-uppercase w-100" type="text" id="inputEmployOccupation" required="">
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
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sectionDiv">
                    <div class="row m-0">
                        <div class="col col-12 p-0">
                            <div class="d-flex d-xxl-flex align-items-center align-items-xxl-center markerDiv rounded-4">
                                <span class="markerText ms-3">House Declaration</span>
                            </div>
                        </div>
                    </div>
                    <form>
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
                                <label class="col-form-label fieldLabel required w-100" for="headEname">Extension</label>
                                <select class="form-select text-uppercase w-100 houseSelectBox" id="headEname" required="">
                                    <option value="none" selected>None</option>
                                    <option value="1">Jr.</option>
                                    <option value="2">Sr.</option>
                                    <option value="3">I</option>
                                    <option value="4">II</option>
                                    <option value="5">III</option>
                                </select>
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                                <label class="col-form-label fieldLabel required w-100" for="famCount">No.&nbsp; of Family Members</label>
                                <select class="form-select text-uppercase w-100 houseSelectBox" id="famCount" required="">
                                    <option value="less5">Less than 5</option>
                                    <option value="5 to 10">5 to 10</option>
                                    <option value="11 to 15">11 to 15</option>
                                    <option value="16 to 18">16 to 18</option>
                                    <option value="More than 20">More than 20</option>
                                </select>
                            </div>
                            <div class="col col-lg-2 col-md-6 col-sm-6 col-12" id="colRemarks">
                                <div class="remarkDiv">
                                    <label class="col-form-label fieldLabel required w-100" for="remarkDrop" id="remarksLbl">Remarks</label>
                                    <!-- Class form-select  removed from select element in Remarks -->
                                    <select class="text-uppercase houseSelectBox" multiple name="native-select" placeholder="Select Remarks" data-search="false" data-silent-initial-value-set="true" id="remarkDrop" required="">
                                        <option value="soloLiving">Solo Living</option>
                                        <option value="soloParent">Solo Parent</option>
                                        <option value="teenPregnancy">Teenage Pregnancy</option>  
                                    </select>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="row d-flex d-md-flex d-lg-flex d-xxl-flex justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xxl-end gx-2" id="rowBtn">
                    <div class="col d-flex d-sm-flex d-md-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-xxl-end col-lg-2 col-md-4 col-sm-6 col-6 p-0">
                        <button class="btn controlBtn" id="clearBtn" type="button" disabled="">Clear All</button>
                    </div>
                    <div class="col d-flex d-sm-flex d-md-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-xxl-end col-lg-2 col-md-4 col-sm-6 col-6 p-0">
                        <button class="btn controlBtn" id="submitBtn" type="button" disabled="">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/virtual-select.min.js"></script>
    <script type="text/javascript" src="assets/js/addEntry.js"></script>
    
</body>

</html>