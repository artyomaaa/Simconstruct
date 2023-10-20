@extends('admin.layouts')
@section('title', 'admin-list')
@section('style')
    {{--    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">--}}
@endsection
@section('page-name', 'Project-list')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Project list
                    <a href="" class="btn btn-danger pull-right btn-sm" role="button" data-target="#centralModalSuccess"
                       data-toggle="modal"
                       style="margin: -5px;">Add new Project</a>
                </div>
                <div class="panel-body" id="sortable">

                    <table width="100%" class="table table-striped table-bordered table-hover"
                           id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>project_name</th>
                            <th>image</th>
                            <th>created_at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($projects))
                            @foreach($projects as $project)
                                <tr class="odd gradeX">
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->project_name }}</td>
                                    <td>
                                        @if(isset($project->project_image))
                                            @foreach($project->project_image as $image)

                                                <img src="{{asset('assets/images/'.$image->image_path)}} "
                                                     style="width:50px; height: 50px">

                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{$project->created_at}}</td>
                                    <td><a href="" class="btn btn-info btn-sm" role="button" data-toggle="modal"
                                           data-target="#exampleModal-{{$project->id}}"><i class="fa fa-edit fa-fw"></i>
                                            edit
                                        </a></td>
                                    <td>
                                        <form action="{{route('project_delete',$project->id)}}" method="post"
                                              onsubmit="return confirm('Are you sure you want to send the service to the trash?')">
                                            @csrf
{{--                                            <input type="hidden" name="_method" value="DELETE">--}}
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o fa-fw"></i>delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                        @endif
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
@if(isset($projects))
    @foreach($projects as $project)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal-{{$project->id}}" tabindex="0" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: darkgreen">
                        <span class="heading lead">Add Project Name</span>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #686868">
                        <div class="text-center">
                            <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                            <br><br>
                            <div class="form-group">
                                <form id="form_projects_edit">
                                    <label for="proect_name">Project Name</label>
                                    <input type="text" name="project_name" value="{{$project->project_name}}"
                                           id="proect_name" class="form-control"
                                           placeholder="Enter Project Name*">
                                    <span style="color: red;font-size: 11px" class="project_name-error"></span>
                                    <input type="hidden" name="id" value="{{$project->id}}" id="indetifi">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center" style="background-color: #686868">
                        <a type="button" class="btn btn-success waves-effect waves-light" id="edit_project_btn">Save
                            changex
                            <i class="far fa-gem ml-1 text-white"></i>
                        </a>
                        <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">close</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header" style="background-color: darkgreen">
                <span class="heading lead">Add Project Name</span>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">×</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body" style="background-color: #686868">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                    <br><br>
                    <div class="form-group">
                        <form id="form_projects">
                            <label for="proect_name">Project Name</label>
                            <input type="text" name="project_name" id="proect_name" class="form-control"
                                   placeholder="Enter Project Name*">
                            <br>
                            <br>
                            <span style="color: red;font-size: 11px" class="error project_name-error"></span>
                        </form>
                    </div>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center" style="background-color: #686868">
                <a type="button" class="btn btn-success waves-effect waves-light" id="add_project">Save
                    <i class="far fa-gem ml-1 text-white"></i>
                </a>
                <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Cancle</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

