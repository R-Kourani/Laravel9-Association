@extends('layouts.frontbase')

@section('title', 'User Registration Page' )


@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">User Registration</a>
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
                <div class="col-md-12">
                    @include('auth.register')
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </div>
        <!-- /section -->

@endsection
