@extends('layouts.app')

@section('custom-styles')
    <link rel="stylesheet" href="{{asset('css/Index/style.css')}}">
@endsection

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

<section class="about-us" id="about-us">
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

<section class="features" id="features">
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

<section class="testimonials" id="testimonials">
    <div class="container text-center section-title mt-5 mb-5">
        What our patients think?
    </div>
    <div class="owl-carousel">
        <div class="review-item">
            <div class="container">
                <div class="row text-center">
                    <div class="thumbnail" style="background-image: url('../../imgs/p1.jpg')"><div class="overlay">Tracy Smith</div></div>
                </div>
            </div>
            <div class="container mt-4 text-center">
                <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
            </div>
        </div>
        <div class="review-item">
            <div class="container">
                <div class="row text-center">
                    <div class="thumbnail" style="background-image: url('../../imgs/p4.jpg')"><div class="overlay">Eric Gonzales</div></div>
                </div>
            </div>
            <div class="container mt-4 text-center">
                <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
            </div>
        </div>
        <div class="review-item">
            <div class="container">
                <div class="row text-center">
                    <div class="thumbnail" style="background-image: url('../../imgs/p2.jpg')"><div class="overlay">Rick Lowe</div></div>
                </div>
            </div>
            <div class="container mt-4 text-center">
                <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, rem! Lorem ipsum dolor</p>
                </blockquote>
            </div>
        </div>
        <div class="review-item">
            <div class="container">
                <div class="row text-center">
                    <div class="thumbnail" style="background-image: url('../../imgs/p3.jpg')"><div class="overlay">Judy Lawrence</div></div>
                </div>
            </div>
            <div class="container mt-4 text-center">
                <blockquote class="blockquote">
                    <p class="mb-0">Sit amet consectetur adipisicing elit. Unde vitae officiis quam illo consectetur omnis neque</p>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contact-us">
    <div class="bg-contact2">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contact Us
					</span>
					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn" id="contact-submit-btn">
								Send Your Message
							</button>
						</div>
                    </div>
                    <div class="container mt-3" id="contact-success-alert">
                        <div class="alert alert-success" role="alert">
                            <strong>Message Received! </strong>Sit tight till we get back to you.
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</section>


@endsection

@section('page-scripts')
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                stagePadding: 50,
                margin:10,
                items: 1,
                responsiveClass:true,
                responsive:{
                    1030:{
                        items:2,
                        nav:true
                    }
                }
            });
            $('#contact-success-alert').hide();
        });
    </script>

    {{-- contact form scripts --}}
    <script>
        $(document).ready(function(){
            (function ($) {
                "use strict";
                $('.input2').each(function(){
                    $(this).on('blur', function(){
                        if($(this).val().trim() != "") {
                            $(this).addClass('has-val');
                        }
                        else {
                            $(this).removeClass('has-val');
                        }
                    })    
                })
                var name = $('.validate-input input[name="name"]');
                var email = $('.validate-input input[name="email"]');
                var message = $('.validate-input textarea[name="message"]');


                $('.validate-form').on('submit',function(e){
                    e.preventDefault();
                    var check = true;

                    if($(name).val().trim() == ''){
                        showValidate(name);
                        check=false;
                    }


                    if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                        showValidate(email);
                        check=false;
                    }

                    if($(message).val().trim() == ''){
                        showValidate(message);
                        check=false;
                    }

                    if(check)
                    {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '/contact',
                            type: 'POST',
                            data: {
                                'name' : name.val(),
                                'email' : email.val(),
                                'message' : message.val()
                            },
                            dataType: 'JSON',
                            success: function (data) { 
                                if(data.status == 'success')
                                {
                                    $('.validate-form').trigger("reset");
                                    $("#contact-success-alert").show().delay(1000).fadeOut();
                                }
                            }
                        });
                    }

                    return check;
                });


                $('.validate-form .input2').each(function(){
                    $(this).focus(function(){
                        hideValidate(this);
                    });
                });
                function showValidate(input) {
                    var thisAlert = $(input).parent();

                    $(thisAlert).addClass('alert-validate');
                }
                function hideValidate(input) {
                    var thisAlert = $(input).parent();

                    $(thisAlert).removeClass('alert-validate');
                }
            })(jQuery);
        });
        
    </script>
@endsection
