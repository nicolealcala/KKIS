//JS Library for remarks
VirtualSelect.init({
    ele: '#filtering',
    hideClearButton: false,
    showValueAsTags: true,
    search: true
});

$(document).ready(function(){
    $('#kabataan').on('click', function(){
        $('.kabataanTable').removeClass('d-none');
        $('.residentTable').addClass('d-none');
    })
    
    
    $('#resident').on('click', function(){
        $('.residentTable').removeClass('d-none');
        $('.kabataanTable').addClass('d-none');
    })
})

//Data Table//
$(document).ready(function(){
    
    var table = $('#example').DataTable({
        
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": false,
        "bInfo": false

    });

    table.buttons().container()
    .appendTo('#example_wrapper .col-md-6:eq(0)'); 

    var table = $('#example1').DataTable({
        
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": false,
        "bInfo": false

    });

    table.buttons().container()
    .appendTo('#example1_wrapper .col-md-6:eq(0)'); 
});
