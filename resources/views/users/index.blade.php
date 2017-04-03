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
            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #dd4b39;color: #ffffff">Users</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pull-left">
                                    <a class="btn btn-primary btn-sm" href="{{ route('user.tambah') }}"> Tambah User</a>
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
                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Program Studi</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Roles</th>
                                {{--<th>Status</th>--}}
                                {{--<th>Keterangan</th>--}}
                                <th>Action</th>
                            </tr>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->prodi->nama_ProgramStudi }}</td>
                                    <td>{{ $user->full_Name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ucfirst($user->roles)  }}</td>
                                    {{--<td>{{ ucfirst($user->status)  }}</td>--}}
                                    {{--                                    <td>{{ $user->keterangan }}</td>--}}
                                    <td>
                                        <a class="btn btn-default btn-sm" href="{{ route('user.lihat',$user->id) }}">Show</a>
                                        <a class="btn btn-default btn-sm"
                                           href="{{ route('user.edit',$user->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['user.hapus', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-warning btn-sm','style'=>'display: inline-block']) !!}
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
