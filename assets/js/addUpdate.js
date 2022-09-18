//Employment Components:
var educStatus = document.getElementById('educCheck');
var employSelection = document.querySelectorAll('.employSelectBox');
var employInput = document.querySelectorAll('.employUserInput');
var employLabel = document.querySelectorAll('.employFieldLabel');

//Education Components:
var employStatus = document.getElementById('employCheck');
var educSelection = document.querySelectorAll('.educSelectBox');
var educInput = document.querySelectorAll('.educUserInput')
var educLabel = document.querySelectorAll('.educFieldLabel');

//On Change fxns
educStatus.onchange = function changeState() {
    if(this.checked){
        employStatus.disabled = true;
        document.getElementById('markerEmploy').style.background="#c5d4e3";
        employSelection.forEach(employSelect => {
            employSelect.disabled = true;
        });
        employInput.forEach(employWrite => {
            employWrite.disabled = true;
        });
        employLabel.forEach(label => {
            label.style.color = '#cccccc';
        });
           
    } else {
        employStatus.disabled = false;
        document.getElementById('markerEmploy').style.background="#219EBC";
        employSelection.forEach(employSelect => {
            employSelect.disabled = false;
        });
        employInput.forEach(employWrite => {
            employWrite.disabled = false;
        });
        employLabel.forEach(label => {
            label.style.color = '#909090';
        });
    }
};

employStatus.onchange = function changeState() {
    if(this.checked){
        educStatus.disabled = true;
        document.getElementById('markerEduc').style.background="#c5d4e3";
        educSelection.forEach(educSelect => {
            educSelect.disabled = true;
        });
        educInput.forEach(educWrite => {
            educWrite.disabled = true;
        });
        educLabel.forEach(label => {
            label.style.color = '#cccccc';
        });
    } else {
        educStatus.disabled = false;
        document.getElementById('markerEduc').style.background="#219EBC";
        educSelection.forEach(educSelect => {
            educSelect.disabled = false;
        });
        educInput.forEach(educWrite => {
            educWrite.disabled = false;
        });
        educLabel.forEach(label => {
            label.style.color = '#909090';
        });
    }
};
