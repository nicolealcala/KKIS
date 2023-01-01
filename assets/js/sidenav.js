// Sidenav collapse & expand
var openBtn = document.getElementById("expand");
var closeBtn = document.getElementById("collapse");

closeBtn.style.display = 'none';

function openNav() {
    document.getElementById("left").style.width = "320px";
    document.getElementById("rc").style.marginLeft = "320px"
    document.getElementById("rc").style.borderRadius= "40px 0 0 40px";
    document.getElementById("grey").style.borderRadius= "40px 0 0 0";
    document.getElementById("pageContent").style.marginLeft = "360px";
    document.getElementById("header").style.marginLeft = "0";
    document.getElementById("headerHR").style.marginLeft = "-40px";
    openBtn.style.display = 'none';
    closeBtn.style.display = '';
}

function closeNav() {
    document.getElementById("left").style.width = "0";
    document.getElementById("rc").style.marginLeft= "0";
    document.getElementById("rc").style.borderRadius= "0";
    document.getElementById("grey").style.borderRadius= "0";
    document.getElementById("pageContent").style.marginLeft = "20px";
    document.getElementById("header").style.marginLeft = "0";
    document.getElementById("headerHR").style.marginLeft = "-20px";
    openBtn.style.display = '';
    closeBtn.style.display = 'none';
}

// closenav when screen resized
$(document).ready(function()
{
    $(window).resize(function()
    {
        window.closeNav();
    });
});

//Nav buttons