@extends('layouts.app')
@section('title')
    About
@endsection
@push('custom-style')
    <style>
        #fh5co-started {
            background: rgba(0, 0, 0, 0.8) !important;
        }

        #fh5co-started .btn {
            background: #d1c286 !important
        }
        .about-content img{
            height: 420px;
            width: 100%;
            border-radius: 10px;
            object-fit: cover
        }
    </style>
@endpush
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url(images/slide-main03.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box " style="text-align: left;padding-left: 20px;"
                            data-animate-effect="fadeIn">
                            <h1>About Us</h1>
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

    <div id="fh5co-about">
        <div class="container">
            <div class="about-content">
                <div class="row animate-box">
                    <div class="row animate-box" style="margin-top:100px">
                        <div class="col-md-6">
                            <img class="img-responsive" src="/images/a14.jpg" alt="about">
                        </div>
                        <div class="col-md-6"  style="padding-top:10px">
                            <div class="desc">
                                <h3>About Our Resort</h3>
                                <p>"Royal Moon Resort" located off the hippy haven of famous "Vagator and Anjuna beach". A true reflection of modern influences, contemporary hospitality which offers luxurious opulence of tastefully appointed rooms and suites for your indulgence.

                                    The property is home away from home for regular as well as occasional visitors, visiting Goa for relaxation business trips or even recreational activities. Our full-service hotel facility offers luxury amenities, an on-site restaurant and the highest level of personalized services, The unique peaceful location of ours provides opportunity to reach all the famous North Goa beaches like Vagator, Anjuna, Baga, Calangute, Sinquerim Morjim Mandrem and Arambol in minutes time, Excellent entertainment and shopping option of Saturday night market and Splash Down Water Park located within walking distance of the hotel. There are several popular nightlife options nearby including Club Cabana and Tito’s within the area. Architecturally elevated property comprises of 28 tastefully furbished rooms. All the rooms are air conditioned, equipped with large 42" & 32" LED satellite linked televisions, mini bar fridges,tea coffee makers, electronic safes, and duvets are part of every room.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top:100px">
                        <div class="desc">
                            <h3>Mission &amp; Vission</h3>
                            <p>Grow The Tourism Economy. Discover The Palm Beaches is only one of the non-profit tourism
                                organizations acting under contract to the County. The Tourist Development Council whose
                                responsibility is contract oversight of the agencies funded by the "bed tax," also acts as a
                                liaison between the agencies and the Board of County Commissioners. The other agencies under
                                the umbrella of the TDC are the Cultural Council of Palm Beach County, the Palm Beach County
                                Film & Television Commission, and the Palm Beach County Sports Commission.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="/images/a13.jpg" alt="about">
                    </div>
                </div>
                <div class="row animate-box" style="margin-top:100px">
                    <div class="col-md-6">
                        <img class="img-responsive" src="/images/a12.jpg" alt="about">
                    </div>
                    <div class="col-md-6"  style="padding-top:100px">
                        <div class="desc">
                            <h3>Company History</h3>
                            <p>Find true quality time for you at some of Palm Beach's finest Golf & Spa Resorts. A truly
                                effortless escape boasting sumptuous vistas, exclusive amenities, and luxury at your
                                fingertips. Play on historic golf courses, suit up with premium attire or practice on a
                                driving range. Renew yourself at the spa with unique, one-of-a-kind treatments and lavish
                                products. These unforgettable stays will have you dreaming of coming back, year after year.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading">
                    <span>Productive Staff</span>
                    <h2>Meet Our Team</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.
                        Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="/theme/images/person1.jpg" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>Jean Smith</h3>
                        <strong class="role">Chief Executive Officer</strong>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat
                            velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="/theme/images/person2.jpg" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>Hush Raven</h3>
                        <strong class="role">Co-Owner</strong>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat
                            velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="/theme/images/person3.jpg" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>Alex King</h3>
                        <strong class="role">Co-Owner</strong>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat
                            velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
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
                    <p>Just stay tune for our latest Product. Now you can subscribe</p>
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
    <script></script>
@endsection
