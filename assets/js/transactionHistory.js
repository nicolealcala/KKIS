// $(document).ready(function(){
//   $('#selectAll').on('change', function(){
//     if ($(this).is(':checked')){
//       $('input[type=checkbox]').each(function(){
//         $(this).prop('checked', true);
//       })
//     } else {
//       $('input[type=checkbox]').each(function(){
//         $(this).prop('checked', false);
//       })
//     }
//   })
// });

$(document).ready(function(){
  	$('.checkAllDiv').click(function(){
		if ($('#deselectAll').hasClass('d-none')) {
			$('#deselectAll').removeClass('d-none');
			$('#selectAll').addClass('d-none');
			$('input[type=checkbox]').each(function(){
				$(this).prop('checked', true);
			})
		} else {
			$('#deselectAll').addClass('d-none');
			$('#selectAll').removeClass('d-none');
			$('input[type=checkbox]').each(function(){
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