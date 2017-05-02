@extends('layouts.app')

@section('htmlheader_title')
    Sub Standar
@endsection
@section('contentheader_title')
    Sub Standar Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Sub Standar</div>

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

                        {!! Form::model($standar, ['method' => 'PUT','route' => ['substandar.update', $substandar->id_SubStandar]]) !!}
                        <br/>

                            <div class="form-group has-feedback">
                                <select name="id_Standar" class="form-control">
                                    <option value="">Pilih Standar</option>
                                    @foreach ($standar as $data)

                                        <option value="{{ $data->id_Standar }}" {{ $substandar->id_Standar === $data->id_Standar ? 'selected="selected"' : '' }}>{{ $data->standar }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group has-feedback">

                                <input type="text" class="form-control" placeholder="Standar"
                                       name="subStandar"
                                       value="{{ $substandar->subStandar }}"/>
                                <span class="fa fa-institution form-control-feedback"></span>
                            </div>

                        <br/>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm pull-left">Submit</button>
                            <a class="btn btn-primary btn-sm pull-right" href="{{ route('substandar.index') }}"> Back</a>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
