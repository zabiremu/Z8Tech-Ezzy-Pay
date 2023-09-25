@php
    $wallet= App\Models\Wallet::where('user_id',Auth::user()->id)->first();
@endphp
<div style="width:250px;" class="mt-5">
    <div class="pt-3">
        <div class="page-title sidebar-title d-flex">
            <div class="align-self-center me-auto">
                <a href="#" data-bs-toggle="dropdown" class="icon shadow-bg shadow-bg-s rounded-m"
                    style="margin-left: 0px;">
                    <img src="/uploads/users/{{Auth::user()->image}}" alt="img" width="36" style="border-radius: 10px;">
                </a>
            </div>
            <div class="align-self-center ms-auto" style="position: absolute;left: 70px;top: 5px;">
                <h1 class="font-15" style="margin-bottom: -8px;"> {{Auth::user()->username}} </h1>

                <p style="color: #1dcc70;">{{Auth::user()->is_approved == 1 ? 'Paid Member' : ''}}</p>

            </div>
            <a class="ps-4 shadow-0 me-n2" href="#" data-bs-dismiss="offcanvas">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

        <div style="background:#03B2BF;padding:6px;margin-top: -15px !important;margin-bottom: 10px;">
            <!-- * balance -->
            <div class="sidebar-balance" style="margin-left: 15px;">
                <div style="color:rgba(255,255,255,0.7);font-weight: bold;">My Wallet</div>
                <div class="in">
                    <h1 class="amount font-32">৳  {{$wallet->my_wallet ?? 0.00}}</h1>
                </div>
            </div>
            <!-- balance -->

            <!-- action group -->
            <div class="content pt-1">
                <div class="d-flex text-center">
                    <div class="me-auto">
                        <a class="icon icon-s rounded-s bg-blu shadow-bg shadow-bg-xs" href="{{ route('users.payment.index') }}">
                            <i class="font-16 color-white fa-solid fa-money-bill-transfer" style="font-size: 20px !important;"></i>
                        </a>
                        <h6 class="font-11 font-400 opacity-70 mb-n1 pt-2" style="padding-top: 10px !important;">Deposit
                        </h6>
                    </div>
                    <div class="m-auto">
                        <a class="icon icon-s rounded-s bg-blu shadow-bg shadow-bg-xs" href="{{route('users.payment.withdraw')}}">
                            <i class="font-16 color-white fa-solid fa-money-bill-transfer" style="font-size: 20px !important;"></i>
                        </a>
                        <h6 class="font-11 font-400 opacity-70 mb-n1 pt-2" style="padding-top: 10px !important;">
                            Withdraw</h6>
                    </div>
                    <div class="ms-auto">
                        <a class="icon icon-s rounded-s bg-blu shadow-bg shadow-bg-xs" href="{{route('users.send')}}">
                            <i class="font-16 color-white fa-solid fa-right-left"></i>
                        </a>
                        <h6 class="font-11 font-400 opacity-70 mb-n1 pt-2" style="padding-top: 10px !important;">
                            Transfer</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-group list-custom list-menu-large">

            @if (Auth::user()->is_approved == 1)
            <a href="{{ route('users.dashboard') }}" id="nav-dash" class="list-group-item">
                <i class="bg-border50 fa-solid fa-house"></i>
                <div class="manu_font">Dashboard</div>
            </a>

            <a href="#" id="team" data-submenu="team_menu" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-user-group "></i>
                <div class="manu_font">Affiliate</div>
                <i class="fa-solid fa-plus font-18"></i>
            </a>
            <div class="list-submenu" id="team_menu">

                <a href="{{route('users.affilate.index')}}" class="list-group-item">
                    <div class="ps-4  ">Total Team</div>
                </a>
            </div>

            <a href="{{route('users.payment.withdraw')}}" id="withdrawal" data-submenu="withdrawal_menu" class="list-group-item">
                <i class="bg-border50 fa-solid fa-money-check"></i>
                <div class="   manu_font">Withdraw</div>
            </a>

            <div class="list-submenu" id="withdrawal_menu">
            </div>

            <a href="{{route('users.send')}}" id="nav-send" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-paper-plane"></i>
                <div class="   manu_font">Send</div>
            </a>

            <a href="#" id="income" data-submenu="income_menu" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-chart-simple"></i>
                <div class="manu_font">Commission</div>
                <i class="fa-solid fa-plus font-18"></i>
            </a>
            <div class="list-submenu" id="income_menu">

                <a href="{{route('users.commissions.index')}}" class="list-group-item">
                    <div class="ps-4  ">Affiliate Income</div>
                </a>

                <a href="{{route('users.commissions.levelIncome')}}"
                    class="list-group-item">
                    <div class="ps-4  ">Level Income</div>
                </a>

                <a href="{{route('users.commissions.ezzyReturn')}}"
                    class="list-group-item">
                    <div class="ps-4  ">MFS Return</div>
                </a>

                <a href="{{route('users.commissions.ezzyReward')}}" class="list-group-item">
                    <div class="ps-4  ">MFS Reward</div>
                </a>

                <a href="{{route('users.commissions.ezzy_royality')}}"
                    class="list-group-item">
                    <div class="ps-4  ">MFS Royality</div>
                </a>

                <a href="https://www.oceanezzy.life/user/em_commission_datatable" class="list-group-item">
                    <div class="ps-4  ">MFS Member</div>
                </a>

                <a href="{{route('users.commissions.groupBonous')}}"
                    class="list-group-item">
                    <div class="ps-4  ">Group Bonus</div>
                </a>
            </div>

            <a href="#" id="transaction" data-submenu="transaction_menu" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-money-bill-transfer"></i>
                <div class="   manu_font">Transaction</div>
                <i class="fa-solid fa-plus font-18"></i>
            </a>
            <div class="list-submenu" id="transaction_menu">

                <a href="{{ route('users.payment.deposithistory') }}" class="list-group-item">
                    <div class="ps-4  ">Deposit History</div>
                </a>

                <a href="{{route('users.send_history')}}" class="list-group-item">
                    <div class="ps-4 ">Send History</div>
                </a>

                <a href="{{route('users.received_history')}}" class="list-group-item">
                    <div class="ps-4  ">Receive History</div>
                </a>

                <a href="{{route('users.converted_history')}}" class="list-group-item">
                    <div class="ps-4  ">Convert History</div>
                </a>

                <a href="{{route('users.converted_history')}}" class="list-group-item">
                    <div class="ps-4  ">Convert History</div>
                </a>
            </div>

            <a href="{{ route('users.profile') }}" id="nav-pri" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-user"></i>
                <div class="   manu_font">Profile</div>
            </a>

            <a href="{{route('users.settings')}}" id="nav-set" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-gear"></i>
                <div class="   manu_font">Setting</div>
            </a>
            <a href="{{ route('logout') }}" id="nav-lo" class="list-group-item"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
               <i class=" bg-border50 fa-solid fa-right-from-bracket"></i>
                <div class="manu_font">Log out</div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            @else

                <a href="{{ route('users.dashboard') }}" id="nav-dash" class="list-group-item">
                    <i class="bg-border50 fa-solid fa-house"></i>
                    <div class="   manu_font">Dashboard</div>
                </a>

                <a href="#" id="transaction" data-submenu="transaction_menu" class="list-group-item">
                    <i class="bi bg-border50 manu_font fa-solid fa-money-bill-transfer"></i>
                    <div class="manu_font">Transaction</div>
                    <i class="fa-solid fa-plus font-18"></i>
                </a>
                <div class="list-submenu" id="transaction_menu">

                    <a href="{{ route('users.payment.deposithistory') }}" class="list-group-item">
                        <div class="ps-4">Deposit History</div>
                    </a>
    
                    <a href="{{route('users.send_history')}}" class="list-group-item">
                        <div class="ps-4  ">Send History</div>
                    </a>
    
                    <a href="{{route('users.received_history')}}" class="list-group-item">
                        <div class="ps-4  ">Receive History</div>
                    </a>

                    <a href="{{route('users.receiveFromAdmin')}}" class="list-group-item">
                        <div class="ps-4  ">Receive From Admin</div>
                    </a>
    
                    <a href="{{route('users.converted_history')}}" class="list-group-item">
                        <div class="ps-4  ">Convert History</div>
                    </a>
                </div>

                <a href="{{route('users.settings')}}" id="nav-set" class="list-group-item">
                    <i class="bi bg-border50 manu_font fa-solid fa-gear"></i>
                    <div class="   manu_font">Setting</div>
                </a>
                <a href="{{ route('logout') }}" id="nav-lo" class="list-group-item"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                   <i class=" bg-border50 fa-solid fa-right-from-bracket"></i>
                    <div class="manu_font">Logout</div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endif
        </div>
    </div>
</div>
