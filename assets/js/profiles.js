$(document).ready(function () {
  //Nav Small Screen
  $("#smallNav").appendTo("#mdHeader");
  
  //for clicking residents
  $("#residents").click(function () {
    $("#sectionResidents").removeClass("d-none");
    $("#sectionKabataan").addClass("d-none");
    $("#residents").addClass("clicked");
    $("#kabataan").removeClass("clicked");
  });

  $("#kabataan").click(function () {
    $("#sectionKabataan").removeClass("d-none");
    $("#sectionResidents").addClass("d-none");
    $("#kabataan").addClass("clicked");
    $("#residents").removeClass("clicked");
    $kabataanClicked = true;
  });

  //DataTables Kabataan
  var kabataanTbl = $("#kabataanTbl").DataTable({
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    responsive: true,
    bFilter: true,
    bInfo: false,
  });

  $("#kabataanTbl_length").appendTo("#kabataanLength");
  kabataanTbl.buttons().container().appendTo("#kabataanOutput");
  $("#kabataanTbl_filter").appendTo("#kabataanSearch");

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
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
        },
      },

      {
        extend: "csvHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
        },
      },

      {
        extend: "excelHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
        },
      },

      {
        extend: "pdfHtml5",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
        },
      },

      {
        extend: "print",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
        },
      },
    ],
  });
  $("#residentsTbl_length").appendTo("#residentsLength");
  residentsTbl.buttons().container().appendTo("#residentsOutput");
  $("#residentsTbl_filter").appendTo("#residentsSearch");

  //for clicking view more

  function getRow(id) {
    $.ajax({
      type: "POST",
      url: "profiles_row.php",
      data: { id: id },
      dataType: "json",
      success: function (response) {
        $("#viewMore").val(response.lastName);
        $(".lastName").html(response.lastName);
        // alert (response.lastName);
      },
    });
  }
});

//JS Library for remarks
VirtualSelect.init({
  ele: "#filtering",
  hideClearButton: false,
  showValueAsTags: true,
  search: true,
});
