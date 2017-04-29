@extends('layouts.app')

@section('htmlheader_title')
    Periode
@endsection
@section('contentheader_title')
    Periode Management
@endsection

@section('main-content')
    <div class="row">
        <div class="box-header with-border">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Tambah Periode</div>
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

                        <form action="{{ route('periode.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group has-feedback">

                                <input type="text" class="form-control" placeholder="Nama Periode"
                                       name="nama_periode"
                                       value="{{ old('nama_periode') }}"/>
                                <span class="fa fa-institution form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="">Awal Periode</label>
                                <input type="text" id="date" class="form-control" placeholder=""
                                       name="awal_periode"
                                       value="{{ old('awal_periode') }}"/>
                                <span class="fa fa-institution form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="">Akhir Periode</label>
                                <input type="text" id="datex" class="form-control" placeholder=""
                                       name="akhir_periode"
                                       value="{{ old('akhir_periode') }}"/>
                                <span class="fa fa-institution form-control-feedback"></span>
                            </div>

                            {{--<div class="form-group has-feedback">--}}
                                {{--<select class="form-control" name="status" id="">--}}
                                    {{--<option value="" selected="selected">Pilih Status</option>--}}
                                    {{--<option value="buka">Buka</option>--}}
                                    {{--<option value="tutup">Tutup</option>--}}
                                {{--</select>--}}

                            {{--</div>--}}

                            <div class="row">

                                <div class="col-md-2 pull-left">
                                    <button type="submit" class="btn  btn-sm btn-primary btn-block btn-flat">Simpan</button>
                                </div><!-- /.col -->
                                <div class="col-md-2 pull-right">
                                    <a class="btn btn-primary btn-sm btn-block btn-flat"
                                       href="{{ route('periode.index') }}">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection