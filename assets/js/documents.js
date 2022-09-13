//Getting link id
const linkScholar = document.getElementById('linkReferral');
linkScholar.addEventListener("click", documentReferral);

const linkID = document.getElementById('linkKkid');
linkID.addEventListener("click", documentID);

var kkidDiv = document.getElementById('kkidPage');

kkidDiv.style.display='none';

var referralDiv = document.getElementById('referralPage');

//Jquery
$(document).ready(function() {
    $(".linkContainer").on('click', function(){
        $(".linkContainer").removeClass("active");
        $(this).addClass("active");
    })
});


//Onclick functions
function documentReferral(){
   referralDiv.style.display='';
   kkidDiv.style.display='none';
     document.getElementById('rowBtn').style.marginTop='30px';

}
function documentID(){
   referralDiv.style.display='none';
    kkidDiv.style.display='';
    document.getElementById('rowBtn').style.marginTop='50px';
}


//for KKID
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