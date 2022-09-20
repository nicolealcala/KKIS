//Employment Components:
var employStatus = document.getElementById('employCheck');
var employSelection = document.querySelectorAll('.employSelectionUpdate');
var employInput = document.querySelectorAll('.employInputUpdate ');
var employLabel = document.querySelectorAll('.employFieldLabel');

//Education Components:
var educStatus = document.getElementById('educCheck');
var educSelection = document.querySelectorAll('.educSelectionUpdate');
var educInput = document.querySelectorAll('.educInputUpdate')
var educLabel = document.querySelectorAll('.educFieldLabel');

//On Change fxns
educStatus.onchange = function changeState() {
    if(this.checked){
        employStatus.disabled = true;
        document.getElementById('markerEmployUpdate').style.background="#c5d4e3";
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
        document.getElementById('markerEmployUpdate').style.background="#F1A400";
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
        document.getElementById('markerEducUpdate').style.background="#c5d4e3";
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
        document.getElementById('markerEducUpdate').style.background="#F1A400";
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
