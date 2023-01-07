$(document).ready(function () {
  //Settings Panel
  $("#userManual-link").click(function () {
    $("#userManual-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  $("#changePass-link").click(function () {
    $("#changePass-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  $("#FAQs-link").click(function () {
    $("#FAQs-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  $("#admins-link").click(function () {
    $("#admins-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  $("#systemInfo-link").click(function () {
    $("#systemInfo-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  $("#dev-link").click(function () {
    $("#dev-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  if ($("#dark-toggle").is(":checked") || $("#dark-toggle").is(":focus")) {
    $(".slider").css("background-color: #2196F3");
    $(".sidePanel").css("background-color: #1A1E23");
    $(".mainPanel").css("background-color: #14121E");
  }

  $("#dark-toggle").change(function () {
    $(".slider").css("background-color: #2196F3");
    $(".sidePanel").css("background-color: #1A1E23");
    $(".mainPanel").css("background-color: #14121E");
  });

  //Access control
  // Admin-role-controls
  $("#adminTbl").DataTable({
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    bFilter: false,
    bInfo: false,
    paging: false,
  });

  $("#editBtn").click(function () {
    $("#selectRole").removeAttr("disabled");
  });

  if ($("select option").is(":selected")) {
    $(this).closest("tr").find("td select").attr("disabled", "disabled");
  }

  //Screen Resize - remove sidePanel
  $(window).resize(function () {
    if ($(window).width() < 992) {
      $("#leftPanel").removeClass("expanded");
      $("#leftPanel").addClass("shrunk");
      $("#mainPanel").removeClass("mainContainer");
      $("#mainPanel").addClass("full-width");
      $(".backIcon-main").removeClass("d-none");
    }
  });

  //Per Device Screen Sizes - remove sidePanel
  if ($(window).width() < 992) {
    $("#leftPanel").removeClass("expanded");
    $("#leftPanel").addClass("shrunk");
    $("#mainPanel").removeClass("mainContainer");
    $("#mainPanel").addClass("full-width");
    $(".backIcon-main").removeClass("d-none");
  }
});
