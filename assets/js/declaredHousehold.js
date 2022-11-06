//for clicking Overview
$(document).ready(function(){
    $('#families').on('click', function(){
        $('#familiesBody').removeClass('d-none');
        $('#overviewBody').addClass('d-none');
        $('#families').addClass('active');
        $('#overview').removeClass('active');
    })
    
    
    $('#overview').on('click', function(){
        $('#overviewBody').removeClass('d-none');
        $('#familiesBody').addClass('d-none');
        $('#overview').addClass('active');
        $('#families').removeClass('active');

    })
})

//For printing table
$(document).ready(function(){
    $('#print').click(function(){   
       var tablePrint = document.getElementById('familiesBody');
       var dialog = window.open();
       dialog.document.write(tablePrint.outerHTML);
    //    dialog.focus();
       dialog.print();
       dialog.close()
    })
})

//For HTML to PDF
$(document).ready(function(){
    // $('#pdf').click(function(){
    //     var exportPDF = document.getElementById('familiesBody');
    //     // html2pdf().from(exportPDF).save('Households.pdf');

    //     var opt = {
    //         margin:       0.5,
    //         filename:     'Households.pdf',
    //         image:        { type: 'svg', quality: 0.1 },
    //         jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
    //       };
          
    //       // New Promise-based usage:
    //       html2pdf().set(opt).from(exportPDF).save();
    // })
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





