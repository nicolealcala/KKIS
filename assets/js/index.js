$(document).ready(function () {
  $("#signupLink").click(function () {
    $("#loginCard").addClass("d-none");
    $("#signupCard").removeClass("d-none");
  });

  $("#loginLink").click(function () {
    $("#signupCard").addClass("d-none");
    $("#loginCard").removeClass("d-none");
  });

  $("#forgotPassText").click(function () {
    $("#loginCard").addClass("d-none");
    $("#forgotPassCard").removeClass("d-none");
  });

  $("#rbackBtn").click(function () {
    $("#forgotPassCard").addClass("d-none");
    $("#loginCard").removeClass("d-none");
  });
});
