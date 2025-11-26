@extends('main')
@section('content')

<!--Page Header Start -->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/headers/about.png);">
    </div>
    <div class="page-header__shape-1" style="background-image: url(assets/images/shapes/page-header-shape-1.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>About Us</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End -->

<!-- About One Start -->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img-box">
                        <div class="about-one__img">
                            <img src="{{ asset('assets/images/resources/about-one-img-1.png') }}" alt="">
                        </div>
                        <div class="about-one__shape-2 float-bob-y">
                            <img src="{{ asset('assets/images/shapes/about-one-shape-2.png') }}" alt="">
                        </div>
                        <div class="about-one__shape-1">
                            <img src="{{ asset('assets/images/shapes/about-one-shape-1.png') }}" alt="">
                        </div>
                        <div class="about-one__shape-4 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/about-one-shape-4.png') }}" alt="">
                        </div>
                        <div class="about-one__shape-3 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/about-one-shape-3.png') }}" alt="">
                        </div>
                        <div class="about-one__img-2">
                            <img src="{{ asset('assets/images/resources/about-one-img-2.png') }}" alt="">
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
                            <div class="section-title__tagline-shape">
                                <img src="assets/images/shapes/section-title-tagline-shape-1.png" alt="">
                            </div>
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
                            <a href="{{ route('book') }}" class="about-one__btn thm-btn">Book Online<span
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

<section class="counter-three" style="margin-top: 120px;">
    <div class="counter-three__bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%"
        style="background-image: none;"
        data-jarallax-original-styles="background-image: url(assets/images/backgrounds/counter-three-bg.jpg);">
        <div id="jarallax-container-0"
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
            <div
                style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;file:///C:/My%20Web%20Sites/orkotks%20airporter/dreamlayout.mnsithub.com/html/gorent/main-html/assets/images/backgrounds/counter-three-bg.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1440px; height: 824.922px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 70.5391px; transform: translate3d(0px, -22.1391px, 0px);">
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="row list-unstyled">
            <!--Counter Three Single Start-->
            <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft animated" data-wow-delay="0ms"
                data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="counter-three__single">
                    <div class="counter-three__icon">
                        <span class="icon-car"></span>
                    </div>
                    <div class="counter-three__count-box">
                        <h3 class="odometer odometer-auto-theme" data-count="1000">
                            <div class="odometer-inside"><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">1</span></span></span></span></span><span
                                    class="odometer-formatting-mark">,</span><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">5</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span><span
                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                            class="odometer-ribbon-inner"><span
                                                class="odometer-value">0</span></span></span></span></span></div>
                        </h3>
                        <span>+</span>
                    </div>
                    <p class="counter-three__count-text">Rides Completed</p>
                </div>
            </li>
            <!--Counter Three Single End-->
            <!--Counter Three Single Start-->
            <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft animated" data-wow-delay="100ms"
                data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInLeft;">
                <div class="counter-three__single">
                    <div class="counter-three__icon">
                        <span class="icon-mileage"></span>
                    </div>
                    <div class="counter-three__count-box">
                        <h3 class="odometer odometer-auto-theme" data-count="95">
                            <div class="odometer-inside"><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">5</span></span></span></span></span><span
                                    class="odometer-formatting-mark">,</span><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span></div>
                        </h3>
                        <span>%</span>
                    </div>
                    <p class="counter-three__count-text">On-Time Arrival Rate
                    </p>
                </div>
            </li>
            <!--Counter Three Single End-->
            <!--Counter Three Single Start-->
            <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight animated" data-wow-delay="200ms"
                data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInRight;">
                <div class="counter-three__single">
                    <div class="counter-three__icon">
                        <span class="icon-reviews"></span>
                    </div>
                    <div class="counter-three__count-box">
                        <h3 class="odometer odometer-auto-theme" data-count="50">
                            <div class="odometer-inside"><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">1</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">4</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span></div>
                        </h3>
                        <span>+</span>
                    </div>
                    <p class="counter-three__count-text">Professional Drivers</p>
                </div>
            </li>
            <!--Counter Three Single End-->
            <!--Counter Three Single Start-->
            <li class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight animated" data-wow-delay="300ms"
                data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="counter-three__single">
                    <div class="counter-three__icon">
                        <img src="{{ asset('assets/images/icon/happy-customer.svg') }}" alt="">
                    </div>
                    <div class="counter-three__count-box">
                        <h3 class="odometer odometer-auto-theme" data-count="950">
                            <div class="odometer-inside"><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">1</span></span></span></span></span><span
                                    class="odometer-formatting-mark">,</span><span class="odometer-digit"><span
                                        class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                                            class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span><span
                                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                class="odometer-ribbon-inner"><span
                                                    class="odometer-value">0</span></span></span></span></span></div>
                        </h3>
                        <span>+</span>
                    </div>
                    <p class="counter-three__count-text">Happy Customers</p>
                </div>
            </li>
            <!--Counter Three Single End-->
        </ul>
    </div>
</section>

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