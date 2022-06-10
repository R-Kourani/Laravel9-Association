@extends('layouts.frontbase')

@section('title', 'User Comments & Reviews')



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
                    <a href="">User Comments & Reviews</a>
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
                            <h2>User User Comments & Reviews</h2>
                        </div>
                        <div class="contact-form">
                            <div id="success"></div>
                            @include('home.user.usermenu')
                            <br>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="width:10px">Id</th>
                                    <th>Content</th>
                                    <th>Subject</th>
                                    <th>Review</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td><a href={{route('content', ['id'=>$rs->content->id])}}>{{$rs->content->Title}} </a></td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-xs btn-danger"
                                               onclick="return confirm('Deleting!! Are you sure?')">Delete</a></td>
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

