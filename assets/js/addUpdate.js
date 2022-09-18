const eStatus = document.getElementsByClassName('statusCheck');
var educStatus = document.getElementById('educCheck');
// var educSelection = getElementsByClassName('educSelectBox');
// var educInput = getElementsByClassName('educUserInput');
var employStatus = document.getElementById('employCheck');
var employSelection = document.querySelector("select.employSelectBox");
// var employInput = getElementsByClassName('employUserInput');

educStatus.onchange = function changeState() {
    if(this.checked){
        employStatus.disabled = true;
        document.getElementById('markerEmploy').style.background="#707070";
        // employSelection.disabled = true;
        // employInput.disabled = true;
        
    } else {
        employStatus.disabled = false;
        document.getElementById('markerEmploy').style.background="#219EBC";
        // employSelection.disabled = false;
        // employInput.disabled = false;
    }
};


employStatus.onchange = function changeState() {
    if(this.checked){
        educStatus.disabled = true;
        // educSelection.disabled = true;
        // educInput.disabled = true;
    } else {
        educStatus.disabled = false;
        // educSelection.disabled = false;
        // educInput.disabled = false;
    }
};

