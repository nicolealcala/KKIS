//JS Library for remarks
VirtualSelect.init({
    ele: '#filtering',
    hideClearButton: false,
    showValueAsTags: true,
    search: true
});

//Data Table//
$(document).ready(function(){
    
    var table = $('#kabataanTbl').DataTable({
        
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": false,
        "bInfo": false
        

    });

    table.buttons().container().appendTo('#kabataanTbl_wrapper .col-md-6:eq(0)'); 

    var table = $('#residentTbl').DataTable({
        
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": false,
        "bInfo": false

    });

    table.buttons().container().appendTo('#residentTbl_wrapper .col-md-6:eq(0)'); 

});
