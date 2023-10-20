$(document).ready(function () {

    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery('#slider_btn').click(function (e) {
        e.preventDefault();
        var form= new FormData($('#slider_image_form')[0]);
        jQuery.ajax({
            url: '/admin/slider-add',
            data: form,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            datatype: "json",
            beforeSend: function () {
                $('#load').addClass('load');
            },
            success: function (response) {
                $('#load').hide();
                console.log(response);
                window.location.href = '/admin/slider';
            },

            error: function (response) {
                let errors = JSON.parse(response.responseText);
                jQuery.each(errors.body, function (key, value) {
                    console.log(key, value);
                    jQuery('.' + key + '-error').text(value[0]);
                });

            },
        })
    });

    $('#delete_btn').click(function (e) {
        alert(123);

        // var form= new FormData($('#del_image_form')[0]);

        e.preventDefault();

        var id = $('#del_image_id').val();
        // jQuery.ajax({
        //     url: '/admin/slider-delete'+id,
        //     data: form,
        //     type: "POST",
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     datatype: "json",
        //     // beforeSend: function () {
        //     //     $('#load').addClass('load');
        //     // },
        //     success: function (response) {
        //         console.log(response);
        //         // $('#load').hide();
        //         // window.location.reload();
        //     },
        //     error: function (response) {
        //         let errors = JSON.parse(response.responseText);
        //         jQuery.each(errors.body, function (key, value) {
        //             console.log(key, value);
        //             jQuery('.' + key + '-error').text(value[0]);
        //         });
        //
        //     },
        // })
    });

});