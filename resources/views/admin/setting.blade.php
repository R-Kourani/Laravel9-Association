@extends('layouts.adminbase')

@section('title', 'Settings')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Settings</h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a> </li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{route('admin.setting.update')}}" enctype="multipart/form-data">
                        @csrf
                        <ul class="nav nav-pills">
                            <li
                                class="active"><a href="#general" data-toggle="tab">General</a>
                            </li>

                            <li
                                class=""><a href="#smtpemail" data-toggle="tab">Smtp Email</a>
                            </li>

                            <li
                                class=""><a href="#Social" data-toggle="tab">Social Media</a>
                            </li>

                            <li
                                class=""><a href="#aboutus" data-toggle="tab">About Us</a>
                            </li>
                            <li
                                class=""><a href="#contact" data-toggle="tab">Contact Page</a>
                            </li>
                            <li
                                class=""><a href="#references" data-toggle="tab">References</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="general">
                                <input type="hidden" name="id" id="id" value="{{$data->id}}">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keyword" value="{{$data->keywords}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Icon</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input class="custom-file-input" type="file" name="icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="smtpemail">
                                <div class="form-group">
                                    <label>Smtp server</label>
                                    <input type="text" name="stmpserver" value="{{$data->smtpserver}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Email</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtppassword</label>
                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpport</label>
                                    <input type="number" name="smtpport" value="{{$data->smtpport }}" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Social">
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="aboutus">
                                <div class="form-group">
                                    <label>About US</label>
                                    <textarea id="aboutusedit" name="aboutus">{{$data->aboutus}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea id="contactedit" name="contact">{{$data->contact}}</textarea>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="references">
                                <div class="form-group">
                                    <label>References</label>
                                    <textarea id="referencesedit" name="references">{{$data->references}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Setting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
    <script>
        ClassicEditor
            .create( document.querySelector( '#contactedit' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#aboutusedit' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#referencesedit' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
