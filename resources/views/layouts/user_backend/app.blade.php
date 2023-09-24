@php
        $user= Auth::user();
        $getUser= App\Models\User::where('id',$user->id)->first();
@endphp
<!DOCTYPE HTML>
<html lang="en">
@include('layouts.user_backend.partials.head')

<body class="theme-dark">
    <div id="page">

        <!-- Footer Bar -->
        <div id="footer-bar" class="footer-bar-1 footer-bar-detached">
            <div>
                <style>
                    .css_marquee {
                        height: 50px;
                        /*overflow: hidden;*/
                        position: relative;
                        width: 100%;
                    }

                    .css_marquee span {
                        font-size: 1.4em;
                        font-weight: 700;
                        color: #ffb400;
                        position: absolute;
                        /*width: 100%;*/
                        width: max-content;
                        height: 100%;
                        margin: 0;
                        line-height: 50px;
                        text-align: center;

                        -moz-transform: translateX(100%);
                        -webkit-transform: translateX(100%);
                        transform: translateX(100%);

                        -moz-animation: css_marquee 45s linear infinite;
                        -webkit-animation: css_marquee 45s linear infinite;
                        animation: css_marquee 45s linear infinite;
                    }

                    /* Move it (define the animation) */
                    @-moz-keyframes css_marquee {
                        0% {
                            -moz-transform: translateX(0%);
                        }

                        100% {
                            -moz-transform: translateX(-100%);
                        }
                    }

                    @-webkit-keyframes css_marquee {
                        0% {
                            -webkit-transform: translateX(0%);
                        }

                        100% {
                            -webkit-transform: translateX(-100%);
                        }
                    }

                    @keyframes css_marquee {
                        0% {
                            -moz-transform: translateX(20%);
                            -webkit-transform: translateX(20%);
                            transform: translateX(20%);
                        }

                        100% {
                            -moz-transform: translateX(-100%);
                            -webkit-transform: translateX(-100%);
                            transform: translateX(-100%);
                        }
                    }
                </style>

                <div class="css_marquee">
                    <span>
                        <!--সম্মানিত লিডার বৃন্দ, আপনাদের অনুরোধকে সম্মান জানিয়ে কোম্পানি "আইডি এক্টিভিশন চার্জ ১২০০ টাকা" অফারটিকে সীমিত সময়ের জন্য আগামী ২৫-০৪-২৩ তারিখ পর্যন্ত বহাল রাখার সিদ্ধান্ত গ্রহণ করেছে। ধন্যবাদ।-->
                       @php
                           $setting= App\Models\Setting::first();
                       @endphp
                       {{$setting->marquee_notice}}
                    </span>
                </div>
            </div>
        </div>

        <div class="pt-3">
            <div class="page-title d-flex">
                <div class="align-self-center me-auto">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"
                        class="icon color-white shadow-bg shadow-bg-xs rounded-m" style="text-align: left;margin-left: 0px;">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                    <!--	<p style="text-transform: uppercase;margin-left: 85px;color: #d2cccc !important;" >WELCOME TO :<i class="title_name" style="color: #fff;"> Fortune01</i></p> -->
                </div>
                <div class="align-self-center ms-auto">
                    <a href="{{route('users.profile')}}" class="icon shadow-xl"
                        style=" position: absolute;left: 0px;right: 0;margin: auto;width: 100%;top: 27px;">
                        <img src="{{ asset('backend/images/LOGO-PNG-FILE-.png')}}" class="user_pic" alt="img"
                        style="width: 80px;margin-top: -28px;">
                       
                        <!--	<h3>EXPRESS WORLD</h3> -->
                    </a>
                    <a href="{{route('users.profile')}}" class="icon shadow-xl" style="margin-right: -10px;">
                        <img src="/uploads/users/{{Auth::user()->image}}" class="user_pic" alt="img"
                            style="height: 32px;width: 32px;border-radius: 10px;margin-top: -10px;">
                    </a>
                </div>
            </div>
        </div>

        <div class="page-content footer-clear">

            <div class="pt-5">
                @include('alerts.alert')
            </div>
            @yield('content')


        </div>
        <style>
            .theme-dark .offcanvas {
                background: linear-gradient(135deg, rgba(29, 29, 29, .05), rgba(29, 29, 29, .05) 17%, rgba(27, 27, 27, .05) 0, rgba(27, 27, 27, .05) 34%, rgba(31, 31, 31, .05) 0, rgba(31, 31, 31, .05) 93%, hsla(0, 0%, 94.9%, .05) 0, hsla(0, 0%, 94.9%, .05)), linear-gradient(135deg, hsla(0, 0%, 50.6%, .05), hsla(0, 0%, 50.6%, .05) 66%, hsla(0, 0%, 45.9%, .05) 0, hsla(0, 0%, 45.9%, .05) 91%, hsla(0, 0%, 78%, .05) 0, hsla(0, 0%, 78%, .05)), linear-gradient(135deg, rgba(31, 31, 31, .07), rgba(31, 31, 31, .07) 15%, hsla(0, 0%, 54.5%, .07) 0, hsla(0, 0%, 54.5%, .07) 23%, hsla(0, 0%, 78.4%, .07) 0, hsla(0, 0%, 78.4%, .07) 29%, hsla(0, 0%, 40%, .07) 0, hsla(0, 0%, 40%, .07)), linear-gradient(100deg, #09090b, #000000e3) !important;
            }

            .offcanvas-detached.offcanvas-start {
                left: 0px;
                top: calc(0px + env(safe-area-inset-top));
                bottom: calc(0px + env(safe-area-inset-bottom));
            }

            .bg-blu {
                background: #4526b2 !important;
            }

            .bg-border50 {
                background: #6236FF !important;
                border-radius: 50% !important;
            }

            .footer-bar-detached {
                border-radius: 0px;
                left: 0px !important;
                right: 0px !important;
                bottom: 15px !important;
                box-shadow: 0 0px 15px 0 rgba(0, 0, 0, 0) !important;
            }
        </style>

        <div id="menu-sidebar" class="offcanvas offcanvas-start offcanvas-detached "
            style="display: block; visibility: visible;" aria-modal="true" role="dialog">
            @include('layouts.user_backend.partials.sidebar')
        </div>


        <div id="menu-status" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        </div>

    </div>

    @include('layouts.user_backend.partials.footer')

</body>

</html>
