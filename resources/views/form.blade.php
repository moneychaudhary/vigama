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
                            <p style="font-size: small; color: black" ><strong>VIGAMA<strong></p>
                        </a>
                    </div>

                </div>
                <div class="col-md-9">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div style="margin-top: 50px;" class="panel panel-default">
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



                                    <div class="col-sm-5">

                                    </div>

                                    <div class="form-group col-sm-4 col-xs-12">
                                    <a onclick="sendOtp()" class="form-control btn btn-success btn-md " id="resend_otp">Resend Code
                                    </a>
                                    </div>

                                    <div class="form-group col-sm-3 col-xs-12">
                                    <button type="submit" class="form-control btn btn-md btn-primary">Submit
                                    </button>
                                    </div>


                            </form>

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









</body>

</html>