<!-- REQUIRED JS SCRIPTS -->


<!-- DataTables -->
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/vendor/datatables/buttons.server-side.js')}}"></script>
<script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
{{--date picker--}}
{{--<script src="//code.jquery.com/jquery-1.10.2.js"></script>--}}
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>



<script type="text/javascript">
    $(function () {
        $('#date').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy-mm',
            onClose: function (dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
        $('#datex').datepicker({
            changeYear: true,
            changeMonth: true,
            showButtonPanel: true,
            dateFormat: 'yy-mm',
            onClose: function (dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    });
</script>
<style>
    .ui-datepicker-calendar, .ui-datepicker-prev, .ui-datepicker-next {
        display: none;
    }
</style>