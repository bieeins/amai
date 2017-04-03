@extends('layouts.app')

@section('htmlheader_title')
    Jurusan
@endsection
@section('contentheader_title')
    Jurusan Management
@endsection

@section('main-content')
    <div class="row">
        <div class="box-header with-border">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Tambah Jurusan</div>
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

                        <form action="{{ route('jurusan.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group has-feedback">
                                <select name="fakultas" class="form-control">
                                    <option value="">Pilih Fakultas</option>
                                    @foreach ($fakultas as $data)
                                        <option value="{{ $data->id_Fakultas }}">{{ $data->nama_Fakultas }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Nama Jurusan"
                                       name="nama_Jurusan"
                                       value="{{ old('nama_Jurusan') }}"/>
                                <span class="fa fa-institution form-control-feedback"></span>
                            </div>

                            <div class="row">

                                <div class="col-md-2 pull-left">
                                    <button type="submit" class="btn  btn-sm btn-primary btn-block btn-flat">Simpan
                                    </button>
                                </div><!-- /.col -->
                                <div class="col-md-2 pull-right">
                                    <a class="btn btn-primary btn-sm btn-block btn-flat"
                                       href="{{ route('jurusan.index') }}">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection