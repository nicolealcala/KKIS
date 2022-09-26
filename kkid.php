<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>KK ID Card</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">

    <link rel="stylesheet" href="assets/css/kkid.css">
    <link rel="stylesheet" href="assets/css/idtcpdf.css">
    <link rel="stylesheet" href="assets/css/mediaquery.css">

    <!-- navAddUpdate CSS -->
    <link rel="stylesheet" href="assets/css/navKKID.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <!-- Nav -->
    <div class="navDiv">
        <?php include 'nav.php' ?>
    </div>

    <!-- <div class="navSpace"> </div> -->

    <!-- pageContent -->
    <div class="pageContent">
    
    <div id="wrapper">
        <div class="container-fluid content">
            <div class="row kkidHeadingRow p-0 m-0">
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12 p-0 mb-3">
                    <h1 class="title h-auto mb-0 py-1">KK ID Card</h1><img src="assets/img/misc/hr.svg">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12 p-0 mb-3 d-flex d-sm-flex d-md-flex d-xxl-flex align-items-center justify-content-center justify-content-sm-center justify-content-md-end justify-content-xxl-end">
                    <div class="qrBtnContainer">
                        <button class="qrBtn" type="button">Scan QR Code</button>
                        <div class="iconContainer pe-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
                                <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
                                <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
                                <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
                                <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
                                <path d="M12 9h2V8h-2v1Z"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="generateBody m-0">
                <div class="row kkidBody p-0 m-0 gy-2" id="kkidPage">
                    <div class="col col-lg-6 col-md-12 col-sm-12 col-12 p-0 m-0">
                        <h1 class="subTitle mb-3">Batch Printing</h1>
                        <form class="m-0 mt-4">
                            <div class="categoryCol row d-xl-flex justify-content-center align-items-center gy-3 w-100">
                                <div class="col col-lg-3 col-md-3 col-sm-6 col-4 p-0">
                                    <div class="form-check categoryDiv w-75">
                                        <input class="form-check-input checkboxCategory" type="checkbox" id="checkAge">
                                        <label class="form-check-label categoryLbl" for="checkAge">Age</label>
                                    </div>
                                </div>
                                <div class="col col-lg-9 col-md-9 col-sm-6 col-8 p-0">
                                    <select class="form-select categoryOption" id="selectAge" disabled="">
                                        <option value="15" selected="">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                    </select>
                                </div>

                                <div class="col col-lg-3 col-md-3 col-sm-6 col-4 p-0">
                                    <div class="form-check categoryDiv w-75">
                                        <input class="form-check-input checkboxCategory" type="checkbox" id="checkPurok">
                                        <label class="form-check-label categoryLbl" for="checkPurok">Purok</label>
                                    </div>
                                </div>
                                <div class="col col-lg-9 col-md-9 col-sm-6 col-8 p-0">
                                    <select class="form-select categoryOption" id="selectPurok" disabled="">
                                        <option value="12" selected="">1</option>
                                        <option value="13">2</option>
                                        <option value="14">3</option>
                                    </select>
                                </div>

                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                    <div class="form-check categoryDiv">
                                        <input class="form-check-input checkboxCategory" type="checkbox" id="checkCustom">
                                        <label class="form-check-label categoryLbl" for="customDiv">Custom</label>
                                    </div>
                                </div>
                                <div class="customDiv mt-3 d-none">
                                    <form class="" action="" id="customDiv">
                                        <div class="row customCategory m-0 gy-3">
                                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                                <label class="col-form-label" for="headLname">First Name</label>
                                            </div>
                                            <div class="col col-lg-9 col-md-9 col-sm-12 col-12 p-0">
                                                <input class="form-control userInput text-uppercase w-100" type="text" id="headLname" required="">
                                            </div>

                                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                                <label class="col-form-label" for="headLname">Middle Name</label>
                                            </div>
                                            <div class="col col-lg-9 col-md-9 col-sm-12 col-12 p-0">
                                                <input class="form-control userInput text-uppercase w-100" type="text" id="headLname" required="">
                                            </div>

                                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                                <label class="col-form-label" for="headLname">Last Name</label>
                                            </div>
                                            <div class="col col-lg-9 col-md-9 col-sm-12 col-12 p-0">
                                                <input class="form-control userInput text-uppercase w-100" type="text" id="headLname" required="">
                                            </div>

                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col idPreview col-lg-6 col-md-12 col-sm-12 col-12 p-0 m-0">
                        <div class="row m-0 w-100">
                            <div class="col col-12 p-0" id="kkidMarker">
                                <h1 class="text-start subTitle mb-3">Katipunan ng Kabataan ID</h1>
                            </div>
                            <div class="col text-center col-12 p-3 pt-1 w-100">
                                <img class="img-fluid previewContainer" src="assets/img/misc/ID.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex d-md-flex d-lg-flex d-xxl-flex justify-content-md-start align-items-md-start justify-content-lg-start align-items-lg-start justify-content-xxl-start gx-2" id="rowBtn">
                <div class="col d-flex d-sm-flex d-md-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-xxl-center col-lg-3 col-md-4 col-sm-6 col-6 p-0">
                    <button class="btn controlBtn ms-1" id="clearBtn" type="button" disabled="">Clear All</button>
                </div>
                <div class="col d-flex d-sm-flex d-md-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-xxl-center col-lg-3 col-md-4 col-sm-6 col-6 p-0">
                    <button class="btn controlBtn me-1" id="submitBtn" type="button" disabled="">Submit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="assets/js/kkid.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>