@extends('layouts.user_backend.app')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira&display=swap" rel="stylesheet">
    <style>
        .shadow-m {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09) !important;
        }

        .rounded-m {
            border-radius: 10px !important;
        }

        .row {
            --bs-gutter-x: 1rem;
            --bs-gutter-y: 0;
        }

        .copy {
            font-size: 20px;
            padding: 5px 12px;
            border-radius: 10px;
            margin-left: 20px;
            background-color: #EA5455 !important;
            color: #FFF !important;
            box-shadow: 0 1px 20px 1px #EA5455 !important;
        }

        .pt-2 {
            padding-top: 0rem !important;
            margin-top: -10px !important;
            color: #000;
        }

        .refer {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            color: #1dcc70;
        }

        .refer_link {
            background: #000;
            padding: 5px 0px;
            margin: 10px 0px !important;
            display: block;
        }

        .user_dtls {
            text-align: center;
            position: relative;
            left: 0px;
            right: 0px;
            margin: auto;
            display: block !important;
        }

        .link {
            display: block;
            width: 179px;
            height: 25px;
            overflow: hidden;
            background: #fff;
            margin: 10px auto;
        }

        .home1 {
            margin-top: -20px !important;
            height: 200px !important;
            margin: 0px;
            background: #6236ff00 !important;
            border-radius: 0px !important;
        }

        .card-wallet {
            margin-top: -125px !important;
            height: 270px !important;
            background: #080809 !important;
            border-radius: 10px !important;
        }

        .icon-xxl {
            line-height: 80px;
            transform: translateY(2px);
            width: 48px;
            height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 24px;
            margin-bottom: 14px;
        }

        .bg-danger {
            background: #FF396F !important;
            color: #FFF;
        }

        .bg-blue {
            background: #6236FF !important;
            color: #FFF;
        }

        .bg-success {
            background: #1DCC70 !important;
            color: #FFF;
        }

        .bg-warning {
            background: #FFB400 !important;
            color: #FFF;
        }

        .title {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #fff;
            font-family: "Poppins", sans-serif;
            font-size: 15px;
            line-height: 1.6rem;
            letter-spacing: .004em;
            text-align: left;
            margin-bottom: 15px;
        }

        .total {
            font-weight: 700 !important;
            letter-spacing: -0.01em;
            line-height: 1em;
            font-size: 32px !important;
            color: #fff;
        }

        .convert {
            position: absolute;
            bottom: 7px;
            left: 25px;
        }

        .con_btn {
            background: #03b2bf;
            padding: 2px 6px;
            border-radius: 5px;
            color: #fff;
            font-size: 13px;
        }

        .highlights {
            border-bottom: 1px solid #31365c;
            margin-bottom: 10px;
            padding-bottom: 10px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: .1rem;
        }

        .col-6 {
            flex: 0 0 auto;
            width: 100%;
        }

        .countdown {
            background: #070708;
            margin-bottom: 150px;
            height: 65px;
            margin-top: -149px;
            margin-left: 15px;
            margin-right: 15px;
            border-radius: 5px;
        }

        .card-style {
            overflow: hidden;
            border-radius: 10px;
            margin: 0px 15px 30px 15px;
            border: none;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            margin-right: 15px !important;
            margin-left: 15px !important;
        }
    </style>

    <div class="card card-style shadow-bg shadow-bg-s home1">
        <div class="content card-center" style="margin: 0px 25px !important;">
        </div>
    </div>

    <div class="countdown">
        <div>
            <div>
                <span
                    style="color: #3de4ea;font-size: 15px;margin-left: 10px;font-weight: bold;position: absolute;top: 115px;">Total Activation
                    Duration : </span>
            </div>

            <div style="position: absolute;top: 115px;right: 25px;">
                <span class="title"  style="font-size: 15px;color: #34f104;">{{ $days }} Days Activation</span>
            </div>
        </div>

        <div>
            <div>
                <span
                    style="color: #3de4ea;font-size: 15px;margin-left: 10px;font-weight: bold;position: absolute;top: 140px;">Activation
                    Duration Remain : </span>
            </div>

            <div style="position: absolute;top: 140px;right: 25px;">
                <span class="title" id="counter_down2" style="font-size: 15px;color: #fdbd23;"> {{ $days_left }} Days Remaining</span>
            </div>
        </div>

    </div>

    <div class="card card-style shadow-bg shadow-bg-s card-wallet">
        <div class=" card-center">
            <div class=" py-2">
                <div class="d-flex text-center" style="padding: 20px 24px 0px;">
                    <div class="me-auto" style="padding-top: 20px;">
                        <span class="title">My Wallet</span>@
                        <h6 class="font-13 font-500 mb-0 pt-2 total">৳ {{ $wallet->my_wallet ?? 0.0 }}</h6>
                    </div>
                    @if (isset($project_duration->status) == 1)
                        <div class="ms-auto scale-box btn" style="position: relative;top: 0px;right: -10px;">
                            <a href="{{ route('users.account.activate') }}" class="icon icon-xxl rounded-m"
                                style="width: 94px;height: 64px;background: #1dcc70 !important;"><i class="font-18"
                                    style="color:#fff;font-style: normal;">Activated</i></a>
                        </div>
                    @else
                        <div class="ms-auto scale-box btn" style="position: relative;top: 0px;right: -10px;">
                            <a href="{{ route('users.account.activate') }}" class="icon icon-xxl rounded-m"
                                style="width: 94px;height: 64px;background: rgb(174, 0, 0) !important;"><i class="font-16"
                                    style="color:#fff;font-style: normal;">Active Now</i></a>
                        </div>
                    @endif

                </div>
            </div>
            <!-- action -->
            <div style="border-top: 1px solid #2d1f3b;margin: 0px 24px;"></div>
            <div class=" py-2" style="padding-bottom: 20px !important;">
                <div class="d-flex text-center" style="padding: 20px 24px 0px;">
                    <div class="me-auto">
                        <a href="{{route('users.send')}}"
                            class="icon icon-xxl rounded-m shadow-m bg-danger">
                                <i class="font-20 color-white fa-solid fa-paper-plane"></i>
                            </a>
                        <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Send</h6>
                    </div>
                    <div class="m-auto">
                        <a href="{{route('users.payment.withdraw')}}"
                            class="icon icon-xxl rounded-m shadow-m bg-blue">
                                <i class="font-20 color-white fa-solid fa-money-bill-transfer" style="font-size: 20px !important;"></i>
                            </a>
                        <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Withdraw</h6>
                    </div>
                    <div class="m-auto">
                        <a href="{{route('admin.convert')}}"
                            class="icon icon-xxl rounded-m shadow-m bg-success">
                                <i class="font-20 color-white fa-solid fa-money-bill-transfer"></i>
                            </a>
                        <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Convert</h6>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ route('users.payment.index') }}" class="icon icon-xxl rounded-m shadow-m bg-warning"> <i class="font-20 color-white fa-solid fa-money-bill-transfer" style="font-size: 20px !important;"></i></a>
                        <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Add Balance</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--box -->
    <div class="row text-center" style="margin-top: -15px;">
        <div class="col-6 mb-n2">
            <div class="card card-style me-0" style="height:110px">
                <div class="card-top" style="padding: 20px 24px 0px;text-align: left;">
                    <span>
                        <h4 class=" mb-n1" style="font-size: 13px;color: #8f82a5;">Booking wallet</h4>
                    </span>
                    <h1 class="font-24 pt-0.2">৳ {{ $wallet->booking_wallet ?? 0.0 }} </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center" style="margin-top: -7px;">
        <div class="col-6 mb-n2">
            <div class="card card-style me-0" style="height:110px">
                <div class="card-top" style="padding: 20px 24px 0px;text-align: left;">
                    <span>
                        <h4 class=" mb-n1" style="font-size: 13px;color: #8f82a5;">MFS Return</h4>
                    </span>
                    <h1 class="font-24 pt-0.2">৳ {{ $wallet->ezzy_return ?? 0.0 }} </h1>
                </div>
                <div class="convert">
                    <a href="{{ route('users.convert.ezzy_return') }}" class="con_btn">convert</a>
                </div>
            </div>
        </div>

        <div class="col-6 mb-n2">
            <div class="card card-style ms-0" style="height:110px">
                <div class="card-top" style="padding: 20px 24px 0px;text-align: left; ">
                    <span>
                        <h4 class="mb-n1" style="font-size: 13px;color: #8f82a5;">Level Bonus Wallet</h4>
                    </span>
                    <h1 class="font-24 pt-0.2">৳ {{ $wallet->level_bonus ?? 0.0 }}</h1>
                </div>
                <div class="convert">
                    <a href="{{ route('users.convert.level_bonus') }}" class="con_btn">convert</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center" style="margin-top: -7px;">
        <div class="col-6 mb-n2">
            <div class="card card-style me-0" style="height:110px">
                <div class="card-top" style="padding: 20px 24px 0px;text-align: left;">
                    <span>
                        <h4 class=" mb-n1" style="font-size: 13px;color: #8f82a5;">Affiliate Wallet</h4>
                    </span>
                    <h1 class="font-24 pt-0.2">৳ {{ $wallet->affiliate_income ?? 0.0 }}</h1>
                </div>
                <div class="convert">
                    <a href="{{ route('users.convert.affiliate_income') }}" class="con_btn">convert</a>
                </div>
            </div>
        </div>
        <div class="col-6 mb-n2">
            <div class="card card-style ms-0" style="height:110px">
                <div class="card-top" style="padding: 20px 24px 0px;text-align: left;">
                    <span>
                        <h4 class="mb-n1" style="font-size: 13px;color: #8f82a5;">MFS Reward</h4>
                    </span>
                    <h1 class="font-24 pt-0.2"> {{ $wallet->ezzy_reward ?? 0.0 }}</h1>
                </div>
                <div class="convert">
                    <a href="{{ route('users.convert.ezzy_reward') }}" class="con_btn">convert</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center" style="margin-top: -7px;">
        <div class="col-6 mb-n2">
            <div class="card card-style me-0" style="height:110px">
                <div class="card-top" style="padding: 20px 24px 0px;text-align: left;">
                    <span>
                        <h4 class=" mb-n1" style="font-size: 13px;color: #8f82a5;"> MFS Royality</h4>
                    </span>
                    <h1 class="font-24 pt-0.2">৳ {{ $wallet->ezzy_royality ?? 0.0 }}</h1>
                </div>
                <div class="convert">
                    <a href="{{ route('users.convert.ezzy_royality') }}" class="con_btn">convert</a>
                </div>
            </div>
        </div>
        <div class="col-6 mb-n2">
            <div class="card card-style ms-0" style="height:110px">
                <div class="card-top" style="padding: 20px 24px;text-align: left;">
                    <span>
                        <h4 class="mb-n1" style="font-size: 13px;color: #8f82a5;">Group Bonus</h4>
                    </span>
                    <h1 class="font-24 pt-0.2">৳ {{ $wallet->group_bonus ?? 0.0 }}</h1>
                </div>
                <div class="convert">
                    <a href="{{ route('users.convert.group_bonus') }}" class="con_btn">convert</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style shadow-bg shadow-bg-s dash_balan" style="height: 185px !important;">
        <div class="content " style="margin: 0px 15px !important;">
            <div class="content" style="margin-top: 35px !important;">
                <div style="text-align: center;">
                    <span class="refer golden-text">REFERRAL LINK </span>
                    <span class="refer_link"
                        id="rll">{{ isset($referLink) ? $referLink : 'In-active Account'}}</span>
                    <span class="card_border btn" onClick="cpy('rll')">Copy</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h1 class="overview1 highlights">Account Statistics</h1>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: #31365c !important;"><i
                            style="color: #7367f0 !important;font-style: normal;">CR</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Current Rank : </h5>
                    <p class="mb-0 font-12"> </p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1">{{ Auth::user()->rank ?? 'no-rank' }}</h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: #28424b !important;"><i
                            style="color: #28c76f !important;font-style: normal;">RM</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Referred Me : </h5>
                    <p class="mb-0 font-12"></p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> {{ Auth::user()->sponsor }} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(0, 135, 255, 0.54) !important;"><i
                            style="color: #5ccaff !important;font-style: normal;">TR</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1" style="color: #ffb400;">Total Return Installment : </h5>
                    <p class="mb-0 font-12"></p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" style="color: #ffb400;"> 365 </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(215, 84, 234, 0.3) !important;"><i
                            style="color: #fa67ff !important;font-style: normal;">RP</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1" style="color: #1dcc70;">Return Installment Paid : </h5>
                    <p class="mb-0 font-12"></p>
                </div>
                @php
                    use Carbon\Carbon;
                    $currentDate = Carbon::now();
                    $activeDate= isset($wallet->created_at) ? $wallet->created_at : $currentDate;
                    $activationDate = Carbon::parse($activeDate);
                    $daysPassed = $currentDate->diffInDays($activationDate);
                @endphp
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" style="color: #1dcc70;">{{$daysPassed}} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(234, 84, 85, 0.12) !important;"><i
                            style="color: #ea5455 !important;font-style: normal;">TR</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total Refer : </h5>
                    <p class="mb-0 font-12"></p>
                </div>
                @php
                    $totalRefer = App\Models\User::where('sponsor', Auth::user()->username)->count();
                    $totalTeam = App\Models\User::where('sponsor', Auth::user()->username)
                        ->where('is_approved', 1)
                        ->count();
                @endphp
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> {{ $totalRefer }} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(0, 207, 232, 0.12) !important"><i
                            style="color: #00cfe8 !important;font-style: normal;">TT</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total Team : </h5>
                    <p class="mb-0 font-12"></p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> {{ $totalRefer }} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgb(55, 39, 16) !important"><i
                            style="color: #FFB400 !important;font-style: normal;">AT</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total Active Team : </h5>
                    <p class="mb-0 font-12"></p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> {{ $totalTeam }} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
        </div>
    </div>


    <div class="card card-style">
        <div class="content">
            <h1 class="overview1">Income Statistics</h1>
            <p>Auto Update</p>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: #31365c !important;"><i
                            style="color: #7367f0 !important;font-style: normal;">ER</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Today</h5>
                    <p class="mb-0 font-12">MFS Return</p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1">৳ {{ $wallet->ezzy_return ?? 0.00}}</h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(234, 84, 85, 0.12) !important;"><i
                            style="color: #ea5455 !important;font-style: normal;">LI</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Level Income</p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> ৳ {{ $wallet->level_bonus ?? 0.00}} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(0, 207, 232, 0.12) !important"><i
                            style="color: #00cfe8 !important;font-style: normal;">RI</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Referral Income </p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> ৳ {{ $wallet->affiliate_income ?? 0.00}}</h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgb(55, 39, 16) !important"><i
                            style="color: #FFB400 !important;font-style: normal;">TR</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Reward Income </p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> ৳{{ $wallet->ezzy_reward ?? 0.00}} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: #31365c !important"><i
                            style="color: #7367f0 !important;font-style: normal;">TR</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Ezzy Royality </p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> ৳ {{ $wallet->ezzy_royality ?? 0.00}} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(0, 207, 232, 0.12) !important"><i
                            style="color: #00cfe8 !important;font-style: normal;">GB</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Group Bonus </p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1 "> ৳ {{ $wallet->group_bonus ?? 0.00}} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h1 class="overview1">Transaction Statistics</h1>
            <p>Auto Update</p>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: #31365c !important;"><i
                            style="color: #7367f0 !important;font-style: normal;">TS</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Send</p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> ৳ {{$totalSend ?? 0.00}}</h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: #28424b !important;"><i
                            style="color: #28c76f !important;font-style: normal;">TR</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">send</p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> ৳ {{$totalReceive ?? 0.00}}</h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(234, 84, 85, 0.12) !important;"><i
                            style="color: #ea5455 !important;font-style: normal;">WP</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Withdraw Pending</p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> ৳ {{$pendingWithDraw ?? 0.00}}</h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgba(0, 207, 232, 0.12) !important"><i
                            style="color: #00cfe8 !important;font-style: normal;">WC</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Withdraw Complete</p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> ৳ {{$accpectWithDraw ?? 0.00}} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center">
                    <span class="icon rounded-50 me-2" style="background: rgb(55, 39, 16) !important"><i
                            style="color: #FFB400 !important;font-style: normal;">AF</i></span>
                </div>
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Total</h5>
                    <p class="mb-0 font-12">Add Fund</p>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1"> ৳ {{$addFund ?? 0.00}} </h4>
                    <p class="mb-0 font-11"></p>
                </div>
            </a>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h1 class="overview1">Level Active User</h1>
            <p></p>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 1</h5>
                </div>
                <div class="align-self-center ms-auto text-end">

                    <h4 class="pt-1 mb-n1" id="p-l1">{{ $level1 }}</h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 2</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l2">{{ $level2 }}</h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 3</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l3">{{ $level3 }}</h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 4</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l4"> {{ $level4 }} </h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 5</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l5"> {{ $level5 }} </h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 6</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l6">{{ $level6 }} </h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 7</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l7"> {{ $level7 }} </h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 8</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l8">{{ $level8 }} </h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 9</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l9">{{ $level9 }} </h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 10</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l9">{{ $level10 }} </h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 11</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l10"> {{ $level11 }} </h4>
                </div>
            </a>

            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 12</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l10"> {{ $level12 }} </h4>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 13</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l10"> {{ $level13 }} </h4>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 14</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l10"> {{ $level14 }} </h4>
                </div>
            </a>
            <a href="javascript:;" class="d-flex py-1">
                <div class="align-self-center ps-1">
                    <h5 class="pt-1 mb-n1">Level 15</h5>
                </div>
                <div class="align-self-center ms-auto text-end">
                    <h4 class="pt-1 mb-n1" id="p-l10"> {{ $level15 }} </h4>
                </div>
            </a>
        </div>
    </div>


    <script>
        fetch('https://www.oceanezzy.life/user/api/level_1_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l1').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_2_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l2').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_3_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l3').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_4_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l4').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_5_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l5').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_6_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l6').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_7_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l7').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_8_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l8').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_9_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l9').innerHTML = data.count;
            });

        fetch('https://www.oceanezzy.life/user/api/level_10_active_user')
            .then(response => response.json())
            .then(data => {
                document.getElementById('p-l10').innerHTML = data.count;
            });
    </script>

    <script>
        fetch('https://www.oceanezzy.life/user/api/roi_complete_user')
            .then(response => response.json())
            .then(res => {
                if (res == undefined) {} else {
                    res.data.forEach((currentValue, index) => {
                        let html = `
            <li> ${currentValue.user_name} ----- ${currentValue.phone.substring(0, 4)}... ${currentValue.phone.substring(8, 10)}</li>
        `;
                        var template = document.createElement('template');
                        template.innerHTML = html.trim();
                        document.getElementById('ttt4').appendChild(template.content.firstChild);
                    });
                }
            });
    </script>

    <script>
        function cpy(slc) {
            var copyText = document.getElementById(slc).innerText;
            navigator.clipboard.writeText(copyText).then(() => {
                t_alert('success', 'success', 'successfully copied');
            }).catch(() => {
                t_alert('success', 'success', 'something went wrong');
            });
        }
    </script>








    <div id="dp-popup" class="offcanvas offcanvas-modal offcanvas-detached rounded-m" style="width:80%">
        <div class="menu-size" style="height:300px;">
            <div class="content mb-0" style="margin-bottom:10px !important;">
                choose a Package
            </div>
            <div style="display: flex;justify-content: space-around;">
                <div style="text-align: center;">
                    <div style="font-size: 1.5rem;color: deepskyblue;margin-bottom: 0.5rem;">Package 1</div>
                    <div style="font-size: 1.3rem;color: aqua;padding-bottom: 0.5rem;">1400</div>
                    <div>
                        <a href="javascript:;" class="icon icon-xxl rounded-m activation_btn" data-id="1001"
                            style="width: 90px;height: 40px;background: #ff396f !important;"><i class="font-18"
                                style="color:#fff;font-style: normal;">Active</i></a>
                    </div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 1.5rem;color: deepskyblue;margin-bottom: 0.5rem;">Package 10</div>
                    <div style="font-size: 1.3rem;color: aqua;padding-bottom: 0.5rem;">14000</div>
                    <div>
                        <a href="javascript:;" class="icon icon-xxl rounded-m activation_btn" data-id="1002"
                            style="width: 90px;height: 40px;background: #ff396f !important;"><i class="font-18"
                                style="color:#fff;font-style: normal;">Active</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <form id="convert_form">
        <input type="hidden" name="send_amount" id="c_send_amount" value="0" />
        <input type="hidden" name="send_wallet_id" id="c_send_wallet_id" value="0" />
    </form>

    <!-- ////////////////////////////////////////////// begin page level script ////////////////////////////////////////////// -->
    <script type="text/javascript">
        function pageLevelScript() {

            var ticker3 = $('.myTicker3').easyTicker({
                interval: 700,
                height: '240',
                visible: 10
            });

            $(document).on('click', '#send_submit', function(e) {
                e.preventDefault();
                var form = $('#send_form')[0];
                var data = new FormData(form);
                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: 'https://www.oceanezzy.life/user/ajax/transaction_insert',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    async: false,
                    dataType: 'json',
                    beforeSend: function() {},
                    complete: function() {},
                    success: function(data) {
                        t_alert(data.type, '', data.data_msg[0].msg);
                        if (data.type == 'error') {} else if (data.type == 'warning') {} else if (data
                            .type == 'success') {
                            location.reload();
                        }
                    },
                    error: function(e) {
                        console.log("ERROR : ", e);
                    }
                });
            });

            $(document).on('click', '.activation_btn', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                // var id = $('#package').val();

                var urla = 'https://www.oceanezzy.life/user/ajax/user_deposit_package_insert';
                /*if (parseInt(id) == 1001 || ) {
                    var urla = 'https://www.oceanezzy.life/user/ajax/user_deposit_package_insert';
                } else {
                    var urla = 'https://www.oceanezzy.life/user/ajax/user_deposit_package_reinsert';
                }*/

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: urla,
                    data: {
                        id: id,
                        csrf: 'f019c001b006cb897d9106528f1a9f7c50a7c843dcff2de7d71f3a5564b6f125743858fe1a5344aa6262b391724d1be2f342ab6da377d96442ec6a9543a10b51'
                    },
                    dataType: 'json',
                    beforeSend: function() {},
                    complete: function() {},
                    success: function(data) {
                        t_alert(data.type, data.type, data.data_msg[0].msg);
                        if (data.type == 'error') {} else if (data.type == 'warning') {} else if (data
                            .type == 'success') {}

                        setTimeout(() => {
                            location.reload();
                        }, 2000);

                    },
                    error: function(e) {
                        console.log("ERROR : ", e);
                    }
                });
            });

            $(document).on('click', '#withdraw_submit', function(e) {
                e.preventDefault();
                var form = $('#withdraw_form')[0];
                var data = new FormData(form);
                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: 'https://www.oceanezzy.life/user/ajax/withdraw_insert',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    async: false,
                    dataType: 'json',
                    beforeSend: function() {},
                    complete: function() {},
                    success: function(data) {
                        t_alert(data.type, '', data.data_msg[0].msg);
                        if (data.type == 'error') {} else if (data.type == 'warning') {} else if (data
                            .type == 'success') {
                            location.reload();
                        }
                    },
                    error: function(e) {
                        console.log("ERROR : ", e);
                    }
                });
            });

            $(document).on('click', '#exchange_submit', function(e) {
                e.preventDefault();
                var form = $('#exchange_form')[0];
                var data = new FormData(form);
                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: 'https://www.oceanezzy.life/user/ajax/user_wallet_exchange_insert',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    async: false,
                    dataType: 'json',
                    beforeSend: function() {},
                    complete: function() {},
                    success: function(data) {
                        t_alert(data.type, '', data.data_msg[0].msg);
                        if (data.type == 'error') {} else if (data.type == 'warning') {} else if (data
                            .type == 'success') {
                            location.reload();
                        }
                    },
                    error: function(e) {
                        console.log("ERROR : ", e);
                    }
                });
            });
        }


        function dp_popup() {
            var myOffcanvas = document.getElementById('dp-popup');
            var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas);
            bsOffcanvas.show();
        }
    </script>
    <!-- /////////////////////////////////////////////// end page level script /////////////////////////////////////////////// -->
@endsection
