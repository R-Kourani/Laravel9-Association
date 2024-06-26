@extends('layouts.adminbase')

@section('title', 'Edit Content:'.$data->Title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

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
                                    <form action="{{route('admin.content.update', ['id'=>$data->id])}}" role="form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label >Parent Content</label>
                                            <select name="menu_id" class="form-control>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id == $data->menu_id)selected="selected" @endif>
                                                        {{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs,$rs->Title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
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
                                            <textarea class="textarea" id="Description" name="Description">{{$data->Description}}</textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#Description' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label><br>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="Image" name="Image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Detail">Detail</label>
                                            <textarea class="textarea" id="Detail" name="Detail">{{$data->Detail}}</textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#Detail' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                        <div class="form-group">
                                             <label for="Aim">Aim</label>
                                             <input class="form-control" type="text" id="Aim" name="Aim" value="{{$data->Aim}}">
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

