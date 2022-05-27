"use strict";
// Class definition

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
                                dataSet = raw.data;
                            }
                            return dataSet;
                        },
                    },
                },
                serverPaging: false,
                serverFiltering: false,
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

            pagination: false,

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
                {field: 'title', title: 'Title'},
                {
                    field: 'logo',
                    title: 'Logo',
                    template: function (row) {
                        let logo = 'background-image:url(\'' + row.logo + '\')';

                        return '<div class="d-flex align-items-center">\
								<div class="symbol symbol-40 flex-shrink-0">\
									<div class="symbol-label" style="' + logo + '"></div>\
								</div>\
							</div>';
                    },
                },
                {field: 'phone', title: 'Phone'},
                {field: 'email', title: 'E-mail'},
                {field: 'address', title: 'Address'},
                {field: 'meta_keywords', title: 'Meta keywords'},
                {field: 'meta_description', title: 'Meta description'},
                {field: 'google_site_verification', title: 'Google site verification'},
                {field: 'updated_by', title: 'Last updated by'},
                {field: 'updated_date', title: 'Last updated date'},
                {
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 125,
                    overflow: 'visible',
                    autoHide: false,
                    template: function (row) {
                        return '\
                        <button onclick=\'show_edit_modal("' + row.logo + '", "' + row.title + '", "' + row.phone + '", "' + row.email + '", "' + row.address + '", "' + row.meta_keywords + '","' + row.meta_description + '", "' + row.google_site_verification + '")\' class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
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
                    ';
                    },
                }],
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
    let url = thisForm.attr('data-action-edit')

    let formData = new FormData()

    formData.append('_token', csrf_token)
    formData.append('logo', document.getElementById("logo").files[0] ?? null)
    formData.append('title', document.getElementById("title").value)
    formData.append('phone', document.getElementById("phone").value)
    formData.append('email', document.getElementById("email").value)
    formData.append('address', document.getElementById("address").value)
    formData.append('meta_keywords', document.getElementById("meta_keywords").value)
    formData.append('meta_description', document.getElementById("meta_description").value)
    formData.append('google_site_verification', document.getElementById("google_site_verification").value)

    postData(url, formData)
}

function show_edit_modal(logo, title, phone, email, address, meta_keywords, meta_description, google_site_verification) {
    $('.modal-title').html('Edit')

    $('#logo_div').css('background-image', "url('" + logo + "')")
    $('#logo').val('')
    $('#logo_remove').val('')
    $('#title').val(title)
    $('#phone').val(phone)
    $('#email').val(email)
    $('#address').val(address)
    $('#meta_keywords').val(meta_keywords)
    $('#meta_description').val(meta_description)
    $('#google_site_verification').val(google_site_verification)

    $('#add-modal').modal('show')
}
