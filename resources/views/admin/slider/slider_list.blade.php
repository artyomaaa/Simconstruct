@extends('admin.layouts')
@section('title', 'slider-list')
@section('style')
        <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">
@endsection
@section('page-name', 'Slider-list')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    You can organize images by simply dragging them, holding the mouse, not the right place
                    <a href="{{route('slider-add')}}" class="btn btn-danger pull-right btn-sm" role="button"
                       style="margin: -5px;">Add new image</a>
                </div>
                <div class="panel-body" id="sortable">
                    @if(isset($images) && is_object($images))
                        @foreach($images as $image)

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail sort-thumbnail" data-sort-id="{{ $image->id }}" style="height: 150px; width: 100%;">

                                    <form action="{{ route('delete_image', ['id' => $image->id]) }}" method="post">
                                        @csrf
                                        <input type="hidden" id="hide" data-url="{{route('chnage_slider')}}" name="_method" value="DELETE">
                                        <button type="submit">
                                            <span class="glyphicon glyphicon-remove-circle"></span>

                                        </button>

                                        <!-- update start -->



                                        <!-- end update -->
                                    </form>

                                    <img  src="{{ asset('assets/images') . '/' . $image->path }}" alt="{{ $image->path }}"
                                          style="height: 100%;width: 100%;" class="img-responsive">

                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div id="load" data-sotr-order-image>
        <i class="fa fa-spinner fa-spin"></i>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/admin/js/jquery-ui.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Slider sortable
            $('#sortable').sortable({
                cursor: 'move',
                stop: function () {


                    var result = $.map($('.sort-thumbnail'), function (n) {
                        return n.attributes[1].value;
                    });
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: '/admin/slider/update-order',
                        method: 'POST',
                        data: {ids: result},
                        beforeSend: function () {
                            $('#load').addClass('load');
                        },
                        success: function (data) {
                            $('#load').removeClass('load');
                            console.log(data);
                        }
                    });
                }
            });
            $('.sort-thumbnail').on('mousedown', function () {
                $(this).css({
                    'opacity': '0.5',
                    'border': '2px dashed red'
                });
            });
            $('.sort-thumbnail').on('mouseup', function () {
                $(this).css({
                    'opacity': '1',
                    'border': 'none'
                });
            });
            // Slider sortable
        });
    </script>



@endsection