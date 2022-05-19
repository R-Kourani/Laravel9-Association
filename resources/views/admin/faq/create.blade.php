@extends('layouts.adminbase')

@section('title', 'Add FAQ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add FAQ</h1>
                    </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">FAQ Form</div>
                                <div class="panel-body">
                                    <form action="{{route('admin.faq.store')}}" role="form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="question">Question</label>
                                            <input class="form-control" type="text" id="question" name="question">
                                        </div>
                                        <div class="form-group">
                                            <label for="Answer">Answer</label>
                                            <textarea class="form-control" type="textarea" id="Answer" name="answer" placeholder="Answer"></textarea>
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
