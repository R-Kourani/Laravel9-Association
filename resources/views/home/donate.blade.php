@extends('layouts.frontbase')

@section('title', 'Donate |'. $setting->title)
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
                    <a href="">Donate</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Donate Start -->
    <div class="donate" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/donate.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <p>Donate Now</p>
                            <h2>Let's donate to needy people for better lives</h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                The pain itself is a lot of pain. My price does not change. It's easy to choose not to decorate the classroom. Some fear the torturer, the author of this pregnant, cartoon who I'm not the biggest players. Aenean convallis porttitor. But sometimes the lake is not flattering.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form">
                        @include('home.messages')
                        <form action="{{route('storepayment')}}" method="post">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name on your Card" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="exp_date" name="exp_date" placeholder="Exp.Date" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="cvv"  name="cvv" placeholder="CVV" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="amount" name="amount" placeholder="amount" required="required" />
                            </div>
                            <div class="control-group">
                                <textarea type="text" class="form-control" id="note" name="note" placeholder="Your Note"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->
@endsection
