$(document).ready(function(){
    //for clicking Overview
    $('#families').on('click', function(){
        $('#familiesBody').removeClass('d-none');
        $('#overviewBody').addClass('d-none');
        $('#families').addClass('clicked');
        $('#overview').removeClass('clicked');
    })
    
    
    $('#overview').click(function(){
        $('#overviewBody').removeClass('d-none');
        $('#familiesBody').addClass('d-none');
        $('#overview').addClass('clicked');
        $('#families').removeClass('clicked');

    })

    //Data Table
    var table = $('#familiesTbl').DataTable({
        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],
        responsive: true,
        "bFilter": true,
        "bInfo": false
    });
    
    $('#familiesTbl_length').appendTo('#familiesLength');
    table.buttons().container().appendTo('#familiesOutput'); 
    $('#familiesTbl_filter').appendTo('#familiesSearch')
})

//JS Library for Filter remarks
VirtualSelect.init({
    ele: '#filtering',
    hideClearButton: true,
    disableSelectAll: true,
});


//for Chart
$(document).ready(function(){
    const ctx = $('#overviewChart');
    
    const overview = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            aspectRatio: 1,
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Declared Households'
                }
            }
        }
    })
});





