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