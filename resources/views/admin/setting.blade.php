@extends('layouts.adminbase')

@section('title', ' Settings')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row-mb-12">
                    <div class="col-md-12">
                        <div>
                            <ol class="breadcrumb float-sm-right">
                                <li><a href="{{route('admin.index')}}">Home</a></li>
                                <li>Settings</li>
                            </ol>
                        </div>
                        <h1 class="page-head-line">Settings</h1>
                    </div>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">Settings Form</div>
                                <div class="panel-body">
                                    <form action="{{route('admin.setting.update')}}" role="form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="card card-primary card-tabs col-12" >
                                                <div class="card-header p-opt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">General</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp Email</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social Media</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-one-about-tab" data-toggle="pill" href="#custom-tabs-one-about" role="tab" aria-controls="custom-tabs-one-about" aria-selected="false">About us</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact Page</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                                        <div class="tab-pane show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general">
                                                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                                            <div class="form-group">
                                                                <label for="title">Title</label>
                                                                <input class="form-control" type="text" id="title" name="title" value="{{$data->title}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="keywords">Keywords</label>
                                                                <input class="form-control" type="text" id="keywords" name="keywords"  value="{{$data->keywords}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="description">Description</label>
                                                                <input class="form-control" type="text" id="description" name="description" value="{{$data->description}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="company">Company</label>
                                                                <input class="form-control" type="text" id="company" name="company" value="{{$data->company}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input class="form-control" type="text" id="address" name="address" value="{{$data->address}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input class="form-control" type="text" id="phone" name="phone" value="{{$data->phone}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">Email</label>
                                                                <input class="form-control" type="text" id="Email" name="Email" value="{{$data->Email}}">
                                                            </div>
                                                            <div class="form-group" name="Status">
                                                                <label for="Status">Status</label>
                                                                <select class="form-control" id="Status" name="Status">
                                                                    <option></option>
                                                                    <option>True</option>
                                                                    <option>False</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">Icon</label><br>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="icone" name="icone">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane show active" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp">
                                                            <div class="form-group">
                                                                <label>Smtp Server</label>
                                                                <input class="form-control" type="text" id="smtpserver" name="smtpserver" value="{{$data->smtpserver}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Smtp Email</label>
                                                                <input class="form-control" type="text" id="smtpemail" name="smtpemail" value="{{$data->smtpemail}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Smtp Password</label>
                                                                <input class="form-control" type="text" id="smtppassword" name="smtppassword" value="{{$data->smtppassword}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Smtp Port</label>
                                                                <input class="form-control" type="text" id="smtpport" name="smtpport" value="{{$data->smtpport}}">
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane show active" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social">
                                                            <div class="form-group">
                                                                <label>Fax</label>
                                                                <input class="form-control" type="text" id="fax" name="fax" value="{{$data->fax}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Fax</label>
                                                                <input class="form-control" type="text" id="fax" name="fax" value="{{$data->fax}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Facebook</label>
                                                                <input class="form-control" type="text" id="facebook" name="facebook" value="{{$data->facebook}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Instagram</label>
                                                                <input class="form-control" type="text" id="instagram" name="instagram" value="{{$data->instagram}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Twitter</label>
                                                                <input class="form-control" type="text" id="twitter" name="twitter" value="{{$data->twitter}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Youtube</label>
                                                                <input class="form-control" type="text" id="youtube" name="youtube" value="{{$data->youtube}}">
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane show active" id="custom-tabs-one-about" role="tabpanel" aria-labelledby="custom-tabs-one-about">
                                                            <div class="form-group">
                                                                <label>About us</label>
                                                                <textarea id="aboutus" name="aboutus" value="{{$data->aboutus}}"></textarea>
                                                            </div>
                                                            <script>
                                                                ClassicEditor
                                                                    .create( document.querySelector( '#aboutus' ) )
                                                                    .then( editor => {
                                                                        console.log( editor );
                                                                    } )
                                                                    .catch( error => {
                                                                        console.error( error );
                                                                    } );
                                                            </script>
                                                        </div>
                                                        <div class="tab-pane show active" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact">
                                                            <div class="form-group">
                                                                <label>Contact</label>
                                                                <textarea id="contact" name="contact" value="{{$data->contact}}"></textarea>
                                                            </div>
                                                            <script>
                                                                ClassicEditor
                                                                    .create( document.querySelector( '#contact' ) )
                                                                    .then( editor => {
                                                                        console.log( editor );
                                                                    } )
                                                                    .catch( error => {
                                                                        console.error( error );
                                                                    } );
                                                            </script>
                                                        </div>
                                                        <div class="tab-pane show active" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references">
                                                            <div class="form-group">
                                                                <label>References</label>
                                                                <textarea id="references" name="references" value="{{$data->references}}"></textarea>
                                                            </div>
                                                            <script>
                                                                ClassicEditor
                                                                    .create( document.querySelector( '#references' ) )
                                                                    .then( editor => {
                                                                        console.log( editor );
                                                                    } )
                                                                    .catch( error => {
                                                                        console.error( error );
                                                                    } );
                                                            </script>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-info">Update Settings</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
@endsection

