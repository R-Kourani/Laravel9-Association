@extends('layouts.adminbase')

@section('title', 'Show Member')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Show Member</h1>
                    </div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                             {{$data->Name}}
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th style="width:75px">Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th style="width:75px">Job</th>
                                        <th style="width:100px">Gender</th>
                                        <th style="width:80px">Box</th>
                                        <th>Status</th>
                                        <th style="width:100px">Create date</th>
                                        <th style="width:100px">Update date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="success">
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->Name}}</td>
                                        <td>{{$data->Email}}</td>
                                        <td>{{$data->Job}}</td>
                                        <td>{{$data->Gender}}</td>
                                        <td>{{$data->Box}}</td>
                                        <td>{{$data->Status}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="/admin/category/edit/{{$data->id}}" class="btn btn-xs btn-info">Edit Member</a>
                                <a href="/admin/category/destroy/{{$data->id}}" class="btn btn-xs btn-info"
                                   onclick="return confirm('Deleting!! Are you sure?')">Delete Member</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

@endsection
