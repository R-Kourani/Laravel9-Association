@extends('layouts.adminwindow')

@section('title', 'Show Payment')

@section('content')
        <!-- /. NAV SIDE  -->

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Show Payment</h1>
                    </div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                             Payment Detail
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
                                            <th>Name</th>
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Card Number</th>
                                            <td>{{$data->card_number}}</td>
                                        </tr>
                                        <tr>
                                            <th>Expiration Date</th>
                                            <td>{{$data->exp_date}}</td>
                                        </tr>
                                        <tr>
                                            <th>CVV</th>
                                            <td>{!!$data->cvv!!}</td>
                                        </tr>
                                        <tr>
                                            <th>Amount</th>
                                            <td>{{$data->amount}}</td>
                                        </tr>
                                        <tr>
                                            <th>Note</th>
                                            <td>{{$data->note}}</td>
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
                                                <form action="{{route('admin.payment.update', ['id'=>$data->id])}}" role="form" method="post" >
                                                    @csrf
                                                    <select name="status">
                                                        <option selected>{{$data->status}}</option>
                                                        <option>Pending</option>
                                                        <option>Paid</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-info">Update Payment</button>
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


@endsection
