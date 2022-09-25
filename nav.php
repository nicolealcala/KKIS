<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>nav</title>
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="assets/css/nav.css">
</head>

<body>
    <!-- Checkbox -->
    <input type="checkbox" id="checkSide"><input type="checkbox" id="checkTop">
    <!-- sideNav -->
    <div id="sideNav" class="divSideNav"><label class="form-label" id="toggle" style="margin-bottom: 0px;" for="checkSide"><img src="assets/img/ToggleTransparent.svg" width="" height=""></label>
        <hr id="top">
        <a id="linkSideDash" href="dashboard.php">
            <div class="divSideTab"><img src="assets/img/Dashboard.svg" width="51" height="47"><span class="sideTabName">Dashboard</span></div>
        </a>
        <a id="linkSideDecHouse" href="#">
            <div class="divSideTab"><img src="assets/img/Documents.svg" width="51" height="47"><span class="sideTabName">Declared Households</span></div>
        </a>
        <a id="linkSideResiProf" href="#">
            <div class="divSideTab"><img src="assets/img/ResiProf.svg" width="51" height="47"><span class="sideTabName">Residents Profile</span></div>
        </a>
        <a id="linkSideAddEntry" href="#">
            <div class="divSideTab"><img src="assets/img/AddEntry.svg" width="51" height="47"><span class="sideTabName">Add Entry</span></div>
        </a>
        <a id="linkSideTransacHis" href="#">
            <div class="divSideTab"><img src="assets/img/TransacHisto.svg" width="51" height="47"><span class="sideTabName">Transaction History</span></div>
        </a>
        <a id="linkSideKKID" href="#">
            <div class="divSideTab"><img src="assets/img/navIconKKID.svg" width="51" height="47"><span class="sideTabName">KKID</span></div>
        </a>
        <div class="bottomPartSideNav">
            <div id="divSideProfile">
                <div class="profile">
                    <div class="profileContent"><img src="assets/img/kkis-logo-admin.svg"><span class="spanProfile">Admin</span></div>
                </div>
            </div>
            <hr><a id="linkSideLogOut" href="index.php">
                <div class="divSideTab"><img src="assets/img/LogOut.svg" width="51" height="47"><span class="sideTabName">Log out</span></div>
            </a>
        </div>
    </div>
    <!-- topNav -->
    <nav id="topNav"><label class="form-label" id="labelTopId" for="checkTop"><img id="toggle" src="assets/img/ToggleTransparent.svg"></label></nav>
    <div class="divNavMenu">
        <hr>
        <a href="dashboard.php">
            <div class="divTopTab" id="linkTopDash"><img src="assets/img/mobDash.svg"><span>Dashboard</span></div>
        </a>
        <a href="#">
            <div class="divTopTab" id="linkTopDecHouse"><img src="assets/img/mobDoc.svg"><span>Declared Households</span></div>
        </a>
        <a href="#">
            <div class="divTopTab" id="linkTopResiProf"><img src="assets/img/mobResiProf.svg"><span>Residents Profile</span></div>
        </a>
        <a href="#">
            <div class="divTopTab" id="linkTopAddEnt"><img src="assets/img/mobAddEnt.svg"><span>Add Entry</span></div>
        </a>
        <a href="#">
            <div class="divTopTab" id="linkTopTransacHisto"><img src="assets/img/mobTransacHis.svg"><span>Transaction History</span></div>
        </a>
        <a href="#">
            <div class="divTopTab" id="linkTopKKID"><img src="assets/img/mobKKID.svg"><span>KKID</span></div>
        </a>
        <a href="#">
            <div class="divTopTab" id="linkTopLogOut"><img src="assets/img/mobLogOut.svg"><span><span id="spanLogOut">Log out</span><span id="adminTopNav">&nbsp;Admin</span></span></div>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>