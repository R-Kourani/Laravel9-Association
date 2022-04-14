@extends('layouts.adminbase')

@section('title', 'Members List')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Members List</h1>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Members Names
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Job</th>
                                    <th>Gender</th>
                                    <th>Box</th>
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
                                    <td>{{$rs->Name}}</td>
                                    <td>{{$rs->Email}}</td>
                                    <td>{{$rs->Job}}</td>
                                    <td>{{$rs->Gender}}</td>
                                    <td>{{$rs->Box}}</td>
                                    <td>{{$rs->Status}}</td>
                                    <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-xs btn-info">Edit</a></td>
                                    <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-xs btn-danger">Delete</a></td>
                                    <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-xs btn-success">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="/admin/category/create" class="btn btn-xs btn-info">Add Member</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
