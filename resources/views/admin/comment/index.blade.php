@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Comments</h1>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Comments List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10px">Id</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Subject</th>
                                    <th>Review</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Show</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs )
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->user->name}}</td>
                                    <td><a href={{route('admin.content.show', ['id'=>$rs->content->id])}}>{{$rs->content->Title}} </a></td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>
                                        <a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-xs btn-success"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width= 1100 height=700')">
                                            Show
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-xs btn-danger"
                                           onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
