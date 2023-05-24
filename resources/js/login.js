$("#form-login").on('submit', function(e) {
    e.preventDefault()
    const formElement = document.getElementById('form-login')

    const formData = new FormData(formElement)
    $("#form-login button").prop('disabled', true)

    $.ajax({
        url: "/",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(res) {
            $("#form-login button").prop('disabled', false)
            window.location.reload()
        },
        error: function (error) {
            $("#error-message").text(error.responseJSON)
            $("#error-message").removeClass('hidden')
            $("#form-login button").prop('disabled', false)
        }
    })
})
