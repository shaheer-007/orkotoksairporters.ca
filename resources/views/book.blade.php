@extends('main')
@section('content')

<!--Page Header Start -->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/headers/book.png);">
    </div>
    <div class="page-header__shape-1" style="background-image: url(assets/images/shapes/page-header-shape-1.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Book online</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li>Online</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End -->

<section class="search-car" style="padding: 120px 0 120px;">
    <div class="container">
        <div class="search-car__inner">
            <div class="search-car__form-box">
                <div style="margin-bottom: 40px !important">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <form class="contact-form-validated search-car__form booking-form"
                    action="{{ route('booking.submit') }}" method="post">
                    @csrf

                    <div class="row">

                        <!-- Name -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-user" style="height: 18px; width: 17px;"></span>Name
                                </p>
                                <div class="select-box">
                                    <input type="text" id="fullname" name="fullname" class="form-control"
                                        placeholder="John Doe" required="">
                                </div>
                            </div>
                        </div>

                        <!-- Number -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-phone" style="height: 18px; width: 17px;"></span>Number
                                </p>
                                <div class="select-box">
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="(123) 456-7890" required="">
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-envelope"
                                        style="height: 18px; width: 17px; margin-right: 5px;"></span>Email
                                </p>
                                <div class="select-box">
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="example@example.com" required="">
                                </div>
                            </div>
                        </div>


                        <!-- Car Type Select -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-car"></span>Car Type
                                </p>
                                <div class="select-box">
                                    <select name="car_type" id="car_type" class="selectmenu wide" required>
                                        <option selected="selected" value="">Select Car Type</option>
                                        <option value="sedan">Sedan</option>
                                        <option value="suv">SUV</option>
                                        <option value="van">Van</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Pickup Location -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-pin-2"></span>Pickup Location
                                </p>
                                <div class="select-box">
                                    <input type="text" placeholder="Pickup Location" name="pickup_location"
                                        id="pickup_location" required>
                                </div>
                            </div>
                        </div>

                        <!-- Pickup Date -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-date"></span>Pickup Date
                                </p>
                                <input type="text" placeholder="mm/dd/yyyy" name="date" id="date" class="hasDatepicker"
                                    required>
                            </div>
                        </div>

                        <!-- Pickup Time -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-clock"></span>Pickup Time
                                </p>
                                <input type="text" name="time" id="time" placeholder="Choose A Time"
                                    class="hasPtTimeSelect" required>
                            </div>
                        </div>

                        <!-- Drop-off Location -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-pin-2"></span>Drop-off Location
                                </p>
                                <div class="select-box">
                                    <input type="text" placeholder="Drop-off Location" name="dropoff_location" id="dropoff_location" required />
                                </div>
                            </div>
                        </div>

                        <!-- Luggage -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="fas fa-suitcase"></span>Luggage
                                </p>
                                <div class="select-box">
                                    <input type="text" placeholder="No. of Luggage" name="luggage" id="luggage"
                                        required />
                                </div>
                            </div>
                        </div>

                        <!-- Passengers -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="fas fa-users"></span>Passengers
                                </p>
                                <div class="select-box">
                                    <input type="text" placeholder="No. of Passengers" name="passengers" id="passengers"
                                        required />
                                </div>
                            </div>
                        </div>

                        <!-- Note -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="search-car__input-box">
                                <p class="search-car__input-title">
                                    <span class="icon-edit"></span>Additional Note
                                </p>
                                <div class="select-box">
                                    <input type="text" placeholder="Your Message ..." name="notes" id="notes" />
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-xl-12 d-flex justify-content-center">
                            <div class="search-car__btn-box">
                                <button type="submit" class="thm-btn">Book Now
                                    <span class="fas fa-check"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection