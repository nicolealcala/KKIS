<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Transaction History</title>

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/transactions.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <link rel="stylesheet" href="assets/scss/sideMenu.css">


    <!-- Bootstrap-Select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
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
                    <span class="pageTitle">Transaction History</span>
                </div>

                <div class="col-md-4 d-none d-md-flex justify-content-end align-items-center">
                    <span class="accountType">Super Admin Account</span>
                </div>
            </div>
            <hr id="headerHR">
        </header>

        <!-- CONTENT START -->
        <div class="content container-fluid">
            <div class="sectionDiv mx-0 mt-4 p-0">
                <!-- Options Row -->
                <div class="row gx-5 mx-0 mb-1">
                    <!-- Show No. of Rows -->
                    <div class="col-lg-12 col-md-4 col-sm-6 col-12 d-flex align-items-center my-1 p-0" id="transactionsLength"></div>
                    <!-- Output Buttons -->
                    <div class="d-none col-lg-6 d-lg-flex justify-content-lg-start p-0" id="transactionsOutput"></div>
                    <!-- Filter -->
                    <div class="d-md-flex align-items-center col-lg-3 col-md-4 d-none">
                        <select class="selectpicker form-control" multiple name="filter" data-selected-text-format="count > 3" title="Filter" placeholder="Filter">
                            <optgroup data-divider="true" data-max-options="1" label="Members">
                                <option value="Less than 5">Less than 5</option>
                                <option value="5 to 10">5 to 10</option>
                                <option value="11 to 15">11 to 15</option>
                                <option value="16 to 20">16 to 20</option>
                                <option value="More than 20">More than 20</option>
                            </optgroup>
                            <optgroup data-max-options="1" label="Remarks">
                                <option value="Purok Leader">Purok Leader</option>
                                <option value="SK Scholar">SK Scholar</option>
                                <option value="Solo Living">Solo Living</option>
                                <option value="Solo Parent">Solo Parent</option>
                                <option value="Teenage Pregnancy">Teenage Pregnancy</option>
                            </optgroup>
                        </select>
                    </div>
                    <!-- Search -->
                    <div class="align-items-center col-lg-3 col-md-4 col-sm-6 col-12 p-0 align-middle" id="transactionsSearch"></div>
                </div>

                <!-- Table start   -->
                <table class="table table-stripped table-bordered dataTable table-hover responsive display nowrap no-footer dtr-inline collapsed printTable" role="grid" cellspacing="0" id="transactionsTbl" style="width:100%">
                    <thead class="tblHeadRow">
                        <tr>
                            <th class="tblHead">ID</th>
                            <th class="tblHead">Name</th>
                            <th class="tblHead">Issued On</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID001</td>
                            <td class="entryRow" scope="col" data-label="Name">Nicole Alcala</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>

                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID002</td>
                            <td class="entryRow" scope="col" data-label="Name">Patricia Mae Abrigo</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>

                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID003</td>
                            <td class="entryRow" scope="col" data-label="Name">Michael John Palalimpa</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>

                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID004</td>
                            <td class="entryRow" scope="col" data-label="Name">John Marc Morano</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>

                        <tr>
                            <td class=" entryRow" scope="col" data-label="Transaction ID">TID005</td>
                            <td class="entryRow" scope="col" data-label="Name">Princess Carl Austria</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>

                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID006</td>
                            <td class="entryRow" scope="col" data-label="Name">Stephanie Baylon</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>

                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID007</td>
                            <td class="entryRow" scope="col" data-label="Name">Stephanie Baylon</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>

                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID008</td>
                            <td class="entryRow" scope="col" data-label="Name">Justin Charles Gonzales</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>
                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID008</td>
                            <td class="entryRow" scope="col" data-label="Name">Justin Charles Gonzales</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>
                        <tr>
                            <td class="entryRow" scope="col" data-label="Transaction ID">TID008</td>
                            <td class="entryRow" scope="col" data-label="Name">Justin Charles Gonzales</td>
                            <td class="entryRow" scope="col" data-label="Issued On">September 28, 2022</td>
                            <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox"></td>
                        </tr>
                    </tbody>
                </table>
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
    <script type="text/javascript" src="assets/js/transactions.js"></script>
    <script type="text/javascript" src="assets/js/sideMenu.js"></script>

    <!-- Active Link -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#transactions-link").addClass('nav-active');
            $("#transactions-md-link").addClass("nav-md-active");
        })
    </script>
</body>

</html>