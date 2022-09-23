//for clicking Overview
$(document).ready(function(){
    $('#families').on('click', function(){
        $('.familiesBody').removeClass('d-none');
        $('.overviewBody').addClass('d-none');
    })
    
    
    $('#overview').on('click', function(){
        $('.overviewBody').removeClass('d-none');
        $('.familiesBody').addClass('d-none');
    })
})




