$(document).ready(function () {
  $("#userManual-link").click(function () {
    $("#userManual-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  if ($("#dark-toggle").is(":checked") || $("#dark-toggle").is(":focus")) {
    $(".slider").css("background-color: #2196F3");
    $(".sidePanel").css("background-color: #1A1E23");
    $(".mainPanel").css("background-color: #14121E");
  }

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
    $("#Dev-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  // Admin-role-controls
  // $("#adminTbl").DataTable({
  //   buttons: ["copy", "csv", "excel", "pdf", "print"],
  //   bFilter: false,
  //   bInfo: false,
  //   paging: false,
  // });

});

