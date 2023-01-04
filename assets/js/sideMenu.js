$(document).ready(function(){
    //Settings Panel
  $("#dashboard-link").click(function () {
    $("#dashboard-link").addClass("active");
    $("a").not(this).removeClass("active");
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
})