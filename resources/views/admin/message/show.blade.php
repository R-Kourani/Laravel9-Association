@extends('layouts.adminwindow')

@section('title', 'Show Message')

@section('content')

                        <!--   Kitchen Sink -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Show Message</h3>
                            </div>
                            <div class="card-body">
                                <div class="table table-bordered">
                                    <table class="table table-striped table-bordered table-hover">
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

@endsection
