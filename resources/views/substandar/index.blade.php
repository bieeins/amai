@extends('layouts.app')

@section('htmlheader_title')
    Sub Standar
@endsection
@section('contentheader_title')
    Sub Stander Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Sub Standar</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <a class="btn btn-sm btn-primary" href="{{ route('substandar.create') }}"> Tambah Sub Standar</a>
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
                                <th>Sub Standar</th>
                                <th width="170px">Action</th>
                            </tr>

                            @foreach ($substandar as $key => $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->standar->standar }}</td>
                                    <td>{{ $data->subStandar }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('substandar.show',$data->id_SubStandar) }}">Show</a>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('substandar.edit',$data->id_SubStandar) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['substandar.destroy', @$data->id_SubStandar],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $substandar->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
