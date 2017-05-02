@extends('layouts.app')

@section('htmlheader_title')
    Pertanyaan
@endsection
@section('contentheader_title')
    Pertanyaan Management
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Detail Pertanyaan</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <a class="btn btn-primary btn-sm pull-left" href="{{ route('pertanyaan.create') }}">
                                        Tambah Pertanyaan</a>
                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('pertanyaan.index') }}">Back</a>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">

                                <table class="table table-striped">
                                    <tr>
                                        <th>Id Pertanyaan</th>
                                        <td>{{ $pertanyaan->id_Pertanyaan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sub Standar</th>
                                        <td>{{ $pertanyaan->substandar->subStandar }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pertanyaan</th>
                                        <td>{{ $pertanyaan->pertanyaan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Standar Nilai</th>
                                        <td>{{ $pertanyaan->standar_Nilai }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Pertanyaan</th>
                                        <td>{{ $pertanyaan->status }}</td>
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