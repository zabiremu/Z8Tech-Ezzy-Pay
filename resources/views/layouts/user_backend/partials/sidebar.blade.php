@php
    $wallet= App\Models\Wallet::where('user_id',Auth::user()->id)->first();
@endphp
<div style="width:250px;">
    <div class="pt-3">
        <div class="page-title sidebar-title d-flex">
            <div class="align-self-center me-auto">
                <a href="#" data-bs-toggle="dropdown" class="icon shadow-bg shadow-bg-s rounded-m"
                    style="margin-left: 0px;">
                    <img src="{{ Auth::user()->image ?? '' }}" alt="img" width="36" style="border-radius: 10px;">
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
                        <a class="icon icon-s rounded-s bg-blu shadow-bg shadow-bg-xs" href="#">
                            {{-- <i class="font-16 color-white bi bi-plus" style="font-size: 20px !important;">
                            </i> --}}
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
                            {{-- <i class="font-16 color-white bi bi-arrow-right">
                            </i> --}}
                            <i class="font-16 color-white fa-solid fa-right-left"></i>
                        </a>
                        <h6 class="font-11 font-400 opacity-70 mb-n1 pt-2" style="padding-top: 10px !important;">
                            transfer</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-group list-custom list-menu-large">
            <a href="{{ route('users.dashboard') }}" id="nav-dash" class="list-group-item">
                <i class="bg-border50 fa-solid fa-house"></i>
                <div class="   manu_font">Dashboard</div>
            </a>

            <a href="#" id="team" data-submenu="team_menu" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-user-group "></i>
                <div class="manu_font">Affiliate</div>
                <i class="bi bi-plus font-18  "></i>
            </a>
            <div class="list-submenu" id="team_menu">

                <a href="{{route('users.affilate.index')}}" class="list-group-item">
                    <div class="ps-4  ">Total Team</div>
                </a>

                <a href="{{route('users.affilate.create')}}" class="list-group-item">
                    <div class="ps-4  ">Refer Member</div>
                </a>
            </div>




            <a href="{{route('users.payment.withdraw')}}" id="withdrawal" data-submenu="withdrawal_menu" class="list-group-item">
                <i class="bg-border50 fa-solid fa-money-check"></i>
                <div class="   manu_font">Withdraw</div>
                <i class="bi bi-plus font-18  "></i>
            </a>
            <div class="list-submenu" id="withdrawal_menu">

                {{-- <a href="https://www.oceanezzy.life/user/withdraw.html" class="list-group-item">
                    <div class="ps-4  ">Nagad Withdraw</div>
                </a>

                <a href="#" class="list-group-item">
                    <div class="ps-4  ">Bank Withdraw</div>
                </a>

                <a href="#" class="list-group-item">
                    <div class="ps-4  ">Crypto Withdraw</div>
                </a>

                <a href="https://www.oceanezzy.life/user/withdraw_datatable" class="list-group-item">
                    <div class="ps-4  ">Record</div>
                </a> --}}
            </div>






            <a href="{{route('users.send')}}" id="nav-send" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-paper-plane"></i>
                <div class="   manu_font">Send</div>
            </a>



            <a href="#" id="income" data-submenu="income_menu" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-chart-simple"></i>
                <div class="   manu_font">Commission</div>
                <i class="bi bi-plus font-18  "></i>
            </a>
            <div class="list-submenu" id="income_menu">

                <a href="https://www.oceanezzy.life/user/user_spot_commission_datatable.html" class="list-group-item">
                    <div class="ps-4  ">Affiliate Income</div>
                </a>

                <a href="https://www.oceanezzy.life/user/user_activation_package_commission_datatable"
                    class="list-group-item">
                    <div class="ps-4  ">Level Income</div>
                </a>

                <a href="https://www.oceanezzy.life/user/user_deposit_package_interest_datatable"
                    class="list-group-item">
                    <div class="ps-4  ">Ezzy Return</div>
                </a>

                <a href="https://www.oceanezzy.life/user/user_rank_datatable" class="list-group-item">
                    <div class="ps-4  ">Ezzy Reward</div>
                </a>

                <a href="https://www.oceanezzy.life/user/user_deposit_package_interest_commission_datatable"
                    class="list-group-item">
                    <div class="ps-4  ">Ezzy Royality</div>
                </a>

                <a href="https://www.oceanezzy.life/user/em_commission_datatable" class="list-group-item">
                    <div class="ps-4  ">Ezzy Member</div>
                </a>

                <a href="https://www.oceanezzy.life/user/user_rank_royality_commission_datatable"
                    class="list-group-item">
                    <div class="ps-4  ">Group Bonus</div>
                </a>

            </div>




            <a href="#" id="transaction" data-submenu="transaction_menu" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-money-bill-transfer"></i>
                <div class="   manu_font">Transaction</div>
                <i class="bi bi-plus font-18  "></i>
            </a>
            <div class="list-submenu" id="transaction_menu">

                <a href="{{route('admin.report.create')}}" class="list-group-item">
                    <div class="ps-4  ">Send Record</div>
                </a>

                <a href="{{route('admin.report.show',1)}}" class="list-group-item">
                    <div class="ps-4  ">Add Fund Record</div>
                </a>

                <a href="{{route('admin.receiver')}}" class="list-group-item">
                    <div class="ps-4  ">Receive Record</div>
                </a>

                <a href="{{route('admin.convert')}}" class="list-group-item">
                    <div class="ps-4  ">Convert Record</div>
                </a>
            </div>




            <a href="{{ route('users.profile') }}" id="nav-pri" class="list-group-item">
                <i class="bi bg-border50 manu_font fa-solid fa-user"></i>
                <div class="   manu_font">Profile</div>
            </a>




            <a href="{{route('admin.userPassword.create')}}" id="nav-set" class="list-group-item">
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
        </div>
    </div>
</div>
