@extends('layouts.app')
@section('title')
    {{ $product[0]->product_name }}
@endsection
@push('custom-style')
    <style>

    </style>
@endpush
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url(/images/slide-main03.jpg); margin-bottom: 50px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box " style="text-align: left;padding-left: 20px;"
                            data-animate-effect="fadeIn">
                            <h1>{{ $product[0]->product_name }}</h1>
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


    <div id="fh5co-product" style="margin-bottom:100px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12  col-md-offset-1 animate-box">
                    <img style="min-height: 500px;width: 100%;margin-bottom:70px;    max-height: 520px;
                    object-fit: cover;"
                        src="{{ $product[0]->product_image_path }}" alt="user">
                    <div class="row">
                        <div class="col-sm-7">
                            <h3>{{ $product[0]->product_name }}</a></h3>
                        </div>
                        <div class="col-sm-5">
                            <span class="price">${{ $product[0]->product_price }} /Per Day</span>
                        </div>
                        <input type="hidden" value="{{ $product[0]->product_price }}" name="" id="product-price">
                    </div>
                    <p>{{ $product[0]->product_description }}</p>

                    <div class="row services" style="margin: 20px 0">
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Air conditioning
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Balcony
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Cable Ready
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Wifi
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Dishwasher
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i> </span>Kitchen
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Porch
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Smoke Free
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Refrigerator
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Tub/Shower
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Dining Room
                        </div>
                        <div class="col-sm-3">
                            <span class="dash"> <i class="icon-check"></i>
                            </span>Patio
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-12">
                    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
                    <div class="card-app">
                        <div id="datepicker"></div>
                        <div class="text-center">
                            <h2><b>Total Cost</b></h2>
                        </div>
                        <div class="row" style="width:100%;position: relative;top: 20px;">
                            <div class="col-sm-10">
                                <h4>Price For All Days</h4>
                            </div>
                            <div class="col-sm-2">
                                <h4 id="prc-days">$0.000</h4>
                            </div>
                            <div class="col-sm-10">
                                <h4>Cleaning Fees</h4>
                            </div>
                            <div class="col-sm-2">
                                <h4 id="prc-fees">$30.00</h4>
                            </div>
                            <div class="col-sm-10">
                                <h4>Tax</h4>
                            </div>
                            <div class="col-sm-2">
                                <h4 id="prc-fees">$0.000</h4>
                            </div>
                            <div class="col-sm-10">
                                <h4>Price For day</h4>
                            </div>
                            <div class="col-sm-2">
                                <h4 id="prc-one">${{ $product[0]->product_price }}</h4>
                            </div>
                            <div class="col-sm-10">
                                <h4>Number Of Days</h4>
                            </div>
                            <div class="col-sm-2">
                                <h4 id="nm-days">0</h4>
                            </div>
                            <div class="col-sm-10">
                                <h4>Total</h4>
                            </div>
                            <div class="col-sm-2">
                                <h4 id="prc-total"><b>$0.000</b></h4>
                            </div>
                            <div class="col-sm-10">
                                <h4>Due on Approval</h4>
                            </div>
                            <div class="col-sm-2">
                                <h4 id="apr-total"><b>$0.000</b></h4>
                            </div>

                        </div>
                        <div class="mt-20 w-100">
                            <button
                                class="btn btn-dark w-100 @Auth lanuchModalBooking @endAuth @guest lanuchModalLogin @endguest"
                                style="position: relative;top: 20px;">Instant Book</button>
                            <label for=""></label>
                            @guest <label for="" style="position: relative;top:16px;;font-size:14px">Login
                                Required*</label> @endguest
                        </div>

                    </div>
                    <input type="hidden" id="dates" />

                </div>

            </div>

            <div class="fh5co-tabs animate-box col-md-8">
                <div class="" style="border-bottom: 1px solid #d1c286;margin-bottom: 30px !important"></div>

                <h3 class="mb-20">Rating</h3>
                @empty($ratings[0]->description)
                    No Rating Yet
                @endempty
                @foreach ($ratings as $rating)
                    <div class="fh5co-tab-content-wrap">

                        <div class="feed">
                            <div>
                                <blockquote>
                                    <p>{{ $rating->description }}</p>
                                    <h3>&mdash; {{ $rating->name }}</h3>
                                    <span class="rate">
                                        @for ($i = 0; $i < $rating->rating; $i++)
                                            <i class="icon-star2"></i>
                                        @endfor
                                    </span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div>
                    <button class="mt-20 btn btn-primary" onclick="lanuchModalRating()"
                        style="width: 200px;margin-top: 25px !important;dispaly:block !important;">Add
                        Rating</button>
                </div>
            </div>

            <div class="container" style="margin-top: 90px;padding:0">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/images/74123025-140c-4926-b2f6-818b06742730.jpg" class="footer-top" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="/images/b92df366-3905-4c97-a19b-38b91f52a41c.jpg" class="footer-top" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="/images/4a2fa582-7b78-4518-8b80-af059d2de225.jpg" class="footer-top" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="/images/12the-eddy-at-riverview-smyrna-ga-primary-photo.jpg" class="footer-top"
                            alt="">
                    </div>
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
                            style="padding:8px 12px;font-size:14px;width: 50%;
                        margin: auto;"
                            role="alert">
                            Subscribed Successfully!
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-rating" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"> Add Rating</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal"onclick="hideModal()"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="form-rating" action="/add-rating-user" method="POST">
                        @csrf
                        <div class="row">
                            <div class="small-12 medium-2 large-2 columns">

                                <div class="form-outline mb-3">
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
                                    <label class="form-label m-0" id="">Your Rating</label>
                                    <div class="gezdvu">
                                        <div class="ponavues">
                                            <label class="eysan">
                                                <input type="radio" name="radio1" id="star1" value="1">

                                                <i class="far fa-star gasedun one-star"></i>
                                            </label>
                                            <label class="eysan">
                                                <input type="radio" name="radio1" id="star2" value="2">

                                                <i class="far fa-star gasedun two-star"></i>
                                            </label>
                                            <label class="eysan">
                                                <input type="radio" name="radio1" id="star3" value="3">

                                                <i class="far fa-star gasedun three-star"></i>
                                            </label>
                                            <label class="eysan">
                                                <input type="radio" name="radio1" id="star4" value="4">

                                                <i class="far fa-star gasedun four-star"></i>
                                            </label>
                                            <label class="eysan">
                                                <input type="radio" name="radio1" id="star5" value="5">

                                                <i class="far fa-star gasedun five-star"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="selected_rate" id="selected-rate">
                                <input type="hidden" name="product_name" value="{{ $product[0]->product_name }}">
                                <input type="hidden" name="product_id" id="product_id" value="{{ $product[0]->id }}">

                                <div class="form-outline mb-3">
                                    <label class="form-label" id="">your Name</label>
                                    <input type="text" name="name"
                                        @auth value="{{ Auth::user()->name }}" disabled @endauth required
                                        class="form-control" />
                                </div>
                                <div class="form-outline mb-3">
                                    <label class="form-label" id="">Your Email</label>
                                    <input type="email" name="email" disabled
                                        @auth value="{{ Auth::user()->email }}" @endauth required class="form-control" />
                                </div>

                                <input type="hidden" name="id" id="cookkie">
                                <div class="form-outline mb-3">
                                    <label class="form-label" id="">Rating Details</label>
                                    <textarea name="description" id="pr_description_update"class="form-control" required cols="4" rows="3"></textarea>
                                </div>
                                <div class="alert alert-success-rating alert-success ds-none"
                                    style="padding:8px 12px;font-size:14px" role="alert">
                                    Thank you for your rating! This rating will be pending after admin approving it.
                                </div>
                                <!-- Submit button -->
                                <button class="btn btn-light" onclick="hideModal()">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-block">Send
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-login" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"> Login Required</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal"onclick="hideModal()"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="small-12 medium-2 large-2 columns">
                            We need to know who are you*
                            <div style="text-align: end;margin-top:30px">
                                <button class="btn btn-light" onclick="hideModal()">Cancel</button>
                                <a href="/login" class="btn btn-primary btn-block m-0">Go to Login</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-booking" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"> Are You Sure That You Want to Rent This Apartments?
                    </h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal"onclick="hideModal()"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="small-12 medium-2 large-2 columns">
                            When you make confirm we will save your data and send notification when your request has
                            been
                            approved!
                            <form action="/send-appointment-user" id="form-app">
                                <input type="hidden" name="user_id" id="user_id"
                                    value="@Auth {{ Auth::user()->id }} @endAuth">
                                <input type="hidden" name="checkin" id="checkin" />
                                <input type="hidden" name="price" id="price-form" />
                                <input type="hidden" name="checkout" id="checkout" />
                                <input type="hidden" name="product_name" id="pr-name"
                                    value="{{ $product[0]->product_name }}" />
                                <input type="hidden" name="product_id" id="pr-id" value="{{ $product[0]->id }}" />
                            </form>
                            <div class="alert alert-success-app alert-success ds-none"
                                style="padding:8px 12px;font-size:14px;margin-top: 21px;" role="alert">
                                Thank you for your appointment! we will send to you notifications if this appointment
                                is approved!
                            </div>
                            <div style="text-align: end;margin-top:30px">
                                <button class="btn btn-light" onclick="hideModal()">Cancel</button>
                                <button class="btn btn-primary btn-block m-0" onclick="sendAppointment()">Confirm</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        
    @endphp
    <script>
        const disabledDates = {!! json_encode($disabledDates) !!};
    </script>
    <script src="/theme/js/single_product.js"></script>
@endsection
