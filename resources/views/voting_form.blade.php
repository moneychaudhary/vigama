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

</head>

<body>


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
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image-area" data-stellar-background-ratio="0.6"
         style="background:url(n.jpg);   background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form" action="{{url('vote-submit/'.$vote->namespace)}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="mobile">Mobile Number</label>
                                            <input type="text" class="form-control" id="mobile"
                                                   value="{{$vote->mobile}}" disabled="disabled">
                                        </div>

                                        <div class="form-group">
                                            <label for="student_no">Student Number</label>
                                            <input type="text" class="form-control" id="student_no" value="{{$vote->student_no}}"
                                                   disabled="disabled">
                                        </div>

                                        <div class="form-group">
                                            <label for="code">Verification Code</label>
                                            <input type="text" class="form-control" id="code" name="code"
                                                   placeholder="eg : 123456" pattern="\d{6}$"  required>
                                        </div>

                                        @if($errors)
                                            <div style="padding: 20px;">
                                                @foreach ($errors->all() as $error)
                                                    <div>{{ $error }}</div>
                                                @endforeach
                                            </div>
                                        @endif

                                        <div class="form-group pull-right">

                                            <a onclick="sendOtp()" class="btn btn-success btn-md " id="resend_otp">Resend Code
                                            </a>

                                            <button type="submit" class="btn btn-md btn-primary">Submit
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>

        function sendOtp() {
            $('#send_otp').prop('disabled', true);
            var url = '{{url('/send-otp').'/'.$vote->mobile}}';


            $.ajax({
                type: "GET",
                url: url,
                data: {
                    _token: "{{csrf_token()}}"
                },

                success: function (result) {
                    $('#send_otp').prop('disabled', false);

                },
                error: function () {
                    $('#send_otp').prop('disabled', false);
                    window.alert('Some error Occured');
                }
            });

        }

    </script>

</header>


<!-- START FOOTER DESIGN AREA -->

<!-- / END CONTACT DETAILS DESIGN AREA -->

<!-- START SCROOL UP DESIGN AREA -->
<div class="scroll-to-up">
    <div class="scrollup">
        <span class="lnr lnr-chevron-up"></span>
    </div>
</div>
<!-- / END SCROOL UP DESIGN AREA -->


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