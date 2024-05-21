$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

window.addEventListener ( 'close-modal', event => {
    $ ( ".btn-close" ).click ();
} );

window.addEventListener ( 'reload', event => {
    location.reload();
} );

window.addEventListener ( 'reset-form', event => {
    document.getElementById ( event.detail.formId ).reset ();
} );

function swalConfirmDelete(data) {
    Swal.fire({
        title: "Are you sure?",
        // text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes, I'm Confirm!"
    }).then(function (e) {
        if (e.value) {
            $.ajax({
                url: data.routeName,
                method: data.method,
                // data: data.postData,
            }).done(function (response) {
                Swal.fire("Done!", "Operation Successful", "success");
                location.reload();
            })
        }
    })
}

window.addEventListener('swal', event => {
    switch (event.detail.type) {
        case 'confirm':
            swalConfirmDelete(event.detail);
            break;
    }
})

window.addEventListener ( 'notify', event => {
    let type = !event.detail || !event.detail.type ? 'success' : event.detail.type;
    let message;

    switch (type) {
        case 'success':
            message = event.detail.message || 'Operation successful';
            break;
        case 'warning':
            message = event.detail.message || 'Warning';
            break;
        case 'error':
            message = event.detail.message || 'Danger';
            break;
        default:
            message = event.detail.message || 'Well done!';
    }
    toastr[type] ( message )
} );
