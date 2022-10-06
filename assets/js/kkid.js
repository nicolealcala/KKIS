//For QR Scanner Button
$(document).ready(function(){
    $('.qrBtn').on('click', function(){
        $(this).css("background-color", "#219EBC");
        $(this).css("color", "white");
        $('.iconContainer').css("background-color", "black");
        $('.iconContainer').css("color", "#FFB703");
    })
})

//For disabling AGE in KKID
$(document).ready(function(){
    $('#checkAge').on('change', function(){
        if ($(this).is(':checked')){
            $('#selectAge').prop('disabled', false);
            submitBtnState();
            $('#checkCustom').prop('disabled', true);
        } else {
            $('#selectAge').prop('disabled', true);
            submitBtnState();
            $('#checkCustom').prop('disabled', false);
        }
    })
});

//For disabling PUROK in KKID
$(document).ready(function(){
    $('#checkPurok').on('change', function(){
        if ($(this).is(':checked')){
            $('#selectPurok').prop('disabled', false);
            submitBtnState();
            $('#checkCustom').prop('disabled', true);
        } else {
            $('#selectPurok').prop('disabled', true);
            submitBtnState();
            $('#checkCustom').prop('disabled', false);
        }
    })
    
})

//For disabling CUSTOM in KKID
$(document).ready(function(){
    $('#checkCustom').on('change', function(){
        var filled = 0;
        if ($(this).is(':checked')){
            $('.customDiv').removeClass('d-none');
            $('.checkboxCategory').not(this).prop('checked', false); 
            $('.checkboxCategory').not(this).prop('disabled', true);

            $('.userInput').each(function(){
                if (!$(this).val()){
                    filled++;
                    controlBtnState();
                } else {
                    filled--;
                    controlBtnState();
                }
            })
        } else {
            $('.customDiv').addClass('d-none');
            $('.checkboxCategory').not(this).prop('disabled', false); 
            controlBtnState();
        }

        function controlBtnState() {
            if (filled>0){
                $('#submitBtn').removeAttr("disabled");
                $('#clearBtn').removeAttr("disabled");
            } else {
                $('#submitBtn').attr("disabled", "disabled")
                $('#clearBtn').attr("disabled", "disabled")
            }
        }
    })
})

//For clicking Clear Btn
$(document).ready(function(){
    $('#clearBtn').on('click', function(){
        $('.userInput').each(function(){
            $(this).val("");
        });
    });
})

//fxn for changing submit state
var submitBtnState = function (){
    if (($('#checkAge').is(':checked')) || ($('#checkPurok').is(':checked'))){
        $('#submitBtn').removeAttr("disabled", "disabled");
    } else {
        $('#submitBtn').attr("disabled", "disabled")
    };
};