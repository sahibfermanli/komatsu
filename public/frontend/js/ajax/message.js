function send_data(url) {
    let formData = new FormData()
    let csrf_token = $('meta[name="csrf-token"]').attr('content')

    formData.append('_token', csrf_token)
    formData.append('full_name', document.getElementById("full_name").value)
    formData.append('email', document.getElementById("email").value)
    formData.append('phone', document.getElementById("phone").value)
    formData.append('message', document.getElementById("message").value)

    postData(url, formData, false, false, true)
}
