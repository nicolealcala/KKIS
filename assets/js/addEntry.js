$(document).ready(function () {
  //Nav Small Screen
  $("#smallNav").appendTo("#mdHeader");

  //Default select boxes
  // $("select").not("#disabilitySelect").val("").change();

  //UPPERCASE input
  $(".userInput").keyup(function () {
    $(this).val($(this).val().toUpperCase());
  });

  $(".educUserInput").keyup(function () {
    $(this).val($(this).val().toUpperCase());
  });

  $(".employUserInput").keyup(function () {
    $(this).val($(this).val().toUpperCase());
  });

  //For required fieldLabels
  $(".fieldLabel").each(function () {
    $(this).addClass("required");
    if (
      $(this).attr("id") == "remarksLbl" ||
      $(this).attr("id") == "organizationLbl" ||
      $(this).attr("id") == "mNameLbl" || 
      $(this).attr("id") == "hMNameLbl"
    ) {
      $(this).removeClass("required");
    } else if (
      $(this).attr("id") == "suffixLbl" ||
      $(this).attr("id") == "headSuffixLbl"
    ) {
      $(this).removeClass("required");
    }
  });

  //For Educ Radio Btn PRE-CHECKED
  if ($("#educCheck").is(":checked")) {
    educRadioClick();
  }

  //For Educ Radio Btn when selected
  $("#educCheck").on("change", function () {
    educRadioClick();
  });

  //For Employ Radio Btn
  $("#employCheck").change(function () {
    employRadioClick();
  });

  //For Educ Status PRE-SELECTED
  if ($("#selectEducStatus option[value=ENROLLED]").is(":selected")) {
    enrolled();
  } else if (
    $('#selectEducStatus option[value="OUT-OF-SCHOOL YOUTH"]').is(":selected")
  ) {
    ousYouth();
  } else {
    workingStudent();
  }

  //For Educ Status ON CHANGE
  $("#selectEducStatus").on("change", function () {
    if ($("#selectEducStatus option[value=ENROLLED]").is(":selected")) {
      enrolled();
    } else if (
      $('#selectEducStatus option[value="OUT-OF-SCHOOL YOUTH"]').is(":selected")
    ) {
      ousYouth();
    } else {
      workingStudent();
    }
  });

  //For Employment Status PRE-SELECTED
  if ($("#selectEmployStatus option[value=EMPLOYED]").is(":selected")) {
    employed();
  } else {
    unemployed();
  }

  //For Employment Status ON CHANGE
  $("#selectEmployStatus").on("change", function () {
    if ($("#selectEmployStatus option[value=EMPLOYED]").is(":selected")) {
      employed();
    } else {
      unemployed();
    }
  });

  // ------------------- FUNCTIONS ------------------- //
  function educRadioClick() {
    $("#employCheck").prop("checked", false);
    $("#markerEmploy").css("background-color", "#c5d4e3");
    $(".employFieldLabel").css("opacity", ".70");

    //Disable all employment select boxes and change value to blank
    $(".employSelectBox").each(function () {
      $(this).val("").change();
      $(this).prop("disabled", true);
      $(this).removeAttr("required");
    });

    //Disable all employment input fields and change value to blank
    $(".employUserInput").each(function () {
      $(this).val("").change();
      $(this).prop("disabled", true);
      $(this).removeAttr("required");
    });

    //Enable all education select boxes and change value to blank
    $(".educSelectBox").each(function () {
      // $(this).val("").change();
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
    });

    //Enable all education input fields and change value to blank
    $(".educUserInput").each(function () {
      // $(this).val("").change();
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
    });

    //Change education card labels and background-color
    $("#markerEduc").css("background-color", "#219EBC");
    $(".educFieldLabel").css("opacity", ".70");

    //For red * marker
    $(".employFieldLabel").removeClass("required");
    $(".educFieldLabel").addClass("required");
  }

  //fxn for Enrolled
  function enrolled() {
    $(".educSelectBox").each(function () {
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
      // $(".educSelectBox").not("#selectEducStatus").val("").change();
      if (
        $(this).attr("id") == "selectEducSalary" ||
        $(this).attr("id") == "selectEducIndustry"
      ) {
        $(this).val("").change();
        $(this).prop("disabled", true);
        $(this).removeAttr("required");
      }
    });

    $(".educUserInput").each(function () {
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
      $(".educUserInput").val("").change();
    });

    $(".educFieldLabel").each(function () {
      $(this).addClass("required");
      $(this).css("opacity", "1");
      if (
        $(this).attr("id") == "educIndustryLbl" ||
        $(this).attr("id") == "educSalaryLbl"
      ) {
        $(this).removeClass("required");
        $(this).css("opacity", ".70");
      }
    });
  }

  //fxn for Out-of-school youth
  function ousYouth() {
    $(".educSelectBox").each(function () {
      $(this).prop("disabled", true);
      $(this).removeAttr("required");
      if ($(this).attr("id") == "selectEducStatus") {
        $(this).prop("disabled", false);
        $(this).attr("required", "required");
        $(".educSelectBox").not(this).val("").change();
      }
    });

    $(".educUserInput").each(function () {
      $(this).prop("disabled", true);
      $(this).removeAttr("required");
      $(this).val("").change();
    });

    $(".educFieldLabel").each(function () {
      $(this).removeClass("required");
      $(this).css("opacity", ".70");
      if ($(this).attr("id") == "educStatusLbl") {
        $(this).addClass("required");
        $(this).css("opacity", "1");
      }
    });
  }

  //fxn for Working Students
  function workingStudent() {
    $(".educSelectBox").each(function () {
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
      $(".educSelectBox").not("#selectEducStatus").val("").change();
    });

    $(".educUserInput").each(function () {
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
    });

    $(".educFieldLabel").addClass("required");
    $(".educFieldLabel").css("opacity", "1");
  }

  // ----------------------Employment-------------------------
  //fxn for clicking #employCheck (disabling education fields, enabling employment fields)
  function employRadioClick() {
    $("#educCheck").prop("checked", false);
    $("#markerEduc").css("background-color", "#c5d4e3");
    $(".educFieldLabel").css("opacity", ".70");

    $(".educSelectBox").each(function () {
      $(this).val("").change();
      $(this).prop("disabled", true);
      $(this).removeAttr("required");
    });

    $(".educUserInput").each(function () {
      $(this).val("").change();
      $(this).prop("disabled", true);
      $(this).removeAttr("required");
    });

    $(".employSelectBox").each(function () {
      $(this).val("").change();
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
    });

    $(".employUserInput").each(function () {
      // $(this).val("").change();
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
    });

    $("#markerEmploy").css("background-color", "#219EBC");
    $(".employFieldLabel").css("opacity", "1");

    //For red * marker
    $(".educFieldLabel").removeClass("required");
    $(".employFieldLabel").addClass("required");
  }

  //fxn for Employed
  function employed() {
    $(".employSelectBox").each(function () {
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
    });

    $(".employUserInput").each(function () {
      $(this).prop("disabled", false);
      $(this).attr("required", "required");
    });

    $(".employFieldLabel").each(function () {
      $(this).css("opacity", "1");
      $(this).addClass("required");
    });
  }

  //fxn for Unemployed
  function unemployed() {
    $(".employSelectBox").each(function () {
      $(this).not("#selectEmployStatus").prop("disabled", true);
      $(this).not("#selectEmployStatus").removeAttr("required");
    });

    $(".employUserInput").each(function () {
      $(this).prop("disabled", true);
      $(this).removeAttr("required");
    });

    $(".employFieldLabel").each(function () {
      $(this).css("opacity", ".70");
      $(this).removeClass("required");
      if ($(this).attr("id") == "employStatusLbl") {
        $(this).addClass("required");
        $(this).css("opacity", "1");
      }
    });
  }

  $("#backPage").click(function () {
    window.location.href = "./profiles.php";
  });

  $(".edit").click(function () {
    window.location.href = "./updateEntry.php";
  });
});
