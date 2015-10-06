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
            <a class="navbar-brand " href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" height="70"></a>
            <!-- <a class="navbar-brand hidden-lg" href="#"><img src="{{ asset('img/logo.png') }}" alt="" height="70"></a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
              @if($title == 'Donate')
                <li class='active'><a href="{{ route('donate') }}">donate</a></li>
              @else  
                <li><a href="{{ route('donate') }}">donate</a></li>
              @endif
              
              @if($title == 'Why Water')
                <li class='active'><a href="{{ route('water') }}">why water</a></li>
               @else  
                <li><a href="{{ route('water')}}">why water</a></li>
              @endif

              @if($title == 'Why Ravers')
                <li class='active'><a href="{{ route('ravers') }}">why ravers</a></li>
               @else  
                <li><a href="{{ route('ravers')}}">why ravers</a></li>
              @endif

              @if($title == 'Programs')
                <li class='active'><a href="{{ route('programs') }}">programs</a></li>
               @else  
                <li><a href="{{ route('programs')}}">programs</a></li>
              @endif
              @if($title == 'DJs Birthdays')
                <li class='active'><a href="{{ route('dj') }}">dj birthday</a></li>
               @else  
                <li><a href="{{ route('dj')}}">dj birthday</a></li>
              @endif
              @if($title == 'About Us')
                <li class='active'><a href="{{ route('about') }}">about us</a></li>
               @else  
                <li><a href="{{ route('about')}}">about us</a></li>
              @endif
              @if($title == 'Blog')
                <li class='active'><a href="{{ route('blog') }}">blog</a></li>
               @else  
                <li><a href="{{ route('blog') }}">blog</a></li>
              @endif

              
                <li class="visible-lg"><a href="https://www.facebook.com/internationalravers" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a></li>
                <li class="visible-lg"><a href="https://twitter.com/intravers" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <li class="visible-lg"><a href="https://instagram.com/internationalraverscharity" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>

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
                      <li><a class="texto-oscuro" href="{{ route('blog') }}">Read our blog</a></li>   
                      <li><a class="texto-oscuro" href="https://www.facebook.com/internationalravers" target="_blank">Facebook</a></li>     
                      <li><a class="texto-oscuro" href="https://twitter.com/intravers" target="_blank">Twitter</a></li>     
                      <li><a class="texto-oscuro" href="https://instagram.com/internationalraverscharity" target="_blank">Instagram</a></li>
                   </ul>
                </div> 
                <div class="col-xs-2">
                   <ul class="list-unstyled menu-footer">
                       
                           <li><a class="texto-blanco" href="#"><strong>GET INVOLVED</strong></a></li>
                           <li><a class="texto-oscuro" href="{{ route('donate')}}">Donate</a></li>
                           <li><a class="texto-oscuro" href="{{ route('donate')}}">Kandi Trade</a></li>
                           <li><a class="texto-oscuro" href="{{ route('programs') }}#warriors">Help a warrior</a></li>
                           <li><a class="texto-oscuro" href="{{ route('dj') }}">DJ Birthday Challenge</a></li>
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
                           <li><a class="texto-oscuro" href="{{ route('about') }}#team">Our Team</a></li>
                           <li><a class="texto-oscuro" href="#">Join Us</a></li>
                           <li><a class="texto-oscuro" href="#">Send us a email:</a></li>
                           <li><a class="texto-oscuro" href="mailto:charity@internationalravers.org">charity@internationalravers.org</a></li>
                           
                       
                   </ul>
                </div> 
                <div class="col-xs-3">
                    <ul class="list-unstyled menu-footer">
                       
                           <li><a class="texto-blanco" href="{{ route('contact') }}"><strong>CONTACT US</strong></a></li>
                           <li><a class="texto-oscuro" href="{{ route('contact') }}">Questions?</a></li>
                           <li><a class="texto-oscuro" href="{{ route('contact') }}">give us a shot:</a></li>
                           <li><a class="texto-oscuro" href="mailto:charity@internationalravers.org">charity@internationalravers.org</a></li>
                           
                       
                   </ul>
                </div>                 
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7"><h5 class="texto-oscuro">International Ravers is a 501 (c)(3) • privacy policy • ©2015 • made with ❤ in CA. </h5></div>
                <div class="col-xs-4 col-xs-offset-4 col-sm-4 col-sm-offset-4 col-md-1 col-lg-1"> <img src="{{  asset('img/oneclick.png')  }}" alt="One Click Peru SAC" width="100%"></div>
                
               
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.videoBG.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>  
  
</body>
</html>