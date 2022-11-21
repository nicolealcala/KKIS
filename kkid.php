<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>KK ID Card</title>

    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/kkid.css">
    <link rel="stylesheet" href="assets/scss/idtcpdf.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- navAddUpdate CSS
    <link rel="stylesheet" href="assets/css/navKKID.css"> -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <div class="mainContainer d-block">
        <header>
            <div class="row headerRow">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
                    <i class="fa-solid fa-bars fa-2xl w-auto" id="hamburger"></i>
                    <span class="title">KK ID Card</span>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-md-flex justify-content-md-end align-items-md-center">
                    <span class="accountType d-flex justify-content-end">Super Admin Account</span>
                </div>
            </div>
            <img src="assets/img/decorative.svg" alt="hr" class="img-fluid w-100 d-flex">
        </header>

        <!-- BODY START -->
        <div class="container-fluid content">
            <!-- Scan Button -->
            <div class="row d-flex justify-content-end align-ittems-center mx-0 mt-1 mb-3">
                <button class="btn rounded-2 px-3 py-2 w-auto d-flex justify-content-center align-items-center" id="scanBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="m-0 p-0" viewBox="0 0 16 16" id="scanIcon">
                        <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
                        <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
                        <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
                        <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
                        <path d="M12 9h2V8h-2v1Z"/>
                    </svg>
                    <span id="scanBtnTxt">Scan QR Code</span>
            </button>
            </div>

            <!-- Contents -->
            <div class="m-0">
                <div class="row kkidBody p-0 m-0 gy-5" id="kkidPage">
                    <!-- Batch Print -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-0 m-0">
                        <p class="subTitle mb-3">Batch Printing</p>
                        <form class="m-0 mt-4 d-flex justify-content-center align-items-center" id="kkidForm">
                            <div class="categoryCol row d-flex justify-content-center align-items-center my-auto gy-3 w-100">
                                <!-- Category: Age -->
                                <div class="col-sm-3 col-12 p-0">
                                    <div class="form-check categoryDiv w-75">
                                        <input class="form-check-input checkboxCategory" type="checkbox" id="checkAge">
                                        <label class="form-check-label categoryLbl" for="checkAge">Age</label>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-12 p-0">
                                    <select class="form-select categoryOption" id="selectAge" disabled="">
                                        <option value="children" selected>0-14 years old (Children)</option>
                                        <option value="kabataan">15-30 years old (Kabataan)</option>
                                        <option value="genResidents">31-59 years old (General Residents)</option>
                                        <option value="seniorCitizens">60 years old and above (Senior Citizens)</option>
                                    </select>
                                </div>
                                <!-- Category: Purok -->
                                <div class="col-sm-3 col-12 p-0">
                                    <div class="form-check categoryDiv w-75">
                                        <input class="form-check-input checkboxCategory" type="checkbox" id="checkPurok">
                                        <label class="form-check-label categoryLbl" for="checkPurok">Purok</label>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-12 p-0">
                                    <select class="form-select categoryOption" id="selectPurok" disabled>
                                        <option value="I" selected>I</option>
                                        <option value="II">II</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                        <option value="V">V</option>
                                        <option value="VI">VI</option>
                                        <option value="VII">VII</option>
                                    </select>
                                </div>
                                <!-- Custom Category -->
                                <div class="col-12 p-0">
                                    <div class="form-check categoryDiv">
                                        <input class="form-check-input checkboxCategory" type="checkbox" id="checkCustom">
                                        <label class="form-check-label categoryLbl" for="checkCustom">Custom</label>
                                    </div>
                                </div>
                                <!-- Custom Form -->
                                <div class="customDiv mt-2 mb-3 d-flex justify-content-center">
                                    <div class="row customCategory gy-4">
                                        <div class="col-md-3 col-sm-12 col-12 p-0">
                                            <label class="col-form-label" for="headLname">First Name</label>
                                        </div>
                                        <div class="col col-lg-9 col-md-9 col-sm-12 col-12 p-0">
                                            <input class="form-control userInput text-uppercase w-100" type="text" id="headLname" required disabled>
                                        </div>

                                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                            <label class="col-form-label" for="headLname">Middle Name</label>
                                        </div>
                                        <div class="col col-lg-9 col-md-9 col-sm-12 col-12 p-0">
                                            <input class="form-control userInput text-uppercase w-100" type="text" id="headLname" required disabled>
                                        </div>

                                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                            <label class="col-form-label" for="headLname">Last Name</label>
                                        </div>
                                        <div class="col col-lg-9 col-md-9 col-sm-12 col-12 p-0">
                                            <input class="form-control userInput text-uppercase w-100" type="text" id="headLname" required disabled>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Preview -->
                    <div class="col idPreview col-lg-6 col-md-12 col-sm-12 col-12 p-0 m-0">
                        <div class="row m-0 w-100">
                            <div class="col col-12 p-0">
                                <p class="text-start subTitle mb-3">ID Preview</p>
                            </div>
                            <div class="col text-center col-12 p-3 pt-1 w-100">
                                <img class="img-fluid previewContainer" src="assets/img/misc/ID.png">
                            </div>
                        </div>
                    </div>

                    <!-- Control buttons -->
                    <div class="row d-flex justify-content-lg-start justify-content-sm-center m-0">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center">
                            <button class="btn controlBtn" id="clearBtn" type="button" form="kkidForm" disabled><span class="btnText">Clear All</span></button>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center">
                            <button class="btn controlBtn" id="submitBtn" type="button" form="kkidForm" disabled><span class="btnText">Submit</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Script -->
    <script src="assets/js/kkid.js"></script>
</body>

</html>