"use strict";
// Class definition

let parents = [];
let selected_parent_id = false

let KTDatatableRemoteAjax = function () {
    // Private functions

    // basic demo
    let getData = function () {

        let datatable = $('#kt_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote', source: {
                    read: {
                        url: $("#kt_datatable").attr('data-action'),
                        contentType: 'application/json',
                        method: 'GET',
                        map: function (raw) {
                            let dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data
                            }
                            return dataSet
                        },
                    },
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: true,
                serverSorting: false,
                //autoColumns: true
            },

            // layout definition
            layout: {
                scroll: true,
                footer: false,
            },

            // column sorting
            sortable: false,

            pagination: true,

            toolbar: {
                items: {
                    pagination: {
                        pageSizeSelect: [10, 20, 30, 50, 100]
                    }
                }
            },

            search: {
                //onEnter: true,
                input: $('#kt_datatable_search_query'), key: 'search',
            },

            // columns definition
            columns: [
                {
                    field: 'id',
                    title: '#',
                    sortable: 'desc',
                    width: 50,
                    type: 'number',
                    selector: false,
                    textAlign: 'center',
                },
                {
                    field: 'image',
                    title: 'Image',
                    template: function (row) {
                        let image = 'background-image:url(\'' + row.image + '\')';

                        return '<div class="d-flex align-items-center">\
								<div class="symbol symbol-40 flex-shrink-0">\
									<div class="symbol-label" style="' + image + '"></div>\
								</div>\
							</div>';
                    },
                },
                {
                    field: 'file',
                    title: 'File',
                    template: function (row) {
                        return '<a target="_blank" href="' + row.file + '">File</a>';
                    },
                },
                {field: 'title_az', title: 'Name (AZ)'},
                {field: 'title_en', title: 'Name (EN)'},
                {field: 'title_ru', title: 'Name (RU)'},
                {field: 'created_by', title: 'Created by'},
                {field: 'created_date', title: 'Created date'},
                {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function (row) {
                        return '\
                        <button onclick=\'show_edit_modal(' + row.id + ',"' + row.image + '", "' + row.file + '", "' + row.title_az + '", "' + row.title_en + '", "' + row.title_ru + '")\' class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
                            <span class="svg-icon svg-icon-md">\
                                <svg width="24px" height="24px" viewBox="0 0 24 24">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </button>\
                        <button onclick="deleteData(' + row.id + ')" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                            <span class="svg-icon svg-icon-md">\
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </button>\
                    ';
                    },
                }],
        });

        $('#parent_id_for_search').on('change', function() {
            selected_parent_id = $(this).val()
            datatable.search($(this).val(), 'parent_id')
        });
    };

    return {
        // public functions
        init: function () {
            getData();
        },
    };
}();

jQuery(document).ready(function () {
    KTDatatableRemoteAjax.init();
});

function send_data(e) {
    let action = $(e).attr('data-action-type')
    let url;

    if (action === 'update') {
        url = thisForm.attr('data-action-edit') + '/' + thisForm.attr('data-selected-row-id')
    } else {
        url = thisForm.attr('data-action-add')
    }

    let formData = new FormData()

    formData.append('_token', csrf_token)
    formData.append('image', document.getElementById("image").files[0] ?? null)
    formData.append('file', document.getElementById("file").files[0] ?? null)
    formData.append('title_az', document.getElementById("title_az").value)
    formData.append('title_en', document.getElementById("title_en").value)
    formData.append('title_ru', document.getElementById("title_ru").value)

    postData(url, formData)
}

function show_add_modal() {
    $('.modal-title').html('Add')
    $("#form_submit_button").attr('data-action-type', 'add')

    let brochure_image_div = $('#brochure_image_div')
    let default_image = brochure_image_div.attr('data-default-image')
    brochure_image_div.css('background-image', "url('" + default_image + "')")
    let brochure_file_div = $('#brochure_file_div')
    brochure_file_div.attr('href', "#")
    brochure_file_div.css('display', 'none')
    $('#image').val('')
    $('#image_remove').val('')
    $('#file').val('')
    $('#file_remove').val('')
    $('#title_az').val('')
    $('#title_en').val('')
    $('#title_ru').val('')

    $('#add-modal').modal('show')
}

function show_edit_modal(id, image, file, title_az, title_en, title_ru) {
    $('.modal-title').html('Edit')
    $("#form_submit_button").attr('data-action-type', 'update')
    thisForm.attr('data-selected-row-id', id)

    $('#brochure_image_div').css('background-image', "url('" + image + "')")
    $('#image').val('')
    $('#image_remove').val('')
    $('#brochure_file_div').attr('href', file).css('display', 'block')
    $('#title_az').val(title_az)
    $('#title_en').val(title_en)
    $('#title_ru').val(title_ru)

    $('#add-modal').modal('show')
}
