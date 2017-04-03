@extends('layouts.app')

@section('htmlheader_title')
    Jurusan
@endsection
@section('contentheader_title')
    Jurusan Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Jurusan</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <a class="btn btn-sm btn-primary" href="{{ route('jurusan.create') }}"> Tambah Jurusan</a>
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
                                <th>Fakultas</th>
                                <th>Jurusan</th>
                                <th width="">Action</th>
                            </tr>
                            @foreach ($jurusan as $key => $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->fakultas->nama_Fakultas }}</td>
                                    <td>{{ $data->nama_Jurusan }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('jurusan.show',$data->id_Jurusan) }}">Show</a>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('jurusan.edit',$data->id_Jurusan) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['jurusan.destroy', @$data->id_Jurusan],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $jurusan->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
