@extends('admin.layouts')
@section('title', 'admin-list')
@section('style')
    {{--    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">--}}
@endsection
@section('page-name', 'Comment-list')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body" id="sortable">

                    <table width="100%" class="table table-striped table-bordered table-hover"
                           id="dataTables-example">
                        <thead>
                        <tr>
                            <th>N/*</th>
                            <th>full_name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>text</th>
                            <th>comment-time</th>
                            <th>view</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        {{$comments->links()}}

                        @foreach($comments as $comment)
                            <tr class="odd gradeX">
                                <td><b>{{ $loop->index+1 }}</b></td>
                                <td><b>{{ $comment->full_name }}</b></td>
                                <td><b>{{$comment->phone}}</b></td>
                                <td><b>{{$comment->email}}</b></td>
                                <td><b>{!!  mb_strimwidth($comment->text,0,70,'...')!!} </b></td>
                                <td><b>{{$comment->created_at->format('Y-m-d')}}</b></td>


                                <td><a href="" class="btn btn-info btn-sm" data-toggle="modal"
                                       data-target="#exampleModal{{$comment->id}}"><i class="fa fa-edit fa-fw"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('comment_delete', $comment->id) }}" method="post"
                                          onsubmit="return confirm('Are you sure you want to send the service to the trash?')">
                                        @csrf
{{--                                        <input type="hidden" name="_method" value="DELETE">--}}
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-trash-o fa-fw"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right">
                        {{$comments->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
@endsection
@foreach($comments as $comment)
    <div class="modal fade" id="exampleModal{{$comment->id}}" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Commentsl title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p>  <em>{{$comment->full_name}}</em></p>
                    <span>phone:  <i class="fa fa-phone"></i>      {{$comment->phone}}   </span>
                    <p> email: {{$comment->email}}</p>

                    <div style="text-align: center">
                        <span>{{$comment->created_at->format('Y-m-d')}}</span>  |  <b>text</b>
                        <p>{{$comment->text}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endforeach
