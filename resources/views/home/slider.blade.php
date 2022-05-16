<!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            @foreach($sliderdata as $rs)
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{Storage::url($rs->Image)}}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>{{$rs->Title}}</h1>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="">Donate Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Carousel End -->

