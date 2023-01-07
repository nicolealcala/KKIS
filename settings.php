<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Settings</title>

  <!-- Fundamental Links -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

  <!-- DATA TABLES CDN -->
  <link rel="stylesheet" href="assets/css/datatables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/scss/settings.css" />
  <link rel="stylesheet" href="assets/scss/mediaquery.css" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/logos/kkis.ico" />
</head>

<body>
  <div class="settingsPanel">
    <div class="settings d-flex justify-content-start align-items-center">
      <a href="./dashboard.php" id="settings-back">
        <i role="button" class="backIcon fa-solid fa-arrow-left me-3"></i>
        <span class="sideTitle">Settings</span>
      </a>
    </div>

    <div class="userType row mx-0 mt-4 mb-5 gy-3">
      <div class="col-12">
        <img class="adminImg mx-auto d-block" src="assets/img/misc/defaultProfilePic.png" alt="" />
      </div>
      <div class="col-12">
        <span class="adminName mx-auto d-block text-center my-1">Daniel Gecale</span>
        <span class="adminType mx-auto d-block text-center">Super Administrator</span>
      </div>
    </div>

    <hr />

    <div class="genSettings">
      <div class="row mx-0 mt-4 mb-5 gy-2">
        <div class="col-12 px-0">
          <span class="settingsCategory">General Settings</span>
        </div>
        <!-- User Manual Page -->
        <div class="col-12 d-block align-items-center pe-0">
          <a href="./settings-user-manual.php" id="userManual-link">User Manual</a>
          <span class="drop-arrow" role="button" data-bs-toggle="collapse" data-bs-target="#tableOfContents" aria-expanded="false" aria-controls="tableOfContents">
            <i class="fa-solid fa-caret-down ms-2"></i>
          </span>
          <div class="collapse" id="tableOfContents">
            <ul class="my-1">
              <li>Manual 1</li>
              <li>Manual 2</li>
              <li>Manual 3</li>
            </ul>
          </div>
        </div>

        <!-- Change Password -->
        <div class="col-12 pe-0">
          <a href="./settings-change-password.php" id="changePass-link">Change Password</a>
        </div>

        <!-- FAQs Page -->
        <div class="col-12 pe-0">
          <a href="./settings-FAQs.php" id="FAQs-link">FAQs</a>
        </div>
      </div>
    </div>

    <hr />

    <div class="accessControl">
      <div class="row mx-0 mt-4 mb-5 gy-2">
        <div class="col-12 px-0">
          <span class="settingsCategory">Access Control</span>
        </div>
        <div class="col-12 pe-0">
          <a href="./settings-admin-role-controls.php" id="admins-link">Admin Role Controls</a>
        </div>
      </div>
    </div>

    <hr />

    <div class="about">
      <div class="row mx-0 mt-4 mb-5 gy-2">
        <div class="col-12 px-0">
          <span class="settingsCategory">About</span>
        </div>
        <div class="col-12 pe-0">
          <a href="./settings-system-info.php" id="systemInfo-link">System Information</a>
        </div>
        <div class="col-12 pe-0">
          <a href="./settings-developers.php" id="dev-link">Developers</a>
        </div>
      </div>
    </div>

    <hr>

    <div class="col-12 d-flex align-items-center justify-content-start pe-0">
      <label class="d-flex align-items-center" role="" id="darkMode" for="dark-toggle">Dark Mode
        <label class="switch ms-2">
          <input type="checkbox" id="dark-toggle">
          <span class="slider round"></span>
        </label>
      </label>
    </div>
  </div>

  <!-- SMALL SCREEN NAV -->
  <nav class="d-none navbar navbar-expand-lg navbar-light" id="smallNav">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#"><img class="me-1" src="assets/img/logos/kkis-brand.svg" alt="" width="50px" height="50px">KKIS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#smallNavMenu" aria-controls="smallNavMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="smallNavMenu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="./settings-user-manual.php" id="dashboard-md-link">User Manual</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./settings-change-password.php" id="households-md-link">Change Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./settings-FAQs.php" id="profiles-md-link">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./settings-admin-role-controls.php" id="add-md-link">Admin Role Controls</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link nav-md-link" href="./settings-system-info.php" id="transactions-md-link">System Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-md-link" href="./settings-developers.php" id="transactions-md-link">Developers</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Fundamental Links -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Data tables -->
  <script src="assets/js/datatables.min.js"></script>
  <script src="assets/js/pdfmake.min.js"></script>
  <script src="assets/js/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

  <!-- Custom Script -->
  <script type="text/javascript" src="assets/js/settings.js"></script>
</body>

</html>