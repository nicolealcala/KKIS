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
    $('#checkCustom').on('change', function(){
        if ($(this).is(':checked')){
            $('.customForm').removeClass('d-none');
        } else {
            $('.customForm').addClass('d-none');
        }
    })
    
})

 
//For QR Scanner Button
$(document).ready(function(){
    $('.qrBtn').on('click', function(){
        $(this).css("background-color", "#219EBC");
        $(this).css("color", "white");
        $('.iconContainer').css("background-color", "black");
        $('.iconContainer').css("color", "#FFB703");
    })
})

const checkCount = 0;

function weh (){
    $('.checkboxCategory').on('change', function(){
        if ($(this).is(':checked')){
            checkCount+=1;
        }
    });
}

$(document).ready(function(){
    $('#submitBtn').on('click', function(){
        if (checkCount==0){
            alert('Naur');
        } else {
            alert('woah');
        }
    })
})



    