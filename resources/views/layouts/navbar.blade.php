<style>
    .user i {
        padding-right: 9px;
        padding-top: 2px
    }
    .logoRoyal {
    width: 220px;
    object-fit: contain;
    margin-top: -4px;
}
.active-nav a{
    color:wheat  !important
}
.active-nav{
    border: 1px solid wheat !important;
    padding: 4px 7px !important;;
    border-radius: 3px;
}

.showVisibility{
    visibility:visible !important;
    opacity: 1 !important;
}
.color-wheat{
    color: #fbebc5 !important
}
.dropdwon-login{
    cursor: pointer;
}
</style>
<div class="fh5co-loader"></div>
@php $image ="/images/defaultuserimg.jpg";@endphp
<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-2">
                    <div id="fh5co-logo"><a href="/"><img class="logoRoyal" src="/images/logo.png" alt=""></a></div>
                </div>
                <div class="@auth col-md-5 @endAuth  @guest col-md-7 @endguest  col-xs-6 text-center menu-1">
                    <ul>
                        <li class="active-nav">
                            <a href="/" title="Home">Home</a>
                        </li>
                        <li>
                            <a href="/apartments" title="Apartments">Apartments</a>
                        </li>
                        <li><a href="/about" title="About">About</a></li>
                        <li>
                            <a href="/services" title="Services">Services</a>
                        </li>
                        <li><a href="/faqs" title="Faqs">Faqs</a></li>
                        <li><a href="/contact"  title="Contact">Contact</a></li>
                        @guest
                            <li>
                                <a href="/login">Login</a>
                            </li>
                            <li><a href="/register">Register</a></li>
                        @endguest
                    </ul>
                </div>
                <div class="@auth col-md-4 @endAuth  @guest col-md-2 @endguest col-xs-4 text-right hidden-xs menu-2"
                    style="padding: 0">
                    <ul style="display: flex;justify-content: end;float: right;"id="mnu-sm">

                        {{-- <li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i
                                        class="icon-shopping-cart"></i></span></a></li> --}}
                        @auth
                        @isset($user[0]->image)
                            @php $image =$user[0]->image  @endphp
                        @endisset
                            <li class="has-dropdown dropdwon-login ">
                                <a href="#" class="hover--" style="padding:0 !important"><img src="{{$image}}"
                                        class="img-profile-sm">
                                    <span> {{ Auth::user()->name }} </span> <i class="icon-chevron-down icon-login-cstm">
                                    </i></a>
                                <ul class="dropdown user" style="">
                                    <li><a href="/my-profile"><i class="icon-user" aria-hidden="true"></i>My Profile</a>
                                    </li>
                                    <li><a href="/my-favourites"><i class="icon-star" aria-hidden="true"></i>My
                                            Favourites</a>
                                    </li>
                                    <li><a href="/logout"> <i class="icon-log-out" aria-hidden="true"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endauth
                        <li class="search">
                            <div class="row copyright">
                                <div class="col-md-12 text-right" style="padding-right: 0;">
                                    <p>
                                    <ul>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </li>



                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <script>
        $(".dropdwon-login").hover(
            function() {
                $(".dropdwon-login .dropdwon").show();
            },
            function() {
                $(".dropdwon-login .dropdwon").hide();

            }
        );
        $(".dropdwon-login").hover(
            function() {
                $(".user").addClass("showVisibility");
                $(".hover--").addClass("color-wheat");

            },
            function() {
                $(".user").removeClass("showVisibility");
                $(".hover--").removeClass("color-wheat");

            }
        );
        $(".menu-1 li a").each(function(){
            if(location.pathname !== '/' && location.pathname!=="/login"&& location.pathname!=="/register"){
                $(this).parent().removeClass("active-nav");
                var title=$("#title").attr("title")
                if(title.includes($(this).attr("title"))){
                    $(this).parent().addClass("active-nav");
                }
            }
            
        })
    </script>
