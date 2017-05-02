@extends('layouts.app')

@section('htmlheader_title')
    Jurusan
@endsection
@section('contentheader_title')
    Jurusan Management
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Detail Jurusan</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <a class="btn btn-primary btn-sm pull-left" href="{{ route('jurusan.create') }}"> Tambah Jurusan</a>
                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('jurusan.index') }}">Back</a>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">

                                <table class="table table-striped">
                                    <tr>
                                        <th>Id Jurusan </th>
                                        <td>{{ $jurusan->id_Jurusan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jurusan </th>
                                        <td>{{ $jurusan->nama_Jurusan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fakultas</th>
                                        <td>{{ $jurusan->fakultas->nama_Fakultas }}</td>
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