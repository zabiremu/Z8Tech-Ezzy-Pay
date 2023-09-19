<div>
    @push('customCss')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
        <style>
            #DataTables_Table_0_length {
                padding-bottom: 16px !important;
            }
        </style>
    @endpush
    <table class="table color-theme mb-2">
       {{$slot}}
    </table>
    @push('customJs')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('.table').DataTable();
            });
        </script>
    @endpush
</div>
