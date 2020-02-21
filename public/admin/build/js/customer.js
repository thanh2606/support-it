//variable
var idEdit;
var idDelete;

//function clear message error when open modal
$('.createResource').click(function () {
    $('.error').text('');
});

//CREATE CUSTOMER
$('#postResource').click(function (event) {
    event.preventDefault();
    let dataResource = $('#createResourceForm').serialize();
    let urlResource = '/admin/user-account';
    callAjax(urlResource, 'post', dataResource)
        .done(response => {
            Swal.fire({
                icon: 'success',
                title: 'OK',
                text: 'Create customer successful',
            }).then((result) => {
                $('#session-table').html(response);
            })
        })
        .fail(error => {
            show_error_and_focus_on_form('-create-form', error.responseJSON.errors);
            showErrorMessage('Opp!', 'Create category fail');
        })
});

//DELETE CUSTOMER
$(document).on('click', '.deleteBtn', function (event) {
    let method = 'delete';
    idDelete = $(this).attr('data_id');
    let url = '/admin/users/' + idDelete;
    Swal.fire({
        icon: 'question',
        title: 'warring',
        text: 'The customer account will be destroyed. Are you sure?',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value)
            callAjax(url, method, null)
                .done(response => {
                    Swal.fire({
                        icon: 'success',
                        title: 'OK',
                        text: response.message,
                    }).then((result) => {
                        $('#session-table').html(response);
                    })
                })
                .fail(error => {
                    showErrorMessage('Opp!', 'Delete customer is fail');
                })
    })
});
