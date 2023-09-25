<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mfspay</title>
    <link rel="icon" type="image/png" href="https://www.oceanezzy.life/assets/static/front/img/icon.png" sizes="16x16">


    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>

    <style type="text/css">
        body {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 14px;
            background: linear-gradient(135deg, rgba(29, 29, 29, .05), rgba(29, 29, 29, .05) 17%, rgba(27, 27, 27, .05) 0, rgba(27, 27, 27, .05) 34%, rgba(31, 31, 31, .05) 0, rgba(31, 31, 31, .05) 93%, hsla(0, 0%, 94.9%, .05) 0, hsla(0, 0%, 94.9%, .05)), linear-gradient(135deg, hsla(0, 0%, 50.6%, .05), hsla(0, 0%, 50.6%, .05) 66%, hsla(0, 0%, 45.9%, .05) 0, hsla(0, 0%, 45.9%, .05) 91%, hsla(0, 0%, 78%, .05) 0, hsla(0, 0%, 78%, .05)), linear-gradient(135deg, rgba(31, 31, 31, .07), rgba(31, 31, 31, .07) 15%, hsla(0, 0%, 54.5%, .07) 0, hsla(0, 0%, 54.5%, .07) 23%, hsla(0, 0%, 78.4%, .07) 0, hsla(0, 0%, 78.4%, .07) 29%, hsla(0, 0%, 40%, .07) 0, hsla(0, 0%, 40%, .07)), linear-gradient(100deg, #00b8be, #000000e3);
            url('../assets/media/app_icon/im5.png');
            #161129;
            background-size: cover;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;

        }

        .clearfix:after {
            content: "";
            display: block;
            clear: both;
            visibility: hidden;
            height: 0;
        }

        .form_wrapper {
            background: #0002;
            width: 350px;
            max-width: 100%;
            box-sizing: border-box;
            padding: 25px;
            margin: 8% auto 0;
            position: relative;
            z-index: 1;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            -webkit-transition: none;
            transition: none;
            -webkit-animation: expand 0.0s 0.0s ease-out forwards;
            animation: expand 0.0s 0.0s ease-out forwards;
            opacity: 0;
            border-radius: 10px;


            box-shadow: 0px 0px 10px #01c1c8;
            margin-top: 4rem;
            margin-bottom: 4rem;
        }

        .form_wrapper h2 {
            font-size: 1.5em;
            line-height: 1.5em;
            margin: 0;
            color: #ffa700;
        }

        .form_wrapper .title_container {
            text-align: center;
            padding-bottom: 15px;
        }

        .form_wrapper h3 {
            font-size: 1.1em;
            font-weight: normal;
            line-height: 1.5em;
            margin: 0;
        }

        .form_wrapper label {
            font-size: 12px;
        }

        .form_wrapper .row {
            margin: 10px -15px;
        }

        .form_wrapper .row>div {
            padding: 0 15px;
            box-sizing: border-box;
        }

        .form_wrapper .col_half {
            width: 50%;
            float: left;
        }

        .form_wrapper .input_field {
            position: relative;
            margin-bottom: 20px;
            -webkit-animation: bounce 0.0s ease-out;
            animation: bounce 0.0s ease-out;
        }

        .form_wrapper .input_field>span {
            position: absolute;
            left: 0;
            top: 0;
            color: #fffb00;
            height: 100%;
            text-align: center;
            width: 30px;
        }

        .form_wrapper .input_field>span>i {
            padding-top: 13px;
        }

        .form_wrapper .textarea_field>span>i {
            padding-top: 13px;
        }

        .form_wrapper input[type="text"],
        .form_wrapper input[type="email"],
        .form_wrapper input[type="password"] {
            width: 100%;
            padding: 9px 10px 10px 35px;
            box-sizing: border-box;
            outline: none;
            -webkit-transition: all 0.0s ease-in-out;
            -moz-transition: all 0.0s ease-in-out;
            -ms-transition: all 0.0s ease-in-out;
            transition: all 0.0s ease-in-out;
            border-radius: 5px;
            background: #0001 !important;
            border: 1px solid #01c1c8 !important;
            /* box-shadow: 0px 0px 10px #ffa700 !important; */
            color: #FFF !important;
            font-size: 15px;
            letter-spacing: 0.05rem;
            height: 42px;
        }

        .form_wrapper input[type=text]:hover,
        .form_wrapper input[type=email]:hover,
        .form_wrapper input[type=password]:hover {
            border: 1px solid #01c1c8 !important;
            /*   box-shadow: 0px 0px 3px #01c1c8 !important;*/
            color: #FFF !important;
        }

        .form_wrapper input[type=text]:focus,
        .form_wrapper input[type=email]:focus,
        .form_wrapper input[type=password]:focus {

            border: 1px solid #01c1c8 !important;
            box-shadow: 0px 0px 3px #01c1c8 !important;
            color: #fff !important;
        }

        .form_wrapper input[type=submit] {
            background: linear-gradient(135deg, #b38728, #fcf6ba, #bf953f, #fbf5b7, #aa771c);
            height: 35px;
            line-height: 35px;
            width: 100%;
            border: none;
            border-radius: 10px;
            outline: none;
            cursor: pointer;
            color: #fff;
            font-size: 1.1em;
            margin-bottom: 10px;
            -webkit-transition: all 0.0s ease-in-out;
            -moz-transition: all 0.0s ease-in-out;
            -ms-transition: all 0.0s ease-in-out;
            transition: all 0.0s ease-in-out;
        }

        .form_wrapper input[type=submit]:hover {
            background: linear-gradient(135deg, #b38728, #fcf6ba, #bf953f, #fbf5b7, #aa771c);
        }

        .form_wrapper input[type=submit]:focus {
            background: linear-gradient(135deg, #b38728, #fcf6ba, #bf953f, #fbf5b7, #aa771c);
        }

        .form_wrapper input[type=checkbox],
        .form_wrapper input[type=radio] {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .form_container .row .col_half.last {
            border-left: 1px solid #cccccc;
        }

        .checkbox_option label {
            margin-right: 1em;
            position: relative;
        }

        .checkbox_option label:before {
            content: "";
            display: inline-block;
            width: 0.5em;
            height: 0.5em;
            margin-right: 0.5em;
            vertical-align: -2px;
            border: 2px solid #cccccc;
            padding: 0.12em;
            background-color: transparent;
            background-clip: content-box;
            transition: all 0.0s ease;
        }

        .checkbox_option label:after {
            border-right: 2px solid #000000;
            border-top: 2px solid #000000;
            content: "";
            height: 20px;
            left: 2px;
            position: absolute;
            top: 7px;
            transform: scaleX(-1) rotate(135deg);
            transform-origin: left top;
            width: 7px;
            display: none;
        }

        .checkbox_option input:hover+label:before {
            border-color: #000000;
        }

        .checkbox_option input:checked+label:before {
            border-color: #000000;
        }

        .checkbox_option input:checked+label:after {
            -moz-animation: check 0.0s ease 0s running;
            -webkit-animation: check 0.0s ease 0s running;
            animation: check 0.0s ease 0s running;
            display: block;
            width: 7px;
            height: 20px;
            border-color: #000000;
        }

        .radio_option label {
            margin-right: 1em;
        }

        .radio_option label:before {
            content: "";
            display: inline-block;
            width: 0.5em;
            height: 0.5em;
            margin-right: 0.5em;
            border-radius: 100%;
            vertical-align: -3px;
            border: 2px solid #cccccc;
            padding: 0.15em;
            background-color: transparent;
            background-clip: content-box;
            transition: all 0.0s ease;
        }

        .radio_option input:hover+label:before {
            border-color: #000000;
        }

        .radio_option input:checked+label:before {
            background-color: #000000;
            border-color: #000000;
        }

        .select_option {
            position: relative;
            width: 100%;
        }

        .select_option select {
            display: inline-block;
            width: 100%;
            height: 35px;
            padding: 0px 15px;
            cursor: pointer;
            color: #fff;
            border: 1px solid #979797;
            border-radius: 0;
            background: transparent;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            transition: all 0.0s ease;
        }

        .select_option select::-ms-expand {
            display: none;
        }

        .select_option select:hover,
        .select_option select:focus {
            color: #fff;
            background: transparent;
            border-color: #979797;
            outline: none;
        }

        .select_arrow {
            position: absolute;
            top: calc(50% - 4px);
            right: 15px;
            width: 0;
            height: 0;
            pointer-events: none;
            border-width: 8px 5px 0 5px;
            border-style: solid;
            border-color: #8888888c transparent transparent transparent;
        }

        .select_option select:hover+.select_arrow,
        .select_option select:focus+.select_arrow {
            border-top-color: #8888888c;
        }

        .credit {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 15px;
            color: #f5ba1a;
        }

        .credit a {
            color: #e1a70a;
        }

        .animation_image {
            width: 250px;
            height: 250px;
            position: absolute;
            top: 0px;
            left: 0px;
            opacity: .2;
            right: 0;
            margin: auto;
        }

        @-webkit-keyframes check {
            0% {
                height: 0;
                width: 0;
            }

            25% {
                height: 0;
                width: 7px;
            }

            50% {
                height: 20px;
                width: 7px;
            }
        }

        @keyframes check {
            0% {
                height: 0;
                width: 0;
            }

            25% {
                height: 0;
                width: 7px;
            }

            50% {
                height: 20px;
                width: 7px;
            }
        }

        @-webkit-keyframes expand {
            0% {
                -webkit-transform: scale3d(1, 0, 1);
                opacity: 0;
            }

            25% {
                -webkit-transform: scale3d(1, 1.2, 1);
            }

            50% {
                -webkit-transform: scale3d(1, 0.85, 1);
            }

            75% {
                -webkit-transform: scale3d(1, 1.05, 1);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                opacity: 1;
            }
        }

        @keyframes expand {
            0% {
                -webkit-transform: scale3d(1, 0, 1);
                transform: scale3d(1, 0, 1);
                opacity: 0;
            }

            25% {
                -webkit-transform: scale3d(1, 1.2, 1);
                transform: scale3d(1, 1.2, 1);
            }

            50% {
                -webkit-transform: scale3d(1, 0.85, 1);
                transform: scale3d(1, 0.85, 1);
            }

            75% {
                -webkit-transform: scale3d(1, 1.05, 1);
                transform: scale3d(1, 1.05, 1);
            }

            100% {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                opacity: 1;
            }
        }

        @-webkit-keyframes bounce {
            0% {
                -webkit-transform: translate3d(0, -25px, 0);
                opacity: 0;
            }

            25% {
                -webkit-transform: translate3d(0, 10px, 0);
            }

            50% {
                -webkit-transform: translate3d(0, -6px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, 2px, 0);
            }

            100% {
                -webkit-transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0% {
                -webkit-transform: translate3d(0, -25px, 0);
                transform: translate3d(0, -25px, 0);
                opacity: 0;
            }

            25% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            50% {
                -webkit-transform: translate3d(0, -6px, 0);
                transform: translate3d(0, -6px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, 2px, 0);
                transform: translate3d(0, 2px, 0);
            }

            100% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .form_wrapper .col_half {
                width: 100%;
                float: none;
            }

            .bottom_row .col_half {
                width: 50%;
                float: left;
            }

            .form_container .row .col_half.last {
                border-left: none;
            }

            .remember_me {
                padding-bottom: 20px;
            }
        }




        .golden-tex,
        h,
        h {
            background: linear-gradient(135deg, #b38728, #fcf6ba, #bf953f, #fbf5b7, #aa771c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: auto;
        }

        .form_wrapper .row>div {
            padding: 0 15px;
            box-sizing: border-box;
            width: 100% !important;
        }
    </style>

</head>

<body>



    <div class="container">
        <div class="form_wrapper">
            <div class="form_container">
                <div class="title_container">
                </div>
                <div class="row clearfix">
                    <div class="">
                        <div style="width: 250px;">
                            <div
                                style="position: relative;width: fit-content; top: -10px;left: 155px;transform: translate(-50%,0%);">
                                <img src="{{ asset('backend/images/logo.png') }}"
                                    style="max-width: 250px;height: 50px;" />
                            </div>
                        </div>
                        <h2 style="text-align: center;">Registration</h2>
                        <form id="form" style="margin-top: 35px;" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-user golden-text"></i>
                                </span>
                                <input type="text" name="first_name" placeholder="First Name" />
                            </div>
                            @error('first_name')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror

                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-user golden-text"></i>
                                </span>
                                <input type="text" name="last_name" placeholder="Last Name" />
                            </div>

                            @error('last_name')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror

                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-user golden-text"></i>
                                </span>
                                <input type="text" name="user_name" placeholder="User Name" />
                            </div>
                            @error('user_name')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror


                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-envelope golden-text"></i>
                                </span>
                                <input type="text" name="email" placeholder="Email" />
                            </div>

                            @error('email')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror

                            <div class="input_field select_option" style="display: none;">
                                <select name="bank_id" id="bank_id">
                                    <option value="2" selected> Nagad </option>
                                </select>
                            </div>

                            @error('bank_id')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror

                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-phone golden-text"></i>
                                </span>
                                <input type="text" name="phone" placeholder="Phone no must be nagad number"
                                    min-length="11" max-length="11" />
                            </div>

                            @error('phone')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror

                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-lock golden-text"></i>
                                </span>
                                <input type="password" name="password" placeholder="Password" />
                            </div>

                            @error('password')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror

                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-lock golden-text"></i>
                                </span>
                                <input type="password" name="retype_password" placeholder="Re-type Password" />
                            </div>

                            @error('retype_password')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror

                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-key golden-text"></i>
                                </span>
                                <input type="text" name="tpin" placeholder="T-PIN" />
                            </div>

                            @error('tpin')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror

                            <div class="input_field">
                                <span>
                                    <i aria-hidden="true" class="fa fa-user golden-text"></i>
                                </span>
                                <input type="text" name="reference_id" placeholder="Sponsor"
                                    value="{{ $user->username }}" />
                            </div>

                            @error('reference_id')
                                <span class="d-block"
                                    style="color: rgb(223, 0, 0); margin:0 20px 0 0!important;">{{ $message }}</span>
                            @enderror


                            <input class="button" type="submit" id="reg_btn" value="Register"
                                style="background:#E51E24 !important" />

                            <div class="input_field checkbox_option" style="text-align: center;">
                                <a href="{{ route('register') }}"
                                    style="text-decoration: none;color: #979797;font-size: 12px;">Already Registered?
                                    <span style="color: #f3c120;border-bottom: 1px dashed #f0b90b;"> Log in to your
                                        account</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
