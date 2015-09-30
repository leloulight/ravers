<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>{{$title}} | International Raver, Inc.</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="#"><img src="{{ asset('img/logo.png') }}" alt="" height="70"></a>
            <!-- <a class="navbar-brand hidden-lg" href="#"><img src="{{ asset('img/logo.png') }}" alt="" height="70"></a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">donate</a></li>
                <li><a href="#">why water</a></li>
                <li><a href="#">why ravers</a></li>
                <li><a href="#">programs</a></li>
                <li><a href="#">dj birthdays</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="#">blog</a></li>
                <li class="visible-lg"><a href="#"><i class="fa fa-facebook-official fa-2x"></i></a></li>
                <li class="visible-lg"><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <li class="visible-lg"><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
    @yield('content')

   
    <div class="footer">
        <div class="container">
            <div class="row margin-top visible-md visible-lg">
                <div class="col-xs-2">
                   <ul class="list-unstyled menu-footer">
                      <li><a class="texto-blanco" href="#"><strong>FOLLOW US</strong></a></li>
                      <li><a class="texto-oscuro" href="#">Read our blog</a></li>   
                      <li><a class="texto-oscuro" href="#">Facebook</a></li>     
                      <li><a class="texto-oscuro" href="#">Twitter</a></li>     
                      <li><a class="texto-oscuro" href="#">Instagram</a></li>
                   </ul>
                </div> 
                <div class="col-xs-2">
                   <ul class="list-unstyled menu-footer">
                       
                           <li><a class="texto-blanco" href="#"><strong>GET INVOLVED</strong></a></li>
                           <li><a class="texto-oscuro" href="#">Donate</a></li>
                           <li><a class="texto-oscuro" href="#">Kandi Trade</a></li>
                           <li><a class="texto-oscuro" href="#">Help a warrior</a></li>
                           <li><a class="texto-oscuro" href="#">DJ's Birthday Project</a></li>
                           <li><a class="texto-oscuro" href="#">International Ravers Volunteer</a></li>
                      
                   </ul>
                </div> 
                <div class="col-xs-2">
                    <ul class="list-unstyled menu-footer">
                       
                           <li><a class="texto-blanco" href="#"><strong>PROGRAMS</strong></a></li>
                           <li><a class="texto-oscuro" href="#">Water accesability program</a></li>
                           <li><a class="texto-oscuro" href="#">Sanitation & higiene program</a></li>
                        
                   </ul>
                </div> 
                <div class="col-xs-3">
                    <ul class="list-unstyled menu-footer">
                       
                           <li><a class="texto-blanco" href="#"><strong>ABOUT US</strong></a></li>
                           <li><a class="texto-oscuro" href="#">Our Team</a></li>
                           <li><a class="texto-oscuro" href="#">Join Us</a></li>
                           <li><a class="texto-oscuro" href="#">Send us a email:</a></li>
                           <li><a class="texto-oscuro" href="#">charity@internationalravers.org</a></li>
                           
                       
                   </ul>
                </div> 
                <div class="col-xs-3">
                    <ul class="list-unstyled menu-footer">
                       
                           <li><a class="texto-blanco" href="#"><strong>CONTACT US</strong></a></li>
                           <li><a class="texto-oscuro" href="#">Questions?</a></li>
                           <li><a class="texto-oscuro" href="#">give us a shot:</a></li>
                           <li><a class="texto-oscuro" href="#">charity@internationalravers.org</a></li>
                           
                       
                   </ul>
                </div>                 
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"><h4>International Ravers is a 501 (c)(3) • privacy policy • ©2015 • made with ❤ in CA. </h4></div>
                <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-1 col-lg-1"> <img src="{{  asset('img/oneclick.png')  }}" alt="One Click Peru SAC" width="100%"></div>
                
               
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>