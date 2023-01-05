$(document).ready(function () {
  //Nav Links
  $("#dashboard-link").click(function () {
    $("#dashIcon").addClass("nav-active");
    $("#dashTxt").addClass("nav-active");
  });

  $("#households-link").click(function () {
    $("#households-link").addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  $("#profiles-link").click(function () {
    $("#profiles-link").addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  $("#add-link").click(function () {
    $("#add-txt").addClass("nav-active");
    $(".linkTitle").not(this).removeClass("nav-active");
  });

  $("#kkid-link").click(function () {
    $("#kkid-link").addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  $("#transactions-link").click(function () {
    $("#transactions-link").addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  //Navigation Control
  $("#close").click(function () {
    $("#leftPanel").removeClass("expanded");
    $("#leftPanel").addClass("shrunk");
    $("#mainPanel").removeClass("mainContainer");
    $("#mainPanel").addClass("full-width");
    $("#mainPanel").css("transition", "0.5s");
    $("#hamburger").removeClass("d-none");
    $(this).addClass("d-none");
  });

  $("#hamburger").click(function () {
    $("#leftPanel").addClass("expanded");
    $("#leftPanel").removeClass("shrunk");
    $("#mainPanel").addClass("mainContainer");
    $("#mainPanel").removeClass("full-width");
    $("#close").removeClass("d-none");
    $("#mainPanel").css("transition", "0.5s");
    $(this).addClass("d-none");
  });

  //Screen Resize
  $(window).resize(function () {
    if ($(window).width() < 992) {
      $('#close').addClass("d-none");
      $('#hamburger').removeClass('d-none');
      $("#leftPanel").removeClass("expanded");
      $("#leftPanel").addClass("shrunk");
      $("#mainPanel").removeClass("mainContainer");
      $("#mainPanel").addClass("full-width");
    }
  });

  //Per Device Screen Sizes
  if ($(window).width() < 992) {
    $('#close').addClass("d-none");
    $('#hamburger').removeClass('d-none');
    $("#leftPanel").removeClass("expanded");
    $("#leftPanel").addClass("shrunk");
    $("#mainPanel").removeClass("mainContainer");
    $("#mainPanel").addClass("full-width");
  }
});
