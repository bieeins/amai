@extends('layouts.app')

@section('htmlheader_title')
    Program Studi
@endsection
@section('contentheader_title')
    Program Studi Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Program Studi</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <a class="btn btn-sm btn-primary" href="{{ route('prodi.tambah') }}"> Tambah Prodi</a>
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
                                <th>Nama Prodi</th>
                                <th width="">Action</th>
                            </tr>

                            @foreach ($prodis as $key => $prodi)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $prodi->fakultas->nama_Fakultas }}</td>
                                    <td>{{ $prodi->jurusan->nama_Jurusan }}</td>
                                    <td>{{ $prodi->nama_ProgramStudi }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('prodi.lihat',$prodi->id_ProgramStudi) }}">Show</a>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('prodi.edit',$prodi->id_ProgramStudi) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['prodi.hapus', @$prodi->id_ProgramStudi],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $prodis->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
