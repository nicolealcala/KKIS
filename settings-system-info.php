<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Information</title>

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/settings.css">
    <!-- <link rel="stylesheet" href="assets/scss/mediaquery.css"> -->

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
            <a href="./settings">
                <i role="button" class="backIcon fa-solid fa-arrow-left d-lg-none me-3" style="color: #9fa7bf"></i>
                <span class="sideTitle">System Information</span>
            </a>
            <div class="sectionDiv">
                <!-- CONTENT STARTS HERE -->
            </div>


        </div>
    </div>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/settings.js"></script>

    <!-- Active page -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#systemInfo-link").addClass('active');
        });
    </script>
</body>

</html>