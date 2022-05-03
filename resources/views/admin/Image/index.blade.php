@extends('layouts.adminwindow')

@section('title', 'Content Image Gallery')

@section('content')
    <h2>{{$content->Title}}</h2>
    <form action="{{route('admin.image.store',['cid'=>$content->id])}}" role="form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <label for="exampleInputEmail">Title</label>
            <input class="form-control" type="text" name="Title" placeholder="Title">
            <div class="custom-file">
                   <input type="file" class="custom-file-input" id="exampleInputFile" name="Image">
            </div>
            <div class="input-group-append">
                   <br><input class="input-group-text" type="submit" value="upload">
            </div>
        </div>
    </form>
        <div class="panel-heading">
            Content Image List
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->Title}}</td>
                            <td>
                                @if ($rs->Image)
                                    <img src="{{Storage::url($rs->Image)}}" style="height: 40px">
                                @endif
                            </td>
                            <td><a href="{{route('admin.image.destroy',['cid'=>$content->id,'id'=>$rs->id])}}" class="btn btn-xs btn-danger"
                                   onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
