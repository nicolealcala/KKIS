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