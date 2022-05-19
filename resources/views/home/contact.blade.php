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
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
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
