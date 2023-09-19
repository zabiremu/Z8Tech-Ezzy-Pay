{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ezzy Pay</title>
    <link rel="icon" type="image/png" href="https://www.oceanezzy.life/assets/static/front/img/icon.png" sizes="16x16">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
            */
        }

        body {
            background: url('../assets/media/app_icon/im5.png');
            #161129;
            background-size: cover;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .screen {
            padding: 0px;
            max-width: 325px;
            margin: auto;
            background: #6236FF;
            border-radius: 10px;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .login {
            width: 100%;
            padding: 40px;
            padding-top: 60px;
        }

        .login__field {
            padding: 20px 0px;
            position: relative;
        }

        .login__icon {
            position: absolute;
            top: 33px;
            color: #e51e25;
            padding-left: 10px;
        }

        .login__input {
            padding: 14px;
            padding-left: 30px;
            font-weight: 700;
            width: 100%;
            transition: .2s;
            border-radius: 5px;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #0000;
        }

        .login__submit {
            background: #E51E25 !important;
            font-size: 18px;
            margin-top: 10px;
            padding: 10px 2px;
            border-radius: 10px;
            font-weight: 700;
            color: #fff;
            cursor: pointer;
            transition: .2s;
            border: none;
            width: 100%;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #E51E25 !important;
            outline: none;
            background: #E51E25 !important;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #fff;
        }

        .social-login {
            position: absolute;
            height: 120px;
            width: 100%;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-login__icon {
            padding: 20px 10px;
            color: #fff;
            text-decoration: none;
            text-shadow: 0px 0px 8px #7875B5;
            font-size: 30px;
        }

        .social-login__icon:hover {
            transform: scale(1.5);
        }

        .input_bg {
            background: #fff !important;
            border: none !important;
            color: #000 !important;
        }

        @media screen and (max-width: 575px) {
            .tm-hero-section.tm-style1 {
                padding-top: 40px;
                padding-bottom: 20px;
            }
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content" style="padding-bottom: 35px;">

                <div
                    style="position: relative;/*height: 80px;*/width: fit-content;display: block;/*border: 2px solid #fff;background-color: #fff8;*/top: 35px;left: 50%;transform: translate(-50%,0%);">
                    <img src="https://www.oceanezzy.life/assets/static/front/img/logow.png" style="max-width: 160px;" />
                </div>

                <form class="login" id="form" style="margin-top:70px" method="POST"
                    action="{{ route('password.update') }}">
                    @csrf
                    <div class="login__field">
                        <i class="login__icon fas fa-user golden-text"></i>
                        <input type="text" class="login__input" form="form" name="email" id="email"
                            value="" placeholder="User Email">
                        @error('email')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="button login__submit" form="form" id="login_btn">
                        <span class="button__text">Send in email</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>

                <div class="social-login">
                    <h3 style="font-size: 12px;color: #8c8c8c;font-weight: normal;">Remember your password? <a
                            href="{{route('login')}}"
                            style="text-decoration: none;color: #fab139;">Log in to your account</a></h3>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>

    {{-- <script>
        function pageBlock() {
            $.blockUI({
                message: "processing",
                css: {
                    border: 'none',
                    padding: '10px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .3,
                    color: '#fff'
                }
            });
        }

        function pageUnBlock() {
            $.unblockUI();
        }
    </script>

    <script type="text/javascript">
        $(document).on('click', '#login_btn', function(e) {
            e.preventDefault();

            ////////////////////////////////////
            /*$('#ErrorMsg').addClass('d-none');
            $('#login_btn').html('Processing');
            $("#login_btn").attr("disabled","");*/
            ////////////////////////////////////

            var form = $('#form')[0];
            var data = new FormData(form);


            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: 'https://www.oceanezzy.life/auth/ajax/forgot_password.html',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                async: false,
                dataType: 'json',
                beforeSend: function() {
                    pageBlock();
                },
                complete: function() {
                    pageUnBlock();
                },
                success: function(data) {

                    if (data.type == 'error') {
                        alert(data.data_msg[0].msg);
                        pageUnBlock();
                    } else if (data.type == 'warning') {
                        pageUnBlock();
                    } else if (data.type == 'success') {
                        // window.location = data.redirect_url;
                        pageUnBlock();
                    }

                    pageUnBlock();
                },
                error: function(e) {
                    console.log("ERROR : ", e);
                    pageUnBlock();
                }
            });
        });
    </script> --}}

</body>

</html>
