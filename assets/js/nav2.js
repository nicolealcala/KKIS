// Nav collapse & expand
var openBtn = document.getElementById("expand");
var closeBtn = document.getElementById("collapse");

closeBtn.style.display = 'none';


function openNav() {
    document.getElementById("sideNav").style.width = "340px";
    document.getElementById("pageContent").style.marginLeft = "340px";
	openBtn.style.display = 'none';
    closeBtn.style.display = '';
}

function closeNav() {
    document.getElementById("sideNav").style.width = "0";
    document.getElementById("pageContent").style.marginLeft = "0";
	openBtn.style.display = '';
    closeBtn.style.display = 'none';
}

//Nav buttons