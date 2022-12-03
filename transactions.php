<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Transaction History</title>

    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/transactions.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">
    <link rel="stylesheet" href="assets/scss/mq-sidenavmods.css">

    <!-- DATA TABLES CDN -->
    <script src="assets/js/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">

    <!-- navAddUpdate CSS -->
    <!-- <link rel="stylesheet" href="assets/css/navTransacHis.css">  -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <div id="left">
        <?php include 'sidenav.php' ?>
    </div>
    </div>

    <div id="right">
        <div id="rc">
            <div id="grey">
                <!-- <hr id="greyHR"> -->
                <!-- <hr id="headerHR"> -->
            </div>
        </div>

        <div id="pageContent">
            <div class="mainContainer">
                <header id="header">
                    <div class="row headerRow">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
                            <span id="expand" style="font-size:15px;cursor:pointer;color: #04496A;" onclick="openNav()">
                                <i class="fa-solid fa-bars fa-2xl w-auto"></i>
                            </span>
                            <span id="expandMobile" style="font-size:15px;cursor:pointer;color: #04496A;" onclick="">
                                <i class="fa-solid fa-bars fa-2xl w-auto"></i>
                            </span>
                            <span  id="collapse" style="font-size:18px;cursor:pointer;color: #04496A;" onclick="closeNav()">
                                <i class="fa-solid fa-xmark fa-2xl w-auto"></i>
                            </span>
                            <span  id="collapseMobile" style="font-size:18px;cursor:pointer;color: #04496A;" onclick=" ">
                                <i class="fa-solid fa-xmark fa-2xl w-auto">
                                </i>
                            </span>
                            <span id="pageTitle" class="title longTitle">Transaction History</span>
                        </div>
                        <div id="divAccountType" class="col-lg-4 col-md-4 d-none d-md-flex align-items-md-center">
                            <span class="accountType d-flex justify-content-end">Super Admin Account</span>
                        </div>
                    </div>
                    <!-- <img src="assets/img/decorative.svg" alt="hr" class="img-fluid w-100 d-flex"> -->
                    <hr id="headerHR">
                </header>

                <!-- BODY START -->
                <div class="content container-fluid">
                    <div class="sectionDiv">
                        <!-- Options Row -->
                        <div class="row gx-5 gy-2 m-0 mb-1 d-flex justify-content-between">
                            <!-- Show No. of Rows -->
                            <div class="col-md-3 col-sm-6 col-12 d-flex align-items-center my-1 p-0 order-md-1 order-2">
                                <span>Show</span>
                                <select class="form-select mx-2 w-auto" name="rows" id="showRow">
                                    <option value="10" selected>10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="All">All</option>
                                </select>
                                <span>entries</span>
                            </div>
                            <!-- Search -->
                            <div class="col-md-3 col-sm-6 col-12 p-0  d-flex justify-content-center align-items-center order-md-2 order-3">
                                <div class="searchElement">
                                    <input class="form-control" type="text" placeholder="Search" name="search" id="search">
                                </div>
                            </div>
                            <!-- Option Buttons -->
                            <div class="col-md-3 col-sm-6 col-12 d-flex justify-content-end align-items-center m-0 p-0 order-md-3 order-1">
                                <!-- Select All Btn -->
                                <div class="d-flex justify-content-center align-items-center m-0 me-3">
                                    <button type="button" class="btn checkAllDiv d-flex justify-content-center align-items-center">
                                        <i class="fa-regular fa-square-check fa-xl m-3 p-0" id="selectAll"></i>
                                        <i class="fa-solid fa-square-check fa-xl m-3 p-0 d-none" id="deselectAll"></i>
                                    </button>
                                </div>
                                <!-- Delete btn -->
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn deleteDiv d-flex justify-content-center align-items-center">
                                        <i class="fa-regular fa-trash-can fa-xl m-3 p-0" id="delete"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Table start   -->
                        <table class="table table-stripped table-bordered dataTable responsive display nowrap no-footer dtr-inline collapsed printTable" role="grid" cellspacing="0" id="transactionsTbl" style="width:100%">
                            <thead class="headTitle">
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Name</th>
                                    <th>Issued On</th>
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
                                    <td class="entryRow checkItem text-center" name="checkRow"><input class="checkItem" type="checkbox""></td>
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
                            <?php
                            // while ($row = mysqli_fetch_array($result)) {
                            //     echo '
                            //     <tr>
                            //         <td align="center"><input type="checkbox" class="checkitem"></td>
                            //         <td>' . $row["lastName"] . '</td>
                            //         <td>' . $row["firstName"] . '</td>
                            //         <td>' . $row["middleName"] . '</td>
                            //         <td>' . $row["suffix"] . '</td>
                            //         <td>' . $row["birthDate"] . '</td>
                            //         <td>' . $row["age"] . '</td>
                            //         <td>' . $row["gender"] . '</td>
                            //         <td>' . $row["civilStatus"] . '</td>
                            //         <td>' . $row["purok"] . '</td>
                            //         <td align="center">
                            //             <a id=' . $row["residentID"] . '" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewMore">view more</a>
                            //         </td>
                            //     </tr>
                            //     ';
                            // }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="mainContainer d-block">
        <header>
            <div class="row headerRow">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
                    <i class="fa-solid fa-bars fa-2xl w-auto" id="hamburger"></i>
                    <span class="title">Transaction History</span>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-md-flex justify-content-md-end align-items-md-center">
                    <span class="accountType d-flex justify-content-end">Super Admin Account</span>
                </div>
            </div>
            <img src="assets/img/decorative.svg" alt="hr" class="img-fluid w-100 d-flex">
        </header> -->

        

    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Data tables -->
    <script src="assets/js/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/transactions.js"></script>
    <!-- Nav -->
    <script src="assets/js/sidenav.js"></script>
</body>

</html>