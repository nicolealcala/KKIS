//For Educ Radio Btn
$(document).ready(function(){
    $('#educCheck').change(function(){
        enrolled();
        $('#markerEmploy').css("background-color", "#c5d4e3");
        
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
    })
});


//For Employ Radio Btn
$(document).ready(function(){
    $('#employCheck').change(function(){
        $('#markerEduc').css("background-color", "#c5d4e3");
        
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
})

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

//fxn for Enrolled 
function enrolled(){
    $('#selectLevel').prop('disabled', false);
    $('#selectSchoolType').prop('disabled', false);
    $('#inputSchool').prop('disabled', false);
    $('#inputEducOccupation').prop('disabled', true);
    $('#selectEducSalary').prop('disabled', true);
};

//fxn for Out-of-school youth
function ousYouth(){
    $('#selectLevel').prop('disabled', true);
    $('#selectSchoolType').prop('disabled', true);
    $('#inputSchool').prop('disabled', true);
    $('#inputEducOccupation').prop('disabled', true);
    $('#selectEducSalary').prop('disabled', true);
}

//fxn for Working Students
function workingStudent(){
    $('#selectLevel').prop('disabled', false);
    $('#selectSchoolType').prop('disabled', false);
    $('#inputSchool').prop('disabled', false);
    $('#inputEducOccupation').prop('disabled', false);
    $('#selectEducSalary').prop('disabled', false);
}

//fxn for Unemployed
function unemployed(){
    $('#selectEmployeeType').prop('disabled', false);
    $('#selectCompanyType').prop('disabled', false);
    $('#inputEmployer').prop('disabled', false);
    $('#selectEmploySalary').prop('disabled', false);
    $('#inputEmployOccupation').prop('disabled', false);    
}

//fxn for Unemployed
function unemployed(){
    $('#selectEmployeeType').prop('disabled', true);
    $('#selectCompanyType').prop('disabled', true);
    $('#inputEmployer').prop('disabled', true);
    $('#selectEmploySalary').prop('disabled', true);
    $('#inputEmployOccupation').prop('disabled', true);    
}