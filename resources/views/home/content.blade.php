@extends('layouts.frontbase')

@section('title', $data->Title)


@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Detail Page</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">Menu</a>
                    <a href="#">Content</a>
                    <a href="">{{$data->Title}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Single Post Start-->
    <section class="property-single nav-arrow-b">
        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-content">

                            <h2>{{$data->Title}}</h2><br>
                            <h4>Description:</h4>
                            <p>
                                {!! $data->Description !!}
                            </p>
                            <br>
                            <h4>Details:</h4>
                            <p>
                                {!! $data->Detail !!}
                            </p>

                        </div>
                        <div class="single-bio">
                            <div class="single-bio-img">
                                <img src="{{asset('assets')}}/img/user.jpg" />
                            </div>
                            <div class="single-bio-text">
                                <h3>AIM</h3>
                                <p>
                                    {{$data->Aim}}
                                </p>
                            </div>
                        </div>

                        <div class="comment-form">
                            <h2>Leave a comment</h2>
                            <form action="{{route('storecomment')}}" method="post">
                                @csrf
                                <input type="hidden" class="input" name="content_id" value="{{$data->id}}">
                                <div class="form-group">
                                    <input type="text" class="input" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea type="text"  class="input" name="review" cols="40" rows="5" placeholder="Your review"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="input-rating">
                                        <strong class="text-uppercase">Your Rating: </strong>
                                        <div class="stars">
                                            <input id="input-id" type="text" class="rating" data-size="sm" name="rate" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @auth
                                        <input type="submit" value="Post Comment" class="btn btn-custom">
                                    @else
                                        <a href="/login" class="btn btn-custom"> To  Submit Your Review, Please Login</a>
                                    @endauth
                                </div>
                                @include('home.messages')
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <img src="{{Storage::url($data->Image)}}"  style="width: 350px;height: 250px"/>
                                <br>
                                @foreach($image as $rs)
                                    <br>
                                    <div class="carousel-item-b">
                                        <img src="{{Storage::url($rs->Image)}}" style="width: 350px;height: 250px">
                                    </div>
                                @endforeach
                                <br>
                                <hr>
                                <h2 class="widget-title">Reviews({{$data->comment->count('id')}})</h2>
                                <div class="recent-post">
                                    @foreach($reviews as $rs)
                                        <div class="post-item">
                                            <div class="post-text">
                                                <h5><i class="fa fa-comment"></i> {{$rs->subject}}</h5>
                                                <p>{{$rs->review}}</p>
                                                <div class="post-meta">
                                                    <p><i class="fa fa-user"></i> By<a href=""> {{$rs->user->name}}</a></p>
                                                    <p><i class="fa fa-clock-o"></i><br>At<a href="">{{$rs->created_at}}</a></p>
                                                    <p>The rate: {{$rs->rate}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div>
                                    @php
                                        $average = $data->comment->average('rate');
                                    @endphp
                                    <div class="content-rating">
                                        <a href="#">{{$data->comment->count('id')}} \ {{number_format($average,1)}}  Review(s)</a>
                                        <i @if(floor($data->comment->avg('rate'))>=1) class="fa fa-star" @else class="fa fa-star-o" @endif></i>
                                        <i @if(floor($data->comment->avg('rate'))>=2) class="fa fa-star" @else class="fa fa-star-o" @endif></i>
                                        <i @if(floor($data->comment->avg('rate'))>=3) class="fa fa-star" @else class="fa fa-star-o" @endif></i>
                                        <i @if(floor($data->comment->avg('rate'))>=4) class="fa fa-star" @else class="fa fa-star-o" @endif></i>
                                        <i @if(floor($data->comment->avg('rate'))>=5) class="fa fa-star" @else class="fa fa-star-o" @endif></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div >
    </section>   <!-- Single Post End-->
@endsection
