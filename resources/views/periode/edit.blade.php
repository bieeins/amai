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
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Program Studi</div>

                    <div class="panel-body">
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
                        <br/>
                        <div class="form-group has-feedback">
                            <select name="id_Fakultas" class="form-control">
                                <option value="">Pilih Fakultas</option>
                                @foreach ($fakultas as $data)

                                    <option value="{{ $data->id_Fakultas }}" {{ $prodis->id_Fakultas === $data->id_Fakultas ? 'selected="selected"' : '' }}>{{ $data->nama_Fakultas }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group has-feedback">
                            {!! Form::label('users', 'Jurusan', array('class' => 'control-label')) !!}
                            <select name="id_Jurusan" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                @foreach ($jurusan as $data)
                                    <option value="{{ $data->id_Jurusan }}"
                                            {{$prodis->id_Jurusan === $data->id_Jurusan ? 'selected="selected"' : ''}}>{{ $data->nama_Jurusan }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Program Studi:</strong>
                                    {!! Form::text('nama_ProgramStudi', null, array('placeholder' => 'Nama Lengkap','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <br/>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm pull-left">Submit</button>
                                <a class="btn btn-primary btn-sm pull-right" href="{{ route('prodi.index') }}"> Back</a>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
