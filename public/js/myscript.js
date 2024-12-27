$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });
    $(document).ajaxError(function (event, jqxhr, settings, thrownError) {
        if (jqxhr.status === 401) {
            window.location = "/";
        }

        if (jqxhr.status === 419 ) {
            alert('Token đã hết hạn!!!');
            window.location = "";
        }
    });
    function show_message(message, status = 'success', title = '') {
        var text_html = '';
        if (message) {
            if(Array.isArray(message)){
                for(var i = 0; i < message.length; i++){
                    text_html += '<p>'+ message[i] +'</p>';
                };
            }else{
                text_html = message;
            }

            Swal.fire({
                'title': title,
                'html': text_html,
                'type': status,
                icon: status,
                'timer': 1500,
            });
        }
    }

    $('body').on('submit', '.form-ajax', function(event) {
        if (event.isDefaultPrevented()) {
            return false;
        }

        event.preventDefault();
        var form = $(this).closest('form');
        var formData = new FormData(form[0]);
        var btnsubmit = form.find("button:focus");
        var oldText = btnsubmit.text();
        var currentIcon = btnsubmit.find('i').attr('class');
        var submitSuccess = form.data('success');
        var exists = btnsubmit.find('i').length;
        if (exists>0)
            btnsubmit.find('i').attr('class', 'fa fa-spinner fa-spin');
        else
            btnsubmit.html('<i class="fa fa-spinner fa-spin"></i>'+oldText);

        btnsubmit.prop("disabled", true);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            dataType: 'json',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        }).done(function(data) {

            if (data.status == 'error'){
                Swal.fire({
                    type: data.status,
                    html: data.message,
                    icon: data.status,
                    focusConfirm: false,
                    confirmButtonText: "OK",
                }).then((result) => {
                    if (result.value) {
                        if (data.redirect) {
                            if(data.redirect === 'reload'){
                                window.location.reload();
                            } else {
                                window.location = data.redirect
                            }
                        }
                        return false;
                    }
                });
            }else{
                show_message(
                    data.message,
                    data.status
                );

                if (data.redirect) {
                    setTimeout(function () {
                        if(data.redirect === 'reload'){
                            window.location.reload();
                        } else {
                            window.location = data.redirect
                        }
                    }, 1000);
                    return false;
                }
            }

            if (exists>0)
                btnsubmit.find('i').attr('class', currentIcon);
            else
                btnsubmit.html(oldText);
            btnsubmit.prop("disabled", false);

            if (data.status === "error") {
                return false;
            }

            if (submitSuccess) {
                eval(submitSuccess)(form);
            }

            return false;
        }).fail(function(data) {
            if (exists>0)
                btnsubmit.find('i').attr('class', currentIcon);
            else
                btnsubmit.html(oldText);
            btnsubmit.prop("disabled", false);

            show_message('Lỗi dữ liệu', 'error');
            return false;
        });
    });
});
