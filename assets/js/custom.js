// =============  Data Table - (Start) ================= //
$(document).ready(function(){
    
    var table = $('#example').DataTable({
        
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": false,
        "bInfo": false

    });
    
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 10001, targets: 4 },
        { responsivePriority: 2, targets: -2 }
    ]
    } );
    
    table.buttons().container()
    .appendTo('#example_wrapper .col-md-6:eq(0)'); 


// =============  Data Table - (End) ================= //
