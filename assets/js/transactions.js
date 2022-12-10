$(document).ready(function () {
  $(".checkAllDiv").click(function () {
    if ($("#deselectAll").hasClass("d-none")) {
      $("#deselectAll").removeClass("d-none");
      $("#selectAll").addClass("d-none");
      $(".checkItem").each(function () {
        $(this).prop("checked", true);
      });
    } else {
      $(".checkAllDiv").addClass("checked");
      $("#deselectAll").addClass("d-none");
      $("#selectAll").removeClass("d-none");
      $(".checkItem").each(function () {
        $(this).prop("checked", false);
      });
    }
  });

  //DataTable
  var table = $("#transactionsTbl").DataTable({
    buttons: ["copy", "csv", "excel", "pdf", "print"],
    responsive: true,
    bFilter: true,
    bInfo: false,
    columnDefs: [
      { width: "10%", targets: 0 },
      { width: "30%", targets: 1 },
    ],
  });

  $("#transactionsTbl_length").appendTo("#transactionsLength");
  table.buttons().container().appendTo("#transactionsOutput");
  $("#transactionsTbl_filter").appendTo("#transactionsSearch");

  //JS Library for Filter remarks
  VirtualSelect.init({
    ele: "#filtering",
    hideClearButton: true,
    disableSelectAll: true,
  });
});
