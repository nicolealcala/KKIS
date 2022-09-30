$(document).ready(function(){
  $('#selectAll').on('change', function(){
    if ($(this).is(':checked')){
      $('input').each(function(){
        $(this).prop('checked', true);
      })
    } else {
      $('input').each(function(){
        $(this).prop('checked', false);
      })
    }
  })
});

//For shading selected row
// $(document).ready(function(){
//   $('.checkItem').each(function(){
//     if($(this).prop('checked', true)){
//       var tRow = $(this).closest('tr');
//       tRow.css("backgrounc-color", "#858796");
//     }
//   })
// })