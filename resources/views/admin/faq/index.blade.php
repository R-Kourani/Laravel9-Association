@extends('layouts.adminbase')

@section('title', 'FAQ List')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">FAQ</h1>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    FAQ List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10px">Id</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Show</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs )
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->question}}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-xs btn-danger"
                                           onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>
                                        <td><a href="{{route('admin.faq.show', ['id'=>$rs->id])}}" class="btn btn-xs btn-success">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('admin.faq.create')}}" class="btn btn-xs btn-info">Add Question</a>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection
