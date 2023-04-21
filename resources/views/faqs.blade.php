@extends('layouts.app')
@section('title')
    Faqs
@endsection
@push('custom-style')
    <style>
        #fh5co-header,
        #fh5co-counter,
        .fh5co-bg {
            background-position: center center !important;
        }
    </style>
@endpush
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url(images/slide-about-us02.jpg); margin-bottom: 50px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box " style="text-align: left;padding-left: 20px;"
                            data-animate-effect="fadeIn">
                            <h1>Faqs</h1>
                            <h2>This is one of the most important thing that all employees must adhere to and practice when they become a part of Team Sunshine. We are proud that Customer Satisfaction has become our Key Success Factor for the past 43 years and counting, with the smile and heart of Team royal moon.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <h1 style="text-align: center;">Frequently Asked Questions About Our Resort</h1>
    </div>

    <section class="smart_accordian-section">
        <div class="container">
            <div class="accourdian">
                <div class="accordian-item item1">
                    <div class="accordian-link">
                        What are the channels I can pay for the booked rooms?
                        <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>
                            <b>Cash payment</b> or Bank Transfer – If paid via bank transfer, all additional charges and
                            fees related to the transfer will be borne by you. The amount must be transferred in advance
                            before check in, only after our accounting department confirmed the amount in the bank we can
                            allow guest to check in.
                            <br><b>Credit Card</b> (Visa, Mastercard, JCB, Union Pay)/ Debit Card – The credit card
                            authorization form can be provided by us on your request. Please note that you have to return to
                            us duly filled and signed credit card authorization form, either through email or fax, along
                            with a copy of your credit card (both sides should be copied) to process the said payment.
                            Depending on the booking payment terms, you may pay by credit or debit card at the time of
                            arrival.
                            <br><b>WECHAT & ALIPAY</b> – to enhance the overall guest experience and provide seamless travel
                            experiences some of the hotels under Sunshine Hotels & Resorts have started accepting payment
                            through these mobile payment technologies.
                        </p>
                    </div>
                </div>
                <div class="accordian-item item2">
                    <div class="accordian-link">
                        Will there be extra charge for child stays?
                        <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>1 Child who is less than 12 years old is allowed to stay in your room without additional fees
                            (Breakfast for children is charged at 50% of the adult price). Some properties under Sunshine
                            Hotels & Resorts might have rooms large enough to accommodate 2 children in the room which
                            normally, these rooms will be the Superior or Deluxe type. You can inform the staffs in the
                            booking process by specifying how many children and their corresponding ages.
                        </p>
                    </div>
                </div>
                <div class="accordian-item item3">
                    <div class="accordian-link">
                        Is a young child allow to share the Bed? <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>Yes, children with age less than or equal to 6 is allowed to share the Bed or you may request for
                            small Bed additionally (without additional fee required).


                        </p>
                    </div>
                </div>
                <div class="accordian-item item4">
                    <div class="accordian-link">
                        What is the Check-in and Check-out time?
                        <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>Sunshine Hotels and Resorts have the usual Check-in time after 14:00 and Check-out time before
                            12:00 (Midday). Of course, we would try our best to make avail the rooms for your arrival.
                            However, we cannot guarantee in advance since rooms will be subjected to availability of the
                            night before. If you need to confirm an early Check-in, you could also book the night before or
                            a special price based on number of hours. On the other hand, if you need to confirm a late
                            Check-out, you could request a special price for it. Late Check Out after 6.00 pm will be
                            charged full night. </p>
                    </div>
                </div>
                <div class="accordian-item item4">
                    <div class="accordian-link">
                        Which season is best for camping?
                        <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>That all depends on what you want. The summer will always be the most popular camping season,
                            when you can soak up the rays and swim around the clock, but more and more people are
                            discovering the charms of the great outdoors in the spring and autumn (and even the winter).
                            Off-season is probably the best time for those who want peace and quiet, with the coast to
                            yourself. Many people believe that seafood is at is best in the winter half of the year, since
                            the sea is at its healthiest then.

                        </p>
                    </div>
                </div>
                <div class="accordian-item item4">
                    <div class="accordian-link">
                        How do I know whether camping would suit me?
                        <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>Hmm, this is a very subjective question. Not everyone feels comfortable about sleeping in a tent
                            or in a caravan, sardine-style. But staying in a cabin is like living in a small house, and most
                            can manage that without any problems. So we’re going to stick our neck out and say that everyone
                            should try camping at least once!



                        </p>
                    </div>
                </div>
                <div class="accordian-item item4">
                    <div class="accordian-link">
                        What are the kinds of rooms the hotel offers? <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>Sunshine Hotels & Resorts provide a variety of rooms with different types and price ranges.
                            Additional information e.g. pictures, rates, size of rooms, facilities, amenities and other
                            distinctive points could be acquired in each of the hotels’ websites.
                        </p>
                    </div>
                </div>
                <div class="accordian-item item4">
                    <div class="accordian-link">
                        The price displayed is per person or per room?
                        <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>The displayed price is per room (for 2 persons) the third guest would be subjected to an
                            additional fee of 1,000+++ baht including breakfast.



                        </p>
                    </div>
                </div>
                <div class="accordian-item item4">
                    <div class="accordian-link">
                        How many people can lodge within the same room? <i class="icon icon-chevron-down"></i>
                    </div>
                    <div class="answer">
                        <p>The maximum number of people allowed within the same room is 3 persons (adult). The third person would be subjected to additional fee of approximately 1,000+++ baht per night including breakfast. However, family type rooms allow up to 4 persons.


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="fh5co-started">
        <div class="container" style="padding-bottom: 66px !important;">
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
