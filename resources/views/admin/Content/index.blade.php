@extends('layouts.adminbase')

@section('title', 'Content List')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row mb-2">
                <div class="col-md-12">
                    <h1 class="page-head-line">Content</h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-sm-12">
                <!--   Kitchen Sink -->
                <div class="card">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Content List
                        </div>
                    <div class="card-body">
                        <div class="table table-bordered">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width:10px">Id</th>
                                    <th>Menu</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>Image Gallery</th>
                                    <th>Aim</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Edit</th>
                                    <th style="width: 40px">Delete</th>
                                    <th style="width: 40px">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs, $rs->Title)}}</td>
                                        <td>{{$rs->Title}}</td>
                                        <td>{{$rs->Type}}</td>
                                        <td>
                                            @if ($rs->Image)
                                                <img src="{{Storage::url($rs->Image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td> <a href="{{route('admin.image.index',['cid'=>$rs->id])}}"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width= 1100 height=700')">
                                                <img src="{{asset('assets')}}/img/gallery.jpg" style="height: 40px">
                                            </a>
                                        </td>
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
    <!-- /. PAGE WRAPPER  -->
@endsection
