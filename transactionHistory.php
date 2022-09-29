<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Transaction History</title>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

    <link rel="stylesheet" href="assets/scss/th.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- navAddUpdate CSS -->
    <!-- <link rel="stylesheet" href="assets/css/navAddEntry.css"> -->

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <!-- Nav -->
    <div class="navDiv">
        <?php include 'nav.php' ?>
    </div>

    <div id="wrapper">
        <div class="content container-fluid">
             <!-- Copy this -->
             <div class="row documentHeadingRow p-0 m-0">
                <div class="col d-xxl-flex align-self-center justify-content-xxl-start align-items-xxl-center col-12 p-0">
                    <h1 class="d-xxl-flex title">Transaction History</h1>
                </div>
            </div>
            <div class="row m-0">
                <div class="col p-0"><img class="img-fluid" src="assets/img/misc/hr.svg"></div>
            </div>
            <!-- Copy End -->

            <div class="pageBody mt-5 m-0">
                <div class="divBtns row d-flex justify-content-end align-items-center m-0">
                    <!-- <div class="col-3 col-sm-5 col-md-7 col-lg-8 col-xl-9 col-xxl-9"></div> -->
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-end align-items-center justify-content-md-center">
                        <div class="checkAllDiv d-flex justify-content-center align-items-center">
                            <input class="form-check-input mb-1" type="checkbox" id="selectAll">
                            <label class="topBtnLbl ms-2" for="selectAll">Select All</label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-flex-start align-items-center">
                        <button class="btn btn-primary delete px-4" type="button">
                            <i class="far fa-trash-alt"></i>
                            <span class="topBtnLbl ms-2" id="deleteBtn">Delete</span>
                        </button></div>
                </div>

                <div class="tableDiv row m-0 mt-5 d-none d-lg-block">
                    <div class="col col-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="tHead">Transaction ID</th>
                                    <th class="tHead">Name</th>
                                    <th class="tHead">Issued On</th>
                                    <th class="tHead" id="checkEntry"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="entryRow" scope="col" data-label="Transaction ID">TID001</td>
                                    <td class="entryRow" scope="col" data-label="Name">Nicole Alcala</td>
                                    <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                                    <td class="entryRow checkItem text-center"><input type="checkbox"></td>
                                </tr>

                                <tr>
                                    <td class="entryRow" scope="col" data-label="Transaction ID">TID002</td>
                                    <td class="entryRow" scope="col" data-label="Name">Patricia Mae Abrigo</td>
                                    <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                                    <td class="entryRow checkItem text-center"><input type="checkbox"></td>
                                </tr>

                                <tr>
                                    <td class="entryRow" scope="col" data-label="Transaction ID">TID003</td>
                                    <td class="entryRow" scope="col" data-label="Name">Michael John Palalimpa</td>
                                    <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                                    <td class="entryRow checkItem text-center"><input type="checkbox"></td>
                                </tr>

                                <tr>
                                    <td class="entryRow" scope="col" data-label="Transaction ID">TID004</td>
                                    <td class="entryRow" scope="col" data-label="Name">John Marc Morano</td>
                                    <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                                    <td class="entryRow checkItem text-center"><input type="checkbox"></td>
                                </tr>

                                <tr>
                                    <td class="entryRow" scope="col" data-label="Transaction ID">TID005</td>
                                    <td class="entryRow" scope="col" data-label="Name">Princess Carl Austria</td>
                                    <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                                    <td class="entryRow checkItem text-center"><input type="checkbox"></td>
                                </tr>

                                <tr>
                                    <td class="entryRow" scope="col" data-label="Transaction ID">TID006</td>
                                    <td class="entryRow" scope="col" data-label="Name">Stephanie Baylon</td>
                                    <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                                    <td class="entryRow checkItem text-center"><input type="checkbox"></td>
                                </tr>

                                <tr>
                                    <td class="entryRow" scope="col" data-label="Transaction ID">TID007</td>
                                    <td class="entryRow" scope="col" data-label="Name">Stephanie Baylon</td>
                                    <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                                    <td class="entryRow checkItem text-center"><input type="checkbox"></td>
                                </tr>

                                <tr>
                                    <td class="entryRow" scope="col" data-label="Transaction ID">TID008</td>
                                    <td class="entryRow" scope="col" data-label="Name">Justin Charles Gonzales</td>
                                    <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                                    <td class="entryRow checkItem text-center"><input type="checkbox"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="accordionDiv row m-0 mt-5 d-block d-xxl-none d-xl-none d-lg-none">
                    <div class="col-12">
                        <div class="accordion" role="tablist" id="accordionRow">
                            <div class="accordion-item">
                                <span class="accordion-header" role="tab">
                                    <button class="accordion-button collapsed accordHead" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-1" aria-expanded="false" aria-controls="accordionRow .item-1">
                                        <input type="checkbox" class="checkItem me-3">Nicole Alcala
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Transaction ID</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Issued On</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header" role="tab">
                                    <button class="accordion-button collapsed accordHead" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-1" aria-expanded="false" aria-controls="accordionRow .item-1">
                                        <input type="checkbox" class="checkItem me-3">Patricia Mae Abrigo
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Transaction ID</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Issued On</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header" role="tab">
                                    <button class="accordion-button collapsed accordHead" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-1" aria-expanded="false" aria-controls="accordionRow .item-1">
                                        <input type="checkbox" class="checkItem me-3">Michael John Palalimpa
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Transaction ID</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Issued On</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header" role="tab">
                                    <button class="accordion-button collapsed accordHead" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-1" aria-expanded="false" aria-controls="accordionRow .item-1">
                                        <input type="checkbox" class="checkItem me-3">John Marc Morano
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Transaction ID</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Issued On</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header" role="tab">
                                    <button class="accordion-button collapsed accordHead" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-1" aria-expanded="false" aria-controls="accordionRow .item-1">
                                        <input type="checkbox" class="checkItem me-3">Princess Carl Austria
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Transaction ID</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Issued On</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header" role="tab">
                                    <button class="accordion-button collapsed accordHead" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-1" aria-expanded="false" aria-controls="accordionRow .item-1">
                                        <input type="checkbox" class="checkItem me-3">Stephanie Baylon
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Transaction ID</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Issued On</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header" role="tab">
                                    <button class="accordion-button collapsed accordHead" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-1" aria-expanded="false" aria-controls="accordionRow .item-1">
                                        <input type="checkbox" class="checkItem me-3">Jutin Charles Gonzales
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Transaction ID</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-2">
                                                <h5 class="ms-2">Issued On</h5>
                                            </div>
                                            <div class="col-10">
                                                <p></p>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/transactionHistory.js"></script>
</body>
</html>