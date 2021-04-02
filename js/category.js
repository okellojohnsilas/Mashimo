$(document).ready(function () {
    // Datatables for Category searching in database
    $('#categoryDataTable').DataTable({
        paging: false, language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Category Here...."
        }
    });
    // Delete Category Modal
    $('.deleteCategory').on('click', function () {
        $('#deleteCategoryModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        // Modal Title
        $('#deleteCategoryModalTitle').val(data[2]);
        $('#deleteCategoryId').val(data[1]);
        $('#deleteCategoryName').val(data[2]);
    });
});