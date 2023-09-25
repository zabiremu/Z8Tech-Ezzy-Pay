@extends('layouts.admin_backend.app')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid container-div">
        @include('alerts.alert')
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-3">
                            <div class="kt-widget__top">

                                <div class="kt-widget__media kt-hidden-">
                                    <img class="header-us" src="https://www.oceanezzy.life/assets/media/user/default.png"
                                        alt="Pic">
                                </div>

                                <div
                                    class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                    USER
                                </div>

                                <div class="kt-widget__content">

                                    <div class="kt-widget__head">
                                        <a href="#" class="kt-widget__username">
                                            <span class="">{{Auth::user()->first_name}}</span>
                                            <span class="">{{Auth::user()->last_name}}</span>
                                        </a>
                                    </div>

                                    <div class="kt-widget__subhead">
                                        <a href="#"><i class="flaticon2-new-email"></i><span
                                                class="">{{Auth::user()->email}}</span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">

            <div class="col-xl-2 col-md-3 col-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="javascript:;" class="kt-widget__username">
                                            {{$transcition}} ৳ </a>
                                        <div class="kt-widget__button">
                                            <span class="btn btn-label-primary btn-sm">Send</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-3 col-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="javascript:;" class="kt-widget__username">
                                            {{$WithDrawComplete}} ৳ </a>
                                        <div class="kt-widget__button">
                                            <span class="btn btn-label-primary btn-sm">Withdraw Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-3 col-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="javascript:;" class="kt-widget__username">
                                            {{$WithDrawPending}}৳ </a>
                                        <div class="kt-widget__button">
                                            <span class="btn btn-label-primary btn-sm">Withdraw Pending</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="col-xl-2 col-md-3 col-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="javascript:;" class="kt-widget__username">
                                            Send Daily ROI
                                        </a>
                                        <input type="number" id="roi_amount" value="0" style="width: 100%;" />
                                        <div class="kt-widget__button" id="runv"  onclick="runv()">
                                            <span class="btn btn-label-primary btn-sm">run</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

            <!-- <div class="col-xl-2 col-md-3 col-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="javascript:;" class="kt-widget__username">
                                            cronjob 1
                                        </a>
                                        <div class="kt-widget__button" id="run1"  onclick="run1()">
                                            <span class="btn btn-label-primary btn-sm">run</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!--<div class="col-xl-2 col-md-3 col-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="javascript:;" class="kt-widget__username">
                                            cronjob 2
                                        </a>
                                        <div class="kt-widget__button" id="run2"  onclick="run2()">
                                            <span class="btn btn-label-primary btn-sm">run</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>

        <div class="row">

            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <h6 class="mainpp"> Report </h6>
                <div class="kt-widget1" id="" style="background: #d0cece; margin-top: 10px;">

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">Total User</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="dd_total_user">{{$totalUser}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">Total Active User</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="dd_total_user_active">{{$totalActiveUser}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title"> User Active Wallet</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="">{{$totalActiveWallet}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title"> Rank Reward</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="">{{$totalActivEzzy_reward}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title"> Group Bonus</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="">{{$totalActivGroup_bonus}}</span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title"> User Level Bonus </h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="">{{$level_bonus}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title"> rank Royality </h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="">{{$ezzy_royality}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title"> User Affiliate </h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="">{{$affiliate_income}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">Total User ROI 119+</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="">{{$ezzy_return}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">Add Fund Pending</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="dd_add_fund_pending">{{isset($addFundPending)}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">Add Fund Complete</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="dd_add_fund_complete">{{$addFundComplete}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">Withdraw Pending</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span id="dd_today_withdraw_pending">{{$WithDrawPending}}</span></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">Withdraw Complete</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><span
                                id="dd_today_withdraw_complete"></span>{{$WithDrawComplete}}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <h6 class="mainpp"> cronjob </h6>
                <div class="kt-widget1" id="" style="background: #d0cece; margin-top: 10px;">

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">daily roi</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.dashboard.create')}}">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 1</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>1])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 2</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>2])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 3</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>3])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 4</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>4])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 5</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>5])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 6</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>6])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 7</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>7])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 8</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>8])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 9</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>9])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 10</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>10])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 11</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>11])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 12</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>12])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 13</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>13])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 14</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>14])}}"
                                target="_blank">run</a></span>
                    </div>

                    <div class="kt-widget1__item">
                        <div class="kt-widget1__info">
                            <h3 class="kt-widget1__title">level 15</h3>
                        </div>
                        <span class="kt-widget1__number kt-font-brand"><a
                                href="{{route('admin.level',['level'=>15])}}"
                                target="_blank">run</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
