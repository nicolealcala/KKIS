//for disabling categories in KKID
$(document).ready(function(){
    $('#checkPurok').on('change', function(){
        if ($(this).is(':checked')){
            $('#selectPurok').prop('disabled', false);
        } else {
            $('#selectPurok').prop('disabled', true);
        }
    })
    
})

$(document).ready(function(){
    $('#checkAge').on('change', function(){
        if ($(this).is(':checked')){
            $('#selectAge').prop('disabled', false);
        } else {
            $('#selectAge').prop('disabled', true);
        }
    })
    
})

$(document).ready(function(){
    $('.qrBtn').on('click', function(){
        $(this).css("background-color", "#219EBC");
        $(this).css("color", "white");
        $('.iconContainer').css("background-color", "black");
        $('.iconContainer').css("color", "#FFB703");
    })
})