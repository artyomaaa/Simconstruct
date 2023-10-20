@extends('admin.layouts')
@section('title', 'admin-list')
@section('style')

    {{--    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">--}}
@endsection
@section('page-name', 'offer-add')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <form id="offers_form" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="title_es">title_es</label>
                    <input type="text" name="title_es" value="" id="title_es" class="form-control"
                           placeholder="Enter Title_es*">
                    <span class="error title_es-error"></span>
                </div>
                <div class="form-group">
                    <label for="title_eng">title_eng</label>
                    <input type="text" name="title_eng" value="" id="title_eng" class="form-control"
                           placeholder="Enter Title_eng*">
                    <span class="error title_eng-error"></span>
                </div>
                <div class="form-group">
                    <label for="text_es">text_es</label>
                    <input type="text" name="text_es" value="" id="title_es" class="form-control"
                           placeholder="Enter Text_es*">
                    <span class="error text_es-error"></span>
                </div>
                <div class="form-group">
                    <label for="text_es">text_eng</label>
                    <input type="text" name="text_eng" value="" id="title_eng" class="form-control"
                           placeholder="Enter Text_eng*">
                    <span class="error text_eng-error"></span>
                </div>
                <div class="form-group">
                    <label for="icone">Icone</label>
                    <input type="text" name="icone" value="" id="icone" class="form-control"
                           placeholder="Enter icone *">
                    <span class="error icone-error"></span>
                </div>
                <div class="form-group">
                    <input type="file" name="image" value="Add Image" class="form-control">
                    <span class="error image-error"></span>
                </div>
                <div class="form-group">
                    <button id="offers_btn" class="btn btn-success">Add NEW offer</button>
                </div>

            </form>
        </div>
    </div>
@endsection