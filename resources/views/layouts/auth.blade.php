<!DOCTYPE html>
<html>

@include('layouts.login.headerlog')
@include('layouts.login.navbarlog')

<section id="home" name="home"></section>
<div id="headerwrap"  style="background-color: #FFFFFF">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-offset-4">
               @yield('content')

            </div>
        </div> <!--/ .container -->
</div>
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

</html>