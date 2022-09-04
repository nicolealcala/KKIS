$(document).ready(function(){
     $("options").on('click', function() {
            $("options").removeClass("active");
            $(".options").addClass("active");
        });
});

function showPrinting() {
    let kkid = document.getElementByID("kkid");
    kkid.style.display="flex";
}