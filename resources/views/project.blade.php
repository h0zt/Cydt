<!doctype html>
<html class="no-js" lang="eng">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!--meta seo-->
    <title> CYDT | Center For Youth Development And Transformation </title>
    <meta name="description" content="CYDT is organisation with a vision to create An empowered, developed and responsible health young people ">
    <meta name="keywords" content="Governance, Health/SRHR, Education, Gender, Advocacy (General), Gender, Human Rights,
        Empowerment, Entrepreneurship">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
     <!-- ? Preloader Start -->
     <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/">
                                        <img 
                                            style="width: 70px; height: 70px"
                                            src="assets/img/logo/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/#about">About</a></li>
                                                <li><a href="/#events">Project</a></li>
                                                <li><a href="/#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="donate.blade.php" class="btn header-btn">Donate</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        
        <!-- Hero End -->
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                        @foreach ($projects as $project)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img src="images/{{$project->image}}" alt="" style="max-width:100%">
                                    <a href="#" class="blog_item_date">
                                        <h3 class="fa fa-info"></h3>
                                        <p></p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{ $project->name }}</h2>
                                    </a>
                                    <p>{{ $project->detail }}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> blog</a></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                           
                        </div>
                    </div>
                    <div class="col-lg-4" >
                        <div class="blog_right_sidebar" 
                            style="position:sticky; top:15vh;" >
                           
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Focus Areas</h4>
                                <ul class="list cat-list"> 
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Governance</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Health/SRHR</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Education</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Gender</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Advocacy (General)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Gender</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Human Rights</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Empowerment</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>#Entrepreneurship</p>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </aside>
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
    <footer>
        <div class="footer-wrapper section-bg2" data-background="assets/img/gallery/footer_bg.png">
            <!-- Footer Top-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        

                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Other CYDT Locations</h4>
                                    <ul>
                                        <li><a href="#">Thyolo</a></li>
                                        <li><a href="#">Mulanje</a></li>
                                        <li><a href="#">Neno</a></li>
                                        <li><a href="#">Chikwawa</a></li>
                                        <li><a href="#">Nsanje</a></li>
                                        <li><a href="#">Mwanza</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-7" id="donate">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Bank Details</h4>
                                    <ul>
                                        <li><a href="#">Acc #, 23482340834223</a></li>
                                        <li><a href="#">Branch, Luchenza</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex justify-content-even">
                            <div class="col">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <script>document.write(new Date().getFullYear());</script> developed  <a href="https://bckyrd.io" target="_blank">@bckyrd</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="footer-social ">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a  href="https://www.facebook.com/cydt"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="f-right">
                                    <a href="login">LOGIN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    
    </body>
</html>
