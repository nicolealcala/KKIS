$(document).ready(function () {
  //For QR Scanner Button
  $(".qrBtn").on("click", function () {
    $(this).css("background-color", "#219EBC");
    $(this).css("color", "white");
    $(".iconContainer").css("background-color", "black");
    $(".iconContainer").css("color", "#FFB703");
  });

  //For disabling AGE in KKID
  $("#checkAge").on("change", function () {
    if ($(this).is(":checked")) {
      $("#selectAge").prop("disabled", false);
      submitBtnState();
      $("#checkCustom").prop("disabled", true);
    } else {
      $("#selectAge").prop("disabled", true);
      submitBtnState();
      $("#checkCustom").prop("disabled", false);
    }
  });

  //For disabling PUROK in KKID
  $("#checkPurok").on("change", function () {
    if ($(this).is(":checked")) {
      $("#selectPurok").prop("disabled", false);
      submitBtnState();
      $("#checkCustom").prop("disabled", true);
    } else {
      $("#selectPurok").prop("disabled", true);
      submitBtnState();
      $("#checkCustom").prop("disabled", false);
    }
  });

  //For disabling CUSTOM in KKID
  $("#checkCustom").on("change", function () {
    if ($(this).is(":checked")) {
      $(".checkboxCategory").not(this).prop("checked", false);
      $(".checkboxCategory").not(this).prop("disabled", true);
      $(".userInput").each(function () {
        $(this).prop("disabled", false);
      });
      controlEnabled();
    } else {
      $(".checkboxCategory").not(this).prop("disabled", false);
      $(".userInput").each(function () {
        $(this).prop("disabled", true);
      });
      $("#submitBtn").prop("disabled", true);
      $("#clearBtn").prop("disabled", true);
    }
  });

  //For clicking Clear Btn
  $("#clearBtn").on("click", function () {
    $(".userInput").each(function () {
      $(this).val("");
    });
    $("#submitBtn").prop("disabled", true);
    $("#clearBtn").prop("disabled", true);
  });

  //fxn for control btns
  var controlEnabled = function () {
    $(":text").on("input", function () {
      if (
        $(":text").filter(function () {
          return !!this.value;
        }).length > 0
      ) {
        $("#submitBtn").prop("disabled", false);
        $("#clearBtn").prop("disabled", false);
      } else {
        $("#submitBtn").prop("disabled", true);
        $("#clearBtn").prop("disabled", true);
      }
    });
  };

  //fxn for changing submit state
  var submitBtnState = function () {
    if ($("#checkAge").is(":checked") || $("#checkPurok").is(":checked")) {
      $("#submitBtn").prop("disabled", false);
    } else {
      $("#submitBtn").prop("disabled", true);
    }
  };
});
