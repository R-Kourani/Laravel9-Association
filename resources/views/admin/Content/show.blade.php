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
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th style="width:75px">Description</th>
                                        <th style="width:100px">Image</th>
                                        <th>Status</th>
                                        <th style="width:100px">Create date</th>
                                        <th style="width:100px">Update date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="success">
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->Title}}</td>
                                        <td>{{$data->Keywords}}</td>
                                        <td>{{$data->Description}}</td>
                                        <td>{{$data->Image}}</td>
                                        <td>{{$data->Status}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>
                                    </tbody>
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
