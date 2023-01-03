<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Role Controls</title>

    <!-- Fundamental links -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/settings.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/favicon.ico">
</head>

<body>
    <div class="sidePanel">
        <?php
        include "settings.php";
        ?>
    </div>

    <div class="mainPanel">
        <div class="container-fluid content">
            <h3>Admin Role Controls</h3>
            <table id="admins" class="table table-stripped table-bordered dataTable responsive display nowrap no-footer dtr-inline collapsed printTable" role="grid" cellspacing="0">
                <thead>
                    <tr>
                        <th class="adminHead"><input type="checkbox" class="me-2"> Name</th>
                        <th class="adminHead">Contact No.</th>
                        <th class="adminHead">Status</th>
                        <th class="adminHead">Role</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $queryAdmin = "SELECT CONCAT(`first_name`, ' ', `last_name`) AS `full_name`, `contact_no`, `email` FROM `admins`";
                    $getAdmin = executeQuery($queryAdmin);
                    ?>

                    <td class="entryRow" scope="col" data-label="Name">
                        <div class="d-flex">
                            <input type="checkbox" class="me-3">
                            <div class="nameCell d-flex justify-content-start align-items-center">
                                <img class="profilePic img-fluid me-2" src="https://i.pinimg.com/originals/af/2b/9b/af2b9bfab22b964a5d5a037c538e996b.jpg" alt="">
                                <div class="nameTxt">
                                    <span class="adminName">Nicole</span><br>
                                    <span class="adminEmail">nmalcala@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="entryRow d-flex justify-content-center align-items-center" scope="col" data-label="Contact No.">09760453721</td>
                    <td class="entryRow" scope="col" data-label="Status">
                        <div class="statusDiv d-flex justify-content-start align-items-center rounded-pill"><span style="font-size: 10px" class="me-1">&#9899 </span>Online</div>
                    </td>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Fundamental Links -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Data tables -->
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/settings.js"></script>
</body>

</html>