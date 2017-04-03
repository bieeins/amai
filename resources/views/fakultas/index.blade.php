@extends('layouts.app')

@section('htmlheader_title')
    Fakultas
@endsection
@section('contentheader_title')
    Management Fakultas
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Fakultas</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <a class="btn btn-sm btn-primary" href="{{ route('fakultas.create') }}"> Tambah Fakultas</a>
                                </div>
                            </div>
                        </div>

                        @if ($message = Session::get('success'))
                            <br />
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <br />

                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Fakultas</th>
                                <th width="">Action</th>
                            </tr>
                            @foreach ($fakultas as $key => $datas)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $datas->nama_Fakultas }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm " href="{{ route('fakultas.show',$datas->id_Fakultas) }}">Show</a>
                                        <a class="btn btn-default btn-sm " href="{{ route('fakultas.edit',$datas->id_Fakultas) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['fakultas.destroy', @$datas->id_Fakultas],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $fakultas->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
