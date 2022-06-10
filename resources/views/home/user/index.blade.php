@extends('layouts.frontbase')

@section('title', 'User Panel')



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
                    <a href="">User Panel</a>
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
                            <h2>User Panel</h2>
                        </div>
                        <div class="contact-form">
                            <div id="success"></div>
                            @include('home.user.usermenu')
                            <br>
                            @include('profile.show')
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

