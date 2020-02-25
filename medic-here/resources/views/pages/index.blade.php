@extends('layouts.app')

@section('content')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row hero-bg-col">
                    <div class="col-md-5">
                        <div class="container text-center hero-text">
                            <h1>
                                <span class="hero-title">We listen</span>
                            </h1>
                            <div class="text-left hero-subtitle-container">
                                <p>to your issues carefully and provide the most accurate treatment within least
                                    possible time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="custom-shape text-right">
                            <img src="{{asset('imgs/doctor-listen.jpg')}}" alt="doctor patient">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row hero-bg-col">
                    <div class="col-md-5">
                        <div class="container text-center hero-text">
                            <h1>
                                <span class="hero-title">Trustworthy</span>
                            </h1>
                            <div class="text-left hero-subtitle-container">
                                <p>Our doctors have several years of experience and verified by our board of directors.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="custom-shape text-right">
                            <img src="{{asset('imgs/certified-doctors.jpg')}}" alt="doctors image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row hero-bg-col">
                    <div class="col-md-5">
                        <div class="container text-center hero-text">
                            <h1>
                                <span class="hero-title">Health Blog</span>
                            </h1>
                            <div class="text-left hero-subtitle-container">
                                <p>Our doctors publish various articles on health and nutrition on a regular basis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="custom-shape text-right">
                            <img src="{{asset('imgs/health-blog.jpg')}}" alt="health blog image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</section>
@endsection
