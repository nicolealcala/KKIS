const eStatus = document.getElementsByClassName('statusCheck');
var educStatus = document.getElementById('educCheck');
var employStatus = document.getElementById('employCheck');

educStatus.onchange = function changeStateEduc() {
    if(this.checked){
        employStatus.disabled = true;
        document.getElementById('markerEmploy').style.background="#a4a4a4";
        document.getElementsByClassName('employSelectBox').setAttribute('disabled', 'disabled');
    } else {
        employStatus.disabled = false;
        document.getElementById('markerEmploy').style.background="#219EBC";

    }
};


employStatus.onchange = function changeStateEmploy() {
    if(this.checked){
        educStatus.disabled = true;
        document.getElementById('markerEduc').style.background="#a4a4a4";
    } else {
        educStatus.disabled = false;
        document.getElementById('markerEduc').style.background="#219EBC";
    }
};

