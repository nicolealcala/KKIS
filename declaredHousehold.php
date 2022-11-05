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
         <header class="d-flex justify-content-center">
            <div class="container-fluid justify-content-center align-items-center mt-2">
                <div class="row headerRow">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12 d-flex align-items-center">
                        <i class="fa-solid fa-bars fa-2xl w-auto" id="hamburger"></i>
                        <span class="title">Households</span>
                    </div>
                    <div class="col-lg-6 col-md-4 d-none d-md-flex justify-content-md-end align-items-md-center">
                        <span class="accountType">Super Admin Account</span>
                    </div>
                </div>
            </div>
        </header>
        <div class="hrImg">
            <img src="assets/img/decorative.svg" alt="hr" class="img-fluid w-100">
        </div>
        <div class="container-fluid content">
            <div class="row d-flex justify-content-end align-ittems-center m-0">
                <button class="menuBtn rounded-pill active" id="families">Families</button>
                <button class="menuBtn rounded-pill" id="overview">Overview</button>
            </div>
            <div class="sectionDiv" id="familiesBody">
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

    <!-- Custom Script -->
    <script src="assets/js/declaredHousehold.js"></script>
</body>

</html>