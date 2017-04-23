@extends('layouts.app')

@section('htmlheader_title')
    Program Studi
@endsection
@section('contentheader_title')
    Program Studi Management
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Detail Prodi</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <a class="btn btn-primary btn-sm pull-left" href="{{ route('prodi.tambah') }}"> Tambah Prodi</a>
                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('prodi.index') }}">Back</a>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">

                                <table class="table table-striped">
                                    <tr>
                                        <th>Id Program Studi</th>
                                        <td>{{ $prodis->id_ProgramStudi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Program Studi</th>
                                        <td>{{ $prodis->nama_ProgramStudi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jurusan</th>
                                        <td>{{ $prodis->jurusan->nama_Jurusan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fakultas</th>
                                        <td>{{ $prodis->fakultas->nama_Fakultas }}</td>
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