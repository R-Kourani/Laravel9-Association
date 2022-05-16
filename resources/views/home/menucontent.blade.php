@extends('layouts.frontbase')

@section('title', $menu->Title . ' Content')


@section('content')

    <!-- Single Post Start-->
    @foreach($contents as $rs)
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <img src="{{Storage::url($rs->Image)}}" alt="Image" style="width:400px;height:300px";>
                        <ul class="breadcrumb">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">/{{$menu->Title}}</li>
                        </ul>
                        <h2>{{$rs->Title}}</h2><br>
                        <h4>Type:</h4>
                        <p>
                            {!! $rs->Type !!}
                        </p>
                        <h4>Keywords:</h4>
                        <p>
                            {!! $rs->Keywords !!}
                        </p>
                        <h4>Description:</h4>
                        <p>
                            {!! $rs->Description !!}
                        </p>
                        <br>
                        <h4>Details:</h4>
                        <p>
                            {!! $rs->Detail !!}
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="{{route('content',['id'=>$rs->id])}}">View Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
