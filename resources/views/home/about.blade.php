@extends('layouts.frontbase')

@section('title', 'About Us |'. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon))


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
                    <a href="">About Us</a>
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
                {!! $setting->aboutus !!}
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container-->
    </div>
        <!-- /section -->

@endsection
