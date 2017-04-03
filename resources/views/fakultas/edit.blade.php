@extends('layouts.app')

@section('htmlheader_title')
    Fakultas
@endsection
@section('contentheader_title')
    Fakultas Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Fakultas</div>

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

                        {!! Form::model($fakultas, ['method' => 'PUT','route' => ['fakultas.update', $fakultas->id_Fakultas]]) !!}
                        <br/>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Fakultas :</strong>
                                    {!! Form::text('nama_Fakultas', null, array('placeholder' => 'Nama Fakultas','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <br/>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm pull-left">Submit</button>
                                <a class="btn btn-primary btn-sm pull-right" href="{{ route('fakultas.index') }}"> Back</a>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
