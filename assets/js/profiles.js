$(document).ready(function () {
  //Nav Small Screen
  $("#smallNav").appendTo("#mdHeader");

  //for clicking residents
  $("#residents").click(function () {
    $("#residents").addClass("menu-active");
    $("#kabataan").removeClass("menu-active");
    $(location).attr("href", "./profiles-residents.php");
  });

  $("#kabataan").click(function () {
    $("#kabataan").addClass("menu-active");
    $("#residents").removeClass("menu-active");
    $(location).attr("href", "./profiles-kabataan.php");
  });

  //DataTables Kabataan
  var kabataanTbl = $("#kabataanTbl").DataTable({
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    responsive: true,
    bFilter: true,
    bInfo: false,
    buttons: [
      {
        extend: "copyHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },

      {
        extend: "csvHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },

      {
        extend: "excelHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },

      {
        extend: "pdfHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },

      {
        extend: "print",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },
    ],
    autoWidth: false,
    columnDefs: [
      { width: "25%", targets: 0 },
      { width: "15%", targets: 1 },
      { width: "5%", targets: 2 },
      { width: "10%", targets: 3 },
      { width: "10%", targets: 4 },
      { width: "10%", targets: 5 },
      { width: "15%", targets: 6 },
      { width: "10%", targets: 7 },
    ],

    initComplete: function () {
      this.api()
        .columns([1, 2, 3, 4, 5, 6])
        .every(function (d) {
          var column = this;
          var theadname = $("#kabataanTbl th").eq([d]).text(); //used this specify table name and head
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

  $("#kabataanTbl_length").appendTo("#kabataanLength");
  kabataanTbl.buttons().container().appendTo("#kabataanOutput");
  $("#kabataanTbl_filter").appendTo("#kabataanSearch");
  $("#kabataanFooter").prependTo("#kabataanTblHead");

  //DataTables Residents
  var residentsTbl = $("#residentsTbl").DataTable({
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    responsive: true,
    bFilter: true,
    bInfo: false,
    buttons: [
      {
        extend: "copyHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },

      {
        extend: "csvHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },

      {
        extend: "excelHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },

      {
        extend: "pdfHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },

      {
        extend: "print",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7],
        },
      },
    ],
    autoWidth: false,
    columnDefs: [
      { width: "25%", targets: 0 },
      { width: "15%", targets: 1 },
      { width: "5%", targets: 2 },
      { width: "10%", targets: 3 },
      { width: "10%", targets: 4 },
      { width: "10%", targets: 5 },
      { width: "15%", targets: 6 },
      { width: "10%", targets: 7 },
    ],

    initComplete: function () {
      this.api()
        .columns([1, 2, 3, 4, 5, 6])
        .every(function (d) {
          var column = this;
          var theadname = $("#residentsTbl th").eq([d]).text(); //used this specify table name and head
          var select = $(
            "<select class ='form-select' id='filter'><option value=''>Filter " +
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
  $("#residentsTbl_length").appendTo("#residentsLength");
  residentsTbl.buttons().container().appendTo("#residentsOutput");
  $("#residentsTbl_filter").appendTo("#residentsSearch");
  $("#residentsFooter").prependTo("#residentsTblHead");

  // $("#deleteEntry").click(function ($entry) {
  //   Swal.fire({
  //     icon: "warning",
  //     title: "Are you sure?",
  //     text: "Deleting this entry is irreversible and will permanently remove the record from the database. Do you still want to proceed?",
  //   }).then((result) => {
  //     if (result.isConfirmed) {
  //       window.location.href = "./profiles-residents.php";
  //     }
  //   });
  // });
});
