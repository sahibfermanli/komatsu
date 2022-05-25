function form_submit_message(message, thisModal = "#add-modal", reload = true, modal_close = true) {
    if (modal_close) {
        $(thisModal)
            .modal('hide')
    }
    swal({
        position: 'top-end',
        type: 'success',
        title: message,
        showConfirmButton: false,
        timer: 1500
    })
    if (reload) {
        $('#kt_datatable').KTDatatable().destroy();
        KTDatatableRemoteAjax.init();
    }
}

function form_error_meesage(errors) {
    let validation_message = '';
    $.each(errors, function (key, value) {
        $.each(value, function (key2, value2) {
            validation_message += "<b>" + key +  "</b>" + ": " + value2 + '<br>';
        });
    });
    swal(
        'Validation error!',
        validation_message,
        'warning'
    )
}

function fill_select(datas, select_id, default_title = "None", selected = false) {
    let options = '<option value="">' + default_title + '</option>'
    for (let i = 0; i < datas.length; i++) {
        let data = datas[i]
        options += '<option value="' + data.id + '">' + data.title + '</option>>'
    }
    let thisSelect = $("#" + select_id)
    thisSelect.html(options)

    if (selected) {
        thisSelect.val(selected);
    }
}
