@extends('admin.layouts')
@section('title', 'admin-list')
@section('style')
    {{--    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">--}}
@endsection
@section('page-name', 'User-add')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <form action="{{ route('user.store') }}" method="post" role="form">
                @csrf
                <div class="form-group">
                    <label for="title">name</label>
                    <input type="text" name="name" value="" id="title" class="form-control" placeholder="Enter name *">
                </div>
                <div class="form-group">
                    <label for="title">email</label>
                    <input type="email" name="email" value="{{ old('email') }}" id="title" class="form-control" placeholder="Enter email *">
                </div>
                <div class="form-group">
                    <label for="title">password</label>
                    <input type="password" name="password" value="{{ old('password') }}" id="title" class="form-control" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add  NEW member</button>
                </div>
                <input type="hidden" name="role" value="agent">
            </form>
        </div>
    </div>



@endsection