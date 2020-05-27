<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <title>Coniv - Coronavirus (COVID-19) Medical Prevention HTML Template</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Main css -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Preloader -->
	<div class="preloader">
		<div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div><!-- /Preloader -->

    <!--Header Area-->
    <header class="header-area fixed-header">
        <nav class="navbar navbar-expand-lg main-menu">
            <div class="container-fluid">

                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" class="d-inline-block align-top" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link js-scroll-trigger" href="#">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#covid19">covid19</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#uses">Uses</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cases">Cases</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#symtoms">Symptoms</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#prevention">Prevention</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#photos">Photos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experts">Experts</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog.html" role="button" data-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog.html">All Blog</a></li>
                                <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#faq">Faq</a></li>
                    </ul>
                    <div class="header-btn justify-content-end">
                        <a href="#contact" class="bttn-small btn-fill js-scroll-trigger">Contact us</a>
                    </div>
                </div>
            </div>
        </nav>
    </header><!--/Header Area-->

    <!--Hero Area-->
    <section class="hero-section">
        <div class="hero-caro owl-carousel">
            <div class="single-hero darkest-overlay poly-particle" style="background: url('assets/images/banners/7.jpg') no-repeat center / cover;">
                <div class="triangle-particle">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                                <div class="hero-sub centered">
                                    <div class="table-cell">
                                        <div class="hero-left">
                                            <h4>Stay Home, Stay Safe</h4>
                                            <h1>To Rescue your people</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia voluptate labore iusto, ullam veritatis nulla doloremque, laborum animi deleniti harum neque adipisci blanditiis voluptatem</p>
                                            <a href="prevention.html" class="bttn-mid btn-fill">Prevention</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero darkest-overlay poly-particle" style="background: url('assets/images/banners/3.jpg') no-repeat center / cover;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            <div class="hero-sub centered">
                                <div class="table-cell">
                                    <div class="hero-left">
                                        <h4>Don't worry, be happy</h4>
                                        <h1>Keep calm and carry on</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia voluptate labore iusto, ullam veritatis nulla doloremque, laborum animi deleniti harum neque adipisci blanditiis voluptatem</p>
                                        <a href="prevention.html" class="bttn-mid btn-fill">Prevention</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Hero Area-->
    
    <!--About Section-->
    <section class="about-area gray-bg" id="covid19">
        <div class="about-content mid-bg-gray">
            <div class="about-content-inner-2">
                <div class="section-title mb-10">
                    <h4>According to WHO</h4>
                    <h2>Maintain Social Distance</h2>
                </div>
                <p>Lose away off why half led have near bed. At engage simple father of period others except folly death wrote cause her way spite <br><br>Yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing Jennings</p>
                <ul>
                    <li>Almost do am or limits hearts</li>
                    <li>Jennings appetite disposed me</li>
                    <li>Lose away off why half led have</li>
                    <li>Resolve parties but why she shewing</li>
                    <li>Almost do am or limits hearts</li>
                    <li>Jennings appetite disposed me</li>
                </ul>
            </div>
        </div>
        <div class="about-left" style="background: url('assets/images/about-4.jpg') no-repeat center / cover;">
            <div class="left-img-wrap">
                <a href="https://www.youtube.com/watch?v=mOV1aBVYKGA" class="video-popup"><i class="flaticon-heart"></i></a>
            </div>
        </div>
    </section><!--/About Section-->

        
    <!--Product area-->
    <section class="product-area section-padding-2" id="uses">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section-title">
                        <h4>Using kids</h4>
                        <h2>What should we use?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="assets/images/products/tranding-1.jpg" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="#">Using mask</a></h3>
                        </div>
                        <div class="product-pro-price">
                            <p>Dolorem accusamus maiores hic assumenda illum perferendis ratione</p>
                            <a href="#" class="bttn-small btn-fill">Get it now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="assets/images/products/tranding-2.jpg" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="#">Hand Sanitizer</a></h3>
                        </div>
                        <div class="product-pro-price">
                            <p>Dolorem accusamus maiores hic assumenda illum perferendis ratione</p>
                            <a href="#" class="bttn-small btn-fill">Get it now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="assets/images/products/tranding-3.jpg" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="#">Cover Nose</a></h3>
                        </div>
                        <div class="product-pro-price">
                            <p>Dolorem accusamus maiores hic assumenda illum perferendis ratione</p>
                            <a href="#" class="bttn-small btn-fill">Get it now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/product Area-->

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 centered">
                    <img src="assets/images/map.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Area -->
    <section class="counter-area section-padding-2 darkest-overlay" style="background: url('assets/images/banners/3.jpg') no-repeat fixed;" id="cases">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="single-counter">
                        <h3 class="count">479,742</h3>
                        <h5>Coronavirus Cases</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-counter">
                        <h3 class="count">21,566</h3>
                        <h5>Deaths</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="single-counter">
                        <h3><span class="count">115,668</span></h3>
                        <h5>Recovered</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-counter">
                        <h3><span class="count">35,265</span></h3>
                        <h5>New Cases</h5>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Counter Area -->

    <!--Symtoms Area-->
    <section class="section-padding" id="symtoms">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <img src="assets/images/about-2.jpg" alt="">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="section-title">
                        <h4>Basic Symtoms</h4>
                        <h2>Coronavirus Symtoms</h2>
                    </div>
                    <div class="about-list">
                        <ul>
                            <li><i class="flaticon-search"></i>High Fever <span>- Dolores quaerat provident et! Dicta</span></li>
                            <li><i class="flaticon-right-arrow-1"></i>Headache <span>- Dolores quaerat provident et! Dicta</span></li>
                            <li><i class="flaticon-tag"></i>Cough <span>- Dolores quaerat provident et! Dicta</span></li>
                            <li><i class="flaticon-hourglass"></i>Runny Nose <span>- Dolores quaerat provident et! Dicta</span></li>
                            <li><i class="flaticon-moon"></i>Sore Troath <span>- Dolores quaerat provident et! Dicta</span></li>
                            <li><i class="flaticon-favorite"></i>Dyspnoea <span>- Dolores quaerat provident et! Dicta</span></li>
                            <li><i class="flaticon-heart"></i>Fatigue <span>- Dolores quaerat provident et! Dicta</span></li>
                            <li><i class="flaticon-hourglass"></i>Runny Nose <span>- Dolores quaerat provident et! Dicta</span></li>
                            <li><i class="flaticon-moon"></i>Sore Troath <span>- Dolores quaerat provident et! Dicta</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Symtoms Area-->


    <!--Prevention Area-->
    <section class="section-padding-3 gray-bg" id="prevention">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered">
                    <div class="section-title">
                        <h4>Basic treatment</h4>
                        <h2>Basic Checkup</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-prevention">
                        <img src="assets/images/icons/1.png" alt="">
                        <h3>Medical Tips</h3>
                        <p>Consectetur adipisicing elit dolores unde minus nulla</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-prevention">
                        <img src="assets/images/icons/2.png" alt="">
                        <h3>Take treatment</h3>
                        <p>Consectetur adipisicing elit dolores unde minus nulla</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-prevention">
                        <img src="assets/images/icons/3.png" alt="">
                        <h3>Health care</h3>
                        <p>Consectetur adipisicing elit dolores unde minus nulla</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-prevention">
                        <img src="assets/images/icons/4.png" alt="">
                        <h3>Check report</h3>
                        <p>Consectetur adipisicing elit dolores unde minus nulla</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-prevention">
                        <img src="assets/images/icons/5.png" alt="">
                        <h3>Checkup heart</h3>
                        <p>Consectetur adipisicing elit dolores unde minus nulla</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-prevention">
                        <img src="assets/images/icons/6.png" alt="">
                        <h3>Take Vaccine</h3>
                        <p>Consectetur adipisicing elit dolores unde minus nulla</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-prevention">
                        <img src="assets/images/icons/7.png" alt="">
                        <h3>Get tips</h3>
                        <p>Consectetur adipisicing elit dolores unde minus nulla</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-prevention">
                        <img src="assets/images/icons/8.png" alt="">
                        <h3>Take rest</h3>
                        <p>Consectetur adipisicing elit dolores unde minus nulla</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Prevention Area-->


    <!-- How it works Area -->
    <section class="growth-stat section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h4>Get Protected</h4>
                        <h2>Be Confident</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                    <img src="assets/images/products/feature-1.jpg" alt="">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="growth-content">
                        <div class="content-grow">
                            <h3>Use Mask</h3>
                            <p>Assumenda at alias ipsum, autem tempora dolores accusantium asperiores aspernatur soluta explicabo blanditiis rem ratione totam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus natus laudantium assumenda sunt quia necessitatibus consectetur odit, praesentium ab molestiae? Magnam a tempore dignissimos iste, assumenda totam cum impedit corporis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-2 order-xl-1 order-lg-1 order-md-1 order-sm-2 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="growth-content">
                        <div class="content-grow">
                            <h3>Stay away from others</h3>
                            <p>Assumenda at alias ipsum, autem tempora dolores accusantium asperiores aspernatur soluta explicabo blanditiis rem ratione totam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus natus laudantium assumenda sunt quia necessitatibus consectetur odit, praesentium ab molestiae? Magnam a tempore dignissimos iste, assumenda totam cum impedit corporis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-1 order-xl-2 order-lg-2 order-md-2 order-sm-1 wow fadeInUp" data-wow-delay="0.4s">
                    <img src="assets/images/products/feature-2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                    <img src="assets/images/products/feature-3.jpg" alt="">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="growth-content">
                        <div class="content-grow">
                            <h3>Take medical help</h3>
                            <p>Assumenda at alias ipsum, autem tempora dolores accusantium asperiores aspernatur soluta explicabo blanditiis rem ratione totam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus natus laudantium assumenda sunt quia necessitatibus consectetur odit, praesentium ab molestiae? Magnam a tempore dignissimos iste, assumenda totam cum impedit corporis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /How it works Area -->

    <!--services Area-->
    <section class="services-area section-padding-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                   <div class="section-title">
                       <h4>Essential</h4>
                       <h2>Prevention</h2>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-service-3">
                        <div class="service-icon">
                            <img src="assets/images/icons/9.png" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Wash your hands frequently</h4>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except engage simple</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-service-3">
                        <div class="service-icon">
                            <img src="assets/images/icons/10.png" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Maintain social distancing</h4>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except engage simple</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-service-3">
                        <div class="service-icon">
                            <img src="assets/images/icons/11.png" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Avoid touching face</h4>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except engage simple</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-service-3">
                        <div class="service-icon">
                            <img src="assets/images/icons/12.png" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Using face mask</h4>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except engage simple</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-service-3">
                        <div class="service-icon">
                            <img src="assets/images/icons/13.png" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Seek medical care</h4>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except engage simple</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-service-3">
                        <div class="service-icon">
                            <img src="assets/images/icons/14.png" alt="">
                        </div>
                        <div class="service-content">
                            <h4>Stay informed</h4>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except engage simple</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/services Area-->


    <!--Portfolio Section -->
    <section class="portfolio-area section-padding" id="photos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <div class="section-title">
                        <h4>Incident photos</h4>
                        <h2>Stay more safer</h2>
                    </div>
                </div>
            </div>

            <div class="row portfolio portfolio-gallery column-3 gutter wow fadeInUp" data-wow-delay="0.5s">

                <div class="portfolio-item cat1 cat3 ">
                    <a href="assets/images/portfolios/1.jpg" class="thumb popup-gallery" title="">
                        <img src="assets/images/portfolios/1.jpg" alt="">
                        <div class="portfolio-hover">
                            <div class="portfolio-description">
                                <p><i class="fa fa-search"></i></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="portfolio-item cat2 cat4 ">
                    <a href="assets/images/portfolios/2.jpg" class="thumb popup-gallery" title="">
                        <img src="assets/images/portfolios/2.jpg" alt="">
                        <div class="portfolio-hover">
                            <div class="portfolio-description">
                                <h4>Aut commodi voluptatem <br> quod illo laboriosam</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="portfolio-item cat1 cat5 ">
                    <a href="assets/images/portfolios/3.jpg" class="thumb popup-gallery" title="">
                        <img src="assets/images/portfolios/3.jpg" alt="">
                        <div class="portfolio-hover">
                            <div class="portfolio-description">
                                <h4>Aut commodi voluptatem <br> quod illo laboriosam</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="portfolio-item cat3 ">
                    <a href="https://www.youtube.com/watch?v=mOV1aBVYKGA" class="thumb video-popup" title="">
                        <img src="assets/images/portfolios/4.jpg" alt="">
                        <div class="portfolio-hover">
                            <div class="portfolio-description">
                                <p><i class="fa fa-play"></i></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="portfolio-item cat1 cat2 ">
                    <a href="assets/images/portfolios/5.jpg" class="thumb popup-gallery" title="">
                        <img src="assets/images/portfolios/5.jpg" alt="">
                        <div class="portfolio-hover">
                            <div class="portfolio-description">
                                <p><i class="fa fa-search"></i></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="portfolio-item cat3 cat4 ">
                    <a href="assets/images/portfolios/6.jpg" class="thumb popup-gallery" title="">
                        <img src="assets/images/portfolios/6.jpg" alt="">
                        <div class="portfolio-hover">
                            <div class="portfolio-description">
                                <h4>Aut commodi voluptatem <br> quod illo laboriosam</h4>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section><!--/Portfolio Section-->
        
    <!-- Cta -->
    <section class="cta section-padding dark-overlay" style="background: url('assets/images/banners/2.jpg') no-repeat fixed;">
        <div class="container">
            <div class="row">
                <div class="col centered cl-white">
                    <div class="section-title mb-20">
                        <h2>Any advice from you?</h2>
                    </div>
                    <a href="#" class="bttn-mid btn-emt">Message us</a>
                </div>
            </div>
        </div>
    </section><!-- /Cta -->

    <!--team Area-->
    <section class="team-area section-padding-2" id="experts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h4>Experts</h4>
                        <h2 class="cl-black">Our expert team</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-2">
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <img src="assets/images/team/1.jpg" alt="">
                        <div class="team-content">
                            <h4>Jonas tor</h4>
                            <p>Senior virus expert</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-2">
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <img src="assets/images/team/2.jpg" alt="">
                        <div class="team-content">
                            <h4>Lynn West</h4>
                            <p>Senior virus expert</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-2">
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <img src="assets/images/team/3.jpg" alt="">
                        <div class="team-content">
                            <h4>Brooke Little</h4>
                            <p>Senior virus expert</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team-2">
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <img src="assets/images/team/4.jpg" alt="">
                        <div class="team-content">
                            <h4>Steve Wheeler</h4>
                            <p>Senior virus expert</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/team Area-->


    <!--Blog Area-->
    <section class="blog-area section-padding-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h4>Some posts</h4>
                        <h2>Read extra news</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="assets/images/blog/1.jpg" alt="">
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2020</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-edit"></i>3</a></span>
                            </div>
                            <h3><a href="#">Excited him Now Natural Saw Passage Offices You Minuter</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="assets/images/blog/2.jpg" alt="">
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2020</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-edit"></i>3</a></span>
                            </div>
                            <h3><a href="#">Passage Offices You Minuter Excited him Now Natural Saw</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="assets/images/blog/3.jpg" alt="">
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2020</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-edit"></i>3</a></span>
                            </div>
                            <h3><a href="#">Natural Saw Passage Offices Excited him Now You Minuter</a></h3>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section><!--/Blog Area-->
    
    <!-- Newslatter -->
    <section class="section-padding dark-overlay" style="background: url('assets/images/banners/1.jpg') no-repeat fixed;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered cl-white">
                    <div class="section-title mb-20">
                        <h4>Newslatter</h4>
                        <h2>Stay connected</h2>
                    </div>
                    <div class="newslatter">
                        <form action="#">
                            <input type="email" placeholder="Enter your email" required>
                            <button type="submit"><i class="fa fa-angle-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Newslatter -->

    <!--FAQ Area-->
    <section class="section-padding-2" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="section-title centered">
                        <h4>Any questions</h4>
                        <h2>Any asking?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="faq-contents mb-30">
                        <ul class="accordion">
                            <li>
                                <a href="#">Who long will it take to recover?</a>
                                <p>TellusTellus at libero eu et, felis id rhoncus eros dui. Elemmante congue in odio, blandit odio a in metus, ut ullamcorper daleesque taciti mauris dolor metus.</p>
                            </li>
                            <li>
                                <a href="#">When I feel I'm affected?</a>
                                <p>TellusTellus at libero eu et, felis id rhoncus eros dui. Elemmante congue in odio, blandit odio a in metus, ut ullamcorper daleesque taciti mauris dolor metus.</p>
                            </li>
                            <li>
                                <a href="#">How is it spread?</a>
                                <p><strong>Mission</strong> at libero eu et, felis id rhoncus eros dui. Elemmante congue in odio, blandit odio a in metus, ut ullamcorper daleesque taciti mauris dolor metus.</p>
                                <p><strong>Vission</strong> TellusTellus at libero eu et, felis id rhoncus eros dui. Elemmante congue in odio, blandit odio a in metus, ut ullamcorper daleesque taciti mauris dolor metus.</p>
                            </li>
                            <li>
                                <a href="#">Why People choose us?</a>
                                <p>TellusTellus at libero eu et, felis id rhoncus eros dui. Elemmante congue in odio, blandit odio a in metus, ut ullamcorper daleesque taciti mauris dolor metus.</p>
                            </li>
                            <li>
                                <a href="#">How to get service?</a>
                                <p>TellusTellus at libero eu et, felis id rhoncus eros dui. Elemmante congue in odio, blandit odio a in metus, ut ullamcorper daleesque taciti mauris dolor metus.</p>
                            </li>
                            <li>
                                <a href="#">Our mission & vission?</a>
                                <p><strong>Mission</strong> at libero eu et, felis id rhoncus eros dui. Elemmante congue in odio, blandit odio a in metus, ut ullamcorper daleesque taciti mauris dolor metus.</p>
                                <p><strong>Vission</strong> TellusTellus at libero eu et, felis id rhoncus eros dui. Elemmante congue in odio, blandit odio a in metus, ut ullamcorper daleesque taciti mauris dolor metus.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <img src="assets/images/faq.jpg" alt="">
                </div>
            </div>
        </div>
    </section><!--/FAQ Area-->

    <!--Contact Section-->
    <section class="section-padding-2 gray-bg" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="section-title centered">
                        <h4>Contact us</h4>
                        <h2>Get in touch</h2>
                        <p>Send us a message if you need any help</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form mb-30">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <input type="text" placeholder="First Name" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <input type="text" placeholder="Last Name" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <input type="text" placeholder="Phone" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <input type="email" placeholder="Email" required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <textarea name="msg" rows="4" placeholder="Your message"></textarea>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <button type="submit" class="bttn-mid btn-fill">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Contact Section-->

    
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered">
                    <div class="section-title">
                        <h4>All togather</h4>
                        <h2>We're all togather to make you safe</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12 centered">
                    <img src="assets/images/we-all.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Footer Area-->
    <footer class="footer-area section-padding black-bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                    <div class="footer-logo centered mb-4">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">What's cov19</a></li>
                            <li><a href="#">Symtoms</a></li>
                            <li><a href="#">Prevention</a></li>
                            <li><a href="#">Photos</a></li>
                            <li><a href="#">Uses</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>Copyright &copy; 2020 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--/Footer Area-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollUp.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/scrolling-nav.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>