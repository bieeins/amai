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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <a class="btn btn-sm btn-primary" href="{{ route('pertanyaan.create') }}"> Tambah Pertanyaan</a>
                                </div>
                            </div>
                        </div>

                        @if ($message = Session::get('success'))
                            <br/>
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <br/>

                        <table class="table table-hover table-bordered table-striped">
                            <tr>
                                <th>No</th>
                                <th>Sub Standar</th>
                                <th>Pertanyaan</th>
                                <th>Standar Nilai</th>
                                <th>Status</th>
                                <th width="170px">Action</th>
                            </tr>

                            @foreach ($pertanyaan as $key => $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->substandar->subStandar }}</td>
                                    <td>{{ $data->pertanyaan }}</td>
                                    <td>{{ $data->standar_Nilai }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('pertanyaan.show',$data->id_Pertanyaan) }}">Show</a>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('pertanyaan.edit',$data->id_Pertanyaan) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['pertanyaan.destroy', @$data->id_Pertanyaan],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $pertanyaan->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
