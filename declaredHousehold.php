<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Declared Household</title>

    <!-- Fundamental links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/css/declaredHousehold.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- Virtual Select JS library -->
    <link rel="stylesheet" href="assets/css/virtual-select.min.css">

    <!-- navAddUpdate CSS -->
    <!-- <link rel="stylesheet" href="assets/css/navDecHouse.css"> -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body id="page-top">

    <!-- Nav -->
    <!-- <div class="navDiv">
        <?php
            // include 'nav.php' 
            ?>
    </div> -->
    
    <div class="mainContainer d-block">
        <header>
            <div class="row headerRow">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
                    <i class="fa-solid fa-bars fa-2xl w-auto" id="hamburger"></i>
                    <span class="title">Declared Households</span>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-md-flex justify-content-md-end align-items-md-center">
                    <span class="accountType">Super Admin Account</span>
                </div>
            </div>
            <img src="assets/img/decorative.svg" alt="hr" class="img-fluid w-100 d-flex">
        </header>

        <!-- BODY START -->
        <div class="container-fluid content">
            <!-- Menu Buttons -->
            <div class="row d-flex justify-content-end align-ittems-center m-0">
                <button class="menuBtn rounded-pill active" id="families">Families</button>
                <button class="menuBtn rounded-pill" id="overview">Overview</button>
            </div>
            <!-- Options Row -->
            <div class="row gx-5 mx-0 mt-4">
                <!-- Show No. of Rows -->
                <div class="col-12 d-flex align-items-center my-1 p-0">
                    <span>Show</span>
                    <select class="form-select mx-2" name="rows" id="showRow">
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="All">All</option>
                    </select>
                    <span>entries</span>
                </div>
                <!-- Output Buttons -->
                <div class="col-lg-5 col-md-4 col-sm-6 col-12 p-0">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn outputBtn">Copy</button>
                        <button type="button" class="btn outputBtn">CSV</button>
                        <button type="button" class="btn outputBtn">Excel</button>
                        <button type="button" class="btn outputBtn" id="pdf">PDF</button>
                        <button type="button" class="btn outputBtn" id="print">Print</button>
                    </div>
                </div>
                <div class="col-1"></div>
                <!-- Filter -->
                <div class="d-flex align-items-center col-lg-3 col-md-4 col-sm-6 col-12">
                    <select class="selectpicker text-uppercase" multiple name="filter" data-live-search="true" title="Filter" id="filtering">
                        <optgroup label="Members">
                            <option value="Less than 5">Less than 5</option>
                            <option value="5 to 10">5 to 10</option>
                            <option value="11 to 15">11 to 15</option>
                            <option value="16 to 20">16 to 20</option>
                            <option value="More than 20">More than 20</option>
                        </optgroup>
                        <optgroup label="Remarks">
                            <option value="Purok Leader">Purok Leader</option>
                            <option value="SK Scholar">SK Scholar</option>
                            <option value="Solo Living">Solo Living</option>
                            <option value="Solo Parent">Solo Parent</option>
                            <option value="Teenage Pregnancy">Teenage Pregnancy</option>  
                        </optgroup>
                    </select>
                </div>
                <!-- Search -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-0">
                    <div class="searchElement d-flex justify-content-center align-items-center">
                        <input class="form-control searchInput" type="text" placeholder="Search">
                        <button class="btn searchBtn" type="button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="sectionDiv mt-3" id="familiesBody">
                <table class="table table-striped table-bordered display responsive nowrap printTable" cellspacing="0" width="100%" id="familiesTbl">
                    <thead class="headTitle">
                        <tr>
                            <th>Household ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Birthday</th>
                            <th>Purok</th>
                            <th>Members</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <td>1234</td>
                            <td>Nicole Alcala</td>
                            <td>21</td>
                            <td>02/19/2001</td>
                            <td>Pulong Kendi</td>
                            <td>Less than 5</td>
                            <td>Purok Leader</td>
                            <td></td>
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
            <div class="sectionDiv d-none m-3" id="overviewBody">
                <div class="overviewDiv" style="position:relative; height:75vh; width:80vw">
                    <canvas id="overviewChart"></canvas>
                </div>
            </div>
        </div>
    </div>
   

    <!-- JQruery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <!-- Virtual Select JS -->
    <script type="text/javascript" src="assets/js/virtual-select.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/declaredHousehold.js"></script>
</body>

</html>