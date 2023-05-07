@extends('layouts.app')
@section('title')
    My Favourites
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
        style="background-image:url(/images/slide-about-us02.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box " style="text-align: left;padding-left: 20px;"
                            data-animate-effect="fadeIn">
                            <h1>My Favourites</h1>
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
    <div id="fh5co-services" class=" container">
        <div class="row animate-box">
            <div class="col-md-12 col-md-offset-2 text-center fh5co-heading">
                <span>Stay Connected</span>
                <h2>My Favourites</h2>
                <p>Browser application which, like a bookmark, enables links to any website to be saved, thereby
                    facilitating their future consultation. A website's objective is to gain customer loyalty to the extent
                    that they add it to their list of favourites. </p>
            </div>
        </div>
        <div class="container" style="min-height: 300px">
            @isset($empty)
                <p class="text-center">There is no product has been added to favourites yet.</p>
            @endisset
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
                                    onclick="RemoveFromFaviourte({{ $product->id }},{{ Auth::user()->id }})"><i
                                        class="icon-heart"></i> Remove From
                                    Favourite</button>
                            @endauth

                        </div>
                    </div>
                </div>
            @endforeach

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
    <div class="modal fade modal-fav-remove" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h5 class="modal-title" id="favtext"> Removed From Favourites Successfully</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal"onclick="hideModal()"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="display: block !important">
                    <div class="row">
                        <div class="small-12 medium-2 large-2 columns text-center">
                            <i class="icon-circle-check successfav" style="font-size: 147px;color:#d8cb98 "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function RemoveFromFaviourte(product_id, user_id) {
            $.ajax({
                type: 'POST',
                url: "/removeFromFav",
                data: {
                    product_id: product_id,
                    user_id: user_id,
                    '_token': $('#token').attr('content'),
                },
                success: (data) => {
                    res = JSON.parse(data);
                    if (res.success) {
                        $(".successfav").show();
                        $(".modal-fav-remove").modal("show");
                        setTimeout(() => {
                            $(".modal-fav-remove").modal("hide");
                            location.reload();
                            // location.reload();
                        }, 5000);
                    }

                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
    </script>
@endsection
