@extends('layouts.app')

@section('htmlheader_title')
    Sub Standar
@endsection
@section('contentheader_title')
   Sub Standar Management
@endsection

@section('main-content')
    <div class="row">
        <div class="box-header with-border">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Tambah SubStandar</div>
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

                        <form action="{{ route('substandar.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group has-feedback">
                                <label>Standar</label>
                                <select name="id_Standar" class="form-control">
                                    <option value="">Pilih Standar</option>
                                    @foreach ($standar as $data)
                                        <option value="{{ $data->id_Standar }}">{{ $data->standar }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group has-feedback">
                                <label>Sub Standar</label>
                                <input type="text" class="form-control" placeholder="Sub Standar"
                                       name="substandar"
                                       value="{{ old('substandar') }}"/>
                                <span class="fa fa-institution form-control-feedback"></span>
                            </div>

                            <div class="row">

                                <div class="col-md-2 pull-left">
                                    <button type="submit" class="btn  btn-sm btn-primary btn-block btn-flat">Simpan</button>
                                </div><!-- /.col -->
                                <div class="col-md-2 pull-right">
                                    <a class="btn btn-primary btn-sm btn-block btn-flat"
                                       href="{{ route('substandar.index') }}">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection