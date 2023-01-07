$(document).ready(function () {
  //Nav Small Screen
  $("#smallNav").appendTo("#mdHeader");

  //for clicking Overview
  $("#menu1").on("click", function () {
    $("#familiesBody").removeClass("d-none");
    $("#overviewBody").addClass("d-none");
    $("#menu1").addClass("menu-active");
    $("#menu2").removeClass("menu-active");
  });

  $("#menu2").click(function () {
    $("#overviewBody").removeClass("d-none");
    $("#familiesBody").addClass("d-none");
    $("#menu2").addClass("menu-active");
    $("#menu1").removeClass("menu-active");
  });

  //Data Table
  var table = $("#familiesTbl").removeAttr('width').DataTable({
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    responsive: true,
    bFilter: true,
    bInfo: false,
    fixedColumns: true,
    columnDefs: [
      { width: "10%", targets: 0 },
      { width: "25%", targets: 1 },
      { width: "10%", targets: 2 },
      { width: "10%", targets: 3 },
      { width: "15%", targets: 4 },
      { width: "15%", targets: 5 },
      { width: "15%", targets: 6 },
    ],
    
    initComplete: function () {
      this.api()
        .columns([1, 2, 3, 4, 5, 6])
        .every(function (d) {
          var column = this;
          var theadname = $("#familiesTbl th").eq([d]).text(); //used this specify table name and head
          var select = $(
            "<select class = 'form-select'><option value=''>Filter " +
              theadname +
              "</option></select>"
          )
            .appendTo($(column.footer()).empty())
            .on("change", function () {
              var val = $.fn.dataTable.util.escapeRegex($(this).val());

              column.search(val ? "^" + val + "$" : "", true, false).draw();
            });

          column
            .data()
            .unique()
            .sort()
            .each(function (d, j) {
              select.append('<option value="' + d + '">' + d + "</option>");
            });
        });
    },
  });

  $("#familiesTbl_length").appendTo("#familiesLength");
  table.buttons().container().appendTo("#familiesOutput");
  $("#familiesTbl_filter").appendTo("#familiesSearch");

  //for Chart
  $(document).ready(function () {
    const ctx = $("#overviewChart");

    const overview = new Chart(ctx, {
      type: "pie",
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [
          {
            label: "# of Votes",
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              "rgba(255, 99, 132, 0.5)",
              "rgba(54, 162, 235, 0.5)",
              "rgba(255, 206, 86, 0.5)",
              "rgba(75, 192, 192, 0.5)",
              "rgba(153, 102, 255, 0.5)",
              "rgba(255, 159, 64, 0.5)",
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(153, 102, 255, 1)",
              "rgba(255, 159, 64, 1)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        aspectRatio: 1,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: "top",
          },
          title: {
            display: true,
            text: "Declared Households",
          },
        },
      },
    });
  });
});
