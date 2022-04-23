@extends('layouts.adminbase')

@section('title', 'Menu List')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MENU</h1>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Menu List
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->Title}}</td>
                                    <td>{{$rs->Keywords}}</td>
                                    <td>{{$rs->Description}}</td>
                                    <td>
                                        @if ($rs->Image)
                                            <img src="{{Storage::url($rs->Image)}}" style="height: 40px" >
                                        @endif
                                    </td>
                                    <td>{{$rs->Status}}</td>
                                    <td><a href="{{route('admin.menu.edit',['id'=>$rs->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.menu.destroy',['id'=>$rs->id])}}" class="btn btn-xs btn-danger"
                                           onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.menu.show', ['id'=>$rs->id])}}" class="btn btn-xs btn-success">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('admin.menu.create')}}" class="btn btn-xs btn-info">Add to the Menu</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
