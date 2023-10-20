@extends('admin.layouts')
@section('title', 'slider-image-add')
@section('style')
    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">
@endsection
@section('page-name', 'Slider-add')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">

            <form action="" method="post" role="form" enctype="multipart/form-data" id="slider_image_form">

                <div class="form-group">
                    <label for="add-image">New image</label>
                    <input type="file" name="path[]" id="add-image" multiple class="filestyle" data-buttonBefore="true"
                           data-buttonName="btn-danger">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" id="slider_btn">Add images</button>
                </div>

                <!-- update start -->


                <!-- end update -->
            </form>

        </div>

    </div>
    <div id="load" data-sotr-order-image>
        <i class="fa fa-spinner fa-spin"></i>
    </div>

@endsection
@section('script')
    <script src="{{asset('assets/admin/js/slider.js')}}"></script>
@endsection