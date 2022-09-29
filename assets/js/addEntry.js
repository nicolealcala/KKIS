//For required fields
$(document).ready(function(){
    $('.fieldLabel').each(function(){
        $(this).addClass('required');
        if (($(this).attr("id")=="remarksLbl") || ($(this).attr("id")=="organizationLbl")){
            $(this).removeClass('required');
        } else if (($(this).attr("id")=="kabataanEnameLbl") || ($(this).attr("id")=='headEnameLbl')){
            $(this).removeClass('required');
        }
    });
});

//For Educ Radio Btn Pre-checked or is selected on change
$(document).ready(function(){
    if ($('#educCheck').is(':checked')){
        educRadioClick();
        enrolledSelected();
    };
});

//For Educ Radio Btn when selected
$(document).ready(function(){
    if($('#educCheck').on('change', function(){
        educRadioClick();
        enrolledSelected();
    }));
});

//For Employ Radio Btn
$(document).ready(function(){
    $('#employCheck').change(function(){
      employRadioClick();
    });
});

//For Educ Status
$(document).ready(function(){
    $('#selectEducStatus').on('change', function(){
        if($('#selectEducStatus option[value=enrolled]').is(':selected')){
            enrolled();
        } else if ($('#selectEducStatus option[value=ousYouth]').is(':selected')){
            ousYouth();
        } else {
            workingStudent();
        }
    })
});

//For Employment Status
$(document).ready(function(){
    $('#selectEmployStatus').on('change', function(){
        if($('#selectEmployStatus option[value=employed]').is(':selected')){
            employed();
        } else {
            unemployed();
        }
    })
})

//JS Library for remarks
VirtualSelect.init({
    ele: '#remarkDrop',
    hideClearButton: true,
  });


//fxn for clicking #educCheck
var educRadioClick = function(){
    $("#selectEmployStatus").val("employed").change();
        $("#selectEmployeeType").val("regular").change();
        $("#selectCompanyType").val("private").change();
        $("#selectEmploySalary").val("less10").change();
        
        $('#markerEmploy').css("background-color", "#c5d4e3");
        $('.employFieldLabel').css("color", "#dfdfdf");
        
        $('.employSelectBox').each(function(){
            $(this).prop('disabled', true);
            $(this).removeAttr("required");
        });
            
        $('.employUserInput').each(function(){
            $(this).prop('disabled', true);
            $(this).removeAttr("required");
            $(this).val("");
        });

        $('.educSelectBox').each(function(){
            $(this).prop('disabled', false);
            $(this).attr("required", "required");
        });
            
        $('.educUserInput').each(function(){
            $(this).prop('disabled', false);
            $(this).attr("required", "required");
        });

        $('#markerEduc').css("background-color", "#219EBC");
        $('.educFieldLabel').css("color", "#909090");

        $('.employFieldLabel').removeClass('required');
        $('.educFieldLabel').addClass('required');
}

//fxn for clicking #employCheck
var employRadioClick = function(){
    $("#selectEducStatus").val("enrolled").change();
    $("#selectLevel").val("preElem").change();
    $("#selectSchoolType").val("private").change();
    $("#selectEducSalary").val("less10").change();

    $('#markerEduc').css("background-color", "#c5d4e3");
    $('.educFieldLabel').css("color", "#dfdfdf");
    
    $('.educFieldLabel').removeClass('required');
        
    $('.educSelectBox').each(function(){
        $(this).prop('disabled', true);
        $(this).removeAttr("required");
    });
            
    $('.educUserInput').each(function(){
        $(this).prop('disabled', true);
        $(this).removeAttr("required");
        $(this).val("");
    });

    $('.employSelectBox').each(function(){
        $(this).prop('disabled', false);
        $(this).attr("required", "required");
    });
            
    $('.employUserInput').each(function(){
        $(this).prop('disabled', false);
        $(this).attr("required", "required");
        // $(this).val("");
    });

    $('#markerEmploy').css("background-color", "#219EBC");
    $('.employFieldLabel').css("color", "#909090");

    $('.educFieldLabel').removeClass('required');
    $('.employFieldLabel').addClass('required');
}

//fxn for pre-selected/selecting option[value=enrolled]
var enrolledSelected = function(){
    if ($('#selectEducStatus option[value=enrolled]').is(':selected')){
        enrolled();
    };
};

//fxn for Enrolled 
var enrolled = function(){
    $('.educSelectBox').each(function(){
        $(this).prop('disabled', false);
        $(this).attr("required", "required");
        if (($(this).attr("id")=="selectEducSalary") || ($(this).attr("id")=="selectEducIndustry")){
            $(this).prop('disabled', true);
            $(this).removeAttr("required");
        } 
    });

    $('.educUserInput').each(function(){
        $(this).prop('disabled', false);
        $(this).attr("required", "required");
    });

    $('.educFieldLabel').each(function(){
        if (($(this).attr("id")=="educOccupationLbl") || ($(this).attr("id")=="educSalaryLbl")){
            $(this).removeClass('required');
            $(this).css("color", "#dfdfdf");
        }
    });
};

//fxn for Out-of-school youth
var ousYouth = function(){
    $('.educSelectBox').each(function(){
        $(this).prop('disabled', true);
        $(this).removeAttr("required");
        if ($(this).attr("id")=="selectEducStatus"){
            $(this).prop('disabled', false);
            $(this).attr("required", "required");
        }
    });

    $('.educUserInput').each(function(){
        $(this).prop('disabled', true);
        $(this).removeAttr("required");
    });
    
    $('.educFieldLabel').each(function(){
        $(this).removeClass('required');
        $(this).css("color", "#dfdfdf");
        if ($(this).attr("id")=="educStatusLbl"){
            $(this).addClass('required');
            $(this).css("color", "#909090");
        }
    });
}

//fxn for Working Students
var workingStudent = function(){
    $('.educSelectBox').each(function(){
        $(this).prop('disabled', false);
        $(this).attr("required", "required");
    });

    $('.educUserInput').each(function(){
        $(this).prop('disabled', false);
        $(this).attr("required", "required");
    });

    $('.educFieldLabel').addClass('required');
    $('.educFieldLabel').css("color", "#909090");
}

//fxn for Employed
var employed = function(){
    $('.employSelectBox').each(function(){
        $(this).prop('disabled', false);
        $(this).attr("required", "required");
    });

    $('.employUserInput').each(function(){
        $(this).prop('disabled', false);
        $(this).attr("required", "required");
    });
   
    $('.employFieldLabel').each(function(){
        $(this).css("color", "#909090");
        $(this).addClass('required');
    });
}

//fxn for Unemployed
var unemployed = function(){
    $('.employSelectBox').each(function(){
        $(this).prop('disabled', true);
        $(this).removeAttr("required");
        if ($(this).attr("id")=="selectEmployStatus"){
            $(this).prop('disabled', false);
            $(this).attr("required", "required");
        }
    });

    $('.employUserInput').each(function(){
        $(this).prop('disabled', true);
        $(this).removeAttr("required");
    });

    $('.employFieldLabel').each(function(){
        $(this).css("color", "#dfdfdf");
        $(this).removeClass('required');
        if ($(this).attr("id")=="employStatusLbl"){
            $(this).addClass('required');
            $(this).css("color", "#909090");
        }
    });
}