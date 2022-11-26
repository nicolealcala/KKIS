<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidenav</title>

    <!-- Fundamental Links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">

    <style>
        #sidebar {
            background-color: #155675;
            width: 280px;
            max-height: 100%;
        }

        .list-group-item {
            color: white;
            border-radius: 0;
            font-size: 20px;
            background-color: #155675;
        }

        #logoContainer {
            padding: 30px 0 50px 0;
        }
        #logo {
            color: white;
            font-family: Gotham Black, 'sans-serif';
            font-weight:800;
            font-size: 35px;
        }
    </style>
</head>

<body>
    <div id="sidebar" class="collapse collapse-horizontal show border-end">
        <div class="row" id="logoContainer">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img class="img-fluid me-2" src="assets/img/navbar2/KKIS-logo.svg" alt="">
                <span id="logo">KKIS</span>
            </div>
        </div>
        <div id="sidebar-nav" class="list-group border-0">
            <a href="dashboard.php" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-chart-line"></i> <span class="ms-2">Dashboard</span> </a>

            <a href="households.php" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-house-user"></i> <span class="ms-2">Declared Households</span></a>

            <a href="profiles.php" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-users"></i> <span class="ms-2">Profiles</span></a>

            <a href="addEntry.php" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-plus"></i> <span class="ms-2">Add New Entry</span></a>

            <a href="kkid.php" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-address-card"></i> <span class="ms-2">KK ID Card</span></a>

            <a href="transactions.php" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa-solid fa-clock-rotate-left"></i> <span class="ms-2">Transaction History</span></a>
        </div>
    </div>

    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>