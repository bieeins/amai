@extends('layouts.app')

@section('htmlheader_title')
    Users
@endsection
@section('contentheader_title')
    Users Management
@endsection


@section('main-content')
    <div class="row">
        <div class="box-header with-border">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Tambah User</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">Close &times;</span></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="register-box-body col-sm-7">

                        <form action="{{ route('user.tambah') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Username" name="username"
                                       value="{{ old('username') }}"/>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Full Name" name="full_name"
                                       value="{{ old('full_name') }}"/>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                       value="{{ old('email') }}"/>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Password" name="password"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Ulangi Password"
                                       name="password_confirmation"/>
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <select class="form-control" name="prodi" id="">
                                    <option value="">Pilih Prodi</option>
                                    @foreach ($prodi as $data)
                                        <option value="{{ $data->id_ProgramStudi }}">{{ $data->nama_ProgramStudi }}</option>
                                    @endforeach>
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <select class="form-control" name="roles" id="">
                                    <option value="" selected="selected">Pilih Roles</option>
                                    <option value="superadmin">Superadmin</option>
                                    <option value="admin">Admin</option>
                                    <option value="reviewer">Reviewer</option>
                                    <option value="prodi">Prodi</option>
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <select class="form-control" name="status" id="">
                                    <option value="" selected="selected">Pilih Status</option>
                                    <option value="enable">Aktif</option>
                                    <option value="disable">Tidak Aktif</option>
                                </select>

                            </div>

                            <div class="form-group has-feedback">
                                <textarea class="form-control" name="keterangan" style="width:100%;" rows="3"
                                          placeholder="Keterangan ... ... ..."></textarea>
                            </div>
                            <div class="row">

                                <div class="col-md-2 pull-left">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                                </div><!-- /.col -->
                                <div class="col-md-2 pull-right">
                                    <a class="btn btn-primary btn-block btn-sm btn-flat"
                                       href="{{ route('user.index') }}">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection