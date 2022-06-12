@extends('layouts.frontbase')

@section('title', 'User Payments')



@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Panel</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">User Payments</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Contact Start -->
                <div class="contact">
                    <div class="container">
                        <div class="section-header text-center">
                            <h2>User Payments</h2>
                        </div>
                        <div class="contact-form">
                            <div id="success"></div>
                            @include('home.user.usermenu')
                            <br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width:10px">Id</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Note</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $rs )
                                    <tr>
                                        <td>{{$rs->user_id}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->amount}}</td>
                                        <td>{{$rs->note}}</td>
                                        <td>{{$rs->status}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->

                <!-- Single comment -->
                <!-- /row -->
            </div>
            <!-- /container-->
        </div>
    </div>
    <!-- /section -->

@endsection

