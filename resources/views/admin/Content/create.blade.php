@extends('layouts.adminbase')

@section('title', 'Add Content')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Content</h1>
                    </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">Content Form</div>
                                <div class="panel-body">
                                    <form action="{{route('admin.content.store')}}" role="form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label >Parent Content</label>
                                            <select class="form-control select2"name="menu_id">
                                                @foreach($data as $rs)
                                                    <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs,$rs->Title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Title">Title</label>
                                            <input class="form-control" type="text" id="Title" name="Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="Type">Type</label>
                                            <select class="form-control" id="Type" name="Type">
                                                <option></option>
                                                <option>News</option>
                                                <option>Announce</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Keywords">Keywords</label>
                                            <input class="form-control" type="text" id="Keywords" name="Keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="Description">Description</label>
                                            <input class="form-control" type="text" id="Description" name="Description" placeholder="Description">
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
                                                    <input type="file" class="custom-file-input" id="Image" name="Image"><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Description">Detail</label>
                                            <textarea class="form-control" id="Detail" name="Detail">

                                            </textarea>
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
                                                <input class="form-control" type="text" id="Aim" name="Aim">
                                        </div>
                                        <div class="form-group" name="Status">
                                            <label for="Status">Status</label>
                                            <select class="form-control" id="Status" name="Status">
                                                <option></option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-info">Submit</button>

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
