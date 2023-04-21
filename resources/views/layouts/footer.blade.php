<footer id="fh5co-footer" role="contentinfo">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-6 fh5co-widget">
                <h3><img class="logoRoyal" src="/images/logo.png" alt=""></h3>
                <p style="width: 90%">
                    Tourism resort is among Palm Beach County's major industries. It generates an annual economic impact of approximately $10 billion in the local economy, produces $78 million in bed-tax revenue, lodging sales of approximately $1.3 billion, and supports more than 85,000 jobs.
                </p>
                    
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                <ul class="fh5co-footer-links">
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/faqs">Faqs</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                <ul class="fh5co-footer-links">
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Handbook</a></li>
                    <li><a href="#">Held Desk</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                <ul class="fh5co-footer-links">
                    <li><a href="#">Find Designers</a></li>
                    <li><a href="#">Find Developers</a></li>
                    <li><a href="#">Teams</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">API</a></li>
                </ul>
            </div>
        </div>
        {{-- 
        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2018 Free HTML5. All Rights Reserved.</small> 
                    <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                </p>
                <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                </p>
            </div>
        </div> --}}

    </div>
</footer>
<div class="modal fade modal-fav" id="staticBackdrop1" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content w-100">
                <div class="modal-header">
                    <h5 class="modal-title" id="favtext"> Added To Favourites Successfully</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal"onclick="hideModal()"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" style="display: block !important">
                    <div class="row">
                        <div class="small-12 medium-2 large-2 columns text-center">
                        <i class="icon-circle-check successfav" style="font-size: 147px;color:#d8cb98 "></i>
                        </div>
                        <p class="ds-none addedAlready">This Product is Alreday had been added To your favourites</p>
                        @auth <input type="hidden" name="" id="user-email" value="{{Auth::user()->email}}">@endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
@auth
    <script>
        var email=$("#user-email").val();
        $("#formSubscription input").val(email);
        $("#formSubscription input").attr("disabled","true");

    </script>
@endauth
<script>
    
    $('#formSubscription').submit(function(e) {
            e.preventDefault();
            var form = $(this);

            $.ajax({
                type: 'POST',
                url: "/new-subscription",
                data: form.serialize(),
                success: (data) => {
                    res=JSON.parse(data);
                    $(".alert-success-sub").show();
                    if(!res.success){
                        $(".alert-success-sub").text("You Are Already On Subscribes Users!")
                    }
                    setTimeout(() => {
                        $(".alert-success-sub").hide();
                        // location.reload();
                    }, 6000);

                },
                error: function(data) {
                   
                    console.log(data);
                }
            });
        });
        function addToFaviourte(product_id,user_id){
            $.ajax({
                type: 'POST',
                url: "/addToFav",
                data: {
                    product_id:product_id,
                    user_id:user_id,
                    '_token': $('#token').attr('content'),
                },
                success: (data) => {
                    res =JSON.parse(data);
                    if(!res.success){
                        $("#favtext").text("Already on Favourites!")
                        $(".addedAlready").show();
                        $(".successfav").hide();
                    }else{
                        $("#favtext").text("Added To Favourites Successfully!")
                        $(".addedAlready").hide();
                        $(".successfav").show();
                    }
                    $(".modal-fav").modal("show");
                    setTimeout(() => {
                        $(".modal-fav").modal("hide");
                        // location.reload();
                    }, 5000);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
</script>