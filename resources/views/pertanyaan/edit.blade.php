@extends('layouts.app')

@section('htmlheader_title')
    Pertanyaan
@endsection
@section('contentheader_title')
    Pertanyaan Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Pertanyaan</div>

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

                        {!! Form::model($pertanyaan, ['method' => 'PUT','route' => ['pertanyaan.update', $pertanyaan->id_Pertanyaan]]) !!}
                        <br/>
                        <div class="form-group has-feedback">

                            <select name="id_SubStandar" class="form-control">
                                <option value="">Pilih Sub Standar</option>
                                @foreach ($substandar as $data)
                                    <option value="{{ $data->id_SubStandar }}"
                                            {{$pertanyaan->id_SubStandar === $data->id_SubStandar ? 'selected="selected"' : ''}}>{{ $data->subStandar }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group has-feedback">
                                <textarea class="form-control" name="pertanyaan" style="width:100%;" rows="3"
                                          placeholder="Pertanyaan">{{ $pertanyaan->pertanyaan }}</textarea>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="">Standar Nilai</label>
                            <input type="text" id="" class="form-control" placeholder=""
                                   name="standar_Nilai"
                                   value="{{ $pertanyaan->standar_Nilai }}"/>
                            <span class="fa fa-institution form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <select class="form-control" name="status" id="">
                                <option value="" selected="">Pilih Status</option>
                                @if($pertanyaan->status === 'aktif')
                                    <option value="aktif" selected>Aktif</option>
                                    <option value="nonaktif">Tidak Aktif</option>
                                @else
                                    <option value="aktif" >Aktif</option>
                                    <option value="nonaktif" selected>Tidak Aktif</option>
                                @endif
                            </select>

                        </div>
                        <br/>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm pull-left">Submit</button>
                            <a class="btn btn-primary btn-sm pull-right" href="{{ route('pertanyaan.index') }}"> Back</a>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
