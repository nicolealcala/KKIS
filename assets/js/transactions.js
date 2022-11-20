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

	//DataTable
	$('#transactionsTbl').DataTable({
        responsive: true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": false
    });
});
