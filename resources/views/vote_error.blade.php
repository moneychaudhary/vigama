<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Vigama 2k17</title>
    <link rel="shortcut icon" href="u.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <style>
        .logo {
            padding-top: 30px;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
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
                            <p style="font-size:20px;color:#5C5C5C; "><strong>VIGAMA</strong></p>

                        </a>
                    </div>

                </div>
                <div class="col-md-9">
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center" style="margin-top: 70px;">
        <div class="col-sm-6 col-sm-offset-3">
            <img src="error.png">
            <p style="font-size:20px;color:#5C5C5C; padding: 20px">We're sorry, but you have already voted . Thank you for your participation.</p>
            <a href="{{url(route('home'))}}" class="btn btn-lg btn-success">     Go back     </a>
            <br><br>
        </div>

    </div>
</header>









</body>

</html>