@extends('layouts.adminbase')

@section('title', 'Edit FAQ:'.$data->Title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Question</h1>
                    </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">Edit {{$data->question}} </div>
                                <div class="panel-body">
                                    <form action="{{route('admin.faq.update', ['id'=>$data->id])}}" role="form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Question">Question</label>
                                            <input class="form-control" type="text" id="Question" name="question" value="{{$data->question}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Answer">Answer</label>
                                            <textarea class="form-control" type="textarea" id="Answer" name="answer">{{$data->answer}}"</textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#Answer' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                        <div class="form-group" name="Status">
                                            <label for="Status">Status</label>
                                            <select class="form-control" id="Status" name="status">
                                                <option selected>{{$data->status}}</option>
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

