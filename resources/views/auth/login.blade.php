@extends('layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
    <div class="center-block">
        <div class="login-logo centered">
            <a href="{{ url('/login') }}"><b><h3 style="color: #000;font-weight: bold;">LOGIN</h3></b></a>
        </div><!-- /.login-logo -->

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-box-body" style="border-radius: 10px; ">
    {{--<p style="color: #000;" class="login-box-msg"> Silahkan Login </p>--}}
    <form action="{{ url('/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="{{old('username')}}"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">

            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div><!-- /.col -->
        </div>
    </form>


</div><!-- /.login-box -->

    </div>

    @include('layouts.login.scripts_auth')

@endsection
