<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Declared Household</title>

    <!-- Fundamental links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/css/declaredHousehold.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- navAddUpdate CSS -->
    <link rel="stylesheet" href="assets/css/navDecHouse.css">

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
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12 p-0 mb-4">
                    <h1 class="title h-auto">Declared Households</h1><img src="assets/img/misc/hr.svg">
                </div>
                <div class="col d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center col-lg-6 col-md-6 col-sm-12 col-12 p-0 m-0">
                    <input type="radio" id="families" class="d-none" name="slider" checked="">
                    <input type="radio" id="overview" class="d-none" name="slider">
                    <div class="d-lg-flex divNav">
                        <label class="form-label d-flex d-lg-flex d-xl-flex justify-content-center align-items-center menuTitle record" for="families">Families</label>
                        <label class="form-label d-flex d-lg-flex d-xl-flex justify-content-center align-items-center menuTitle report" for="overview">Overview</label>
                        <div class="slider"></div>
                    </div>
                </div>
            </div>
            <div class="familiesBody" id="">
                <div class="accordion" role="tablist" id="accordion-dh">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-dh .item-1" aria-expanded="false" aria-controls="accordion-dh .item-1">Family Head</button></h2>
                        <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordion-dh">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-start accSubText" colspan="2">Members</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start" colspan="2">Cell 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Cell 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-dh .item-2" aria-expanded="false" aria-controls="accordion-dh .item-2">Family Head</button></h2>
                        <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-dh">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-start" colspan="2">Column 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start" colspan="2">Cell 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Cell 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-dh .item-3" aria-expanded="false" aria-controls="accordion-dh .item-3">Family Head</button></h2>
                        <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-dh">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-start" colspan="2">Column 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start" colspan="2">Cell 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Cell 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-dh .item-4" aria-expanded="false" aria-controls="accordion-dh .item-4">Family Head</button></h2>
                        <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordion-dh">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-start" colspan="2">Column 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start" colspan="2">Cell 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Cell 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-dh .item-5" aria-expanded="false" aria-controls="accordion-dh .item-5">Family Head</button></h2>
                        <div class="accordion-collapse collapse item-5" role="tabpanel" data-bs-parent="#accordion-dh">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-start" colspan="2">Column 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start" colspan="2">Cell 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Cell 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-dh .item-6" aria-expanded="false" aria-controls="accordion-dh .item-6">Family Head</button></h2>
                        <div class="accordion-collapse collapse item-6" role="tabpanel" data-bs-parent="#accordion-dh">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-start" colspan="2">Column 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start" colspan="2">Cell 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Cell 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-dh .item-7" aria-expanded="false" aria-controls="accordion-dh .item-7">Family Head</button></h2>
                        <div class="accordion-collapse collapse item-7" role="tabpanel" data-bs-parent="#accordion-dh">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-start" colspan="2">Column 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start" colspan="2">Cell 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Cell 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-dh .item-8" aria-expanded="false" aria-controls="accordion-dh .item-8">Family Head</button></h2>
                        <div class="accordion-collapse collapse item-8" role="tabpanel" data-bs-parent="#accordion-dh">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-start" colspan="2">Column 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start" colspan="2">Cell 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start">Cell 3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overviewBody d-none" id="">
                <!-- <h4 class="subTitle">Chart goes here!</h4> -->
                <canvas id="overviewChart"></canvas>
            </div>
        </div>
    </div>
   

    <!-- JQruery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/declaredHousehold.js"></script>
</body>

</html>