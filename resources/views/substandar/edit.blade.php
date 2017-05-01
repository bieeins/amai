@extends('layouts.app')

@section('htmlheader_title')
    Standar
@endsection
@section('contentheader_title')
    Standar Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Standar</div>

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

                        {!! Form::model($standar, ['method' => 'PUT','route' => ['standar.update', $standar->id_Standar]]) !!}
                        <br/>
                            <div class="form-group has-feedback">

                                <input type="text" class="form-control" placeholder="Standar"
                                       name="standar"
                                       value="{{ $standar->standar }}"/>
                                <span class="fa fa-institution form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                {{--<label class="">Bobot</label>--}}
                                <input type="text" id="" class="form-control" placeholder="Bobot"
                                       name="bobot"
                                       value="{{ $standar->bobot }}"/>
                                <span class="fa fa-institution form-control-feedback"></span>
                            </div>
                        <br/>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm pull-left">Submit</button>
                            <a class="btn btn-primary btn-sm pull-right" href="{{ route('standar.index') }}"> Back</a>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
