<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><b>SISTEM INFORMASI &nbsp; AMAI </b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                {{--<li class=""><a href="#home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>--}}
                {{--<li><a href="#desc" class="smoothScroll">{{ trans('adminlte_lang::message.description') }}</a></li>--}}
                {{--<li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>--}}
                {{--<li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    {{--<li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>--}}
                    <a class="navbar-brand" href="#"><b>LPPMP UNIVERSITAS RIAU</b></a>
                    {{--                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>--}}
                @else
                    <li><a href="{{ url('home') }}">HOME</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
