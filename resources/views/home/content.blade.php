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
                            <div class="col-lg-8">
                                <div class="single-content">
                                    <img src="{{Storage::url($data->Image)}}"  style="width: 800px;height: 400px"/>
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
                                    @foreach($image as $rs)
                                        <div class="carousel-item-b">
                                            <img src="{{Storage::url($rs->Image)}}" style="width: 400px;height: 200px">
                                        </div>
                                    @endforeach
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
                                                    <input type="radio" id="star5" name="rate" value="5" /><label for="star5"></label>
                                                    <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                                                    <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            @auth()
                                                <input type="submit" value="Post Comment" class="btn btn-custom">
                                            @else
                                                <a href="/login" class="btn btn-custom"> To  Submit Your Review, Please Login</a>
                                            @endauth
                                        </div>
                                        @include('home.messages')
                                        <div class="col-lg-10">
                                            <div class="sidebar">
                                                 <div class="sidebar-widget">
                                                     <h2 class="widget-title">Reviews</h2>
                                                     <div class="recent-post">
                                                         @foreach($reviews as $rs)
                                                            <div class="post-item">
                                                                <div class="post-text">
                                                                    <h5><i class="fa fa-comment"></i> {{$rs->subject}}</h5>
                                                                    <p>{{$rs->review}}</p>
                                                                    <div class="post-meta">
                                                                        <p><i class="fa fa-user"></i> By<a href=""> {{$rs->user->name}}</a></p>
                                                                        <p><i class="fa fa-clock-o"></i><br>At<a href="">{{$rs->created_at}}</a></p>
                                                                        <div class="review-rating">
                                                                            <i class="fa fa-star @if($rs->rate<1) -o empty @endif"></i>
                                                                            <i class="fa fa-star @if($rs->rate<2) -o empty @endif"></i>
                                                                            <i class="fa fa-star @if($rs->rate<3) -o empty @endif"></i>
                                                                            <i class="fa fa-star @if($rs->rate<4) -o empty @endif"></i>
                                                                            <i class="fa fa-star @if($rs->rate<5) -o empty @endif"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                     </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div >
         </section>   <!-- Single Post End-->
@endsection
