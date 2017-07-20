@extends('layouts.app')

@section('htmlheader_title')
    Amai
@endsection
@section('contentheader_title')
    Amai
@endsection

@section('main-content')



    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Amai</div>
                    <div class="panel-body">

                        @if ($message = Session::get('success'))
                            <br/>
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <br/>
                        <div class="content">
                            <div id="wizard">
                                @foreach ($standar as $stand)

                                    <h2>{{ $stand->standar }}</h2>
                                    <section>
                                        <p>test aja</p>
                                    </section>

                                @endforeach
                            </div>
                        </div>
                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Standar</th>
                                <th>Sub Standar</th>
                                <th>Pertanyaan</th>
                                <th>Bobot</th>
                                <th>Standar Nilai</th>
                                {{--<th>Status</th>--}}
                                {{--<th>Keterangan</th>--}}
                                <th>Action</th>
                            </tr>
                            @foreach ($pertanyaan as $perta)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $perta->substandar->standar->standar }}</td>
                                    <td>{{ $perta->substandar->subStandar }}</td>
                                    <td>{{ $perta->pertanyaan }}</td>
                                    <td>{{ $perta->substandar->standar->bobot }}</td>
                                    <td>{{ $perta->standar_Nilai }}</td>
                                    {{--<td>{{ ucfirst($perta->roles)  }}</td>--}}
                                    {{--<td>{{ ucfirst($user->status)  }}</td>--}}
                                    {{--                                    <td>{{ $user->keterangan }}</td>--}}
                                    <td>
                                        {{--<a class="btn btn-default btn-sm" href="{{ route('user.lihat',$user->id) }}">Show</a>--}}
                                        {{--<a class="btn btn-default btn-sm"--}}
                                        {{--href="{{ route('user.edit',$user->id) }}">Edit</a>--}}
                                        {{--{!! Form::open(['method' => 'DELETE','route' => ['user.hapus', $user->id],'style'=>'display:inline']) !!}--}}
                                        {{--{!! Form::submit('Delete', ['class' => 'btn btn-warning btn-sm','style'=>'display: inline-block']) !!}--}}
                                        {{--{!! Form::close() !!}--}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{--{!! $perta->render() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- step -->
    <script src="{{ asset('js/step/jquery.steps.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/step/lib/jquery.cookie-1.3.1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/step/lib/modernizr-2.6.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/lib/jquery-1.9.1.min.js') }}" type="text/javascript"></script>

    <!-- step -->
    <link href="{{ asset('css/step/css/jquery.steps.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/step/main.css') }}" rel="stylesheet" type="text/css" />
    {{--<link href="{{ asset('css/step/normalize.css') }}" rel="stylesheet" type="text/css" />--}}


    <script type="text/javascript">
        $(function () {
            $("#wizard").steps({
                headerTag: "h2",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                enableFinishButton: false,
                enablePagination: true
            });
        });
    </script>
@endsection
