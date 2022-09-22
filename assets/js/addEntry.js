//For required
$(document).ready(function(){
    $('fieldLabel').addClass('required')
})



//For Educ Radio Btn Pre-checked
$(document).ready(function(){
    if ($('#educCheck').is(':checked')){
        educRradioClick();
        enrolledSelected();
    };
});

//For Educ Radio Btn when selected
$(document).ready(function(){
    if($('#educCheck').on('change', function(){
        educRradioClick();
        enrolledSelected();  
    }));
});

//For Employ Radio Btn
$(document).ready(function(){
    $('#employCheck').change(function(){
      employRradioClick();
    })
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


//for remarks
VirtualSelect.init({
    ele: '#remarkDrop',
    hideClearButton: true,
  });

//fxn for pre-selected/selecting option[value=enrolled]
var enrolledSelected = function(){
    if ($('#selectEducStatus option[value=enrolled]').is(':selected')){
        enrolled();
    };
};

//fxn for clicking #educCheck
var educRradioClick = function(){
    $("#selectEmployStatus").val("employed").change();
        $("#selectEmployeeType").val("regular").change();
        $("#selectCompanyType").val("private").change();
        $("#selectEmploySalary").val("less10").change();
        
        $('#markerEmploy').css("background-color", "#c5d4e3");
        $('.employFieldLabel').css("color", "#dfdfdf");
        
        $('.employSelectBox').each(function(){
            $(this).prop('disabled', true);
        });
            
        $('.employUserInput').each(function(){
            $(this).prop('disabled', true);
            $(this).val("");
        });

        $('.educSelectBox').each(function(){
            $(this).prop('disabled', false);
        });
            
        $('.educUserInput').each(function(){
            $(this).prop('disabled', false);
            $(this).val("");
        });

        $('#markerEduc').css("background-color", "#219EBC");
        $('.educFieldLabel').css("color", "#909090");

        $('.employFieldLabel').removeClass('required');
        $('.educFieldLabel').addClass('required');
}

//fxn for clicking #employCheck
var employRradioClick = function(){
    $("#selectEducStatus").val("enrolled").change();
    $("#selectLevel").val("preElem").change();
    $("#selectSchoolType").val("private").change();
    $("#selectEducSalary").val("less10").change();


    $('#markerEduc').css("background-color", "#c5d4e3");
    $('.educFieldLabel').css("color", "#dfdfdf");
    
    $('.educFieldLabel').removeClass('required');
        
    $('.educSelectBox').each(function(){
        $(this).prop('disabled', true);
    });
            
    $('.educUserInput').each(function(){
        $(this).prop('disabled', true);
        $(this).val("");
    });

    $('.employSelectBox').each(function(){
        $(this).prop('disabled', false);
    });
            
    $('.employUserInput').each(function(){
        $(this).prop('disabled', false);
        $(this).val("");
    });

    $('#markerEmploy').css("background-color", "#219EBC");
    $('.employFieldLabel').css("color", "#909090");
}

//fxn for Enrolled 
var enrolled = function(){
    $('.educSelectBox').each(function(){
        $(this).prop('disabled', false);
        if ($(this).attr("id")=="selectEducSalary"){
            $(this).prop('disabled', true);
        } 
    });

    $('.educUserInput').each(function(){
        $(this).prop('disabled', false);
        if ($(this).attr("id")=="inputEducOccupation"){
            $(this).prop('disabled', true);
        }
    });

    $('.educFieldLabel').each(function(){
        if (($(this).attr("id")=="educOccupationLbl") || ($(this).attr("id")=="educSalaryLbl")){
            $(this).removeClass('required');
        }
    });

    $('#educOccupationLbl').css("color", "#dfdfdf");
    $('#educSalaryLbl').css("color", "#dfdfdf");
};

//fxn for Out-of-school youth
var ousYouth = function(){
    $('.educSelectBox').each(function(){
        $(this).prop('disabled', true);
        if ($(this).attr("id")=="selectEducStatus"){
            $(this).prop('disabled', false);
        }
    });

    $('.educUserInput').each(function(){
        $(this).prop('disabled', true);
    });
    
    $('.educFieldLabel').each(function(){
        $(this).css("color", "#dfdfdf");
        if ($(this).attr("id")=="educStatusLbl"){
            $(this).css("color", "#909090");
        }
    });
}

//fxn for Working Students
var workingStudent = function(){
    $('.educSelectBox').each(function(){
        $(this).prop('disabled', false);
    });

    $('.educUserInput').each(function(){
        $(this).prop('disabled', false);
    });

    $('.educFieldLabel').css("color", "#909090");
}

//fxn for Employed
var employed = function(){
    $('.employSelectBox').each(function(){
        $(this).prop('disabled', false);
    });

    $('.employUserInput').each(function(){
        $(this).prop('disabled', false);
    });
   
    $('.employFieldLabel').each(function(){
        $(this).css("color", "#909090");
    });
}

//fxn for Unemployed
var unemployed = function(){
    $('.employSelectBox').each(function(){
        $(this).prop('disabled', true);
        if ($(this).attr("id")=="selectEmployStatus"){
            $(this).prop('disabled', false);
        }
    });

    $('.employUserInput').each(function(){
        $(this).prop('disabled', true);
    });

    $('.employFieldLabel').each(function(){
        $(this).css("color", "#dfdfdf");
        if ($(this).attr("id")=="employStatusLbl"){
            $(this).css("color", "#909090");
        }
    })
}