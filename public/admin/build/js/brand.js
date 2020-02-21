//variable
var idEditBrand;
var idDeleteBrand;

//function append table
function prepend(response) {
    let tbody = $('.tbody');
    let name = response.data.name;
    let image = response.pathImage;
    let description = response.data.description;
    let created_at = response.data.created_at;
    let email = response.data.email;
    let id = response.data.id;
    let tr = `<tr>
                                        <th class="stt"></th>
                                        <td>
                                            <a id="name${id}">${name}</a>
                                            <br/>
                                            <small>Created ${created_at}</small>
                                        </td>
                                        <td>
                                            <img src="${image}" width="100px" height="100px" id="image${id}">
                                        </td>
                                        <td>
                                            <ul class="list-inline">
                                                <p id="description${id}">${description}</p>
                                            </ul>
                                        </td>
                                        <td>
                                            <a id="email${id}">${email}</a>
                                            <br/>
                                        </td>
                                        <td>
                                            <button type="button" class="editBtn btn btn-info btn-xs"
                                                    data-toggle="modal" data-target=".bs-example-modal-lg1"
                                                    data_name="${name}"
                                                    data_image="${image}"
                                                    data_description="${description}"
                                                    data_email="${email}"
                                                    data_id="${id}" id="btnEdit${id}"><i
                                                    class="fa fa-pencil"></i> Edit
                                            </button>
                                            <button type="button" class="deleteBtn btn btn-danger btn-xs"
                                                    data_id="${id}"><i class="fa fa-trash-o"></i> Delete
                                            </button>
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

//CREATE BRAND

//preview image before upload
previewImage('#input-image-create-form', '#previewImage');

//function call ajax to upload form
$('#btnCreateBrand').click(function (event) {
    event.preventDefault();
    let dataResource = new FormData($('#createForm')[0]);
    let urlResource = '/admin/brands';
    let method = 'post';
    callAjaxUpload(urlResource, method, dataResource)
        .done(response => {
            Swal.fire({
                icon: 'success',
                title: 'OK',
                text: 'Create brand successful',
            })
            prepend(response);
            reloadOrderOfTableBody();
            if ($('tbody tr').length == 6) {
                $('tbody tr:last-child').remove();
            }
        })
        .fail(error => {
            show_error_and_focus_on_form('-create-form', error.responseJSON.errors);
            showErrorMessage('Opp!', 'Create brand fail');
        })
});

// EDIT BRAND...

//preview image before edit
previewImage('#input-image-edit-form', '#preview-Image-edit-form');

//load data resource to form edit
$(document).on('click', '.editBtn', function (event) {
    let name = $(this).attr('data_name');
    let image = $(this).attr('data_image');
    let description = $(this).attr('data_description');
    let email = $(this).attr('data_email');
    let id = $(this).attr('data_id');
    $('#input-name-edit-form').val(name);
    $('#preview-Image-edit-form').attr('src', image);
    $('#input-description-edit-form').text(description);
    $('#input-email-edit-form').val(email);
    idEditBrand = $(this).attr('data_id');
});

//load data to tr before edit
function loadDataToTr(response) {
    let nameOfResource = response.data.name;
    let imageOfResource = response.pathImage;
    let descriptionOfResource = response.data.description;
    let emailOfResource = response.data.email;
    let nameId = '#name' + idEditBrand;
    let imageId = '#image' + idEditBrand;
    let descriptionId = '#description' + idEditBrand;
    let emailId = '#email' + idEditBrand;
    let btnEditId = '#btnEdit' + idEditBrand;
    $(nameId).text(nameOfResource);
    $(imageId).attr('src', imageOfResource);
    $(descriptionId).text(descriptionOfResource);
    $(emailId).text(emailOfResource);
    $(btnEditId).attr('data_name', nameOfResource);
    $(btnEditId).attr('data_image', imageOfResource);
    $(btnEditId).attr('data_description', descriptionOfResource);
    $(btnEditId).attr('data_email', emailOfResource);
}

//function call ajax to edit brand
$('#submitEditForm').click(function (event) {
    event.preventDefault();
    let dataResource = new FormData($('#editForm')[0]);
    let urlResource = '/admin/brands/' + idEditBrand;
    let method = 'post';
    console.log(dataResource);
    callAjaxUpload(urlResource, method, dataResource)
        .done(response => {
            Swal.fire({
                icon: 'success',
                title: 'OK',
                text: 'Edit brand successful',
            }).then((result) => {
                loadDataToTr(response);
            })
        })
        .fail(error => {
            show_error_and_focus_on_form('-edit-form', error.responseJSON.errors);
            showErrorMessage('Opp!', 'Edit brand fail');
        })
});

//DELETE BRAND
$(document).on('click', '.deleteBtn', function (event) {
    idDeleteBrand = $(this).attr('data_id');
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
            let url = '/admin/brands/' + idDeleteBrand;
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
                    console.log(error);
                    showErrorMessage('Opp!', error.responseJSON.message);
                })
        }
    })
});
