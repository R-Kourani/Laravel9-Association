@extends('layouts.adminwindow')

@section('title', 'Show Message')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Show Message</h1>
                    </div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                             Detail Message Data
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
                                            <th>Name & Surname</th>
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td>{{$data->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Subject</th>
                                            <td>{!!$data->subject!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Message</th>
                                            <td>{!!$data->message!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Ip Number</th>
                                            <td>{{$data->ip}}</td>
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
                                                <form action="{{route('admin.message.update', ['id'=>$data->id])}}" role="form" method="post" >
                                                    @csrf
                                                    <textarea id="note" name="note" cols="100">
                                                       {{$data->note}}
                                                   </textarea>
                                                    <button type="submit" class="btn btn-info">Update Note</button>
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
