//Getting link id from document Nav


const linkScholar = document.getElementById('linkReferral');
linkScholar.addEventListener("click", documentReferral);


const linkID = document.getElementById('linkKkid');
linkID.addEventListener("click", documentID);

var kkidDiv = document.getElementById('kkidPage');
kkidDiv.style.display='none';

var referralDiv = document.getElementById('referralPage');


//declare variables needed for the loop
var options = document.getElementsByClassName("linkContainer");

// Loop through the divs and add the active class to the current/clicked div
for (var i = 0; i < options.length; i++) {
    options[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
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
    document.getElementById('rowBtn').style.marginTop='50px';
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