<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spectrum</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->
   
  <link rel="shortcut icon" type="image/png" href="image/logo/png.spcetrum.png" />


    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <style>
    .map-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
    }
    .map-responsive iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }
    html {
        scroll-behavior: smooth;
        }
    </style>
    <!-- <style> 
        #explore {
       
        animation:explore 5s 2;
        }

        @keyframes explore
        {
        0% {transform: rotate(0deg);left:0px;}
        25% {transform: rotate(20deg);left:0px;}
        50% {transform: rotate(0deg);left:500px;}
        55% {transform: rotate(0deg);left:500px;}
        70% {transform: rotate(0deg);left:500px;background:#1ec7e6;}
        100% {transform: rotate(-360deg);left:0px;}
        }

    </style> -->

    
</head>

<body>
   
    <!-- header-start -->
    <?php
        include 'includes/header.php';
    ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <?php
        include 'includes/slider_area.php' ;
    ?>
    <!-- slider_area_end -->

    

    <!-- gallery_area  -->
    <div class="gallery_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section_title text-center mb-50">
                        <h3>Spectrum Photography</h3>
                        <p>Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever... it remembers little things, long after you have forgotten everything.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0" id="explore_part">
            <div class="row no-gutters justify-content-center">
                <div class="col-xl-4 col-md-4 p-1">
                    <div class="single_photography">
                        <div class="thumb">
                            <img src="image/gallery/wedding.jpg" alt="">
                        </div>
                        <a  href="wedding_gallery.php" class="hover ">
                            <div class="hover_inner">
                                <h3>Weddings</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 p-1">
                    <div class="single_photography">
                        <div class="thumb">
                            <img src="image/gallery/portrait.jpg" alt="">
                        </div>
                        <a  href="portrait_gallery.php" class="hover ">
                            <div class="hover_inner">
                                <h3>Portraits</h3>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 p-1">
                    <div class="single_photography">
                        <div class="thumb">
                            <img src="image/gallery/baby.jpg" alt="">
                        </div>
                        <a  href="baby_gallery.php" class="hover ">
                            <div class="hover_inner">
                                <h3>Babies</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 p-1">
                    <div class="single_photography">
                        <div class="thumb">
                            <img src="image/gallery/fashion.jpg" alt="">
                        </div>
                        <a  href="fashion_gallery.php" class="hover ">
                            <div class="hover_inner">
                                <h3>Fashions</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 p-1">
                    <div class="single_photography">
                        <div class="thumb">
                            <img src="image/gallery/cele.jpg" alt="">
                        </div>
                        <a  href="celebrity_gallery.php" class="hover ">
                            <div class="hover_inner">
                                <h3>Celeberities</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
         <hr>
    </div>
   
    <!-- /gallery_area  -->

    <!-- testimonial_area  -->
    <!-- <div class="testimonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="testimonial_active owl-carousel">
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking 
                                for a theme that provides advanced capabilities, we have got them in 
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking 
                                for a theme that provides advanced capabilities, we have got them in 
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking 
                                for a theme that provides advanced capabilities, we have got them in 
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /testimonial_area  -->

    <!-- team_area  -->
    <div class="team_area">
        <div class="container">
            <div class="border_bottom">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="image/team/1.jpg" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Vishvesh</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /team_area  -->

    <div class="contact_info_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="cotact_info">
                        <div class="section_title">
                                <h3>Contact Us</h3>
                        </div>
                        <div class="address_info">
                            <h4>Address</h4>
                            <ul class="Address" >
                                <li>
                                        Spectrum Studio Ground Floor Meghgiri Hostel Behind Bank of Maharashtra,
                                        Ambegaon(Budruk), Pune-411046

                                </li>
                                <li>
                                        +10 787 367 2567
                                </li>
                                <li>
                                        <a href="#">contact08@Vishvesh.com</a>
                                </li>
                            </ul>
                            <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-sm-block">
                    <div class="map-responsive"><iframe width="600" height="450" style="border: 0" src="https://maps.google.com/maps?q=Meghgiri%20Hostel&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe></div></div>
                            <script>
                                function initMap() {
                                    var uluru = {
                                        lat: -25.363,
                                        lng: 131.044,
                                        size:200*200
                                    };
                                    var grayStyles = [{
                                            featureType: "all",
                                            stylers: [{
                                                    saturation: -90
                                                },
                                                {
                                                    lightness: 50
                                                }
                                            ]
                                        },
                                        {
                                            elementType: 'labels.text.fill',
                                            stylers: [{
                                                color: '#ccdee9'
                                            }]
                                        }
                                    ];
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        center: {
                                            lat: -31.197,
                                            lng: 150.744
                                        },
                                        zoom: 9,
                                        styles: grayStyles,
                                        scrollwheel: false
                                    });
                                }
                            </script>
                            
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                            </script>
            
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- instragram_area  -->
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="img/instragram/1.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/2.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/3.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/4.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/5.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/6.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /instragram_area  -->

    <!-- footer start -->
    <?php
        include 'includes/footer.php';
    ?>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
