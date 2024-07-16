<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="row-custom">
                                <div class="footer-logo">
                                    <a href="<?= langBaseUrl();?>"><img src="<?= getLogo();?>" alt="logo"></a>
                                </div>
                            </div>
                            <div class="row-custom">
                                <div class="footer-about"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="nav-footer">
                                <div class="row-custom">
                                    <h4 class="footer-title">Quick Links</h4>
                                </div>
                                <div class="row-custom">
                                    <ul>
                                        <li><a href="http://localhost/modesy">Home</a></li>
                                        <li><a href="http://localhost/modesy/shops">Shops</a></li>
                                        <li><a href="http://localhost/modesy/hosting">Hosting</a></li>
                                        <li><a href="http://localhost/modesy/help-center">Help Center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="nav-footer">
                                <div class="row-custom">
                                    <h4 class="footer-title">Information</h4>
                                </div>
                                <div class="row-custom">
                                    <ul>
                                        <li><a href="http://localhost/modesy/terms-conditions">Terms &amp;
                                                Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="footer-title">Follow Us</h4>
                                    <div class="footer-social-links">
                                        <ul>
                                            <li><a href="http://localhost/modesy/rss-feeds" class="rss"
                                                    target="_blank"><i class="icon-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="newsletter">
                                        <div class="widget-newsletter">
                                            <h4 class="footer-title">Newsletter</h4>
                                            <form id="form_newsletter_footer" class="form-newsletter">
                                                <div class="newsletter">
                                                    <input type="email" name="email" class="newsletter-input"
                                                        maxlength="199" placeholder="Enter your email" required="">
                                                    <button type="submit" name="submit" value="form"
                                                        class="newsletter-button">Subscribe</button>
                                                </div>
                                                <input type="text" name="url">
                                                <div id="form_newsletter_response"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">Copyright 2023 Modesy - All Rights Reserved.</div>
                    <div class="footer-payment-icons">
                        <img src="http://localhost/modesy/assets/img/payment/visa.svg"
                            data-src="http://localhost/modesy/assets/img/payment/visa.svg" alt="visa"
                            class=" lazyloaded">
                        <img src="http://localhost/modesy/assets/img/payment/mastercard.svg"
                            data-src="http://localhost/modesy/assets/img/payment/mastercard.svg" alt="mastercard"
                            class=" lazyloaded">
                        <img src="http://localhost/modesy/assets/img/payment/maestro.svg"
                            data-src="http://localhost/modesy/assets/img/payment/maestro.svg" alt="maestro"
                            class=" lazyloaded">
                        <img src="http://localhost/modesy/assets/img/payment/amex.svg"
                            data-src="http://localhost/modesy/assets/img/payment/amex.svg" alt="amex"
                            class=" lazyloaded">
                        <img src="http://localhost/modesy/assets/img/payment/discover.svg"
                            data-src="http://localhost/modesy/assets/img/payment/discover.svg" alt="discover"
                            class=" lazyloaded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="javascript:void(0)" class="scrollup"><i class="icon-arrow-up"></i></a>
<script src="<?= base_url($assetsPath . '/js/jquery-3.5.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url($assetsPath . '/js/plugins-2.4.js'); ?>"></script>
<script src="<?= base_url($assetsPath . '/js/script-2.4.min.js'); ?>"></script>
</body>

</html>