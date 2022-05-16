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
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Menu</th>
                                            @if($data->menu != NULL || $data->menu != 0)
                                            <td>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($data->menu, $data->menu->Title)}}</td>
                                            @else
                                                <td>no parent</td>

                                            @endif
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{$data->Title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Type</th>
                                            <td>{{$data->Type}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width:100px">Keywords</th>
                                            <td>{{$data->Keywords}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width:100px">Description</th>
                                            <td>{!!$data->Description!!}</td>
                                        </tr>
                                        <tr>
                                            <th style="width:100px">Image</th>
                                            <td> @if ($data->Image)
                                                    <img src="{{Storage::url($data->Image)}}" style="height: 100px" >
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <th>Detail</th>
                                            <td>{!! $data->Detail !!}</td>
                                        </tr>
                                        <tr>
                                            <th>Aim</th>
                                            <td>{{$data->Aim}}</td>
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
