@extends('layouts.adminbase')

@section('title', 'Content List')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CONTENT</h1>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Content List
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Menu</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Publisher</th>
                                    <th>Aim</th>
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
                                    <td>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs, $rs->Title)}}</td>
                                    <td>{{$rs->Title}}</td>
                                    <td>{{$rs->Type}}</td>
                                    <td>{{$rs->Description}}</td>
                                    <td>
                                        @if ($rs->Image)
                                            <img src="{{Storage::url($rs->Image)}}" style="height: 40px" >
                                        @endif
                                    </td>
                                    <td>{{$rs->Publisher}}</td>
                                    <td>{{$rs->Aim}}</td>
                                    <td>{{$rs->Status}}</td>
                                    <td><a href="{{route('admin.content.edit',['id'=>$rs->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.content.destroy',['id'=>$rs->id])}}" class="btn btn-xs btn-danger"
                                           onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.content.show', ['id'=>$rs->id])}}" class="btn btn-xs btn-success">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('admin.content.create')}}" class="btn btn-xs btn-info">Add Content</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
