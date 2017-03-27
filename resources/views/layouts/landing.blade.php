@include('layouts.login.headerlog')
@include('layouts.login.navbarlog')

<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1 ><b>Audit Mutu Akademik Internal</b></h1>
                <h3><b><a target="_blank" href="http://lppmp.unri.ac.id" class="">Lembaga Pengembangan dan Penjaminan Mutu Pendidikan</a></b></h3>
                <h2><b><a target="_blank" href="http://unri.ac.id" class="">Universitas Riau</a></b></h2>
                @if(auth::guest())
                    <h3><a href="{{ url('/login') }}" class="btn btn-lg btn-success">Login AMAI</a></span></h3>
                @else
                    <h3><a href="{{ url('/home') }}" class="btn btn-lg btn-success">Home</a></span></h3>
                @endif


        </div>
    </div> <!--/ .container -->
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
</div><!--/ #headerwrap -->
</div>



@include('layouts.login.footerlog')