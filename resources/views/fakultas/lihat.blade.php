@extends('layouts.app')

@section('htmlheader_title')
    Fakultas
@endsection
@section('contentheader_title')
    Fakultas Management
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Detail Fakultas</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <a class="btn btn-primary btn-sm pull-left" href="{{ route('fakultas.create') }}">
                                        Tambah Fakultas</a>
                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('fakultas.index') }}">Back</a>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">

                                <table class="table table-striped">
                                    <tr>
                                        <th>Id Fakultas</th>
                                        <td>{{ $fakultas->id_Fakultas }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fakultas</th>
                                        <td>{{ $fakultas->nama_Fakultas }}</td>
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