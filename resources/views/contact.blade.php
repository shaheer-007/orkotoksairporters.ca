@extends('main')
@section('content')

<!--Page Header Start -->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/headers/contact.png);">
    </div>
    <div class="page-header__shape-1" style="background-image: url(assets/images/shapes/page-header-shape-1.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Contact Us</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End -->

<!--Contact Info Start-->
<section class="contact-info">
    <div class="container">
        <div class="row">
            <!--Contact Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-call"></span>
                    </div>
                    <p>Contact Us</p>
                    <h3><a href="tel:{{ env('Call') }}">{{ env('Number') }}</a></h3>
                </div>
            </div>
            <!--Contact Two Single End-->
            <!--Contact Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-email"></span>
                    </div>
                    <p>Mail Us</p>
                    <h3><a href="mailto:{{ env('Email') }}">{{ env('Email') }}</a></h3>
                </div>
            </div>
            <!--Contact Two Single End-->
            <!--Contact Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                <div class="contact-info__single">
                    <div class="contact-info__icon">
                        <span class="icon-location"></span>
                    </div>
                    <p>Our Office Location</p>
                    <h3>{{ env('Location') }}</h3>
                </div>
            </div>
            <!--Contact Two Single End-->
        </div>
    </div>
</section>
<!--Contact Info End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="contact-page__inner">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-page__left">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40408.530345003775!2d-114.00753338894614!3d50.728599772498654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53719832dbd76fe5%3A0x583906fa0929b961!2sOkotoks%2C%20AB%2C%20Canada!5e0!3m2!1sen!2s!4v1764008882651!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="google-map__one"></iframe>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-page__right">
                        <div style="margin-bottom: 40px !important">
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <h3 class="contact-page__form-title">Share You Query</h3>
                        <form id="contact-form" class="contact-form-validated contact-page__form"
                            action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" name="name" placeholder="Your name" id="name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" name="email" placeholder="Your Email" id="email"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Mobile" name="number" id="number">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Subject" name="subject" id="subject">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="message" placeholder="Messege" id="message"></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button type="submit" class="thm-btn contact-page__btn"
                                            data-loading-text="Please wait...">
                                            <span class="thm-btn-text">Send A Message</span>
                                            <span class="thm-btn-icon-box"><i class="fas fa-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

@endsection