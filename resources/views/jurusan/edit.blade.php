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
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Jurusan</div>

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

                        {!! Form::model($jurusan, ['method' => 'PUT','route' => ['jurusan.update', $jurusan->id_Jurusan]]) !!}
                        <br/>
                        <div class="form-group has-feedback">
                            <select name="id_Fakultas" class="form-control">
                                <option value="">Pilih Fakultas</option>
                                @foreach ($fakultas as $data)

                                    <option value="{{ $data->id_Fakultas }}" {{ $jurusan->id_Fakultas === $data->id_Fakultas ? 'selected="selected"' : '' }}>{{ $data->nama_Fakultas }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Jurusan :</strong>
                                    {!! Form::text('nama_Jurusan', null, array('placeholder' => 'Nama Jurusan','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <br/>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm pull-left">Submit</button>
                                <a class="btn btn-primary btn-sm pull-right" href="{{ route('jurusan.index') }}"> Back</a>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
