<!DOCTYPE html>
<html lang="en">

@include('layouts.admin_backend.partials.head')
<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="javascript:;">
                <!--<img alt="Logo" src="" />-->

                <span style="font-size: 1.5em;color: #fff;font-weight: 600;"> Admin </span>
                <span style="font-size: 1.5em;color: #fff;font-weight: 600;"> Panel </span>
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <span class="header-user_data-user_id" style="font-size: 1em;font-weight: 100;color: #FFF;"> </span>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
            <!-- <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button> -->
            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            @include('layouts.admin_backend.partials.sidebar')

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                    <!-- begin:: Header Menu -->
                    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

                    </div>
                    <!-- end:: Header Menu -->

                    <div class="kt-header__topbar">
                        <!-- <span class="" style="font: normal normal 300 1.4em/1.3em Georgia, serif;padding: 1em;">admin@ezzy</span> -->
                    </div>

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">

                        <!--begin: User Bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user">
                                    <span class="kt-header__topbar-username kt-hidden-mobile">{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}</span>
                                    @if ((Auth::user()->image))
                                    <img class="" alt="Pic"
                                    src="{{Auth::user()->image}}" />
                                    @else
                                    <img class="" alt="Pic"
                                    src="https://www.oceanezzy.life/assets/media/user/default.png" />
                                    @endif
                                   
                                    <span
                                        class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                                </div>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">



                                {{-- <!--begin: Navigation -->
                                <div class="kt-notification">


                                    <div class="kt-notification__custom kt-space-between">
                                        <a href="https://www.oceanezzy.life/logout.html"
                                            class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                        <!-- <a href="javascript:;" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a> -->
                                    </div>
                                </div>
                                <!--end: Navigation --> --}}
                                <div class="kt-notification__custom kt-space-between" style="padding:16px 12px">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                        class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                    <!-- <a href="javascript:;" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a> -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!--end: User Bar -->
                    </div>
                    <!-- end:: Header Topbar -->
                </div>
                <!-- end:: Header -->





                @yield('content')


                <!-- ////////////////////////////////////////////// begin page level script ////////////////////////////////////////////// -->
                <script type="text/javascript">
                    function pageLevelScript() {

                        //////////////////////////////////////////// begin page data load ////////////////////////////////////////////

                        ///////////////////////////////////////////// end page data load /////////////////////////////////////////////


                        //////////////////////////////////////////// begin page data load ////////////////////////////////////////////
                        fetch('https://www.oceanezzy.life/admin/api/dashboard_data')
                            .then(response => response.json())
                            .then(data => {
                                if (data == undefined) {} else {

                                    document.getElementById('dd_today_withdraw_complete').innerHTML = data.today_withdraw_complete;
                                    document.getElementById('dd_yesterday_withdraw_complete').innerHTML = data
                                        .yesterday_withdraw_complete;
                                    document.getElementById('dd_today_withdraw_pending').innerHTML = data.today_withdraw_pending;

                                    document.getElementById('dd_today_add_fund_complete').innerHTML = data.today_add_fund_complete;
                                    document.getElementById('dd_yesterday_add_fund_complete').innerHTML = data
                                        .yesterday_add_fund_complete;
                                    document.getElementById('dd_today_add_fund_pending').innerHTML = data.today_add_fund_pending;
                                    document.getElementById('dd_add_fund_complete').innerHTML = data.add_fund_complete;
                                    document.getElementById('dd_add_fund_pending').innerHTML = data.add_fund_pending;
                                    document.getElementById('dd_total_user_active').innerHTML = data.total_user_active;
                                    document.getElementById('dd_today_user_active').innerHTML = data.today_user_active;
                                    document.getElementById('dd_total_user').innerHTML = data.total_user;


                                }
                            });
                        ///////////////////////////////////////////// end page data load /////////////////////////////////////////////

                    }

                    function run1() {
                        /*fetch('https://www.oceanezzy.life/cronjob/user_deposit_package_interest')
                        .then(response => response.json())
                        .then(data => {
                        	console.log(data);
                        	swal.fire({
                        		"title": data.type.toUpperCase(),
                        		"text": data.msg,
                        		"type": "success",
                        		"confirmButtonClass": "btn btn-brand",
                        		"onClose": function(e) {}
                        	});
                        });*/
                    }



                    function run2() {
                        /*fetch('https://www.oceanezzy.life/cronjob/user_deposit_package_interest_commission')
                        .then(response => response.json())
                        .then(data => {
                        	console.log(data);
                        	swal.fire({
                        		"title": data.type.toUpperCase(),
                        		"text": data.msg,
                        		"type": "success",
                        		"confirmButtonClass": "btn btn-brand",
                        		"onClose": function(e) {}
                        	});
                        });	*/
                    }

                    function runv() {
                        /*let link_url = 'https://www.oceanezzy.life/cronjob/user_deposit_package_interest_by_amount?dr=' + document.getElementById('roi_amount').value;
                                	    
                                		fetch(link_url)
                                		.then(response => response.json())
                                		.then(data => {
                                			console.log(data);
                                			swal.fire({
                                				"title": data.type.toUpperCase(),
                                				"text": data.msg,
                                				"type": "success",
                                				"confirmButtonClass": "btn btn-brand",
                                				"onClose": function(e) {}
                                			});
                                		});*/
                    }
                </script>
                <!-- /////////////////////////////////////////////// end page level script /////////////////////////////////////////////// -->





                <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright footer-data-copyright">

                        </div>
                        <div class="kt-footer__menu">

                        </div>
                    </div>
                </div>
                <!-- end:: Footer -->
            </div>
        </div>
    </div>
    <!-- end:: Page -->

    @include('layouts.admin_backend.partials.footer')
</body>
<!-- end::Body -->

</html>
