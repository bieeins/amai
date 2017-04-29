@extends('layouts.app')

@section('htmlheader_title')
    Periode
@endsection
@section('contentheader_title')
    Periode Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Periode</div>

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

                        {!! Form::model($periode, ['method' => 'PUT','route' => ['periode.update', $periode->id_Periode]]) !!}
                        <br/>
                        <div class="form-group has-feedback">

                            <input type="text" class="form-control" placeholder="Nama Periode"
                                   name="nama_periode"
                                   value="{{ $periode->nama_Periode }}" disabled/>
                            <span class="fa fa-institution form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="">Awal Periode</label>
                            <input type="text" id="date" class="form-control" placeholder=""
                                   name="awal_periode"
                                   value="{{ $periode->awal_Periode }}"/>
                            <span class="fa fa-institution form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="">Akhir Periode</label>
                            <input type="text" id="datex" class="form-control" placeholder=""
                                   name="akhir_periode"
                                   value="{{ $periode->akhir_Periode }}"/>
                            <span class="fa fa-institution form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <select class="form-control" name="status" id="">
                                <option value="" selected="">Pilih Status</option>
                                @if($periode->status_Periode === 'buka')
                                    <option value="buka" selected>Buka</option>
                                    <option value="tutup">Tutup</option>
                                @else
                                    <option value="buka">Buka</option>
                                    <option value="tutup" selected>Tutup</option>
                                @endif
                            </select>

                        </div>
                        <br/>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm pull-left">Submit</button>
                            <a class="btn btn-primary btn-sm pull-right" href="{{ route('periode.index') }}"> Back</a>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
