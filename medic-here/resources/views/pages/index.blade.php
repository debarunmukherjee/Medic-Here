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

<section class="about-us">
    <div class="container text-center section-title mt-5 mb-5">
        Who are we?
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{asset('imgs/name-logo.svg')}}" alt="Company logo with name" class="about-us-img mx-auto">
            </div>
            <div class="col-md-8 about-us-text">
                <p>
                    <span class="highlight-text-start">Mediic Here</span> lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur totam, voluptas, quae illum ipsa fugiat odio expedita quas omnis atque amet voluptatum quasi rem distinctio aliquam, veritatis debitis ut sequi.
                </p>

                <p class="mt-3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde consectetur vel ullam explicabo? Voluptas, nam nobis repellat id similique saepe repudiandae doloremque rem dolor aliquid facere, distinctio est sapiente laboriosam.
                </p>
                
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container text-center section-title mt-5 mb-5">
        What sets us apart?
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="container">
                    <div class="row text-center">
                        <img src="{{asset('imgs/trust.svg')}}" alt="Trust image" class="feature-icon mx-auto">
                    </div>
                    <div class="row mt-3">
                        <p>
                            <span class="highlight-text-start">Trust</span> is always at the heart of all the services by medic here. If there is anything that you feel went wrong on our side please don't hesitate to bring it to our attention.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <div class="row text-center">
                        <img src="{{asset('imgs/affordable.svg')}}" alt="Trust image" class="feature-icon mx-auto">
                    </div>
                    <div class="row mt-3">
                        <p>
                            <span class="highlight-text-start">Affordability</span> is one of the primary goals of medic here. We try our best to bring the best of our services to you with minimal cost.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <div class="row text-center">
                        <img src="{{asset('imgs/available.svg')}}" alt="Trust image" class="feature-icon mx-auto">
                    </div>
                    <div class="row mt-3">
                        <p>
                            <span class="highlight-text-start">Availability</span> of all our services is one of the key features that sets us apat from other clinic services. Doctors are available 24 hours every day of the week.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">

</section>
@endsection
