<?php 
$file_name= basename($_SERVER['PHP_SELF']);
?>
<?php
$url = $_SERVER['REQUEST_URI'];
$parsed_url = parse_url($url);
$path = $parsed_url['path'] ?? '';
$filename = basename($path);


$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
$url .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


$can_url=$url;
$meta_titile='';
$meta_desc='';

///

    $title='';
     $meta_keyword='';
    $meta_titile='';
    $meta_desc='';

if($filename=='index.php' || $filename=='' || $filename=='index')
{
    $title='Home';
     $meta_keyword='';
    $meta_titile='';
    $meta_desc='';
}
if($filename=='about-us.php' || $filename=='about-us')
{
     $title='About Us';
     $meta_keyword='';
    $meta_titile='';
    $meta_desc='';
}
if($filename=='contact-us.php' || $filename=='contact-us')
{
     $title='Contact Us';
     $meta_keyword='';
    $meta_titile='';
    $meta_desc='';
}
if($filename=='services.php' || $filename=='services')
{
         $title='Services';
     $meta_keyword='';
    $meta_titile='';
    $meta_desc='';
}
if($filename=='career.php' || $filename=='career')
{
     $title='Career';
     $meta_keyword='';
    $meta_titile='';
    $meta_desc='';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php echo $title;?> | Morris Care </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/favicon-morrison.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-morrison.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-morrison.png" />
    <!-- <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> -->
    <meta name="description" content="Home Description" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/brote-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/brote.css" />
    <link rel="stylesheet" href="assets/css/brote-responsive.css" />
    <style>

        .page-header-bg{
                left: 0;
                    width: 100%;
        }
@media (max-width: 768px) {
.logo-box a{
background-color: white;
    padding: 3px;
}

.mobile-nav__social a+a {
    margin-left: 12px;
}


|}
</style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>



    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->




    <div class="page-wrapper">
        <header class="main-header-two clearfix">
            <div class="main-header-two__top">
                <div class="container">
                    <div class="main-header-two__top-inner">
                        <div class="main-header-two__top-address">
                            <ul class="list-unstyled main-header-two__top-address-list">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-map-marker-alt"></span>
                                    </div>
                                    <div class="text">
                                        <p>Barts House, Black Lion Street, Brighton and Hove,
Brighton, BN1 1JE, England, United Kingdom</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:info@pearlcarerecruitment.co.uk">info@pearlcarerecruitment.co.uk</a></p>
                                    </div>
                                </li>
                                <!-- <li>
                                    <div class="icon">
                                        <span class="fa fa-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p>Mon to Sat 08am - 09pm</p>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="main-header-two__top-social">
                            <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-two clearfix  <?php if($file_name!='index.php'){ echo 'test';}?>">
                <div class="main-menu-two__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu-two__wrapper-inner clearfix">
                            <div class="main-menu-two__left">
                                <div class="main-menu-two__logo">
                                    <a href="index.php"><img src="assets/images/logo/logo-new.png" alt="" class="site-logo"></a>
                                </div>
                                <div class="main-menu-two__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                         <li>
                                            <a href="index.php">Home </a>
                                        </li>
                                        <li>
                                            <a href="about-us.php">About Us</a>
                                        </li>
                                        <li>
                                            <a href="services.php">Services </a>
                                        </li>
                                      <li>
                                            <a href="career.php">Career </a>
                                        </li>
                                        <li>
                                            <a href="contact-us.php">Contact Us</a>
                                        </li>
                                  
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu-two__right">
                                <div class="main-menu-two__search-call">
                                   
                                    <div class="main-menu-two__call">
                                        <div class="main-menu-two__call-icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="main-menu-two__call-content">
                                            <p class="main-menu-two__call-sub-title">Call Anytime</p>
                                            <h4 class="main-menu-two__call-number"><a href="tel:03303110727">03303110727</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->