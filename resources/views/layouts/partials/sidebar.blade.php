<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
    @if (! Auth::guest())
    <div class="user-panel">
    <div class="pull-left image">
    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
    <p>{{ Auth::user()->username }}</p>
    <!-- Status -->
    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
    </div>
    </div>
    @endif

    {{--<!-- search form (Optional) -->--}}
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="search ..."/>--}}
                {{--<span class="input-group-btn">--}}
                {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i--}}
                            {{--class="fa fa-search"></i></button>--}}
              {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<!-- /.search form -->--}}

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menus</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class='fa fa-database'></i> <span>Master Data</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('users')}}"><i class='fa fa-users'></i> <Span>User</Span> </a></li>
                    <li><a href="{{url('fakultas')}}"><i class='fa fa-institution'></i> <Span>Fakultas</Span> </a></li>
                    <li><a href="{{url('jurusan')}}"><i class='fa fa-mortar-board'></i> <Span>Jurusan</Span> </a></li>
                    <li><a href="{{url('prodi')}}"><i class='fa fa-mortar-board'></i> <Span>Program Studi</Span> </a></li>
                    <li><a href="{{url('pertanyaan')}}"><i class='fa  fa-mortar-board'></i> <Span>Pertanyaan</Span> </a></li>
                    <li><a href="{{url('periode')}}"><i class='fa  fa-mortar-board'></i> <Span>Periode</Span> </a></li>
                    <li><a href="{{url('standar')}}"><i class='fa  fa-mortar-board'></i> <Span>Standar</Span> </a></li>
                    <li><a href="{{url('substandar')}}"><i class='fa  fa-mortar-board'></i> <Span>Sub Standar</Span> </a></li>


                </ul>
            </li>
            {{--<li ><a href="#"><i class='fa fa-link'></i>--}}
                    {{--<span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>--}}

            <li class="treeview">
                <a href="#"><i class='fa fa-database'></i> <span>INPUT AMAI</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('amai/standar1')}}"><i class='fa  fa-mortar-board'></i> <Span>Standar 1</Span> </a></li>
                    <li><a href="{{url('amai/standar2')}}"><i class='fa  fa-mortar-board'></i> <Span>Standar 2</Span> </a></li>
                    <li><a href="{{url('amai/standar3')}}"><i class='fa  fa-mortar-board'></i> <Span>Standar 3</Span> </a></li>
                    <li><a href="{{url('amai/standar4')}}"><i class='fa  fa-mortar-board'></i> <Span>Standar 4</Span> </a></li>
                    <li><a href="{{url('amai/standar5')}}"><i class='fa  fa-mortar-board'></i> <Span>Standar 5</Span> </a></li>
                    <li><a href="{{url('amai/standar6')}}"><i class='fa  fa-mortar-board'></i> <Span>Standar 6</Span> </a></li>
                    <li><a href="{{url('amai/standar7')}}"><i class='fa  fa-mortar-board'></i> <Span>Standar 7</Span> </a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
