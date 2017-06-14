@extends('layouts.app')

@section('htmlheader_title')
    Users
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Users</div>

                    <div class="panel-body">
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-12 margin-tb">--}}
                                {{--<div class="pull-right">--}}
                                    {{--<a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::model($users, ['method' => 'PUT','route' => ['user.edit', $users->id]]) !!}
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! Form::label('users', 'Program Studi', array('class' => 'control-label')) !!}
                                    <select name="id_ProgramStudi" class="form-control">
                                        <option value="">Pilih Program Studi</option>
                                        @foreach ($prodi as $data)
                                            <option value="{{ $data->id_ProgramStudi }}"
                                                    {{$users->id_ProgramStudi === $data->id_ProgramStudi ? 'selected="selected"' : ''}}>{{ $data->nama_ProgramStudi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Lengkap:</strong>
                                    {!! Form::text('full_Name', null, array('placeholder' => 'Nama Lengkap','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! Form::label('', 'Username :', array('class' => 'control-label')) !!}
                                    {!! Form::text('username', null, array('placeholder' => 'username','class' => 'form-control','disabled')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! Form::label('', 'Password :', array('class' => 'control-label')) !!}
                                    {!! Form::password('password', array('placeholder' => 'isi jika ingin dirubah !!','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! Form::label('', 'Ulangi Password :', array('class' => 'control-label')) !!}
                                    {!! Form::password('password_confirmation', array('placeholder' => 'isi jika ingin dirubah !!','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! Form::label('', 'Email :', array('class' => 'control-label')) !!}
                                    {!! Form::text('email', null, array('placeholder' => 'EMAIL','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! Form::label('', 'Roles', array('class' => 'control-label')) !!}
                                    <select name="roles" class="form-control">
                                        <option value="">Pilih Roles</option>
                                        <option value="superadmin"
                                                {{$users->roles === 'superadmin' ? 'selected="selected"' : ''}}>
                                            Superadmin
                                        </option>
                                        <option value="admin"
                                                {{$users->roles === 'admin' ? 'selected="selected"' : ''}}>
                                            Admin
                                        </option>
                                        <option value="reviewer"
                                                {{$users->roles === 'reviewer' ? 'selected="selected"' : ''}}>
                                            Reviewer
                                        </option>
                                        <option value="prodi"
                                                {{$users->roles === 'prodi' ? 'selected="selected"' : ''}}>
                                            Prodi
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! Form::label('', 'Status', array('class' => 'control-label')) !!}
                                    <select name="status" class="form-control">
                                        <option value="">Pilih Status</option>
                                        <option value="enable"
                                                {{$users->status === 'enable' ? 'selected="selected"' : ''}}>
                                            Enable
                                        </option>
                                        <option value="disable"
                                                {{$users->status === 'disable' ? 'selected="selected"' : ''}}>
                                            Disable
                                        </option>


                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {!! Form::label('', 'Keterangan :', array('class' => 'control-label')) !!}
                                    {!! Form::textarea('keterangan', null, array('placeholder' => 'Keterangan','class' => 'form-control','size'=>'20x3')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                <a class="btn btn-primary btn-sm pull-right" href="{{ route('user.index') }}"> Back</a>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
