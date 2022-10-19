$(document).ready(function(){
  $('.checkItem').each(function(){
		$(this).change(function(){
			if ($(this).is(':checked')){
				$(this).parent('tr').css("background-color", "#707070");
			} else {
				$(this).parent('tr').css("background-color", "white");
			}
		})
	})
  });

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

//For shading selected row
// $(document).ready(function(){
//   $('.checkItem').each(function(){
//     if($(this).prop('checked', true)){
//       var tRow = $(this).closest('tr');
//       tRow.css("backgrounc-color", "#858796");
//     }
//   })
// })