@extends('layouts.adminbase')

@section('title', 'Edit Content')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Content</h1>
                    </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">Edit {{$data->Title}} </div>
                                <div class="panel-body">
                                    <form action="{{route('admin.content.update', ['id'=>$data->id])}}" role="form" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Title">Title</label>
                                            <input class="form-control" type="text" id="Title" name="Title" value="{{$data->Title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Type">Type</label>
                                            <select class="form-control" id="Type" name="Type">
                                                <option selected>{{$data->Type}}</option>
                                                <option>News</option>
                                                <option>Announce</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Keywords">Keywords</label>
                                            <input class="form-control" type="text" id="Keywords" name="Keywords" value="{{$data->Keywords}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Description">Description</label>
                                            <input class="form-control" type="text" id="Description" name="Description" value="{{$data->Description}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Image">Image</label><br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="Image" name="Image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <label for="Publisher">Publisher</label>
                                             <input class="form-control" type="text" id="Publisher" name="Publisher" value="{{$data->Publisher}}">
                                        </div>
                                        <div class="form-group">
                                             <label for="Target">Target</label>
                                             <input class="form-control" type="text" id="Target" name="Target" value="{{$data->Target}}">
                                        </div>
                                        <div class="form-group" name="Status">
                                            <label for="Status">Status</label>
                                            <select class="form-control" id="Status" name="Status">
                                                <option selected>{{$data->Status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                        <br>
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
