const eStatus = document.getElementsByClassName('statusCheck');
var educStatus = document.getElementById('educCheck');
var employStatus = document.getElementById('employCheck');

//Employment Components:
var selectEmployStatus = document.getElementById('selectEmployStatus');
var selectType = document.getElementById('selectType');
var selectCompanyType = document.getElementById('selectCompanyType');
var selectEmploySalary = document.getElementById('selectEmploySalary');
var inputEmployer = document.getElementById('inputEmployer');
var inputEmployOccupation = document.getElementById('inputOccupation');


//Education Components:
var selectEducStatus = document.getElementById('selectEducStatus');
var selectLevel = document.getElementById('selectLevel');
var selectSchoolType = document.getElementById('selectSchoolType');
var selectEducSalary = document.getElementById('selectEducSalary');
var inputSchool = document.getElementById('inputSchool');
var inputEducOccupation = document.getElementById('inputEducOccupation');
var employFieldLabel = document.getElementsByClassName('employFieldLabel');



educStatus.onchange = function changeState() {
    if(this.checked){
        employStatus.disabled = true;
        document.getElementById('markerEmploy').style.background="#c5d4e3";
        selectEmployStatus.disabled = true;
        selectType.disabled = true;
        selectCompanyType.disabled = true;
        inputEmployer.disabled = true;
        inputEmployOccupation.disabled = true;
        selectEmploySalary.disabled = true;
        employFieldLabel.style.color = "red";

        
    } else {
        employStatus.disabled = false;
        document.getElementById('markerEmploy').style.background="#219EBC";
        selectEmployStatus.disabled = false;
        selectType.disabled = false;
        selectCompanyType.disabled = false;
        inputEmployer.disabled = false;
        inputEmployOccupation.disabled = false;
        selectEmploySalary.disabled = false;
    }
};

employStatus.onchange = function changeState() {
    if(this.checked){
        educStatus.disabled = true;
        document.getElementById('markerEduc').style.background="#c5d4e3";
        selectEducStatus.disabled = true;
        selectLevel.disabled = true;
        selectSchoolType.disabled = true;
        inputSchool.disabled = true;
        inputEducOccupation.disabled = true;
        selectEducSalary.disabled = true;
    } else {
        educStatus.disabled = false;
        document.getElementById('markerEduc').style.background="#219EBC";
        selectEducStatus.disabled = false;
        selectLevel.disabled = false;
        selectSchoolType.disabled = false;
        inputSchool.disabled = false;
        inputEducOccupation.disabled = false;
        selectEducSalary.disabled = false;
    }
};
