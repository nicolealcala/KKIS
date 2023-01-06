$(document).ready(function () {
  //Expanded Nav Links
  $("#dashboard-link").click(function () {
    $(this).addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  $("#households-link").click(function () {
    $(this).addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  $("#profiles-link").click(function () {
    $(this).addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  $("#add-link").click(function () {
    $(this).addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  $("#kkid-link").click(function () {
    $(this).addClass("nav-active");
    $("a").not(this).removeClass("nav-active");
  });

  $("#transactions-link").click(function () {
    $(this).addClass("nav-active");
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

  //Small Nav Links
  $("#dashboard-md-link").click(function () {
    $(this).addClass("nav-mdactive");
    $("a").not(this).removeClass("nav-md-active");
  });

  //for hiding navbar-collapse when clicking outside
  $(document).click(function (event) {
    var clickover = $(event.target);
    var _opened = $(".navbar-collapse").hasClass("show");
    if (_opened === true && !clickover.hasClass("navbar-toggler")) {
      $("button.navbar-toggler").click();
    }
  });

  //Screen Resize - remove sidePanel
  $(window).resize(function () {
    if ($(window).width() < 992) {
      $("#close").addClass("d-none");
      $("#hamburger").removeClass("d-none");
      $("#leftPanel").removeClass("expanded");
      $("#leftPanel").addClass("shrunk");
      $("#mainPanel").removeClass("mainContainer");
      $("#mainPanel").addClass("full-width");
    }
  });

  //Per Device Screen Sizes - remove sidePanel
  if ($(window).width() < 992) {
    $("#close").addClass("d-none");
    $("#hamburger").removeClass("d-none");
    $("#leftPanel").removeClass("expanded");
    $("#leftPanel").addClass("shrunk");
    $("#mainPanel").removeClass("mainContainer");
    $("#mainPanel").addClass("full-width");
  }
});
