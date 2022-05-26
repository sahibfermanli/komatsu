function sendRequest(url, method = "POST", data = null) {
    swal({
        title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Please wait...</span>',
        text: 'Loading, please wait...',
        showConfirmButton: false
    })

    let request = new XMLHttpRequest();

    request.open(method, url, true);

    request.setRequestHeader("Content-Type", "application/json");
    request.setRequestHeader("Accept", "application/json");

    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            swal.close()
            let jsonData = JSON.parse(request.response);

            if(request.status === 200) {
                form_submit_message(jsonData.message)
            } else if (request.status === 422) {
                form_error_meesage(jsonData.errors)
            } else {
                swal(
                    'Oops!',
                    'Server error!',
                    'error'
                )
            }
        }
    };

    request.send(data);
}

function deleteData(id) {
    swal({
        title: "Are you sure you want to delete?",
        type: 'warning',
        showCancelButton: true,
        cancelButtonText: 'No',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!'
    })
        .then(function (result) {
            if (result.value) {
                let url = thisForm.attr('data-action-delete') + "/" + id;
                let data = JSON.stringify({
                    "_token": csrf_token
                });

                sendRequest(url, "DELETE", data)
            } else {
                return false
            }
        })
}

function postData(url, formData) {
    swal({
        title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Please wait...</span>',
        text: 'Loading, please wait...',
        showConfirmButton: false
    })

    axios.post(url, formData, {
        headers: {
            'Content-Type': 'multipart/form-data',
            'Accept': 'application/json'
        }
    })
        .then(function (resp) {
            swal.close()
            if (resp.status === 200) {
                form_submit_message(resp.data.message)
            } else {
                swal(
                    'Oops!',
                    'Server error!',
                    'error'
                )
            }
        })
        .catch(function (resp) {
            swal.close()
            let response = resp.response
            if (response.status === 422) {
                form_error_meesage(response.data.errors)
            } else {
                swal(
                    'Oops!',
                    'Server error!',
                    'error'
                )
            }
        })
}
