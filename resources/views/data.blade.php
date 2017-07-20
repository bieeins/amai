<!DOCTYPE html>
<html>
<head>
    <title>Smart Wizard </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"--}}
          {{--integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">--}}

    <!-- Include SmartWizard CSS -->
    <link href="{{asset('css/step/smart_wizard.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Optional SmartWizard theme -->
{{--    <link href="{{asset('css/step/smart_wizard_theme_circles.css')}}" rel="stylesheet" type="text/css"/>--}}
    <link href="{{asset('css/step/smart_wizard_theme_arrows.css')}}" rel="stylesheet" type="text/css"/>
{{--    <link href="{{asset('css/step/smart_wizard_theme_dots.css')}}" rel="stylesheet" type="text/css"/>--}}

</head>
<body>
<div class="container">
    <br/>
    <!-- SmartWizard html -->
    <div id="smartwizard">
        <ul>
            @foreach ($standar as $stand)

                <li><a href="#step-{{ ++$i }}">Step {{ ++$ii }}<br/>
                        <small>{{ substr($stand->standar,0,16)  }}</small>
                    </a></li>

            @endforeach
        </ul>
        <div>
            @foreach ($standar as $stand)
                <div id="step-{{++$iii}}" class="form-group">
                    <?php ?>

                    <h4>{{$stand->standar}} </h4>

                    <form action="#" method="get">
                        @foreach($pertanyaan as $perta)
                            <div class="form-group">

                                <label for="name">{{$perta->pertanyaan}}</label>
                                <input type="text" class="form-control" name="name" placeholder="Write " required>
                                <div class="help-block with-errors"></div>
                            </div>
                        @endforeach
                    </form>
                </div>
            @endforeach
        </div>
    </div>


</div>

<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
</body>
</html>
