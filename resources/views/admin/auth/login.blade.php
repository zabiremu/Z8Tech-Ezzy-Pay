<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> MFS PAY | Login </title>
    <link rel="icon" type="image/png" href="../backend/images/logo.png" sizes="16x16">



    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>


    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(135deg, rgba(29, 29, 29, .05), rgba(29, 29, 29, .05) 17%, rgba(27, 27, 27, .05) 0, rgba(27, 27, 27, .05) 34%, rgba(31, 31, 31, .05) 0, rgba(31, 31, 31, .05) 93%, hsla(0, 0%, 94.9%, .05) 0, hsla(0, 0%, 94.9%, .05)), linear-gradient(135deg, hsla(0, 0%, 50.6%, .05), hsla(0, 0%, 50.6%, .05) 66%, hsla(0, 0%, 45.9%, .05) 0, hsla(0, 0%, 45.9%, .05) 91%, hsla(0, 0%, 78%, .05) 0, hsla(0, 0%, 78%, .05)), linear-gradient(135deg, rgba(31, 31, 31, .07), rgba(31, 31, 31, .07) 15%, hsla(0, 0%, 54.5%, .07) 0, hsla(0, 0%, 54.5%, .07) 23%, hsla(0, 0%, 78.4%, .07) 0, hsla(0, 0%, 78.4%, .07) 29%, hsla(0, 0%, 40%, .07) 0, hsla(0, 0%, 40%, .07)), linear-gradient(100deg, #00b8be, #000000e3);
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
            background: #0002;
            border-radius: 7px;
            box-shadow: 0px 0px 10px #01c1c8;
            margin-top: 4rem;
            margin-bottom: 4rem;
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
            color: #fffb00;
            padding-left: 10px;
        }

        .login__input {
            padding: 14px;
            padding-left: 30px;
            font-weight: 700;
            width: 100%;
            transition: .2s;
            border-radius: 5px;
            font-size: 14px;
            letter-spacing: 0.1rem;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #0000;
        }

        .login__submit {
            background: #F05A41 !important;
            font-size: 18px;
            margin-top: 10px;
            padding: 10px 2px;
            border-radius: 10px;
            font-weight: 700;
            color: #fff;
            cursor: pointer;
            transition: .2s;
            border: none;
            width: 50%;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #F05A41 !important;
            outline: none;
            background: #F05A41 !important;
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
            background: #0001 !important;
            border: 1px solid #01c1c8 !important;
            box-shadow: 0px 0px 3px #01c1c83d !important;
            color: #fff !important;
        }

        .input_bg:focus {
            border: 1px solid #01c1c8 !important;
            box-shadow: 0px 0px 3px #01c1c8 !important;
            color: #fff !important
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
        <div class="screen" style="">
            <div class="screen__content" style="padding-bottom: 100px;">
                
                <div class="row p-2 bg-primary">
                    @include('alerts.alert')
                </div>

                <div
                    style="position: relative;width: fit-content;display: block; top: 35px;left: 50%;transform: translate(-50%,0%);padding-bottom: 15px;">
                    <img src="{{asset('backend/images/logo.png')}}" style="max-width: 160px;" />
                </div>

                <form method="POST" action="{{ route('admin_login_check') }}" class="login" id="form">
                    @csrf
                    <h2 style="margin-bottom:-10px;font-size: 14px;color:#fffb00;margin-left: 10px;font-weight: bold;">
                        Email </h2>
                    <div class="login__field">
                        <i class="login__icon fas fa-user golden-text" id="login_id__icon"></i>
                        <input type="email" class="login__input input_bg" form="form" name="email" 
                            value="" tabindex="1" placeholder="email">
                        @error('email')
                            <span style="color:rgb(180, 0, 0)">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <h2
                        style="font-size: 14px;color:#fffb00;margin-top: 7px;margin-bottom: -22px;margin-left: 10px;font-weight: bold;">
                        Password </h2>
                    <h3 style="margin-left: 140px;margin-bottom: -10px;"><a
                            href="{{ route('password.request') }}"
                            style="text-decoration: none;font-size: 12px;color: #ffa700;">Forgot password?</a></h3>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock golden-text"></i>
                        <input type="password" class="login__input input_bg" form="form" name="password"
                             tabindex="2" placeholder="Password">
                        @error('password')
                            <span style="color:rgb(203, 14, 4)">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="button login__submit" form="form" id="login_btn" tabindex="3">
                        <span class="button__text">Sign In</span>
                        <i class="button__icon fas "></i>
                    </button>
                </form>
                <div style="float: right;margin-right: 39px;">
                    <h3 style="background: #01C1C8;padding: 9px 20px;border-radius: 10px;margin-top: -80px;">
                        <a href="{{route('register')}}"
                            style="text-decoration: none;color: #fff;">Sign Up</a>
                    </h3>
                </div>
                <div style="border-bottom: 1px solid #cacaca52;margin: 0px 40px;margin-bottom: 35px;"></div>
                <div class="social-login">
                    <h3 style="text-align: center;font-size: 15px;margin-bottom: -7px;color: #fffb00;">Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
                <div style="padding-bottom:20px"></div>

                <!--    <div class="">
                    <h3 style="margin-top: -30px;margin-left: 40px;padding-bottom: 30px;"><a href="https://www.oceanezzy.life/auth/forgot_password" class="golden-text" style="text-decoration: none;border-bottom: 1px dashed #d5b96c;font-size: 14px;font-weight: bold;">Forgot password?</a></h3>
                </div>
                -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!--<script src="https://www.oceanezzy.life/assets/static/front/js/vendor/jquery-1.12.4.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
