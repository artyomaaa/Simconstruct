@extends('admin.layouts')
@section('title', 'admin-list')
@section('style')
    {{--    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">--}}
@endsection
@section('page-name', 'User-list')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Admin  list
                    <a href="{{ route('user.create') }}" class="btn btn-danger pull-right btn-sm" role="button"
                       style="margin: -5px;">Add new Agent</a>
                </div>
                <div class="panel-body" id="sortable">

                    <table width="100%" class="table table-striped table-bordered table-hover"
                           id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="odd gradeX">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{$user->role}}</td>

                                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit fa-fw"></i></a></td>
                                <td>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="post" onsubmit="return confirm('Are you sure you want to send the service to the trash?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o fa-fw"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="load" data-sotr-order-image>
        <i class="fa fa-spinner fa-spin"></i>
    </div>

@endsection