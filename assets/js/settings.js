$(document).ready(function () {
  $("#userManual-link").click(function () {
    $("#userManual-link").addClass("active");
    $(".fa-caret-down").addClass("d-none");
    $(".fa-caret-up").removeClass("d-none");
    $("a").not(this).removeClass("active");
  });

  $("#themes-link").click(function () {
    $("#themes-link").addClass("active");
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

  $("#Dev-link").click(function () {
    $("#Dev-link").addClass("active");
    $("a").not(this).removeClass("active");
  });

  //Admin-role-controls
  var adminTbl = $('#adminTbl').DataTable({
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    responsive: true,
    bFilter: true,
    bInfo: false
  });
});
