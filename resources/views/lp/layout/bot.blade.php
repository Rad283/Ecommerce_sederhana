    <!-- Newsletter -->
    <section class="newsletter" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4>Get the latest updates</h4>
                    <form class="relative newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Enter your email">
                        <input type="submit" class="btn btn-lg btn-dark newsletter-submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Type-1 -->
    <footer class="footer footer-type-1">
        <div class="container">
            <div class="footer-widgets">
                <div class="row">

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget footer-about-us">
                            <img src="{{ asset('lp/img/logo_dark.png') }}" alt="" class="logo">
                            <p class="mb-30"></p>
                            <div class="footer-socials">
                                <div class="social-icons nobase">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end about us -->

                    <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title bottom-line left-align grey">Information</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#top">Our stores</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Business with us</a></li>
                                <li><a href="#">Delivery information</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title bottom-line left-align grey">Account</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Order history</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title bottom-line left-align grey">Useful Links</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Stores</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title bottom-line left-align grey">Service</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Warranty</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end container -->

        <div class="bottom-footer">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 copyright sm-text-center">
                        <span>
                            &copy;
                            <script>
                                document.querySelector(".copyright span").innerHTML += new Date().getFullYear();
                            </script> Zenna | Made by Kelompok 1
                        </span>
                    </div>

                    <div class="col-sm-6 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-amex"></i>
                    </div>

                </div>
            </div>
        </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

    </div> <!-- end content wrapper -->
    </main> <!-- end main wrapper -->

    <!-- jQuery Scripts -->
    <script type="text/javascript" src="{{ asset('lp/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lp/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lp/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lp/js/scripts.js') }}"></script>

    </body>

    </html>
