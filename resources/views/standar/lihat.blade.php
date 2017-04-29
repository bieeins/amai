@extends('layouts.app')

@section('htmlheader_title')
    Standar
@endsection
@section('contentheader_title')
    Standart Management
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Detail Standar</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <a class="btn btn-primary btn-sm pull-left" href="{{ route('standar.create') }}"> Tambah Periode</a>
                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('standar.index') }}">Back</a>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">

                                <table class="table table-striped">
                                    <tr>
                                        <th>Id Standar</th>
                                        <td>{{ $standar->id_Standar }}</td>
                                    </tr>
                                    <tr>
                                        <th>Standar</th>
                                        <td>{{ $standar->standar }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bobot</th>
                                        <td>{{ $standar->bobot }}</td>
                                    </tr>

                                </table>
                            </div>

                        </div>

                    </div>
                </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection