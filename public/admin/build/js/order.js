//variable
var idDelete;

//Delete order
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
            let url = '/admin/orders/' + idDelete;
            callAjax(url, 'delete', null)
                .done(response => {
                    Swal.fire(
                        'Deleted!',
                        response.message,
                        'success'
                    ).then((result) => {
                        $(this).parent().parent().remove();
                    })
                })
                .fail(error => {
                    console.log(error);
                    showErrorMessage('Opp!', error.responseJSON.message);
                })
        }
    })
});
