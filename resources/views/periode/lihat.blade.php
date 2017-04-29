@extends('layouts.app')

@section('htmlheader_title')
    Periode
@endsection
@section('contentheader_title')
    Periode Management
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Detail Periode</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <a class="btn btn-primary btn-sm pull-left" href="{{ route('periode.create') }}"> Tambah Periode</a>
                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('periode.index') }}">Back</a>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">

                                <table class="table table-striped">
                                    <tr>
                                        <th>Id Periode</th>
                                        <td>{{ $periode->id_Periode }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Periode</th>
                                        <td>{{ $periode->nama_Periode }}</td>
                                    </tr>
                                    <tr>
                                        <th>Awal Periode</th>
                                        <td>{{ $periode->awal_Periode }}</td>
                                    </tr>
                                    <tr>
                                        <th>Akhir Periode</th>
                                        <td>{{ $periode->akhir_Periode }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Periode</th>
                                        <td>{{ $periode->status_Periode }}</td>
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