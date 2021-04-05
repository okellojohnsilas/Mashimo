$(document).ready(function () {
    // Datatables for searching database
    $('#userDataTable').DataTable({
        paging: false, language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Users Here..."
        }
    }); 
    // Activate User Modal
    $('.activateUser').on('click', function () {
        $('#activateUserModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        $('#activateUserId').val(data[1]);
    });
    // Deactivate User Modal
    $('.deactiveUser').on('click', function () {
        $('#deactiveUserModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        $('#deactiveUserId').val(data[1]);
    });
});   