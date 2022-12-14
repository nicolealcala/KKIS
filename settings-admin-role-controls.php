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
    <div class="expanded d-none d-lg-flex" id="leftPanel">
        <?php
        include "settings.php";
        ?>
    </div>

    <div class="mainContainer" id="mainPanel">
        <div class="container-fluid content">
            <a href="./settings.php">
                <i role="button" class="backIcon-main fa-solid fa-arrow-left d-none me-3" style="color: #9fa7bf"></i>
                <span class="sideTitle">Admin Role Controls</span>
            </a>

            <div class="sectionDiv">
                <div class="row mx-0">
                    <div class="col-12">
                        <table id="adminTbl" class="table table-striped  dataTable display nowrap no-footer dtr-inline collapsed" role="grid" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="adminHead"><input type="checkbox" class="me-2"> Name</th>
                                    <th class="adminHead">Email address</th>
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

                                while ($rowAdmin = mysqli_fetch_array($getAdmin)) {
                                    echo '
                                    <tr>
                                    <td class="entryRow" scope="col" data-label="Name">
                                        <div class="d-flex">
                                            <input type="checkbox" class="me-3">
                                            <div class="nameCell d-flex justify-content-start align-items-center">
                                                <img class="profilePic img-fluid me-2" src="assets/img/misc/defaultProfilePic.png" alt="">
                                                <span class="rowName">' . $rowAdmin["full_name"] . '</span><br>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="entryRow" scope="col" data-label="Email">
                                    <div style="width: 100%; height: 100%;"><span class="my-auto">' . $rowAdmin["email"] . '</span></div>
                                    </td>

                                    <td class="entryRow" scope="col" data-label="Contact No."><div class="h-100 d-flex align-items-center">' . $rowAdmin["contact_no"] . '</div></td>

                                    <td class="entryRow" scope="col" data-label="Status">
                                        <div class="online d-flex justify-content-start align-items-center rounded-3">
                                        <div class="online-dot me-1"></div><span id="onlineTxt">Online</span>
                                        </div>

                                        <div class="offline d-flex justify-content-start align-items-center rounded-3 d-none">
                                            <div class="offline-dot me-1"></div><span id="offlineTxt">Offline</span>
                                        </div>
                                    </td>

                                    <td class="entryRow">
                                        <select class="form-select m-auto" name="adminRole" id="selectRole" disabled>
                                            <option value="1">Super Administrator</option>
                                            <option value="2">Administrator</option>
                                            <option value="3">Staff Member</option>
                                        </select>
                                    </td>

                                    <td>
                                        <div class="row mx-0 gx-1">
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <button class="btn btn-primary" id="editBtn"><i class="editIcon fa-solid fa-pen-to-square"></i></button>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#warning-modal" id="deleteBtn"><i class="deleteIcon fa-regular fa-trash-can"></i></button>
                                            </div>  
                                        </div>
                                    </td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal Warning -->
                <div class="modal fade" tabindex="-1" id="warning-modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Warning!</h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                                <p>Deleting an existing record will completely remove the data from the database. Are you sure you want to proceed?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-secondary">Proceed</button>
                            </div>
                        </div>
                    </div>
                </div>
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
            $("#admins-link").addClass('active');
        });
    </script>
</body>

</html>