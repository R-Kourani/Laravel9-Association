@extends('layouts.adminbase')

@section('title', 'Show Menu')

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
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Parent</th>
                                            <td>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($data, $data->Title)}}</td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{$data->Title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Keywords</th>
                                            <td>{{$data->Keywords}}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{$data->Description}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width:100px">Image</th>
                                            <td> @if ($data->Image)
                                                    <img src="{{Storage::url($data->Image)}}" style="height: 100px" >
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{$data->Status}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width:100px">Create date</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width:100px">Update date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                    </thead>
                                </table>
                                <a href="{{route('admin.menu.edit', ['id'=>$data->id])}}" class="btn btn-xs btn-info">Edit Menu</a>
                                <a href="{{route('admin.menu.destroy', ['id'=>$data->id])}}" class="btn btn-xs btn-info"
                                   onclick="return confirm('Deleting!! Are you sure?')">Delete from the Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

@endsection
