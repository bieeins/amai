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
                                <div class="pull-left">
                                    <a class="btn btn-primary" href="{{ route('user.tambah') }}"> Tambah User</a>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">

                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Lengkap :</strong>
                                    {{ $users->full_Name }}
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Username :</strong>
                                    {{ $users->username }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email :</strong>
                                    {{ $users->email }}
                                </div>
                            </div>

                            <div class="col-md-1 pull-right">
                                <a class="btn btn-primary" href="{{ route('user.index') }}">Back</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection