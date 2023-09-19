 <!-- begin::Scrolltop -->
 <div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>
<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('admin/js/oceanezzy.life_assets_static_admin_plugins_global_plugins.bundle.js')}}" type="text/javascript">
</script>
<script src="{{asset('admin/js/oceanezzy.life_assets_static_admin_js_scripts.bundle.js')}}" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<script type="text/javascript">
    window.onload = function() {
        pageLevelScript();
    }

    function pageAlert(type, title, text) {

        $(".alert-div").remove();
        $(".container-div").prepend(
            '<div class="row alert-div"><div class="col"><div class="alert kt-hide" id="alert-type" role="alert" style="font-size: 1.2em;"><div class="alert-icon"><i class="la la-check-circle" id="alert-icon" style="color: #FFF;"></i></div><div class="alert-text" id="alert-text" style="color: #FFF;"><div id="alert-text-title" style="font-weight: 900;"> Title </div><div id="alert-text-text"></div></div><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#FFF; opacity:1;"><span aria-hidden="true"><i class="la la-close" ></i></span></button></div></div></div>'
            );


        $('#alert-text-title').html(title);
        $('#alert-text-text').html(text);

        if (type == 'success') {
            $('#alert-type').removeClass();
            $('#alert-type').addClass('alert alert-success');

            $('#alert-icon').removeClass();
            $('#alert-icon').addClass('la la-check-circle');
        } else if (type == 'warning') {
            $('#alert-type').removeClass();
            $('#alert-type').addClass('alert alert-warning');

            $('#alert-icon').removeClass();
            $('#alert-icon').addClass('flaticon2-warning');
        } else if (type == 'error') {
            $('#alert-type').removeClass();
            $('#alert-type').addClass('alert alert-danger');

            $('#alert-icon').removeClass();
            $('#alert-icon').addClass('flaticon-cancel');
        }

        /*$('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);*/

        KTUtil.scrollTop();
    }

    function elementBlock(element) {
        KTApp.block(element, {
            overlayColor: '#000000',
            type: 'v2',
            state: 'warning',
            message: 'Processing...',
            opacity: 0.3,
        });
    }

    function elementUnblock(element) {
        KTApp.unblock(element);
    }

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "0",
        // "showDuration": "300",
        "hideDuration": "0",
        // "hideDuration": "1000",
        "timeOut": "0",
        // "timeOut": "5000",
        "extendedTimeOut": "0",
        // "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    function t_alert(type, title, text) {
        if (type == 'success') {
            toastr.success(text, title);
        } else if (type == 'warning') {
            toastr.warning(text, title);
        } else if (type == 'error') {
            toastr.error(text, title);
        }
    }

    function t_alert_close() {
        toastr.clear();
    }

    /*var sstr = '.sidebar_menu-' + sidebar_menu;
    $(sstr).addClass('kt-menu__item--open');
    $(sstr).addClass('kt-menu__item--here');

    var sstr = '.sidebar_submenu-' + sidebar_submenu;
    $(sstr).addClass('kt-menu__item--active');*/
</script>

@stack('customJs')