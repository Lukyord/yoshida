<footer id="footer">
    <div id="scroll-to-top" class="footer-scroll-top">
        <p>SCROLL TOP</p>
    </div>
    <div class="footer-wrapper container xl">
        <div class="content-body">
            <div class="footer-grid" data-grid="social">
                <div class="social-links">
                    <a href="#outer"><i class="size-icon-20 ic ic-instagram"></i></a>
                    <a href="#outer"><i class="size-icon-20 ic ic-facebook-no-bg"></i></a>
                    <a href="#outer"><i class="size-icon-20 ic ic-twitter"></i></a>
                    <a href="#outer"><i class="size-icon-20 ic ic-line"></i></a>
                    <a href="#outer"><i class="size-icon-20 ic ic-youtube"></i></a>
                </div>
            </div>

            <div class="footer-grid" data-grid="main">
                <ul class="footer-links hidden-mobile">
                    <li><a href="<?php echo $root; ?>products.php">Product</a></li>
                    <li><a href="<?php echo $root; ?>shop.php">Shop</a></li>
                    <li><a href="<?php echo $root; ?>news.php">Journal</a></li>
                    <li><a href="<?php echo $root; ?>story.php">Story</a></li>
                    <li><a href="<?php echo $root; ?>products-ranking.php">Ranking</a></li>
                    <li><a href="#outer">E-mail Magazine</a></li>
                </ul>

                <ul class="footer-links">
                    <li><a href="#login">Login</a></li>
                    <li><a href="#register">New member registration</a></li>
                    <li class="hidden-mobile"><a href="#favorite">Favorite</a></li>
                </ul>
            </div>

            <div class="footer-grid" data-grid="company">
                <div class="accordion-container toggle trigger-first">
                    <div class="accordion">
                        <h3 class="entry-title">Company Information</h3>
                        <div class="entry-panel">
                            <ul class="footer-links">
                                <li><a href="#company-profile">Company Profile</a></li>
                                <li><a href="#employment">Employment Information</a></li>
                                <li><a href="#inquiry">Inquiry</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-grid" data-grid="help">
                <ul class="footer-links">
                    <li><a href="#faq">Help</a></li>
                    <li><a href="#privacy">Privacy policy</a></li>
                    <li><a href="#terms">Terms of service</a></li>
                    <li><a href="#notation">Notation based on specific commercial transactions</a></li>
                    <li><a href="#terms-of-use">About the terms of use of the site</a></li>
                </ul>
            </div>

            <div class="footer-grid" data-grid="counterfeit">
                <a href="#counterfeit">About counterfeit products and fraudulent sites</a>
            </div>
        </div>
        <div class="content-footer">
            <div class="emty-spacer hidden-mobile">&nbsp;</div>
            <div class="copyright">
                <div class="logo-text">
                    <img src="./assets/img/design/logo-text.svg" alt="Yoshida & Co." loading="lazy" draggable="false">
                </div>
                <p class="size-subtitle4 weight-bold">© YOSHIDA & Co. ALL RIGHTS RESERVED.</p>
            </div>
            <div class="language">
                <form action="javascript:;">
                    <label for="" class="description size-subtitle2 weight-bold">LANGUAGE</label>
                    <select id="language-select" class="language-select dynamic-select" data-placeholder="">
                        <option value="Option1" selected>English</option>
                        <option value="Option2">ภาษาไทย</option>
                        <option value="Option3">Language 3</option>
                        <option value="Option4">Language 4</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php //if($page_index) { include($root."include/_wp-code/wp-cookie-law-info-bar.php"); } 
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/igorlino/elevatezoom-plus@1.2.3/src/jquery.ez-plus.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/common/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/util.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/index.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/product-single.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/shop-map.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/shop-single.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/template.js?v=<?php echo time(); ?>"></script>

</body>

</html>