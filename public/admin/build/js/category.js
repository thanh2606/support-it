//variable
var idEditCategory;
var idDeleteCategory;

//function append table
function prepend(response) {
    let tbody = $('.tbody');
    let name = response.data.name;
    let description = response.data.description;
    let created_at = response.data.created_at;
    let id = response.data.id;
    let tr = `<tr>
                                            <th class='stt'></th>
                                            <td>
                                                <a id="name${id}">${name}</a>
                                                <br/>
                                                <small>Created ${created_at}</small>
                                            </td>
                                            <td>
                                                <ul class="list-inline">
                                                    <p id="description${id}">${description}</p>
                                                </ul>
                                            </td>
                                            <td>
                                                <button type="button" class="editCategoryBtn btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1" data_name="${name}" data_description="${description}" data_id="${id}" id = "btnEdit${id}"><i class="fa fa-pencil"></i> Edit </button>
                                                <button type="button" class="deleteCategoryBtn btn btn-danger btn-xs" data_id ="${id}"><i class="fa fa-trash-o"></i> Delete </button>
                                            </td>
                                        </tr>`;
    tbody.prepend(tr);
}

//function reload tr of tableBody
function reloadOrderOfTableBody() {
    $("tr .stt").each(function (i) {
        $(this).text(i + 1);
        i++;
    });
}

//clear error message when click add category
$('.showFormCreateBtn').click(function () {
    $('.error').text('');
});

//CREATE CATEGORY
$('#postCategory').click(function (event) {
    event.preventDefault();
    let dataResource = $('#createResourceForm').serialize();
    let urlResource = '/admin/categories';
    callAjax(urlResource, 'post', dataResource)
        .done(response => {
            Swal.fire({
                icon: 'success',
                title: 'OK',
                text: 'Create category successful',
            }).then((result) => {
                if (result.value) {
                    prepend(response);
                    reloadOrderOfTableBody();
                    if($('tbody tr').length == 6){
                        $('tbody tr:last-child').remove();
                    }
                }
            })
        })
        .fail(error => {
            show_error_and_focus_on_form('-create-form', error.responseJSON.errors);
            showErrorMessage('Opp!', 'Create category fail');
        })
});

//EDIT CATEGORY
//function load data to form
$(document).on('click', '.editCategoryBtn', function (event) {
    $('.errorEdit').text('');
    let name = $(this).attr('data_name');
    let description = $(this).attr('data_description');
    let id = $(this).attr('data_id');
    $('#input-name-edit-form').val(name);
    $('#input-description-edit-form').text(description);
    idEditCategory = $(this).attr('data_id');
});

//function load data to tr after call ajax done
function loadDataToTr(response, idEditCategory) {
    let nameOfResource = response.data.name;
    let descriptionOfResource = response.data.description;
    let nameId = '#name' + idEditCategory;
    let descriptionId = '#description' + idEditCategory;
    let btnEditId = '#btnEdit' + idEditCategory;
    $(nameId).text(nameOfResource);
    $(descriptionId).text(descriptionOfResource);
    $(btnEditId).attr('data_name', nameOfResource);
    $(btnEditId).attr('data_description', descriptionOfResource);
}

//function call ajax edit category
$(document).on('click', '#postEditCategory', function (event) {
    event.preventDefault();
    let dataResource = $('#editResourceForm').serialize();
    let url = '/admin/categories/' + idEditCategory;
    callAjax(url, 'patch', dataResource)
        .done(response => {
            Swal.fire({
                icon: 'success',
                title: 'OK',
                text: 'Update category successful',
            })
                .then((result) => {
                    if (result.value) {
                        loadDataToTr(response, idEditCategory);
                    }
                })
        })
        .fail(error => {
            show_error_and_focus_on_form('-edit-form', error.responseJSON.errors);
            showErrorMessage('Opp!', 'Update category fail');
        })
});

//DELETE CATEGORY
$(document).on('click', '.deleteCategoryBtn', function (event) {
    idDeleteCategory = $(this).attr('data_id');
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
            let url = '/admin/categories/' + idDeleteCategory;
            callAjax(url, 'delete', null)
                .done(response => {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ).then((result) => {
                        $(this).parent().parent().remove();
                    })
                })
                .fail(error => {
                    showErrorMessage('Opp!', 'Delete category fail');
                })
        }
    })
});
