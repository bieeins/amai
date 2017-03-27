@extends('layouts.app')

@section('htmlheader_title')
    Users
@endsection
@section('contentheader_title')
    Users Management
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-11 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Users</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <a class="btn btn-primary" href="{{ route('user.tambah') }}"> Tambah User</a>
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

                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>username</th>
                                <th>Email</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->full_Name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('user.lihat',$user->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['user.hapus', @$user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
