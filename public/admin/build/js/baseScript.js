$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function callAjax(url, method, data) {
    return $.ajax({
        url: url,
        type: method,
        data: data,
    });
}

function callAjaxUpload(url, method, data) {
    return $.ajax({
        url: url,
        type: method,
        data: data,
        dataType: 'json',
        processData: false,
        contentType: false,
    });
}

function showErrorMessage(title, text) {
    Swal.fire({
        icon: 'error',
        title: title,
        text: text,
    });
}

function showSuccessMessage(title, text) {
    Swal.fire({
        icon: 'success',
        title: title,
        text: text,
    });
}

function showWarningMessage(title, text) {
    Swal.fire({
        icon: 'warning',
        title: title,
        text: text,
    });
}

function showInfoMessage(title, text) {
    Swal.fire({
        icon: 'info',
        title: title,
        text: text,
    });
}

function showQuestionMessage(title, text) {
    Swal.fire({
        icon: 'question',
        title: title,
        text: text,
    });
}

//clear error message when input change
$('input').change(function () {
    $('.error').text('');
});

//clear error message when textarea change
$('textarea').change(function () {
    $('.error').text('');
});

//show error on form and focus (id error like error-...-suffixes)
function show_error_and_focus_on_form(suffixes, arr) {
    for (var key in arr) {
        $('#error-' + key+suffixes).text(arr[key]);
    }
    let keys = Object.keys(arr);
    $('#input-'+keys[0]+suffixes).focus();
}

//preview image
function previewImage(idInput, idPreview) {
    $(idInput).on('change', function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(idPreview).attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
}

//reload tr after edit
function reloadTrWith(response, idResource) {
    for (let key in response) {
        $('#tr-'+key+'-'+idResource).text(response[key]);
    }
}

//reload btn after edit
function reloadBtnWith(response, idResource) {
    for (let key in response) {
        $('#btnEdit'+idResource).attr('data_'+key, response[key]);
    }
}
