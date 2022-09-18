var selectAllBtn = document.getElementById('selectAll');
var checkAll = document.getElementsByClassName('checkitem');
selectAllBtn.onchange= function selectAll() {
  if(this.checked){
    for (var i=0; i < checkAll.length; i++){  
          if(checkAll[i].type=='checkbox')  
          checkAll[i].checked=true;  
          }
  } else {
    for (var i=0; i < checkAll.length; i++){  
      if(checkAll[i].type=='checkbox')  
      checkAll[i].checked=false;  
      }
  }
};