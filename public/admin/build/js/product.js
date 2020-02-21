//PREVIEW LIST IMAGE BEFORE CREATE

//function load image
function previewListImage(idInput, idPreview) {
    $(idInput).on('change', function () {
        $(idPreview).text('');
        $('#selectMainImageForProduct').text('');
        if (this.files) {
            for (i = 0; i < this.files.length; i++) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    let img = `<img class="col-md-4 col-sm-4 col-xs-4 image-in-preview-list-image" src="${e.target.result}" id="previewImage">`;
                    $(idPreview).append(img);
                };
                reader.readAsDataURL(this.files[i]);
                addOptionTo('#selectMainImageForProduct', i);
            }
        }
    });
}

//function add option to select input
function addOptionTo(idSelectInput, value) {
    let off = `<option value="${value}">Image ${value + 1}</option>`;
    $(idSelectInput).append(off);
}

//call function
previewListImage('#input-image-create-form', '#preview-list-image');

//clear error message when input change
$('input').change(function () {
    $('.errorMessage').text('');
});

//SOFT DELETE
$(document).on('click', '.softDeleteBtn', function () {
    let productId = $(this).attr('data_id');
    let url = '/admin/products/' + productId;
    let method = 'delete';
    Swal.fire({
        title: 'Are you sure?',
        text: "Product will be moved to trash",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
    }).then((result) => {
        if (result.value) {
            callAjax(url, method, null)
                .done(response => {
                    Swal.fire(
                        'Deleted!',
                        'Your product has been moved to trash.',
                        'success'
                    ).then((result) => {
                        let btn = `<button type="button"
                                class="restoreBtn btn btn-warning btn-xs"
                                data_id="${productId}"><i
                                class="fa fa-trash-o"></i> Restore
                            </button>`;
                        $(this).parent().append(btn);
                        $(this).remove();
                    })
                })
                .fail(error => {
                    showErrorMessage('Opp!', error.responseJSON.message);
                })
        }
    })
});

//RESTORE
$(document).on('click', '.restoreBtn', function () {
    let productId = $(this).attr('data_id');
    let url = '/admin/products/restore/' + productId;
    let method = 'post';
    Swal.fire({
        title: 'Are you sure?',
        text: "Product will be restore",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
    }).then((result) => {
        if (result.value) {
            callAjax(url, method, null)
                .done(response => {
                    Swal.fire(
                        'Successful!',
                        'Your product has been restored.',
                        'success'
                    ).then((result) => {
                        let btn = `<button type="button"
                                class="softDeleteBtn btn btn-success btn-xs"
                                data_id="${productId}"><i
                                class="fa fa-trash-o"></i> Move to trash
                            </button>`;
                        $(this).parent().append(btn);
                        $(this).remove();
                    })
                })
                .fail(error => {
                    showErrorMessage('Opp!', error.responseJSON.message);
                })
        }
    })
});

//REAL DELETE
$(document).on('click', '.deleteBtn', function () {
    let productId = $(this).attr('data_id');
    let url = '/admin/products/realDelete/' + productId;
    let method = 'post';
    Swal.fire({
        title: 'Are you sure?',
        text: "Product will be delete",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
    }).then((result) => {
        if (result.value) {
            callAjax(url, method, null)
                .done(response => {
                    Swal.fire(
                        'Deleted!',
                        'Your product has been delete.',
                        'success'
                    ).then((result) => {
                        $(this).parent().parent().remove();
                    })
                })
                .fail(error => {
                    showErrorMessage('Opp!', error.responseJSON.message);
                })
        }
    })
});

//SET MAIN IMAGE
$(document).on('click', '.btnSetMainImage', function () {
    let idImage = $(this).attr('data_id');
    let method = 'post';
    let data = {
        'oldMainImage': $(".isMain").attr("data_id"),
        'status': 1
    };
    Swal.fire({
        title: 'Are you sure?',
        text: "Image will be main image",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
    }).then((result) => {
        if (result.value) {
            let url = '/admin/images/updateImages/' + idImage;
            callAjax(url, method, data)
                .done(response => {
                    Swal.fire(
                        'Successful!',
                        'Your product has been moved to trash.',
                        'success'
                    ).then((result) => {
                        $('.isMain').parent().children('p').remove();
                        $('.isMain').parent().append(`<button class="btn btn-success btnSetMainImage" data_id = '${$(".isMain").attr("data_id")}'>Set main image</button>`);
                        $('.isMain').parent().append(`<i class="btnDeleteImage fa fa-times-circle" data_id = "${$(".isMain").attr("data_id")}"></i>`);
                        $('.isMain').removeClass('isMain');
                        $(this).parent().children('img').addClass('isMain');
                        $(this).parent().children('i').remove();
                        $(this).parent().append(`<p class="mainImage">MAIN IMAGE</p>`);
                        $(this).remove();
                    })
                })
                .fail(error => {
                    showErrorMessage('Opp!', error.responseJSON.message);
                })
        }
    })
});

$(document).on('click', '.btnDeleteImage', function () {
    let idImage = $(this).attr('data_id');
    let url = '../../images/' + idImage;
    let method = 'delete';
    Swal.fire({
        title: 'Are you sure?',
        text: "Image will be delete",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
    }).then((result) => {
        if (result.value) {
            callAjax(url, method, null)
                .done(response => {
                    Swal.fire(
                        'Successful!',
                        'Your image has been deleted.',
                        'success'
                    ).then((result) => {
                        $(this).parent().remove();
                    })
                })
                .fail(error => {
                    showErrorMessage('Opp!', error.responseJSON.message);
                })
        }
    })
});

//ADD images on edit form
$('#input-image-edit-form').on('change', function () {
    if (this.files) {
        let fd = new FormData();
        fd.append('product_id', $(this).attr('product_id'));

        for (i = 0; i < this.files.length; i++) {
            fd.append('images[]', this.files[i], 'image' + i + '.jpg');
        }
        uploadMultiImageWith(this, '#preview-list-image', fd);
    }
});

//upload mutti image ajax
function uploadMultiImageWith(input, idPreview, fb) {
    let method = 'post';
    let url = '../../images/uploadMultiImage';
    callAjaxUpload(url, method, fb)
        .done(response => {
            Swal.fire(
                'Successful!',
                'Your images has been added to list image.',
                'success'
            ).then((result) => {
                let arrImage = response.data;
                for (i = 0; i < arrImage.length; i++) {
                    var reader = new FileReader();
                    id = arrImage[i]['id'];
                    reader.onload = function (e) {
                        let div = `<div class="col-md-4 col-sm-4 col-xs-4 showImage">
                                                        <img class="img-in-preview-list-edit-form" src="${e.target.result}" data_id = "${id}">
                                                        <button class="btn btn-success btnSetMainImage" data_id = "${id}">Set main image</button>
                                                        <i class="btnDeleteImage fa fa-times-circle" data_id = "${id}"></i>
                                                    </div>`;
                        $(idPreview).append(div);
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            });
        })
        .fail(error => {
            showErrorMessage('Opp!', error.responseJSON.message);
        })
}
