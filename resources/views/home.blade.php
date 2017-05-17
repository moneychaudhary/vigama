<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Vigama</title>
    <link rel="shortcut icon" href="u.png" type="image/x-icon">
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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="cssp/style.css">
    <style>
        .follow {
            margin-right: 4%;
            border-color: #2980b9;
            color: #2980b9;
        }

        .btn1 {
            border-radius: 0px !important;
            width: 100px;

        }

        .team-description {
            width: 280px;
        }
    </style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>

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
                        <a href="{{url(route('home'))}}">
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
                                    <li><a class="smoth-scroll" href="#About">Invitation</a>
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

                                <p>“Don’t be dismayed at goodbyes. A farewell is necessary before you can meet again.
                                    And meeting again, after moments or lifetimes, is certain for those who are
                                    friends.”</p>

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
                    <h2>Invitation</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:70px;">

            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                <div class="about-image">
                    <img src="assets/images/a.jpg" alt="" class="img-responsive">
                </div>
            </div>

            <div class="col-md-6">
                <div class="about-text">
                    <h2 class="wow fadeInDown" data-wow-delay=".2s">VIGAMA - Bidding farewell</h2>
                    <p class="wow fadeInDown" data-wow-delay=".4s">A tradition is a belief or behaviour passed down
                        within a group or society with symbolic meaning or special significance with origins in the
                        past. Traditions are what define our culture and society. They act as a guiding staff in the
                        life of a person which takes him from HORIZON to Zenith.
                        As per the traditions of our prestigious institution, every year, a Farewell party is organized
                        by the 3rd year students for the passing out members of our family. Bequeathing this rich legacy
                        and the cognizance of our experience last year, we would like to present before you<strong>
                            “VIGAMA”</strong>. We request all our 4th year members to be present in the farewell party.
                        Your presence will be highly obliged.
                    </p>

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
                    <a href="https://youtube.com/watch?v=L4RgWRJJFnE" class="video-play mfp-iframe">
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
                    <h2>Gallery</h2>
                    <p>Photos of Vigama 2017 will be uploaded after the farewell party.</p>
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
                                    <h2>Atisarga</h2>
                                    <p><strong>Farewell</strong>2016</p>
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
                                    <h2>Atisarga</h2>
                                    <p><strong>Farewell</strong>2016</p>
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
                                    <h2>Atisarga</h2>
                                    <p><strong>Farewell</strong>2016</p>
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
                                    <h2>Atisarga</h2>
                                    <p><strong>Farewell</strong>2016</p>
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
                                    <h2>Atisarga</h2>
                                    <p><strong>Farewell</strong>2016</p>
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
                                    <h2>Atisarga</h2>
                                    <p><strong>Farewell</strong>2016</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row">

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
                    <p></p>
                </div>
            </div>
        </div>
        <div class="team-list" style="margin-top: 40px;">
            <!-- START SINGLE TEAM DESIGN AREA -->
            <div class="single-team" style="width:280px!important">
                <div class="team-image">
                    <img src="assets/images/team/team1.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>Prof. V.K Parashar</h4>
                    <p>Organiser</p>
                </div>
            </div>

            <div class="single-team" style="width:280px!important">
                <div class="team-image">
                    <img src="assets/images/team/v.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>Vibhav Kaushik</h4>
                    <p>Convener</p>
                </div>
            </div>

            <div class="single-team" style="width:280px!important">
                <div class="team-image">
                    <img src="assets/images/team/sr.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>Srajita Singh</h4>
                    <p>Convener</p>
                </div>
            </div>
            <div class="single-team" style="width:280px!important">
                <div class="team-image">
                    <img src="assets/images/team/sh.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>Shivam Sharma</h4>
                    <p>Convener</p>
                </div>
            </div>
            <!-- / END SINGLE TEAM DESIGN AREA -->
            <!-- START SINGLE TEAM DESIGN AREA -->
            <div class="single-team" style="width:280px!important">
                <div class="team-image">
                    <img src="assets/images/team/d.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>Daniyal Siddiqui</h4>
                    <p>Convener</p>
                </div>
            </div>
            <div class="single-team" style="width:280px!important">
                <div class="team-image">
                    <img src="assets/images/team/n.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>Neeraj Kumar Rawat</h4>
                    <p>Web Developer</p>
                </div>
            </div>
            <div class="single-team" style="width:280px!important">
                <div class="team-image">
                    <img src="assets/images/team/m.jpg" class="img-responsive">
                </div>
                <div class="team-description">
                    <h4>Money Chaudhary</h4>
                    <p>Web Developer</p>
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
                <h2>Contact us</h2>
                <p>For any queries you can reach us by following ways and you can also message us,we will respond you as
                    quickly as possible. </p>
                <div class="single-contact">
                    <h3><i class="fa fa-map"></i>Ajay Kumar Garg Engineering College,Ghaziabad</h3>
                </div>
                <div class="single-contact">
                    <h3><i class="fa fa-phone"></i>7535950000</h3>
                </div>
                <div class="single-contact">
                    <h3><i class="fa fa-envelope"></i> vigama2k17co@gmail.com </h3>
                </div>
            </div>
            <!-- / END CONTACT FORM INFOMATION DESIGN AREA -->
            <div class="col-md-6">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="contact-form">
                    <form id="form1" action="{{url(route('enquiry.create'))}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group col-md-12">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required
                            >
                        </div>
                        <div class="form-group col-md-12">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required
                            >
                        </div>
                        <div class="form-group col-md-12">
                            <textarea rows="6" name="message" class="form-control" id="message"
                                      placeholder="Your Message" required></textarea>
                        </div>


                        @if($errors)
                            <div style="padding: 20px;">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif


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
                    <h6> Vigama 2017.all right Reserved <br>Powered by Team Conatus</h6>
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
                                <input type="text" pattern="[789]\d{9}$" class="form-control" id="mobile" placeholder="Contact Number (eg : 9876543210)" name="mobile" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" pattern="[1][34][01234]\d{4}$" class="form-control" id="student_no" placeholder="Student Number (eg : 1317100)" name="student_no" required >
                            </div>
                        </div>

                        <div class="modal-footer ">
                            <button id="next" type="submit"  class="btn btn-md btn-default" >Next</button>
                        </div>


                    </form>

                </div>

            </div>

        </div>
    </div>
@endfor
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