// =============  Data Table - (Start) ================= //
$(document).ready(function(){
    
    var table = $('#example').DataTable({
        
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": false,
        "bInfo": false

    });
    table.buttons().container()
    .appendTo('#example_wrapper .col-md-6:eq(0)'); 
});


    



// =============  Data Table - (End) ================= //
