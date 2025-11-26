@extends('main')
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/headers/services.png);">
    </div>
    <div class="page-header__shape-1" style="background-image: url(assets/images/shapes/page-header-shape-1.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Our Services</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Services One Start -->
<section class="why-choose-one" style="padding-bottom: 120px;">
    <div class="why-choose-one__shape-1"></div>
    <div class="why-choose-one__shape-2"></div>
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box justify-content-center">
                <span class="section-title__tagline">Our Services</span>
            </div>
            <h2 class="section-title__title">Services We <br>Provide</h2>
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
                        <a href="{{ route('book') }}" class="thm-btn">Book Online<span class="fas fa-arrow-right"></span></a>
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
                        <a href="{{ route('book') }}" class="thm-btn">Book Now<span class="fas fa-arrow-right"></span></a>
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
                        <a href="listing-single.html" class="thm-btn">Book Online<span
                                class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Why Choose One Single End -->
            <!-- Why Choose One Single Start -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="why-choose-one__single">
                    <div class="why-choose-one__icon">
                        <img src="{{ asset('assets/images/services/out-of-town-trips.png') }}" alt="">
                    </div>
                    <div class="why-choose-one__single-inner">
                        <h3 class="why-choose-one__title">Out-of-Town Trips</h3>
                        <p class="why-choose-one__text">Safe and relaxed long-distance travel to nearby towns and
                            destinations, perfect for personal trips, family visits, and planned outings.
                        </p>
                    </div>
                    <div class="why-choose-one__btn-box">
                        <a href="{{ route('book') }}" class="thm-btn">Book Online<span
                                class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Why Choose One Single End -->
            <!-- Why Choose One Single Start -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="why-choose-one__single">
                    <div class="why-choose-one__icon">
                        <img src="{{ asset('assets/images/services/event-transportation.png') }}" alt="">
                    </div>
                    <div class="why-choose-one__single-inner">
                        <h3 class="why-choose-one__title">Event Transportation</h3>
                        <p class="why-choose-one__text">Reliable transport for weddings, parties, and special
                            gatherings, ensuring you and your guests arrive safely and on schedule.
                        </p>
                    </div>
                    <div class="why-choose-one__btn-box">
                        <a href="{{ route('book') }}" class="thm-btn">Book Online<span
                                class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Why Choose One Single End -->
            <!-- Why Choose One Single Start -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="why-choose-one__single">
                    <div class="why-choose-one__icon">
                        <img src="{{ asset('assets/images/services/door-to-door-service.png') }}" alt="">
                    </div>
                    <div class="why-choose-one__single-inner">
                        <h3 class="why-choose-one__title">Door-to-Door Service</h3>
                        <p class="why-choose-one__text">Easy, direct pickup and drop-off at your location, providing a
                            smooth and convenient travel option available day or night.
                        </p>
                    </div>
                    <div class="why-choose-one__btn-box">
                        <a href="{{ route('book') }}" class="thm-btn">Book Online<span
                                class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <!-- Why Choose One Single End -->
        </div>
    </div>
</section>
<!-- Why Choose One End -->

<!--Call One Start -->
<section class="call-one">
    <div class="container">
        <div class="call-one__inner">
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