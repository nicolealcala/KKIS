$(document).ready(function(){
  	$('.checkAllDiv').click(function(){
		if ($('#deselectAll').hasClass('d-none')) {
			$('#deselectAll').removeClass('d-none');
			$('#selectAll').addClass('d-none');
			$('.checkItem').each(function(){
				$(this).prop('checked', true);
			})
		} else {
			$('#deselectAll').addClass('d-none');
			$('#selectAll').removeClass('d-none');
			$('.checkItem').each(function(){
				$(this).prop('checked', false);
			})
		}
  	})
});

// function selects(){
//   var selec=document.getElementsByName('ck');
//   for(var i=0; i<selec.length; i++){
//       if(selec[i].type=='checkbox')
//           selec[i].checked=true;
      
//   }
// }
// function deSelect(){
//   var selec=document.getElementsByName('ck');
//   for(var i=0; i<selec.length; i++){
//       if(selec[i].type=='checkbox')
//           selec[i].checked=false;

//   }
// }

//DataTable
$(document).ready(function(){
    $('#transactionsTbl').DataTable({
        responsive: true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": false
    });
})