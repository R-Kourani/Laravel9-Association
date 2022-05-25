@extends('layouts.adminwindow')

@section('title', 'User Detail')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User Detail</h1>
                    </div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                             Detail User Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:200px">Id</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Name & Surname</th>
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Role</th>
                                            @foreach($data->roles as $role)
                                                {{$role->name}}
                                                <a href="{{route('admin.user.destroyrole',['uid'=>$data->id, ['rid'=>$role->id]])}}" class="btn btn-xs btn-danger"
                                                   onclick="return confirm('Deleting!! Are you sure?')">[x]</a>
                                            @endforeach
                                        </tr>

                                            <th>Created_at</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated_at</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Add Role to User</th>
                                            <td>
                                                <form action="{{route('admin.user.addrole', ['id'=>$data->id])}}" role="form" method="post" >
                                                    @csrf
                                                    <select name="role_id">
                                                        @foreach($roles as $role)
                                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-info">Add Role</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

@endsection
