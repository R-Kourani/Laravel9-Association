@extends('layouts.frontbase')

@section('title', 'Contact |'. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">Contact</a>
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
                            <p>Get In Touch</p>
                            <h2>Contact for any query</h2>
                        </div>
                        <div class="contact-img">
                            <img src="{{asset('assets')}}/img/contact.jpg" alt="Image">
                        </div>
                        @include ('home.messages')
                        <div class="contact-form">
                            <div id="success"></div>
                            <form  action="{{route('storemessage')}}" method="post">
                                @csrf
                                <div class="control-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name & Surname">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea type="text" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->

                <!-- Single comment -->
                <div class="col-lg-8">
                    <div class="single-comment">
                        <h2>Contact Information</h2>
                        <ul class="comment-list">
                            <li class="comment-item">
                                <div class="comment-body">
                                    <div class="comment-img">
                                        @if ($setting->icon)
                                            <img src="{{Storage::url($setting->icon)}}" style="height: 100px" >
                                        @endif
                                    </div>
                                    <div class="comment-text">
                                        <h3><a href="">{{$setting->title}}</a></h3>
                                        <span>{{$setting->created_at}}</span>
                                        <p>
                                            {!! $setting->contact !!}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                 </div>
            <!-- /row -->
            </div>
        <!-- /container-->
        </div>
    </div>
        <!-- /section -->

@endsection
