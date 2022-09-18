var checkAll = document.getElementsByClassName('.checkitem');
checkAll.addEventListener("click", selectAll);

function selectAll() {
  for (var i=0; i<checkAll.length; i++){  
    if(checkAll[i].type=='checkbox')  
    checkAll[i].checked=true;  
    }