@extends('layouts.app')

@section('htmlheader_title')
    Amai
@endsection
@section('contentheader_title')
    Amai
@endsection

@section('main-content')

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

    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
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
                        <div class="contentx">
                            <div id="smartwizard">
                                <ul>
                                    @for ($x = 1; $x <= $sC; $x++)
                                        <li>
                                            <a href="#step-{{ $x }}">Standar {{ $x }}<br/> </a>
                                        </li>
                                    @endfor
                                </ul>
                                <div>

                                    <div id="step-1" class="">
                                        <h4>{{$jd}} </h4>
                                        @foreach ($perstd1 as $std1)

                                            <div>
                                                {{ ++$i}}. {{$std1->pertanyaan }} <br/>
                                                <textarea name="ket  " size="50" placeholder="Keterangan"></textarea>
                                                <input type="file" class="input-sm" name="file"/>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{--{{dd($tes)}};--}}
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
                            @foreach ($perstd1 as $perta)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $perta->standar }}</td>
                                    <td>{{ $perta->subStandar }}</td>
                                    <td>{{ $perta->pertanyaan }}</td>
                                    <td>{{ $perta->bobot }}</td>
                                    <td>{{ $perta->standar_Nilai }}</td>
                                    {{--<td>{{ ucfirst($perta->roles)  }}</td>--}}
                                    {{--<td>{{ ucfirst($user->status)  }}</td>--}}
                                    {{--<td>{{ $user->keterangan }}</td>--}}
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


@endsection
