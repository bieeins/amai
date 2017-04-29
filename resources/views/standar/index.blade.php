@extends('layouts.app')

@section('htmlheader_title')
    Standar
@endsection
@section('contentheader_title')
    Stander Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Standar</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <a class="btn btn-sm btn-primary" href="{{ route('standar.create') }}"> Tambah Standar</a>
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
                                <th>Standar</th>
                                <th>Bobot</th>
                                <th width="">Action</th>
                            </tr>

                            @foreach ($standar as $key => $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->standar }}</td>
                                    <td>{{ $data->bobot }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('standar.show',$data->id_Standar) }}">Show</a>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('standar.edit',$data->id_Standar) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['standar.destroy', @$data->id_Standar],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $standar->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
