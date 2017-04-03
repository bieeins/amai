@extends('layouts.app')

@section('htmlheader_title')
    Jurusan
@endsection
@section('contentheader_title')
    Jurusan
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Program Studi</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('prodi.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::model($prodis, ['method' => 'PUT','route' => ['prodi.edit', $prodis->id_ProgramStudi]]) !!}
                        <br />
                        <div class="form-group has-feedback">
                            <select name="id_Fakultas" class="form-control">
                                <option value="">Pilih Fakultas</option>
                                @foreach ($users as $data)
                                    <option value="{{ $data->id }}">{{ $data->username }} [{{ $data->full_Name}}]</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group has-feedback">
                            {{--{!! Form::label('users', 'Jurusan', array('class' => 'control-label')) !!}--}}
                            <select name="id_Jurusan" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                @foreach ($users as $data)
                                    <option value="{{ $data->id }}">{{ $data->username }} [{{ $data->full_Name}}]</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Lengkap:</strong>
                                    {!! Form::text('nama_ProgramStudi', null, array('placeholder' => 'Nama Lengkap','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <br />
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
