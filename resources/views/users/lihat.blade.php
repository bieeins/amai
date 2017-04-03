@extends('layouts.app')

@section('htmlheader_title')
    Users
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Detail User</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <a class="btn btn-primary btn-sm pull-left" href="{{ route('user.tambah') }}"> Tambah
                                        User</a>
                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('user.index') }}">Back</a>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">

                                <table class="table table-striped">
                                    <tr>
                                        <th>Id User</th>
                                        <td>{{ $users->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Program Studi</th>
                                        <td>{{ $users->prodi->nama_ProgramStudi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>{{ $users->full_Name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>{{ $users->username }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $users->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Roles</th>
                                        <td>{{ ucfirst($users->roles)  }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ ucfirst($users->status)  }}</td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td>{{ $users->keterangan }}</td>
                                    </tr>

                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection