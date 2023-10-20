$(document).ready(function () {


    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#sign_in').click(function (e) {
        e.preventDefault();
        var form = new FormData($('#admin_login_form')[0]);
        $.ajax({
            url: "/login",
            data: form,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            datatype: "json",
            success: function (response) {
                window.location.href = 'admin/dashboard';
            },
            error: function (response) {
                window.location.href = '/error';
                // let errors = JSON.parse(response.responseText);
                // $.each(errors.body, function (key, value) {
                //     console.log(key, value);
                //     $('.' + key + '-error').text(value[0]);
                // });

            },
        })
    });


    $('#message_btn,#comment_btn').click(function (e) {

        $('.loading').css('display', 'inline-block');
        e.preventDefault();
        var form = new FormData($('.comment_form')[0]);
        $.ajax({
            url: "/comment",
            data: form,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            datatype: "json",
            success: function (response) {
                console.log(response);
                // window.location.reload();
                $('#comment_view').modal('show');
                $("#myModal2").modal('hide');
                $('.loading').css('display', 'none');
                // if ( $('.preloader').length ){
                //
                //         $('.preloader').delay(500).fadeOut('slow');
                //         $('body').delay(500).css({'overflow':'visible'});
                //
                // }


            },
            error: function (response) {
                // window.location.href = '/error';
                $('.loading').css('display', 'none');
                let errors = JSON.parse(response.responseText);
                $.each(errors.body, function (key, value) {
                    console.log(key, value);
                    $('.' + key + '-error').text(value[0]);
                });

            },
        })
    });

    $('#add_project').click(function (e) {
        e.preventDefault();
        var form = new FormData($('#form_projects')[0]);

        $.ajax({
            url: "/admin/project",
            data: form,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            datatype: "json",
            success: function (response) {
                console.log(response);
                window.location.reload();
            },
            error: function (response) {
                // window.location.href = '/error';
                let errors = JSON.parse(response.responseText);
                $.each(errors.body, function (key, value) {
                    console.log(key, value);
                    $('.' + key + '-error').text(value[0]);
                });

            },
        })
    });

    $('#edit_project_btn').click(function (e) {


        e.preventDefault();
        var form = new FormData($('#form_projects_edit')[0]);
        var id = $('#indetifi').val();
        $.ajax({
            url: "/admin/project/update/" + id,
            data: form,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            datatype: "json",
            success: function (response) {
                console.log(response);
                window.location.reload();
            },
            error: function (response) {
                // window.location.href = '/error';
                let errors = JSON.parse(response.responseText);
                $.each(errors.body, function (key, value) {
                    console.log(key, value);
                    $('.' + key + '-error').text(value[0]);
                });

            },
        })
    });

    $('#add_project_image_btn').click(function (e) {

        e.preventDefault();
        var form = new FormData($('#form_projects_image')[0]);


        $.ajax({
            url: "/admin/project-image",
            data: form,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            datatype: "json",
            success: function (response) {
                console.log(response);
                window.location.reload();
            },
            error: function (response) {
                // window.location.href = '/error';
                let errors = JSON.parse(response.responseText);
                $.each(errors.body, function (key, value) {
                    console.log(key, value);
                    $('.' + key + '-error').text(value[0]);
                });

            },
        })
    });

    $('#offers_btn').click(function (e) {
        $('.loading').css('display', 'inline-block');
        e.preventDefault();
        var form = new FormData($('#offers_form')[0]);
        $.ajax({
            url: "/admin/offer-add",
            data: form,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            datatype: "json",
            success: function (response) {
                $('.loading').css('display', 'none');
                console.log(response);
                window.location.reload();
            },
            error: function (response) {
                // window.location.href = '/error';
                $('.loading').css('display', 'none');
                let errors = JSON.parse(response.responseText);
                $.each(errors.body, function (key, value) {
                    console.log(key, value);
                    $('.' + key + '-error').text(value[0]);
                });

            },
        })
    });

    // $(document).on('click', '#edit_offer_btn', function (e) {
    //     // $('#edit_offer_btn').click(function (e) {
    //     e.preventDefault();
    //     var form = new FormData($('#offers_form')[0]);
    //     // var id = $(this).attr('data-id');
    //
    //
    //     $.ajax({
    //         url: "/admin/offer-update/" + id,
    //         data: form,
    //         type: "post",
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         datatype: "json",
    //         success: function (response) {
    //             console.log(response);
    //             // window.location.reload();
    //         },
    //         error: function (response) {
    //             // window.location.href = '/error';
    //             let errors = JSON.parse(response.responseText);
    //             $.each(errors.body, function (key, value) {
    //                 console.log(key, value);
    //                 $('.' + key + '-error').text(value[0]);
    //             });
    //
    //         },
    //     })
    // });
    //

});

// function initMap() {
//     var myLatLng = {lat: 40.19018119119121, lng: 44.52347854919765};
//     var map = new google.maps.Map(document.getElementById('map'), {
//         scrollwheel: true,
//         center: myLatLng,
//         zoom: 19
//     });
//     var marker = new google.maps.Marker({
//         map: map,
//         position: myLatLng,
//         title: 'IT TALENTS'
//     })
// }

