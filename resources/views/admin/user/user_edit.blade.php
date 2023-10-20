@extends('admin.layouts')
@section('title', 'admin-list')
@section('style')
    {{--    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">--}}
@endsection
@section('page-name', 'User-add')
@section('content')


    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <form action="{{ route('user.update',$user->id) }}" method="post" role="form"
                  enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put">
                @csrf
                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="name" value="{{ $user->name }}" id="title" class="form-control"
                           placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="title">url</label>
                    <input type="text" name="email" value="{{ $user->email}}" id="title" class="form-control"
                           placeholder="Enter url">
                </div>
                <div class="form-group">
                    <label for="title">password</label>
                    <input type="password" name="password" value="" id="title" class="form-control"
                           placeholder="Enter password * ">
                </div>
                <div class="form-group">
                    <label for="title">conf_password</label>
                    <input type="password" name="password_confirmation" value="" id="title" class="form-control"
                           placeholder="Enter conf_password *">
                </div>
                <input type="hidden" name="role" value="agent">
                <div class="form-group">
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">update Project</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection