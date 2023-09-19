<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/622cc589c6.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('backend/js/jquery.easy-ticker.min.js')}}"></script>



<script src="{{asset('backend/js/jquery.blockUI.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function pageBlock() {
        $.blockUI({
            message: "processing",
            css: {
                border: 'none',
                padding: '10px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .3,
                color: '#fff'
            }
        });
    }

    function pageUnBlock() {
        $.unblockUI();
    }
</script>


<script type="text/javascript">
    window.onload = function() {
        pageLevelScript();
    }

    function pageAlert(type, title, text) {

        if (type == 'success') {
            alert(text);
        } else if (type == 'warning') {
            alert(text);
        } else if (type == 'error') {
            alert(text);
        }
    }

    function t_alert(type, title, text = '') {

        Swal.fire({
            icon: type,
            title: type,
            html: text,
        });
    }
</script>
@stack('customJs')