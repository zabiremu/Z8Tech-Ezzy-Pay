@extends('layouts.user_backend.app')

@section('content')
    @push('customCss')
        body {
        font-family: "Poppins",sans-serif !important;
        line-height: 1.6rem;
        letter-spacing: .004em;
        }
        .page-title:not(.sidebar-title) {
        /* padding-top: calc((constant(safe-area-inset-top))) !important; */
        /* padding-top: calc((env(safe-area-inset-top))) !important; */
        background: #080809 !important;
        padding-top: 20px !important;
        margin-top: -22px;
        padding-bottom: 0px;
        box-shadow: 0 1px 1px rgba(227, 206, 135, 0.37);
        -webkit-box-shadow: 0 1px 1px rgb(253, 95, 69);
        position: fixed;
        width: 100%;
        }

        .theme-dark{
        background:;
        }
        #header-deco-1, #header-deco-2, #header-deco-3, #header-deco-4 {
        fill: #6236FF !important;
        }
        .footer-clear {
        background:linear-gradient(135deg,rgba(29,29,29,.05),rgba(29,29,29,.05) 17%,rgba(27,27,27,.05) 0,rgba(27,27,27,.05)
        34%,rgba(31,31,31,.05) 0,rgba(31,31,31,.05) 93%,hsla(0,0%,94.9%,.05)
        0,hsla(0,0%,94.9%,.05)),linear-gradient(135deg,hsla(0,0%,50.6%,.05),hsla(0,0%,50.6%,.05) 66%,hsla(0,0%,45.9%,.05)
        0,hsla(0,0%,45.9%,.05) 91%,hsla(0,0%,78%,.05)
        0,hsla(0,0%,78%,.05)),linear-gradient(135deg,rgba(31,31,31,.07),rgba(31,31,31,.07) 15%,hsla(0,0%,54.5%,.07)
        0,hsla(0,0%,54.5%,.07) 23%,hsla(0,0%,78.4%,.07) 0,hsla(0,0%,78.4%,.07) 29%,hsla(0,0%,40%,.07)
        0,hsla(0,0%,40%,.07)),linear-gradient(100deg,#00b8be,#000000e3)!important
        }
        #header-deco-2 {
        opacity: 1;
        }
        .shadow-xl {
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0) !important;
        }
        .bcolor{
        /* background:linear-gradient(to right bottom,#eadcd080,#ff9421a3) !important; */
        font-size:20px !important;
        font-weight:bold;
        }
        #footer-bar:not(.iosTabBar) {
        bottom: 0px !important;
        }
        .footer-bar-detached {
        border-radius: 5px;
        left: 7px !important;
        right: 7px !important;
        bottom: 15px !important;
        box-shadow: 0 0px 15px 0 rgba(0, 0, 0, 0) !important;
        }
        .card-style {
        overflow: hidden;
        border-radius: 10px;
        margin: 0px 15px 30px 15px;
        border: none;
        box-shadow: 0 1px 3px 0 rgba(0,0,0,0.09);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        }
        .headbottom {
        color: #751e04;
        font-size: 25px !important;;
        }
        .bgg {
        position: relative;
        right: 10px;
        bottom: 8px;
        background: linear-gradient(135deg, #b38728, #fcf6ba, #bf953f, #fbf5b7, #aa771c);
        color: #000;
        border-radius: 10px;
        line-height: 0.9;
        }
        /*
        .golden-text, h1, h2 {
        background: linear-gradient(135deg, #b38728, #fcf6ba, #bf953f, #fbf5b7, #aa771c);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: auto;
        }
        */
        .title_name {
        display: block;
        font-style: normal;
        font-size: 20px;
        font-weight: bold;
        }
        .theme-dark .card, .theme-dark #preloader {
        background-color: #080809;
        margin-top: 0px;
        }
        .pt-0.2{
        padding-top: 0.2rem !important;;
        }
        .btn-primary {
        color: #fff;
        background-color: #6236ff;
        border-color: #6236ff;
        }
        .bg-blue-dark {
        background-color: #6236FF !important;
        color: #FFF !important;
        }

        .theme-dark .form-custom input, .theme-dark .form-custom textarea, .theme-dark .form-custom select {
        border-bottom: solid 1px rgba(255, 255, 255, 0.21) !important;
        border: none;
        border-radius: 0px !important;
        }
        </style>
    @endpush
    <div class="card overflow-visible card-style mt-5 mt-5" style="margin-top:40px">
        <div class="content mb-0">
            <div class="table-responsive">
                <x-users-data-table>
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @php
                                $user = App\Models\User::where('id', $wallet->user_id)->first();
                            @endphp
                            <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                            <td>{{ $wallet->ezzy_reward ?? '' }}</td>
                            <td>{{ $wallet->created_at ?? '' }}</td>
                    </tbody>
                </x-users-data-table>
            </div>
        </div>
    </div>
@endsection
