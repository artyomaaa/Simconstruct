@extends('admin.layouts')
@section('title', 'admin-list')
@section('style')
    {{--    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">--}}
@endsection
@section('page-name', 'Offer-list')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Admin list
                    <a href="" data-target="#centralModalSuccess"
                       data-toggle="modal" class="btn btn-danger pull-right btn-sm" role="button"
                       style="margin: -5px;">Add new Offer</a>
                </div>
                <div class="panel-body" id="sortable">

                    <table width="100%" class="table table-striped table-bordered table-hover"
                           id="dataTables-example">
                        <thead>
                        <tr>
                            <th>N*/</th>
                            <th>title_esp</th>
                            <th>title_eng</th>
                            <th>text_esp</th>
                            <th>text_eng</th>
                            <th>icone</th>
                            <th>image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offers as $offer)
                            <tr class="odd gradeX">
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $offer->title_es }}</td>
                                <td>{{ $offer->title_eng}}</td>
                                <td>{{ mb_strimwidth($offer->text_es, 0, 70, '...') }}</td>
                                <td>{{ mb_strimwidth($offer->text_eng, 0, 70, '...') }}</td>
                                <td><i class="{{$offer->icone}} fa-fw fa-3x" aria-hidden="true"></i></td>
                                <td><img src="{{asset('assets/images'). '/' .$offer->image}}"
                                         style="width: 40px;height: 40px" alt=""></td>

                                <td><a href="" class="btn btn-info btn-sm" role="button"
                                       data-toggle="modal"
                                       data-target="#centralModalSuccess-{{$offer->id}}"><i
                                                class="fa fa-edit fa-fw"></i>
                                        edit
                                    </a></td>
                                <td>
                                    <form action="{{route('offer-delete',$offer->id)}}" method="post"
                                          onsubmit="return confirm('Are you sure you want to send the service to the trash?')">
                                        @csrf
                                        {{--<input type="hidden" name="_method" value="DELETE">--}}
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-trash-o fa-fw"></i>
                                        </button>
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

@endsection




<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header" style="background-color: darkgreen">
                <span class="heading lead">Add New Offer</span>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">×</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body" style="background-color: #686868">
                <div class="text-center">
                    <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
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
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" value="Add Image" class="form-control">
                                    <span class="error image-error"></span>
                                </div>
                                <div class="form-group">
                                    <button id="offers_btn" class="btn btn-success"><i
                                                style="display: none;color: #4c110f"
                                                class="fa fa-spinner fa-x fa-spin loading pull-left"></i>Add NEW offer
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/.Content-->
    </div>
</div>





@if(isset($offers))
    @foreach($offers as $offer)
        <!-- Modal -->

        <div class="modal fade" id="centralModalSuccess-{{$offer->id}}" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: darkgreen">
                        <span class="heading lead">Edit offers</span>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #686868">
                        <div class="text-center">
                            <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                            <br><br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <form id="offers_form" action="{{route('offer-update',$offer->id)}}" method="post"
                                          enctype="multipart/form-data" role="form">
                                        {{--                                        <input type="hidden" name="_method" value="put">--}}
                                        <input type="hidden" name="id" id="offer_id" value="{{$offer->id}}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="title_es">title_es</label>
                                            <input type="text" name="title_es" value="{{$offer->title_es}}"
                                                   id="title_es" class="form-control"
                                                   placeholder="Enter Title_es*">
                                            <span class="error title_es-error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_eng">title_eng</label>
                                            <input type="text" name="title_eng" value="{{$offer->title_eng}}"
                                                   id="title_eng"
                                                   class="form-control"
                                                   placeholder="Enter Title_eng*">
                                            <span class="error title_eng-error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="text_es">text_es</label>
                                            <input type="text" name="text_es" value="{{$offer->text_es}}" id="title_es"
                                                   class="form-control"
                                                   placeholder="Enter Text_es*">
                                            <span class="error text_es-error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="text_es">text_eng</label>
                                            <input type="text" name="text_eng" value="{{$offer->text_eng}}"
                                                   id="title_eng"
                                                   class="form-control"
                                                   placeholder="Enter Text_eng*">
                                            <span class="error text_eng-error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="icone">Icone</label>
                                            <input type="text" name="icone" value="{{$offer->icone}}" id="icone"
                                                   class="form-control"
                                                   placeholder="Enter icone *">
                                            <span class="error icone-error"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="new_image">Image</label>
                                            <input type="file" name="new_image" value="" id=""
                                                   class="form-control">
                                            <span class="error new_image-error"></span>
                                        </div>
                                        <br>
                                        <img src="{{asset('assets/images/'.$offer->image)}} "
                                             style="width:100px; height: 100px">
                                        {{--                                            <input type="hidden" name="image" value="{{$offer->image}}">--}}
                                        <div class="modal-footer justify-content-center"
                                             style="background-color: #686868">
                                            <input type="submit" class="btn btn-success waves-effect waves-light"
                                                   id="edit_offer_btn"
                                                   value="Save  Offer">

                                            <i class="far fa-gem ml-1 text-white"></i>

                                            <a type="button" class="btn btn-outline-success waves-effect"
                                               data-dismiss="modal">close</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endif



