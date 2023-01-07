<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="assets/scss/settings.css">
    <link rel="stylesheet" href="assets/scss/changePW.css">
    <link rel="stylesheet" href="assets/scss/mediaquery.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logos/kkis.ico">
</head>

<body>
    <div class="expanded d-none d-lg-flex" id="leftPanel">
        <?php
        include "settings.php";
        ?>
    </div>

    <div class="mainContainer" id="mainPanel">
        <div class="container-fluid content">
            <a href="./settings.php">
                <i role="button" class="backIcon-name fa-solid fa-arrow-left d-none me-3" style="color: #9fa7bf"></i>
                <span class="sideTitle">Change Password</span>
            </a>
            <div class="sectionDiv">
                <!-- CONTENT STARTS HERE -->

                <div id="index-wrapper">
                    <div class="container-fluid d-flex flex-column justify-content-center align-items-center indexContent">
                        <div class="card d-flex justify-content-center  pt-3" id="loginCard">
                            <div class="card-body">
                                <div class="row m-0 d-flex justify-content-center">
                                    <div class="col-12 text-center">
                                        <span class="cardHead">Change Password</span>
                                    </div>
                                </div>
                                <div class="row mx-3 my-0">
                                    <div class="col-12 text-center mt-2 p-0"><img class="img-fluid hrSvg" src="assets/img/misc/hr.svg"></div>
                                </div>
                                <!-- Form -->
                                <form id="updatePassForm" action="" onSubmit="return passValidate();" method="post">
                                    <!-- Fields -->
                                    <div class="row gx-3 gy-3 fieldRow">
                                        <div class="col-12">
                                            <input class="form-control" type="email" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control" type="password" name="currentPassword" placeholder="Current Password" required>
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control" type="password" name="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="New Password" id="newPassword" required>
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password" name="confirmPassword" required>
                                        </div>
                                    </div>

                                    <!-- Change/Update Password -->
                                    <div class="row m-0 mt-3 mb-3" id="rowBtn">
                                        <div class="col-12 d-flex justify-content-center align-items-center">
                                            <button class="btn updatePWBtn rounded-pill mt-4" name="updatePassBtn" type="submit" form="updatePassForm" id="updatePassBtn">
                                                Save
                                            </button>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                                            <p class="mt-2 text-center" id="pwReminder">
                                                Password update can only be done every three (3) months.
                                                We recommend that you regularly update your password
                                                to prevent unauthorized access to your account.
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTENT ENDS HERE -->
            </div>


        </div>
    </div>

    <!-- Custom Script -->
    <script type="text/javascript" src="assets/js/settings.js"></script>

    <!-- Active page -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#changePass-link").addClass('active');
        });
    </script>
</body>

</html>