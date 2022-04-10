@extends('layouts.adminbase')

@section('title', 'Edit Member')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Member</h1>
                    </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">Edit {{$data->Name}} </div>
                                <div class="panel-body">
                                    <form action="/admin/category/update/{{$data->id}}" role="form" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Name">Enter Name</label>
                                            <input class="form-control" type="text" id="Name" name="Name" value="{{$data->Name}}">
                                            <p class="help-block">EX: Roula Kourani.</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Enter Email</label>
                                            <input class="form-control" type="text" id="Email" name="Email" value="{{$data->Email}}" >
                                            <p class="help-block">EX: info@hotmail.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Job">Enter Job</label>
                                            <input class="form-control" type="text" id="Job" name="Job" value="{{$data->Job}}">
                                            <p class="help-block">EX: Project Manager.</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Gender">Gender</label><br>
                                            <input type="radio" id="Male" name ="Gender" value="{{$data->Gender}}">
                                            <label for="Male">Male</label><br>
                                            <input type="radio" id="Female" name ="Gender" value="{{$data->Gender}}">
                                            <label for="Female">Female</label><br>
                                            <input type="radio" id="Other" name ="Gender" value="{{$data->Gender}}">
                                            <label for="Other">Other</label><br>
                                        </div>
                                        <div class="form-group" name="Status">
                                            <label for="Status">Status</label>
                                            <select class="form-control" id="Status" name="Status">
                                                <option selected>{{$data->Status}}</option>
                                                <option>Married</option>
                                                <option>Engaged</option>
                                                <option>Single</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Box">Box</labelfor>
                                            <textarea class="form-control" rows="3" id="Box" name="Box">{{$data->Box}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </form>
                              </div>
                            </div>
                        </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

@endsection
