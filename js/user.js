$(document).ready(function () {
    // Datatables for searching database
    $('#userDataTable').DataTable({
        paging: false, language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Users Here..."
        }
    });
    // Edit User Modal
    $('.editUser').on('click', function () {
        $('#editUserModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        // Edit User Title
        $('#editUserNameTitle').val(data[4]);
        // console.log(data);
        $('#userId').val(data[1]);
        $('#firstName').val(data[2]);
        $('#lastName').val(data[3]);
        $('#userName').val(data[4]);
        $('#emailAddress').val(data[5]);
        $('#dateOfBirth').val(data[6]);
        $('#userType').val(data[7]);
    });
    $('.deleteUser').on('click', function () {
        $('#deleteUserModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        // Edit User Title
        $('#deleteUserNameTitle').val(data[4]);
        // console.log(data);
        $('#deleteUserId').val(data[1]);
        $('#userName').val(data[4]);
    });
});   