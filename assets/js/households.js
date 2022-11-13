//for clicking Overview
$(document).ready(function(){
    $('#families').on('click', function(){
        $('#familiesBody').removeClass('d-none');
        $('#overviewBody').addClass('d-none');
        $('#families').addClass('active');
        $('#overview').removeClass('active');
    })
    
    
    $('#overview').click(function(){
        $('#overviewBody').removeClass('d-none');
        $('#familiesBody').addClass('d-none');
        $('#overview').addClass('active');
        $('#families').removeClass('active');

    })
})


//Print Functionality
$(document).ready(function(){
    $('#print').click(function(){
        printJS({
            printable: 'familiesTbl',
            type: 'html',
            css: ['assets/scss/households.css', 'assets/scss/mediaquery.css'],
            documentTitle: 'Declared Households'
        })
    })
})

//Search Functionality (tbr by AJAX)
$(document).ready(function(){
    $('#search').keyup(function(){
        search_table($(this).val());
    })

    function search_table(value){
        $('#familiesTbl tr').each(function(){
            var found = false;
            $(this).each(function(){
                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >=0){
                    found = true;
                }
            })
            if (found == true) {
                $(this).show();
            } else {
                $(this).hide();
            }
        })
    }
})

//DataTable
$(document).ready(function(){
    $('#familiesTbl').DataTable({
        responsive: true,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": false
    });
})

//JS Library for Filter remarks
VirtualSelect.init({
    ele: '#filtering',
    hideClearButton: true,
    disableSelectAll: true,
});

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





