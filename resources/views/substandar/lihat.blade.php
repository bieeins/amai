@extends('layouts.app')

@section('htmlheader_title')
    Sub Standar
@endsection
@section('contentheader_title')
    Sub Standart Management
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Detail Sub Standar</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <a class="btn btn-primary btn-sm pull-left" href="{{ route('substandar.create') }}">
                                        Tambah Sub Stadar</a>
                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('substandar.index') }}">Back</a>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">

                                <table class="table table-striped">
                                    <tr>
                                        <th>Id Standar</th>
                                        <td>{{ $substandar->standar->id_Standar }}</td>
                                    </tr>
                                    <tr>
                                        <th>Id Sub Standar</th>
                                        <td>{{ $substandar->id_SubStandar }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sub Standar</th>
                                        <td>{{ $substandar->subStandar }}</td>
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