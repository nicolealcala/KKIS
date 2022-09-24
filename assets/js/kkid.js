
var checkCount = 0;

//For QR Scanner Button
$(document).ready(function(){
    $('.qrBtn').on('click', function(){
        $(this).css("background-color", "#219EBC");
        $(this).css("color", "white");
        $('.iconContainer').css("background-color", "black");
        $('.iconContainer').css("color", "#FFB703");
    })
})

//For disabling categories in KKID
$(document).ready(function(){
    $('#checkAge').on('change', function(){
        if ($(this).is(':checked')){
            $('#selectAge').prop('disabled', false);
            checkCount++;
            submitBtnState();
            $('#checkCustom').prop('disabled', true);
        } else {
            $('#selectAge').prop('disabled', true);
            checkCount--;
            submitBtnState();
            $('#checkCustom').prop('disabled', false);
        }
    })
});

$(document).ready(function(){
    $('#checkPurok').on('change', function(){
        if ($(this).is(':checked')){
            $('#selectPurok').prop('disabled', false);
            checkCount++;
            submitBtnState();
            $('#checkCustom').prop('disabled', true);
        } else {
            $('#selectPurok').prop('disabled', true);
            checkCount--;
            submitBtnState();
            $('#checkCustom').prop('disabled', false);
        }
    })
    
})

$(document).ready(function(){
    $('#checkCustom').on('change', function(){
        if ($(this).is(':checked')){
            checkCount++;
            submitBtnState();
            $('#clearBtn').removeAttr("disabled");
            $('.customDiv').removeClass('d-none');
            $('.checkboxCategory').not(this).prop('checked', false); 
            $('.checkboxCategory').not(this).prop('disabled', true); 
        } else {
            checkCount--;
            submitBtnState();
            $('.customDiv').addClass('d-none');
            $('.checkboxCategory').not(this).prop('disabled', false); 
        }
    })
    
})

//for clicking Clear Btn
$(document).ready(function(){
    $('#clearBtn').on('click', function(){
        $('.userInput').each(function(){
            $(this).val("");
        });
    });
})

//fxn for changing submit state
var submitBtnState = function (){
    if (checkCount!=0){
        $('#submitBtn').removeAttr("disabled", "disabled");
    } else {
        $('#submitBtn').attr("disabled", "disabled");
    }

    // $('#submitBtn').on('click', function(){
    //     alert(checkCount);
    // })
}

