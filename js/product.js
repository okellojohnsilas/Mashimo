$(document).ready(function () {
  // Datatables for searching for Products in database
  $('#productsDatatable').DataTable({
    paging: false, language: {
      search: "_INPUT_",
      searchPlaceholder: "Search Products Here...."
    }
  });
  //Delete Products modal
  $('.deleteProduct').on('click', function () {
    $('#deleteProductModal').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function () {
      return $(this).text();
    }).get();
    // Delete Modal Title
    $('#deleteProductTitle').val(data[3]);
    $('#deleteProductId').val(data[1]);
    $('#deleteProductName').val(data[3]);
    $('#deleteProductCategoryName').val(data[4]);
  });
});