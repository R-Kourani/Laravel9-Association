@extends('layouts.adminwindow')

@section('title', 'Show Comment')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Show Comment</h1>
                    </div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                             Detail Comment Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:200px">Id</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Content</th>
                                            <td>{{$data->content->Title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{$data->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Subject</th>
                                            <td>{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <th>Review</th>
                                            <td>{{$data->review}}</td>
                                        </tr>
                                        <tr>
                                            <th>Rate</th>
                                            <td>{!!$data->rate!!}</td>
                                        </tr>
                                        <tr>
                                            <th>IP Number</th>
                                            <td>{!!$data->IP!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{$data->status}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created_at</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated_at</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Admin Note:</th>
                                            <td>
                                                <form action="{{route('admin.comment.update', ['id'=>$data->id])}}" role="form" method="post" >
                                                    @csrf
                                                    <select name="status">
                                                        <option selected>{{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-info">Update Comment</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </thead>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

@endsection
