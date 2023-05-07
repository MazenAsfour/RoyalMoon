@extends('layouts.app')
@push('custom-style')
    <style>
        body {}

        .owl-height {
            min-height: 245px !important
        }
    </style>
@endpush
@section('content')
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(images/PGAPool.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="price">$800</span>
                                    <h2>Alato Cabinet</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                    <p><a href="/shop" class="btn btn-primary btn-outline btn-lg">Rent Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/edvin-johansson-rlwE8f8anOc-unsplash.jpg);">
                    <div class="container">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="price">$530</span>
                                    <h2>The Haluz Rocking Chair</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                    <p><a href="/shop" class="btn btn-primary btn-outline btn-lg">Rent Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/christian-lambert-R1P_WAU9Fuk-unsplash.jpg);">
                    <div class="container">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="price">$750</span>
                                    <h2>Alato Cabinet</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                    <p><a href="/shop" class="btn btn-primary btn-outline btn-lg">Rent Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="fh5co-product" style="margin: 70px 0">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading">
                    <span>Royal resort</span>
                    <h2>About Us</h2>
                    <p>Find true quality time for you at some of Palm Beach's finest Golf & Spa Resorts. A truly effortless
                        escape boasting sumptuous vistas, exclusive amenities, and luxury at your fingertips. Play on
                        historic golf courses, suit up with premium attire or practice on a driving range. Renew yourself at
                        the spa with unique, one-of-a-kind treatments and lavish products. These unforgettable stays will
                        have you dreaming of coming back, year after year.</p>
                </div>
            </div>
        </div>
    </div>
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


    <div id="fh5co-product" style="margin: 70px 0">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading">
                    <span>Cool Stuff</span>
                    <h2>Apartments of Hotel.</h2>
                    <p>Enter a space where luxury caters to your every whim. This Forbes Five-Star Award-winning spa was
                        created to celebrate you. Step into your private garden villa and enjoy a hand-drawn bath while
                        listening to the sound of waves breaking on the shore. </p>
                </div>
            </div>
            <div class="row">
                @php
                    $count = 0;
                @endphp
                @foreach ($products as $product)
                    @php
                        $count++;
                        if ($count > 3) {
                            break;
                        }
                    @endphp
                    <div class="col-md-4 text-center animate-box mt-20">
                        <div class="product">
                            <div class="product-grid" style="background-image:url({{ $product->product_image_path }});">
                                <a href="single-product/{{ $product->id }}" class="pointer">
                                    <div class="inner">
                                        <p>
                                            {{-- <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a> --}}
                                            <a href="single-product/{{ $product->id }}" class="icon"><i
                                                    class="icon-eye"></i></a>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="desc" style="text-align: initial;">
                                <div class="row">
                                    <div class="col-sm-7" style="padding-top: 10px">
                                        <h3><a href="single-product/{{ $product->id }}">{{ $product->product_name }}</a>
                                        </h3>
                                    </div>
                                    <div class="col-sm-5">
                                        <a href="single-product/{{ $product->id }}" class="pointer">
                                            <span style="float:right;padding-right:10px;font-weight:500;color:#000"
                                                class="price">${{ $product->product_price }} /per day</span>
                                        </a>
                                    </div>
                                </div>

                                <span style="display: block" class="desc">@php echo implode(' ', array_slice(explode(' ', $product->product_description), 0, 20));@endphp..</span>
                                @auth
                                    <button class="w-100 btn-primary btn mt-40"
                                        onclick="addToFaviourte({{ $product->id }},{{ Auth::user()->id }})"><i
                                            class="icon-heart"></i> Add To
                                        Favourite</button>
                                @endauth

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div style="margin-top: 30px" class="text-center">
                <a href="/shop" class="btn btn-primary">Explore More</a>
            </div>
        </div>
    </div>

    <div id="fh5co-testimonial" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading">
                    <span>Testimony</span>
                    <h2>Happy Clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="/theme/images/person1.jpg" alt="user">
                                    </figure>
                                    <span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="/theme/images/person2.jpg" alt="user">
                                    </figure>
                                    <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the
                                            Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="/theme/images/person3.jpg" alt="user">
                                    </figure>
                                    <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at the coast of the
                                            Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="fh5co-counter" class="fh5co-bg fh5co-counter"
        style="background-image:url(/images/pexels-willian-justen-de-vasconcellos-16116489.jpg);">
        <div class="container">

            <div class="row" style="margin: 100px 0">
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="icon-eye"></i>
                        </span>

                        <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000"
                            data-refresh-interval="50">1</span>
                        <span class="counter-label">Creativity Fuel</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="icon-shopping-cart"></i>
                        </span>

                        <span class="counter js-counter" data-from="0" data-to="450" data-speed="5000"
                            data-refresh-interval="50">1</span>
                        <span class="counter-label">Happy Clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="icon-shop"></i>
                        </span>
                        <span class="counter js-counter" data-from="0" data-to="700" data-speed="5000"
                            data-refresh-interval="50">1</span>
                        <span class="counter-label">All Products</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="feature-center">
                        <span class="icon">
                            <i class="icon-clock"></i>
                        </span>

                        <span class="counter js-counter" data-from="0" data-to="5605" data-speed="5000"
                            data-refresh-interval="50">1</span>
                        <span class="counter-label">Hours Spent</span>

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
@endsection
