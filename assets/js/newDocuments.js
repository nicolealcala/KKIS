//Getting link id from document Nav
var linkScholar = document.getElementById('referral');
linkScholar.addEventListener("click", documentReferral);

var linkID = document.getElementById('kkid');
linkID.addEventListener("click", documentID);

var kkidDiv = document.getElementById('kkidPage');
kkidDiv.style.display='none';

var referralDiv = document.getElementById('referralPage');


//declare variables needed for the loop
var options = document.getElementsByClassName("linkContainer");
var current = document.getElementsByClassName("active");

// Loop through the divs and add the active class to the current/clicked div
for (var i = 0; i < options.length; i++) {
    options[i].addEventListener("click", function() {
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    // var childLink = $(this).find('.optionLink');  
    // childLink.css('color', 'pink');
    
    // for (var child of this.children) {
    //     child.style.color="pink";
    //     console.log(child.id);
    // } 
  });
}

//Declare variable for qrButton
const qrButton = document.getElementById('qrScanner');
qrButton.addEventListener("click", qrClicked);
const qrIcon = document.getElementById('qrIcon');

//Onclick functions
//1. for Scholarship referral
function documentReferral(){
    referralDiv.style.display='';
    kkidDiv.style.display='none';
    document.getElementById('rowBtn').style.marginTop='30px';
}
//2. for KKID
function documentID(){
    referralDiv.style.display='none';
    kkidDiv.style.display='';
    document.getElementById('rowBtn').style.marginTop='100px';
}
//3. for QR Code Scanning
function qrClicked(){
    qrButton.style.backgroundColor="black";
    qrButton.style.transition="0.3s"
    qrIcon.style.color="#F3CB69"
}




//for disabling fields in KKID
var purokChecker = document.getElementById('checkPurok');
var purokOption = document.getElementById('selectPurok');
purokChecker.onchange = function enableBtn() {
    if(this.checked){
        purokOption.disabled = false;
    } else {
        purokOption.disabled = true;
    }
};

var ageChecker = document.getElementById('checkAge');
var ageOption = document.getElementById('selectAge');
ageChecker.onchange = function enableBtn() {
    if(this.checked){
        ageOption.disabled = false;
    } else {
       ageOption.disabled = true;
    }
};
