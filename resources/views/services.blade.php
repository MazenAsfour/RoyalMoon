@extends('layouts.app')
@section('title')
    Services
@endsection
@push('custom-style')
    <style>
        #fh5co-started {
            background: rgba(0, 0, 0, 0.8) !important;
        }

        #fh5co-started .btn {
            background: #d1c286 !important
        }

        .feature-center .btn {
            color: #fff !important
        }
    </style>
@endpush
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url(/images/slide-about-us01.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box " style="text-align: left;padding-left: 20px;"
                            data-animate-effect="fadeIn">
                            <h1>Services</h1>
                            <h2>This is one of the most important thing that all employees must adhere to and practice when
                                they become a part of Team Sunshine. We are proud that Customer Satisfaction has become our
                                Key Success Factor for the past 43 years and counting, with the smile and heart of Team
                                royal moon.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="fh5co-services" class="fh5co-bg-section p-40">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-credit-card"></i>
                        </span>
                        <h3>Credit Card</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove</p>
                        <p><a href="/about" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-wallet"></i>
                        </span>
                        <h3>Save Money</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove</p>
                        <p><a href="/about" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-paper-plane"></i>
                        </span>
                        <h3>Personalized Greetings</h3>
                        <p>Everyone loves personalization, be it when online shopping or when checking in on a hotel.

                            Can you imagine the surprise of your guest. </p>
                        <p><a href="/about" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-pinterest-with-circle"></i>
                        </span>
                        <h3>Better for the environment</h3>
                        <p>Since it was established, Campground Koren Kobarid aims for the nature-friendly development, and
                            this is why, at the campsite, we pay special attention to environmental protection.</p>
                        <p><a href="/about" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-move"></i>
                        </span>
                        <h3>A Working Space</h3>
                        <p>A lot of people work as freelancers, and many are working virtually. Working from home and its
                            benefits are trending right now, and some people may need to check on their email.
                        <p><a href="/about" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-area-graph"></i>
                        </span>
                        <h3>Outdoor swimmingpool</h3>
                        <p>For relaxation, we offer a free outdoor pool 7.5 x 18 meters, open from 10 am to 19 pm.

                            For the tranquility of the public users floating objects are prohibited.</p>
                        <p><a href="/about" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="fh5co-started">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading">
                    <h2>Newsletter</h2>
                    <p>Just stay tune for our latest Apartments. Now you can subscribe</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-12 ">
                    <form class="form-inline " id="formSubscription">
                        <div class="col-md-6 col-sm-6" style="margin: auto">
                            <div class="form-group" style="display: flex">
                                @csrf
                                <input type="email" name="email" required class="form-control" id="email"
                                    placeholder="Email">

                                <button type="submit" class="btn btn-default btn-block"
                                    style="margin-top: 2px;
                                        margin-left: 10px; padding: 9px 27px;">Submit
                                </button>
                            </div>
                        </div>
                        <div class="alert alert-success alert-success-sub ds-none"
                            style="padding:8px 12px;font-size:14px;width: 50%; margin: auto;" role="alert">
                            Subscribed Successfully!
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
