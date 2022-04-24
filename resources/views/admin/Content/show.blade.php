@extends('layouts.adminbase')

@section('title', 'Show Content')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Show Menu</h1>
                    </div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                             {{$data->Title}}
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th style="width:75px">Id</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th style="width:100px">Keywords</th>
                                        <th style="width:100px">Description</th>
                                        <th style="width:74px">Image</th>
                                        <th>Publisher</th>
                                        <th>Aim</th>
                                        <th>Status</th>
                                        <th style="width:100px">Create date</th>
                                        <th style="width:100px">Update date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-purple-400">
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->Type}}</td>
                                        <td>{{$data->Title}}</td>
                                        <td>{{$data->Keywords}}</td>
                                        <td>{{$data->Description}}</td>
                                        <td>{{$data->Image}}</td>
                                        <td>{{$data->Publisher}}</td>
                                        <td>{{$data->Aim}}</td>
                                        <td>{{$data->Status}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="{{route('admin.content.edit', ['id'=>$data->id])}}" class="btn btn-xs btn-info">Edit Content</a>
                                <a href="{{route('admin.content.destroy', ['id'=>$data->id])}}" class="btn btn-xs btn-info"
                                   onclick="return confirm('Deleting!! Are you sure?')">Delete Content</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

@endsection
