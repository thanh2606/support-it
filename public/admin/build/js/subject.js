//variable
var idDelete;

//DELETE SUBJECT
$(document).on('click', '.deleteBtn', function (event) {
    idDelete = $(this).attr('data_id');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            let url = '/admin/subjects/' + idDelete;
            callAjax(url, 'delete', null)
                .done(response => {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ).then((result) => {
                        $('#session-table').html(response);
                    })
                })
                .fail(error => {
                    showErrorMessage('Opp!', 'Delete category fail');
                })
        }
    })
});
