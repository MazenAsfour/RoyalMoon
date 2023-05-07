@extends('layouts.app')
@section('title')
    Contact
@endsection
@push('custom-style')
    <style>
        #fh5co-started {
            background: rgba(0, 0, 0, 0.8) !important;
        }

        #fh5co-started .btn {
            background: #d1c286 !important
        }

        .fh5co-contact-info a,
        .fh5co-contact-info ul li {
            color: #111;
            text-decoration: none
        }

        .fh5co-contact-info a:hover {
            color: #9d905b !important;
            cursor: pointer;
        }

        .fh5co-contact-info ul li {
            border-bottom: 1px solid #eee;
            padding-bottom: 30px !important;
            width: 90%
        }

        .address::before {
            padding-top: 30px
        }

        .form-group {
            margin: 20px 0
        }

        #fh5co-header,
        #fh5co-counter,
        .fh5co-bg {
            background-position: center center !important;
        }
    </style>
@endpush
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url(/images/slide-main02.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box " style="text-align: left;padding-left: 20px;"
                            data-animate-effect="fadeIn">
                            <h1>Contact Us</h1>
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

    <div id="fh5co-contact" style="margin: 40px 0">
        <div class="container" style="width: 75%">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="fh5co-contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li class="address" style="margin-top: 30px;padding-top:30px;border-top:1px solid #eee">198 West
                                21th Street, <br> Suite 721 New York NY 10016</li>
                            <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-7 animate-box">
                    <h3 style="padding-top: 5px;">Get In Touch</h3>
                    <form id="send-contact" style="margin-top: 20px">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" name="first_name" id="fname" required class="form-control"
                                    placeholder="Your firstname">
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" name="last_name" id="lname" required class="form-control"
                                    placeholder="Your lastname">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" required class="form-control"
                                    placeholder="Your email">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="message">Message</label>
                                <textarea name="message" name="message" id="message" required cols="6" rows="7" class="form-control"
                                    placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="alert alert-success ds-none" style="padding:8px 12px;font-size:14px" role="alert">
                            Thank you for contact us! we will resposne you soon.
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13538.23589128509!2d35.88922333254247!3d31.972859349554387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca00dac398a03%3A0x7457e2ecc4a18517!2sAmman%20Marriott%20Hotel!5e0!3m2!1sen!2sjo!4v1680475322620!5m2!1sen!2sjo"
        style="width: 100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            style="padding:8px 12px;font-size:14px;width: 50%;margin: auto;" role="alert">
                            Subscribed Successfully!
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#send-contact').submit(function(e) {
            e.preventDefault();
            var form = $(this);

            $.ajax({
                type: 'POST',
                url: "/contact-message",
                data: form.serialize(),
                success: (data) => {
                    $(".alert-success").show();
                    setTimeout(() => {
                        $(".alert-success").hide();
                    }, 5000);

                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    </script>
@endsection
