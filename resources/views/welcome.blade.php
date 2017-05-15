<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Naila One Page Multi Purpose Template">
    <meta name="keywords"
          content="Onepageboss, new, html, one page, bootstrap, new html template, design, creative, onepage, clean, modern">
    <meta name="author" content="Tanvir Rahman Hridoy">

    <title>Vigama</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800|Raleway:300,400,500,700,800,900"
          rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/linear-fonts.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css">

    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/effects.css">
    <link rel="stylesheet" href="assets/css/animated-text.css">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- COLOR SWITCHER JS -->
    <link href="assets/switcher/switcher.css" rel="stylesheet">
    <link href="assets/switcher/style1.css" rel="stylesheet" id="colors">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
    <link rel="stylesheet" href="cssp/style.css">
    <style>

        #snackbar {
            visibility: hidden; /* Hidden by default. Visible on click */
            min-width: 250px; /* Set a default minimum width */
            margin-left: -125px; /* Divide value of min-width by 2 */
            background-color: #fc9900; /* Black background color */
            color: #ffffff; /* White text color */
            text-align: center; /* Centered text */
            font-size: medium;
            border-radius: 4px; /* Rounded borders */
            padding: 14px; /* Padding */
            position: fixed; /* Sit on top of the screen */
            z-index: 1; /* Add a z-index if needed */
            left: 50%; /* Center the snackbar */
            bottom: 30px; /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
            visibility: visible; /* Show the snackbar */

            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
            However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        .follow {
            margin-right: 4%;
            border-color: #2980b9;
            color: #2980b9;
        }

        .btn1 {
            border-radius: 0px !important;
            width: 100px;

        }
    </style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js
"></script>
</head>

<body>

<div class="preloader-area">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>


<header id="home" class="welcome-area">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <div class="logo">
                        <a href="#home">
                            <p>Vigama</p>
                        </a>
                    </div>

                </div>
                <div class="col-md-9">

                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smoth-scroll" href="#home">Home
                                            <div class="ripple-wrapper"></div>
                                        </a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#About">About</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#gallery">Gallery</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#testimonial">Voting</a>
                                    </li>

                                    <li><a class="smoth-scroll" href="#team"> Our Team</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#contact">contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="particles-js">
        <canvas class="particles-js-canvas-el" width="980" height="1742" style="width: 100%; height: 100%;"></canvas>
    </div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <div class="welcome-image-area" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="assets/images/text.png" width="900px" height="100px"
                                 class=" wow bounceInUp animated qw img-responsive " data-wow-delay="200ms" style="    -webkit-animation: pulse 5s infinite;
    animation: pulse 5s infinite;"/>
                            <div class="header-text text-center">

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s</p>

                            </div>
                            <div onclick="location.href='#About';" style="visibility: visible; animation-delay: 200ms; animation-name:bounceInUp ;  margin-bottom:-300px;
	    border-radius: 0px;
    background-color: transparent;
    color: white; position: absolute;
	left: 48%;
	font-size: 50px;
	padding-top:109px;
	-webkit-animation: bounce 3s infinite;
	animation: bounce 3s infinite;" class="scroll-indicator fa fa-chevron-down" data-wow-delay="200ms"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="jsp/index.js"></script>
    <canvas width="80" height="48" style="width: 80px; height: 48px; display: none;"></canvas>
    <canvas width="80" height="48" style="width: 80px; height: 48px; display: none;"></canvas>
    </div>
    </div>
</header>


<section id="About" class="about-us-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                <div class="about-image">
                    <img src="assets/images/about.jpg" alt="" class="img-responsive">
                </div>
            </div>

            <div class="col-md-6">
                <div class="about-text">
                    <h2 class="wow fadeInDown" data-wow-delay=".2s">We are commercially driven and focus on excellence
                        with impact.</h2>
                    <p class="wow fadeInDown" data-wow-delay=".4s">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout. The point of using
                        Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English. Many desktop publishing
                        packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                        'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                        over the years, sometimes by accident, sometimes on purpose.</p>
                    <a href="#" class="read-more wow fadeInDown" data-wow-delay=".6s">Learn more</a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="video-area" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="video-area-text text-center wow bounceIn">
                    <a href="https://www.youtube.com/watch?v=6NC_ODHu5jg" class="video-play mfp-iframe">
                        <i class="fa fa-play"></i>
                    </a>
                    <h2>Watch Our Video</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="gallery section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>gallery</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore. et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="work-inner">
            <div class="row work-posts grid">

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <a href="assets/images/work/1.jpg" class="work-popup">
                            <figure class="effect-bubba">
                                <img src="assets/images/work/1.jpg" alt="image">
                                <figcaption>
                                    <h2>Web development</h2>
                                    <p><strong>Client:</strong> Jonathon doe</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <a href="assets/images/work/2.jpg" class="work-popup">
                            <figure class="effect-bubba">
                                <img src="assets/images/work/2.jpg" alt="image">
                                <figcaption>
                                    <h2>Web development</h2>
                                    <p><strong>Client:</strong> Jonathon doe</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <a href="assets/images/work/3.jpg" class="work-popup">
                            <figure class="effect-bubba">
                                <img src="assets/images/work/3.jpg" alt="image">
                                <figcaption>
                                    <h2>Web development</h2>
                                    <p><strong>Client:</strong> Jonathon doe</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <a href="assets/images/work/4.jpg" class="work-popup">
                            <figure class="effect-bubba">
                                <img src="assets/images/work/4.jpg" alt="image">
                                <figcaption>
                                    <h2>Web development</h2>
                                    <p><strong>Client:</strong> Jonathon doe</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <a href="assets/images/work/5.jpg" class="work-popup">
                            <figure class="effect-bubba">
                                <img src="assets/images/work/5.jpg" alt="image">
                                <figcaption>
                                    <h2>Web development</h2>
                                    <p><strong>Client:</strong> Jonathon doe</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <a href="assets/images/work/6.jpg" class="work-popup">
                            <figure class="effect-bubba">
                                <img src="assets/images/work/6.jpg" alt="image">
                                <figcaption>
                                    <h2>Web development</h2>
                                    <p><strong>Client:</strong> Jonathon doe</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 text-center portfolio-more  wow fadeInDown" data-wow-delay=".6s">
                    <a href="#" class="read-more">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonial" class="testimonial-area section-padding" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Voting</h2>
                </div>
            </div>
        </div>
        <div class="row">


            <div class="col-md-12">
                <div class="testimonial-list">
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/1.jpg" alt="">
                            <h2>Jhonathon doe</h2>
                            <h3>Businees men</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" class="btn btn-primary btn1" data-toggle="modal"
                                    data-target="#myModal1">Vote
                            </button>
                        </div>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/2.jpg" alt="">
                            <h2>katrina kaif</h2>
                            <h3>actress</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" data-toggle="modal" data-target="#myModal2"
                                    class="btn btn-primary btn1">Vote
                            </button>
                        </div>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/3.jpg" alt="">
                            <h2>Jhonathon doe</h2>
                            <h3>Businees men</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" data-toggle="modal" data-target="#myModal3"
                                    class="btn btn-primary btn1">Vote
                            </button>
                        </div>
                    </div>

                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/2.jpg" alt="">
                            <h2>katrina kaif</h2>
                            <h3>actress</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" class="btn btn-primary btn1" data-toggle="modal"
                                    data-target="#myModal4">Vote
                            </button>
                        </div>
                    </div>

                    <!-- -->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/2.jpg" alt="">
                            <h2>katrina kaif</h2>
                            <h3>actress</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" class="btn btn-primary btn1" data-toggle="modal"
                                    data-target="#myModal5">Vote
                            </button>
                        </div>
                    </div>
                    <!-- -->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/2.jpg" alt="">
                            <h2>katrina kaif</h2>
                            <h3>actress</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" class="btn btn-primary btn1" data-toggle="modal"
                                    data-target="#myModal6">Vote
                            </button>
                        </div>
                    </div>
                    <!--7-->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/2.jpg" alt="">
                            <h2>katrina kaif</h2>
                            <h3>actress</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" class="btn btn-primary btn1" data-toggle="modal"
                                    data-target="#myModal7">Vote
                            </button>
                        </div>
                    </div>
                    <!--8-->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/2.jpg" alt="">
                            <h2>katrina kaif</h2>
                            <h3>actress</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" class="btn btn-primary btn1" data-toggle="modal"
                                    data-target="#myModal8">Vote
                            </button>
                        </div>
                    </div>
                    <!--9-->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/2.jpg" alt="">
                            <h2>katrina kaif</h2>
                            <h3>actress</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" class="btn btn-primary btn1" data-toggle="modal"
                                    data-target="#myModal9">Vote
                            </button>
                        </div>
                    </div>
                    <!--10-->
                    <div class="single-testimonial">

                        <div class="testi-name">
                            <img src="assets/images/testimonial/2.jpg" alt="">
                            <h2>katrina kaif</h2>
                            <h3>actress</h3>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-testi-des">
                            <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae
                                placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                            <button type="button" class="btn btn-primary btn1" data-toggle="modal"
                                    data-target="#myModal10">Vote
                            </button>
                        </div>
                    </div>
                    <!-- -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- / END TESTIMONIAL DESIGN AREA -->

<!-- START TEAM DESIGN AREA -->
<section id="team" class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Our Team</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="team-list">
            <!-- START SINGLE TEAM DESIGN AREA -->
            <div class="single-team">
                <div class="team-image">
                    <img src="assets/images/team/team1.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>jonathon doe</h4>
                    <p>user interface desiger</p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="assets/images/team/team2.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>jonathon doe</h4>
                    <p>user interface desiger</p>
                </div>
            </div>

            <div class="single-team">
                <div class="team-image">
                    <img src="assets/images/team/team3.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>jonathon doe</h4>
                    <p>user interface desiger</p>
                </div>
            </div>
            <!-- / END SINGLE TEAM DESIGN AREA -->
            <!-- START SINGLE TEAM DESIGN AREA -->
            <div class="single-team">
                <div class="team-image">
                    <img src="assets/images/team/team4.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>jonathon doe</h4>
                    <p>user interface desiger</p>
                </div>
            </div>
            <!-- / END SINGLE TEAM DESIGN AREA -->
        </div>
    </div>
</section>
<!-- / END TEAM DESIGN AREA -->


<!-- START CALL TO ACTION SMALL AREA -->
<section class="call-to-action-small-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2></h2>
            </div>
            <div class="col-md-4">
                <div class="call-to-action-small-button">
                    <a href="#" class="call-to-more">Know more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- / END CALL TO ACTION SMALL AREA -->

<!-- START CONTACT DESIGN AREA -->
<section id="contact" class="contact-area section-padding" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row contact-form-design-area">
            <!-- START CONTACT FORM INFOMATION DESIGN AREA -->
            <div class="col-md-6 contact-details-list">
                <h2>contact us</h2>
                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming
                    vulputate velit esse molestie possim ulla facilisis at vero eros et accumsan et eleifend iusto odio
                    dignissim qui blandit praesent luptatum zzril delenit augue feugait null</p>
                <div class="single-contact">
                    <h3><i class="fa fa-map"></i>Ajay Kumar Garg Engineering College,Ghaziabad</h3>
                </div>
                <div class="single-contact">
                    <h3><i class="fa fa-phone"></i>9488001188</h3>
                </div>
                <div class="single-contact">
                    <h3><i class="fa fa-envelope"></i>vigama2k17co@gmail.com</h3>
                </div>
            </div>
            <!-- / END CONTACT FORM INFOMATION DESIGN AREA -->
            <div class="col-md-6">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="contact-form">
                    <form id="form1" action="{{url(route('enquiry.create'))}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group col-md-12">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                   required="required">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                   required="required">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea rows="6" name="message" class="form-control" id="message"
                                      placeholder="Your Message" required="required"></textarea>
                        </div>
                        <div class="form-group col-md-12 actions wow fadeInDown" data-wow-delay=".4s">
                            <button class="btn btn-default btn-lg  btn-contact-bg">Send Message</button>
                        </div>
                    </form>

                </div>
                <!-- / END CONTACT FORM DESIGN AREA -->
            </div>
        </div>
    </div>
</section>
<!-- / END CONTACT DESIGN AREA -->


<!-- START FOOTER DESIGN AREA -->
<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="footer-text">
                    <h6> Vigama 2017.all right Reserved <br>Developed by Team Conatus</h6>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / END CONTACT DETAILS DESIGN AREA -->

<!-- START SCROOL UP DESIGN AREA -->
<div class="scroll-to-up">
    <div class="scrollup">
        <span class="lnr lnr-chevron-up"></span>
    </div>
</div>
<!-- / END SCROOL UP DESIGN AREA -->

<!--added-->

@for ($i = 1; $i <= 10; $i++)
    <div class="modal fade" id="myModal{{$i}}" role="dialog" style="margin-top:100px;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Voting Form</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{url('vote').'/'.$i}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" pattern="\d{7}$" class="form-control" id="student_no" placeholder="Enter Student Number " name="student_no" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9">
                                <input type="text" pattern="\d{10}$" class="form-control" id="contact_no" placeholder="Enter Mobile Number" name="contact_no" required >
                            </div>

                            <div class="col-sm-3">
                                <a onclick="sendCode({{$i+1}})" type="button" class="btn btn-lg btn-default" id="send_otp" name="send_otp" required>Send Code</a>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input  type="text" pattern="\d{6}$" class="form-control" id="code" placeholder="Enter code" name="code" required >
                            </div>
                        </div>


                        <div class="modal-footer ">
                            <button id="next" type="submit"  class="btn btn-md btn-default" >Submit</button>
                        </div>


                    </form>

                </div>

            </div>

        </div>
    </div>
@endfor

<script>


    $('#contactForm').submit(function () {
        vote(this);
        return false;
    });

    function sendCode($id)
    {
        var number = $('#contact_no').val();
        var phoneno = /^\d{10}$/;
        if(number.match(phoneno))
        {
            $('#next').prop('disabled', true);


            var url = '{{url('/send-otp/')}}'+'/'+number;



            $.ajax({
                type: "POST",
                url: url,
                data: {
                    _token: "{{csrf_token()}}"
                },
                success: function (result) {
                    $('#next').prop('disabled', false);
                    myFunction(result);

                },
                error: function () {
                    $('#next').prop('disabled', false);
                    window.alert('Some error occurred.');

                }
            });




        }
        else
        {
            myFunction('Invalid Mobile Number');
            return false;
        }
    }

    function myFunction($message) {
        // Get the snackbar DIV
        var x = document.getElementById("snackbar")
        x.innerHTML = $message;

        // Add the "show" class to DIV
        x.className = "show";


        // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }


</script>

<div id="snackbar"></div>




<!--end-->


<!-- LATEST JQUERY -->
<script src="assets/js/jquery.min.js"></script>
<!-- BOOTSTRAP JS -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- OWL CAROUSEL JS  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- MAGNIFICANT JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- STEALLER JS -->
<script src="assets/js/jquery.stellar.min.js"></script>
<!-- YOUTUBE JS -->
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript">
    $('.player').mb_YTPlayer();
</script>
<!-- COUNTER UP JS -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated-text.js"></script>
<!-- GOOGLE MAP JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
<script src="assets/js/gmap3.min.js"></script>
<!-- CONTCAT FORM JS -->
<script src="assets/js/form-contact.js"></script>
<!-- COLOR SWITCHER -->
<script src="assets/switcher/switcher.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>
</body>

</html>