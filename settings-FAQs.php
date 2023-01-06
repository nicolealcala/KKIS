<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/settings.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- DATA TABLES CDN -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/kkis.ico">
</head>

<body>
    <div class="expanded d-none d-lg-flex">
        <?php
        include "settings.php";
        ?>
    </div>

    <div class="mainContainer" id="mainPanel">
        <div class="container-fluid content">
            <a href="./settings.php">
                <i role="button" class="backIcon fa-solid fa-arrow-left d-lg-none me-3" style="color: #9fa7bf"></i>
                <span class="sideTitle">FAQs</span>
            </a>

            <div class="sectionDiv">
                <!-- CONTENT STARTS HERE -->
            </div>


        </div>
    </div>

    <!-- Data tables -->
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/settings.js"></script>

    <!-- Active page -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#FAQs-link").addClass('active');
        });
    </script>
</body>

</html>