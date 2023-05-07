@extends('layouts.app')
@section('title')
    Apartments
@endsection
@push('custom-style')
    <style>
        .desc {
            min-height: 80px;
        }

        #fh5co-header,
        #fh5co-counter,
        .fh5co-bg {
            background-position: center center !important;
        }

        .mt-20 {
            margin-top: 20px
        }

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
        style="background-image:url(/images/slide-about-us01.jpg); margin-bottom: 50px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box " style="text-align: left;padding-left: 20px;"
                            data-animate-effect="fadeIn">
                            <h1>Available Apartments</h1>
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


    <div id="fh5co-product">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin: 0 auto">
                    <span>Cool Stuff</span>
                    <h2>Apartments of hotel.</h2>
                    <p>Enter a space where luxury caters to your every whim. This Forbes Five-Star Award-winning spa was
                        created to celebrate you. Step into your private garden villa and enjoy a hand-drawn bath while
                        listening to the sound of waves breaking on the shore.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
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
    <script>
        $(document).ready(function() {
            let cards = document.querySelectorAll(".accordian-item");
            [...cards].forEach((card) => {
                card.addEventListener("click", function() {
                    $(".accordian-item .answer")
                        .not($(this).find(".answer"))
                        .removeClass("open");
                    $(".accordian-item i")
                        .not($(this).find("i"))
                        .removeClass("ion-md-remove");
                    $(this).find(".accordian-link , .answer").toggleClass("open");
                    $(this).find("i").toggleClass("ion-md-remove");
                });
            });
        });
    </script>
@endsection
