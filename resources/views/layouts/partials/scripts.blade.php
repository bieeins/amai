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
            dateFormat: 'yy-mm-dd',
            onClose: function (dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
        $('#datex').datepicker({
            changeYear: true,
            changeMonth: true,
            showButtonPanel: true,
            dateFormat: 'yy-mm-dd',
            onClose: function (dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    });
</script>
<style>
    .ui-datepicker-prev, .ui-datepicker-next {
        display: none;
    }
</style>

{{--step--}}
<!-- Include jQuery -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}

<!-- Include SmartWizard JavaScript source -->
<script type="text/javascript" src="{{asset('js/step/jquery.smartWizard.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {

        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info finish');
//            .on('click', function () {
//            });
        var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function () {
                $('#smartwizard').smartWizard("reset");
            });


        // Step show event
        $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
            //alert("You are on step "+stepNumber+" now");
            if (stepPosition === 'first') {
                $("#prev-btn").addClass('disabled');
                $(".finish").addClass('disabled');
            } else if (stepPosition === 'final') {
                $("#next-btn").addClass('disabled');
                $(".finish").removeClass('disabled');
            } else {
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');
                $(".finish").addClass('disabled');
            }
        });

        // Smart Wizard
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            transitionEffect: 'fade',
            showStepURLhash: true,
            toolbarSettings: {
                toolbarPosition: 'bottom',
//                toolbarExtraButtons: [btnFinish, btnCancel]
                toolbarExtraButtons: [btnFinish]
            }
        });


        // External Button Events
        $("#reset-btn").on("click", function () {
            // Reset wizard
            $('#smartwizard').smartWizard("reset");
            return true;
        });

        $("#prev-btn").on("click", function () {
            // Navigate previous
            $('#smartwizard').smartWizard("prev");
            return true;
        });

        $("#next-btn").on("click", function () {
            // Navigate next
            $('#smartwizard').smartWizard("next");
            return true;
        });


    });
</script>




