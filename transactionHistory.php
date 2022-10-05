<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Transaction History</title>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="stylesheet" href="assets/scss/transactionHistory.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- nav.css -->
    <link rel="stylesheet" href="assets/css/navTransacHis.css">

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

            <div class="pageBody mt-4 m-0">
                <div class="divBtns d-flex justify-content-end align-items-center m-0">
                    <!-- Select All Btn                    -->
                    <div class="d-flex justify-content-center align-items-center m-0">
                        <button type="button" class="btn checkAllDiv d-flex justify-content-center align-items-center">
                            <input class="form-check-input m-2 p-0" type="checkbox" id="selectAll">
                        </button>
                    </div>
                    <!-- Delete btn -->
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="button" class="btn deleteDiv d-flex justify-content-center align-items-center">
                            <i class="fa-regular fa-trash-can fa-xl m-3 p-0"></i>
                        </button>
                    </div>
                </div>

                <div class="tableDiv row m-0 mt-3 d-none d-lg-block">
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

                <div class="accordionDiv row m-0 mt-3 d-block d-xxl-none d-xl-none d-lg-none">
                    <div class="col-12">
                        <div class="accordion" role="tablist" id="accordionRow">
                            <div class="accordion-item">
                                <span class="accordion-header d-flex p-1" role="tab">
                                    <div class="checkDiv d-flex justify-content-center align-items-center rounded-1">
                                        <input type="checkbox" class="checkItem">
                                    </div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-1" aria-expanded="false" aria-controls="accordionRow .item-1">
                                        <span class="accordHead">Nicole Alcala</span>
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Transaction ID</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Issued On</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header d-flex p-1" role="tab">
                                    <div class="checkDiv d-flex justify-content-center align-items-center rounded-1">
                                        <input type="checkbox" class="checkItem">
                                    </div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-2" aria-expanded="false" aria-controls="accordionRow .item-2">
                                        <span class="accordHead">Patricia Mae Abrigo</span>
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Transaction ID</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Issued On</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header d-flex p-1" role="tab">
                                    <div class="checkDiv d-flex justify-content-center align-items-center rounded-1">
                                        <input type="checkbox" class="checkItem">
                                    </div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-3" aria-expanded="false" aria-controls="accordionRow .item-3">
                                        <span class="accordHead">Michael John Palalimpa</span>
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Transaction ID</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Issued On</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header d-flex p-1" role="tab">
                                    <div class="checkDiv d-flex justify-content-center align-items-center rounded-1">
                                        <input type="checkbox" class="checkItem">
                                    </div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-4" aria-expanded="false" aria-controls="accordionRow .item-4">
                                        <span class="accordHead">John Marc Morano</span>
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Transaction ID</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Issued On</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header d-flex p-1" role="tab">
                                    <div class="checkDiv d-flex justify-content-center align-items-center rounded-1">
                                        <input type="checkbox" class="checkItem">
                                    </div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-5" aria-expanded="false" aria-controls="accordionRow .item-5">
                                        <span class="accordHead">Princess Carl Austria</span>
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-5" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Transaction ID</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Issued On</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header d-flex p-1" role="tab">
                                    <div class="checkDiv d-flex justify-content-center align-items-center rounded-1">
                                        <input type="checkbox" class="checkItem">
                                    </div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-6" aria-expanded="false" aria-controls="accordionRow .item-6">
                                        <span class="accordHead">Stephanie Baylon</span>
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-6" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Transaction ID</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Issued On</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <span class="accordion-header d-flex p-1" role="tab">
                                    <div class="checkDiv d-flex justify-content-center align-items-center rounded-1">
                                        <input type="checkbox" class="checkItem">
                                    </div>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionRow .item-7" aria-expanded="false" aria-controls="accordionRow .item-7">
                                        <span class="accordHead">Justin Charles Gonzales</span>
                                    </button>
                                </span>
                                <div class="accordion-collapse collapse item-7" role="tabpanel" data-bs-parent="#accordionRow">
                                    <div class="accordion-body">
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Transaction ID</h5>
                                            </div>
                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row m-0 p-2">
                                            <div class="col-4">
                                                <h5 class="transactInfo">Issued On</h5>
                                            </div>
                                            <div class="col-8">
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
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script type="text/javascript" src="assets/js/transactionHistory.js"></script>
</body>
</html>