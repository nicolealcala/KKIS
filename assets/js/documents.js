//Getting link id
const linkScholar = document.getElementById('linkReferral');
linkScholar.addEventListener("click", documentReferral);

const linkID = document.getElementById('linkKkid');
linkID.addEventListener("click", documentID);

//Onclick functions
function documentReferral(){
    document.getElementById ('referralPage').style.display='';
    document.getElementById('kkidPage').style.display='none';

}
function documentID(){
    document.getElementById('referralPage').style.display='none';
    document.getElementById('kkidPage').style.display='';
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