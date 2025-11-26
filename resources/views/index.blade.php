@extends('main')
@section('content')

<!-- Main Slider Start -->
<section class="main-slider">
    <div class="main-slider__carousel owl-carousel owl-theme">

        <div class="item">
            <div class="main-slider__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.png);">
            </div><!-- /.slider-one__bg -->
            <div class="container">
                <div class="main-slider__content">
                    <div class="main-slider__sub-title-box">
                        <p class="main-slider__sub-title">Fast & Reliable</p>
                    </div>
                    <h2 class="main-slider__title">Airport <span>Transfers</span></h2>
                    <p class="main-slider__sub-title-two">Experience</p>
                    <div class="main-slider__btn-and-video-box">
                        <div class="main-slider__btn-box gap-3">
                            <a href="{{ route('book') }}" class="thm-btn">Book Online<span
                                    class="fas fa-arrow-right"></span></a>
                            <a href="tel:{{ env('call') }}" class="slider-num">{{ env('Number') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="main-slider__bg" style="background-image: url(assets/images/backgrounds/slider-1-2.png);">
            </div><!-- /.slider-one__bg -->
            <div class="container">
                <div class="main-slider__content">
                    <div class="main-slider__sub-title-box">
                        <p class="main-slider__sub-title">Okotoks’ Most</p>
                    </div>
                    <h2 class="main-slider__title">Reliable <span>Taxi</span></h2>
                    <p class="main-slider__sub-title-two">Experience</p>
                    <div class="main-slider__btn-and-video-box">
                        <div class="main-slider__btn-box gap-3">
                            <a href="{{ route('book') }}" class="thm-btn">Book Online<span
                                    class="fas fa-arrow-right"></span></a>
                            <a href="tel:{{ env('call') }}" class="slider-num">{{ env('Number') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="main-slider__bg" style="background-image: url(assets/images/backgrounds/slider-1-3.png);">
            </div><!-- /.slider-one__bg -->
            <div class="container">
                <div class="main-slider__content">
                    <div class="main-slider__sub-title-box">
                        <p class="main-slider__sub-title">Your Best</p>
                    </div>
                    <h2 class="main-slider__title">Premium <span>Rides</span></h2>
                    <p class="main-slider__sub-title-two">Experience</p>
                    <div class="main-slider__btn-and-video-box">
                        <div class="main-slider__btn-box gap-3">
                            <a href="{{ route('book') }}" class="thm-btn">Book Online<span
                                    class="fas fa-arrow-right"></span></a>
                            <a href="tel:{{ env('call') }}" class="slider-num">{{ env('Number') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Main Slider Start -->

<!-- Sliding Text One Start -->
<section class="sliding-text-one">
    <div class="sliding-text-one__wrap">
        <ul class="sliding-text__list list-unstyled marquee_mode">
            <li>
                <h2 data-hover="Premium" class="sliding-text__title">Premium
                    <span class="icon-jeep"></span>
                </h2>
            </li>
            <li>
                <h2 data-hover="Fast" class="sliding-text__title">Fast
                    <span class="icon-cuv"></span>
                </h2>
            </li>
            <li>
                <h2 data-hover="Comfort" class="sliding-text__title">Comfort
                    <span class="icon-jeep"></span>
                </h2>
            </li>
            <li>
                <h2 data-hover="Reliable" class="sliding-text__title">Reliable
                    <span class="icon-cuv"></span>
                </h2>
            </li>
            <li>
                <h2 data-hover="On-Time" class="sliding-text__title">On-Time
                    <span class="icon-jeep"></span>
                </h2>
            </li>
            <li>
                <h2 data-hover="Affordable" class="sliding-text__title">Affordable
                    <span class="icon-cuv"></span>
                </h2>
            </li>
        </ul>
    </div>
</section>
<!-- Sliding Text One End -->

<!-- Features One Start -->
<section class="services-one">
    <div class="services-one__shape-1"></div>
    <div class="services-one__shape-2"></div>
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box justify-content-center">
                <span class="section-title__tagline">Our Features</span>
            </div>
            <h2 class="section-title__title title-animation">Your Local Travel <br> Partner</h2>
        </div>
        <div class="row">
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__single-shape-1"></div>
                    <div class="services-one__single-shape-2"></div>
                    <div class="services-one__single-shape-3"></div>
                    <div class="services-one__count"></div>
                    <div class="services-one__icon">
                        <img src="{{ asset('assets/images/features/on-time-airport-transfers.png') }}" alt="">
                    </div>
                    <h3 class="services-one__title"><a>On-Time Airport Transfers</a>
                    </h3>
                    <p class="services-one__text">Consistent, punctual pickups and drop-offs for Calgary Airport.</p>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__single-shape-1"></div>
                    <div class="services-one__single-shape-2"></div>
                    <div class="services-one__single-shape-3"></div>
                    <div class="services-one__count"></div>
                    <div class="services-one__icon">
                        <img src="{{ asset('assets/images/features/clean-and-comfortable-vehicles.png') }}" alt="">
                    </div>
                    <h3 class="services-one__title"><a>Clean & Comfortable Vehicles</a>
                    </h3>
                    <p class="services-one__text">Well-maintained cars for a smooth and relaxing ride.</p>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__single-shape-1"></div>
                    <div class="services-one__single-shape-2"></div>
                    <div class="services-one__single-shape-3"></div>
                    <div class="services-one__count"></div>
                    <div class="services-one__icon">
                        <img src="{{ asset('assets/images/features/professional-local-drivers.png') }}" alt="">
                    </div>
                    <h3 class="services-one__title"><a>Professional Local Drivers</a></h3>
                    <p class="services-one__text">Experienced drivers with strong knowledge of the Foothills region.</p>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="services-one__single">
                    <div class="services-one__single-shape-1"></div>
                    <div class="services-one__single-shape-2"></div>
                    <div class="services-one__single-shape-3"></div>
                    <div class="services-one__count"></div>
                    <div class="services-one__icon">
                        <img src="{{ asset('assets/images/features/247-availability.png') }}" alt="">
                    </div>
                    <h3 class="services-one__title"><a>24/7 Availability</a></h3>
                    <p class="services-one__text">Day or night, reliable transportation whenever you need it.</p>
                </div>
            </div>
            <!--Services One Single End-->
        </div>
    </div>
</section>
<!-- Features One End -->

<!-- About One Start -->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img-box">
                        <div class="about-one__img">
                            <img src="assets/images/resources/about-one-img-1.png" alt="">
                        </div>
                        <div class="about-one__shape-2 float-bob-y">
                            <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                        </div>
                        <div class="about-one__shape-1">
                            <img src="assets/images/shapes/about-one-shape-1.png" alt="">
                        </div>
                        <div class="about-one__shape-4 float-bob-x">
                            <img src="assets/images/shapes/about-one-shape-4.png" alt="">
                        </div>
                        <div class="about-one__shape-3 float-bob-x">
                            <img src="assets/images/shapes/about-one-shape-3.png" alt="">
                        </div>
                        <div class="about-one__img-2">
                            <img src="assets/images/resources/about-one-img-2.png" alt="">
                        </div>
                        <div class="about-one__experience">
                            <div class="about-one__experience-count">
                                <h3 class="odometer" data-count="10">00</h3>
                                <span>+</span>
                            </div>
                            <p class="about-one__experience-text">Years of <br>Experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left sec-title-animation animation-style1">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">About OKOTOKS AIRPORTERS</span>
                        </div>
                        <h2 class="section-title__title title-animation">WELCOME TO OKOTOKS AIRPORTERS</h2>
                    </div>
                    <p class="about-one__text-1">Committed to delivering reliable, safe, and comfortable<br>
                        transportation for every passenger.
                    </p>
                    <p class="about-one__text-2">We proudly serve Okotoks, High River, Diamond Valley, and all
                        surrounding areas with professional airport transfers and local rides. Our goal is to provide
                        smooth, timely, and stress-free travel supported by experienced drivers and well-maintained
                        vehicles. Your journey starts with dependable service you can trust.</p>
                    <ul class="about-one__progress-box list-unstyled">
                        <li>
                            <div class="about-one__progress">
                                <h4 class="about-one__progress-title">Time Awareness</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="100%">
                                        <div class="count-text">100%</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="about-one__progress">
                                <h4 class="about-one__progress-title">Driver Experience</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="100%">
                                        <div class="count-text">100%</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="about-one__btn-box-and-call-box">
                        <div class="about-one__btn-box">
                            <a href="{{ route('about') }}" class="about-one__btn thm-btn">Learn More<span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                        <a href="tel:{{ env('Call') }}">
                            <div class="about-one__call-box">
                                <div class="about-one__call-box-icon">
                                    <span class="icon-call-2"></span>
                                </div>
                                <div class="about-one__call-box-content">
                                    <p>Call to Anytime</p>
                                    <h4><a href="tel:{{ env('Call') }}">{{ env('Number') }}</a></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About One End -->

<!-- Services One Start -->
<section class="why-choose-one">
    <div class="why-choose-one__shape-1"></div>
    <div class="why-choose-one__shape-2"></div>
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style2">
            <div class="section-title__tagline-box justify-content-center">
                <span class="section-title__tagline">Our Services</span>
            </div>
            <h2 class="section-title__title title-animation">Services We <br>Provide</h2>
        </div>
        <div class="row">
            <!-- Why Choose One Single Start -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="why-choose-one__single">
                    <div class="why-choose-one__icon">
                        <img src="{{ asset('assets/images/services/airport-transfers.png') }}" alt="">
                    </div>
                    <div class="why-choose-one__single-inner">
                        <h3 class="why-choose-one__title">Airport Transfers</h3>
                        <p class="why-choose-one__text">Reliable transportation to and from Calgary Airport with
                            punctual pickups, comfortable vehicles, and drivers who ensure a smooth, stress-free travel
                            experience.
                        </p>
                    </div>
                    <div class="why-choose-one__btn-box">
                        <a href="#" class="thm-btn">Book Online<span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Why Choose One Single End -->
            <!-- Why Choose One Single Start -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="why-choose-one__single">
                    <div class="why-choose-one__icon">
                        <img src="{{ asset('assets/images/services/local-taxi-service.png') }}" alt="">
                    </div>
                    <div class="why-choose-one__single-inner">
                        <h3 class="why-choose-one__title">Local Taxi Service</h3>
                        <p class="why-choose-one__text">Convenient and comfortable rides across Okotoks, High River,
                            Diamond Valley, and surrounding areas, ideal for daily errands, appointments, and quick
                            local travel.
                        </p>
                    </div>
                    <div class="why-choose-one__btn-box">
                        <a href="#" class="thm-btn">Book Online<span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Why Choose One Single End -->
            <!-- Why Choose One Single Start -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="why-choose-one__single">
                    <div class="why-choose-one__icon">
                        <img src="{{ asset('assets/images/services/corporate-travel.png') }}" alt="">
                    </div>
                    <div class="why-choose-one__single-inner">
                        <h3 class="why-choose-one__title">Corporate Travel</h3>
                        <p class="why-choose-one__text">Professional transportation tailored for business needs,
                            offering timely pickups and a comfortable ride to meetings, conferences, and corporate
                            events.
                        </p>
                    </div>
                    <div class="why-choose-one__btn-box">
                        <a href="#" class="thm-btn">Book Online<span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Why Choose One Single End -->
        </div>
        <div class="d-flex justify-content-center mt-3">
            <a href="{{ route('services') }}" class="thm-btn">View More Services<span
                    class="fas fa-arrow-right"></span></a>
        </div>
    </div>
</section>
<!-- Services One End -->

<!-- Testimonial One Start -->
<section class="testimonial-one">
    <div class="container">
        <div class="section-title text-left sec-title-animation animation-style2">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Our Testimonial</span>
            </div>
            <h2 class="section-title__title title-animation">What Peoples Say <br> about Orkotoks Airporter</h2>
        </div>
        <div class="testimonial-one__carousel owl-theme owl-carousel">
            <!-- Testimonial One Single Start -->
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.html">Sarah Mitchell</a>
                            </h4>
                            <p class="testimonial-one__sub-title">Customer</p>
                        </div>
                    </div>
                    <p class="testimonial-one__text">Excellent service every time. The driver arrived early, helped with
                        my luggage, and the ride to Calgary Airport was smooth and stress-free.</p>
                    <div class="testimonial-one__rating">
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="icon-quote"></span>
                    </div>
                </div>
            </div>
            <!-- Testimonial One Single End -->
            <!-- Testimonial One Single Start -->
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.html">Jason Cooper</a>
                            </h4>
                            <p class="testimonial-one__sub-title">Customer</p>
                        </div>
                    </div>
                    <p class="testimonial-one__text">Reliable and friendly. I use them for all my trips between Okotoks
                        and High River, and they’ve never once been late.</p>
                    <div class="testimonial-one__rating">
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="icon-quote"></span>
                    </div>
                </div>
            </div>
            <!-- Testimonial One Single End -->
            <!-- Testimonial One Single Start -->
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.html">Emily Rhodes</a>
                            </h4>
                            <p class="testimonial-one__sub-title">Customer</p>
                        </div>
                    </div>
                    <p class="testimonial-one__text">Great experience from start to finish. Clean car, professional
                        driver, and very comfortable ride. Highly recommended.</p>
                    <div class="testimonial-one__rating">
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="icon-quote"></span>
                    </div>
                </div>
            </div>
            <!-- Testimonial One Single End -->
            <!-- Testimonial One Single Start -->
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.html">Mark Stevenson</a>
                            </h4>
                            <p class="testimonial-one__sub-title">Customer</p>
                        </div>
                    </div>
                    <p class="testimonial-one__text">Booked an early morning airport ride and everything went perfectly.
                        On time, polite, and very convenient. Will definitely use again.</p>
                    <div class="testimonial-one__rating">
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="icon-quote"></span>
                    </div>
                </div>
            </div>
            <!-- Testimonial One Single End -->
            <!-- Testimonial One Single Start -->
            <div class="item">
                <div class="testimonial-one__single">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__content">
                            <h4 class="testimonial-one__client-name"><a href="testimonials.html">Olivia Turner</a>
                            </h4>
                            <p class="testimonial-one__sub-title">Customer</p>
                        </div>
                    </div>
                    <p class="testimonial-one__text">Fantastic local taxi service. They always show up quickly and make
                        traveling around Diamond Valley and surrounding areas so easy.</p>
                    <div class="testimonial-one__rating">
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                    </div>
                    <div class="testimonial-one__quote">
                        <span class="icon-quote"></span>
                    </div>
                </div>
            </div>
            <!-- Testimonial One Single End -->
        </div>
    </div>
</section>
<!-- Testimonial One End -->

<!--Call One Start -->
<section class="call-one">
    <div class="container">
        <div class="call-one__inner wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="call-one__inner-content">
                <div class="call-one__bg" style="background-image: url(assets/images/backgrounds/call-one-bg.jpg);">
                </div>
                <div class="call-one__left">
                    <p class="call-one__sub-title">Available 24/7</p>
                    <h4 class="call-one__title">Call Any Time For Booking</h4>
                </div>
                <div class="call-one__details">
                    <div class="call-one__icon">
                        <span class="icon-call-2"></span>
                    </div>
                    <div class="call-one__content">
                        <p>Call 24/7</p>
                        <h4><a href="tel:{{ env('Call') }}">{{ env('Number') }}</a></h4>
                    </div>
                </div>
                <div class="call-one__btn-box">
                    <a href="{{ route('book') }}" class="thm-btn">Book Now<span class="fas fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Call One End -->

@endsection