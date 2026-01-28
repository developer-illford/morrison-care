 <!--Information Start-->
        <section class="information <?php if($file_name!='index.php'){ echo 'information-two';}?>">
            <div class="container">
                <div class="information__inner">
                    <div class="information__logo-box">
                        <div class="information__border-1"></div>
                        <div class="information__border-2"></div>
                        <a href="index.php"><img src="assets/images/logo/logo-new.png" alt="" ></a>
                    </div>
                    <ul class="list-unstyled information__list">
                        <li>
                            <div class="information__icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="information__content">
                                <p class="information__sub-title">Call anytime</p>
                                <h5 class="information__number">
                                    <a href="tel:03303110727">03303110727</a>
                                </h5>
                            </div>
                        </li>
                        <li>
                            <div class="information__icon">
                                <span class="icon-envelope"></span>
                            </div>
                            <div class="information__content">
                                <p class="information__sub-title">Send email</p>
                                <h5 class="information__number">
                                    <a href="mailto:info@pearlcarerecruitment.co.uk">info@pearlcarerecruitment.co.uk</a>
                                </h5>
                            </div>
                        </li>
                        <li>
                            <div class="information__icon">
                                <span class="icon-location-1"></span>
                            </div>
                            <div class="information__content">
                                <p class="information__sub-title">Visit office</p>
                                <h5 class="information__number">Barts House, Black Lion Street, Brighton and Hove,
Brighton, BN1 1JE, England, United Kingdom</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Information End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-shape-1"
                style="background-image: url(assets/images/shapes/site-footer-shape-1.png);">
            </div>
            <div class="site-footer-shape-two">
                <img src="assets/images/shapes/site-footer-shape-2.png" alt="">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <h3 class="footer-widget__title">Explore</h3>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">We understand the critical need for skilled, compassionate, and reliable professionals in the healthcare and care home sector. </p>
                                </div>
                                <div class="site-footer__social">
                                    <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="career.php">Career</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__articles clearfix">
                                <h3 class="footer-widget__title">Information</h3>
      <!-- Footer Contact Items -->
<div class="footer-contact-column">

  <div class="footer-contact-item">
    <a href="tel:03303110727"><i class="fab fa-whatsapp"></i></a>
    <span>03303110727</span>
  </div>

  <div class="footer-contact-item">
    <a href="mailto:info@pearlcarerecruitment.co.uk"><i class="far fa-envelope"></i></a>
    <span>info@pearlcarerecruitment.co.uk</span>
  </div>

  <div class="footer-contact-item">
    <a href="javascript:;" class="map-anchor"><i class="far fa-map"></i></a>
    <span>Barts House, Black Lion Street, Brighton and Hove,<br/>
Brighton, BN1 1JE, England, United Kingdom</span>
  </div>

</div>

<style>
    .map-anchor{width:55px !important;}
.footer-contact-column {
  display: flex;
  flex-direction: column; /* stack vertically */
  gap: 15px; /* space between items */
}

/* Each item */
.footer-contact-item {
  display: flex;
  /* align-items: center; */
  gap: 12px; /* space between icon and text */
}

/* Circle icon */
.footer-contact-item a{
  position: relative;
  height: 40px;
  width: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
  font-size: 18px;
  background-color: #b4cc78;
  border-radius: 50%;
  overflow: hidden;
  transition: all 0.5s ease;
  z-index: 1;
}

.footer-contact-item a:after{
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  right: 0;
  height: 100%;
  background-color: #fff;
  transition: all 0.4s ease-in-out 0.1s;
  opacity: 1;
  transform-origin: top;
  transform: scaleY(0);
  z-index: -1;
}

.footer-contact-item a:hover {
  color: #0b6b78;
}

.footer-contact-item a:hover:after {
  transform: scaleY(1);
}

/* Text next to icon */
.footer-contact-item span {
  color: #fff;
  font-size: 15px;
}

@media only screen and (max-width: 768px) {
.map-anchor{width:50px !important;}
}
</style>







                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                 
                               
   <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Our Services</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="services.php">Healthcare Assistants</a></li>
                                    <li><a href="services.php">Nurses</a></li>
                                    <li><a href="services.php">Support Workers</a></li>
                                    <li><a href="services.php">Domestic Assistants</a></li>
                                    <li><a href="services.php">Housekeeping</a></li>
                                         <li><a href="services.php">Specialized Staffing</a></li>
                                </ul>
                            </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright  
<script>
    document.write(new Date().getFullYear());
</script>

   by <a href="javascript:void(0);">Morrison Care.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/logo/logo-new.png" width="89"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@pearlcarerecruitment.co.uk">info@pearlcarerecruitment.co.uk</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:03303110727">033 031 10727</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <!-- <a href="#" class="fab fa-twitter"></a> -->
                    <a href="#" class="fab fa-facebook-square"></a>
                    <!-- <a href="#" class="fab fa-pinterest-p"></a> -->
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>




    <!-- template js -->
    <script src="assets/js/brote.js"></script>
</body>

</html>