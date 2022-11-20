$(document).ready(function(){
    //for clicking residents
    $('#residents').click(function(){
        $('#sectionResidents').removeClass('d-none');
        $('#sectionKabataan').addClass('d-none');
        $('#residents').addClass('clicked');
        $('#kabataan').removeClass('clicked');
    })
    
    $('#kabataan').click(function(){
        $('#sectionKabataan').removeClass('d-none');
        $('#sectionResidents').addClass('d-none');
        $('#kabataan').addClass('clicked');
        $('#residents').removeClass('clicked');
        $kabataanClicked = true;
    })

    //DataTables Kabataan
    var tableK = $('#kabataanTbl').DataTable({
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": true,
        "bInfo": false
    });
    
    $('#kabataanTbl_length').appendTo('#kabataanLength');
    tableK.buttons().container().appendTo('#kabataanOutput'); 
    $('#kabataanTbl_filter').appendTo('#kabataanSearch')


    //DataTables Residents
    var tableR = $('#residentsTbl').DataTable({
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": true,
        "bInfo": false
    });
    $('#residentsTbl_length').appendTo('#residentsLength');
    tableR.buttons().container().appendTo('#residentsOutput'); 
    $('#residentsTbl_filter').appendTo('#residentsSearch')
})

//JS Library for remarks
VirtualSelect.init({
    ele: '#filtering',
    hideClearButton: false,
    showValueAsTags: true,
    search: true
});
