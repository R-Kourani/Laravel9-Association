@extends('layouts.frontbase')

@section('title', $data->Tilte)


@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Detail Page</h2>
                        </div>
                        <div class="col-12">
                            <a href="">{{$data->menu->Title}} Menu</a>
                            <a href="">{{$data->Title}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- Single Post Start-->
            <div class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="single-content">
                                <img src="{{Storage::url($data->Image)}}" />
                                <h2>{{$data->Title}}</h2>
                                <p>
                                    {!! $data->Description !!}
                                </p>
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
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="url" class="form-control" id="website">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn btn-custom">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Post End-->
@endsection
