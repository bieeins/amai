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
                                <div class="pull-left">
                                    <a class="btn btn-primary" href="{{ route('prodi.tambah') }}"> Tambah Prodi</a>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">

                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Lengkap :</strong>
                                    {{ $prodi->nama_ProgramStudi }}
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Username :</strong>
                                    {{ $prodi->id_Jurusan }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email :</strong>
                                    {{ $prodi->id_Fakultas }}
                                </div>
                            </div>

                            <div class="col-md-1 pull-right">
                                <a class="btn btn-primary" href="{{ route('prodi.index') }}">Back</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection