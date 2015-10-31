@extends('layouts.default')

@section('content')
 <div class="bg_dj1">
    <div class="container ">
      <div class="col-xs-12 margin-top-lg margin-bottom-lg">
          <img src="{{ asset('img/djch.png') }}" alt="" class="center-block" width="100%">
      </div>
      <div class="col-xs-10 col-sm-10 col-md-8 col-lg-10 col-lg-offset-1 margin-top-lg">
        <p class="text-standar texto-lg texto-blanco text-center txt-dj margin-top-lg">The International Ravers - <span><img src="img/djch.png" alt="" class="img-text"></span> - is about engaging DJ and their fans to gift their birthday to the greater good of providing clean water around the world, just like at our raves. Whether you are a famous DJ or an enthusiastic Beginner, you can get involved by subscribing and inviting your friends, family, and fans to participate for your birthday.</p>
      </div>
    </div>
  </div>  
  <!-- <div class="separacion">
    <ul class="list-unstyled list-inline">
      <li>prueba</li>
      <li><img src="img/assets-02.png" alt="" width="10%"></li>
      <li>prueba</li>
    </ul>
    
  </div> -->
  <div class="rosa">
    <canvas class="animate" id="confeti"></canvas>
    <div class="division">
      <img src="{{ asset('img/tornamesa-01.png') }}" alt="" width="100%" class="center-block tornamesa" >
    </div>
    <div class="container">
      <div class="row margin-bottom-lg" id="team">

        <h2 class="textdj visible-lg">Which kind of birthday  wishes the DJs can ask?</h2>
        <h3 class="textdj visible-sm visible-md">Which kind of birthday  wishes the DJs can ask?</h3>
        <h3 class="textdj visible-xs">Which kind of birthday  wishes the DJs can ask?</h3>
        <div class="col-xs-4 col-xs-offset-2">
          <p class="title-white text-center text-title-dj">Build Wells + water purifers.</p>
          <img src="{{ asset('img/wells.jpg') }}" alt="Explore" width="70%" class="center-block img-circle" >
          <p class="title-white text-center text-content-dj">There is thousands of water well projects stalled because other organizations run out funds. Let's help fulfill those water projects with your gifts</p>
        </div>
        <div class="col-xs-4 ">
           <p class="title-white text-center text-title-dj">Free water refill stations.</p>
          <img src="{{ asset('img/elkay.jpg') }}" alt="Explore" width="70%" class="center-block img-circle" >
           <p class="title-white text-center text-content-dj">With elkay water filters we can build free water refill stations on the poorest school in developing countries</p>
        </div>
      </div>
    </div>    
  </div>
  <div class="black" id="fire">
    <canvas id="canvas" class="animate_fire"></canvas>
    
    <div class="division">
      <img src="{{ asset('img/tornamesa-01.png') }}" alt="" width="100%" class="center-block tornamesa" >
    </div>
    <div class="container">
      <div class="row margin-bottom-lg" id="team">
        <h2 class="textdj visible-lg">How will work this Project?</h2>
        <h3 class="textdj visible-sm visible-md">How will work this Project?</h3>
        <h3 class="textdj visible-xs">How will work this Project?</h3>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
          <p class="title-white text-center">Pledge your birthday.</p>
          <img src="{{ asset('img/1.png') }}" alt="Explore" width="60%" class="center-block" >
          <p class="title-white text-justify text-step-dj">Subscribe to our DJ Birthday Calendar and choose a cause that you would like to help. Then share your pledge to your fans around the world in social network to make this a serious agreement.</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
           <p class="title-white text-center">Start a Campaing.</p>
          <img src="{{ asset('img/2.png') }}" alt="Explore" width="60%" class="center-block" >
           <p class="title-white text-justify text-step-dj">When your birthday is near, we'll remind you to start a fundraising page. Whether you want to raise funds through gifts or a private birthday event and the tickets are donations, you can do it independently in our platform or with the full cooperation of our team.</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
           <p class="title-white text-center">Celebrate your birthday.</p>
          <img src="{{ asset('img/3.png') }}" alt="Explore" width="60%" class="center-block" >
           <p class="title-white text-justify text-step-dj">While you have a wonderful day our team works hard in promoting your cause around the world. After this day, our team will show you how grateful are your fans with you.</p>
        </div>
       
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 margin-top-lg">
           <p class="title-white text-center">What's the challenge?</p>
          <img src="{{ asset('img/4.png') }}" alt="Explore" width="60%" class="center-block" >
           <p class=" title-white text-justify text-step-dj">After to show our entire EDM community how many kids have clean because of your birthday gifs, let's take the challenge of double your birthday gifs for the next year.</p><br>
           <p class="title-white text-center text-step-dj">We will help with that!!!</p>
        </div>
        <div class="col-xs-12 text-center margin-bottom margin-top-lg">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="col-sm-2">
              <div class=" text-boton "><p class="text-right">Let's</p></div>
            </div>
            <div class="col-sm-10 margin-bottom-lg">
              <a href="{{ route('programs') }}#warriors">
                <button type="button" class="btn btn-success btn-lg">Transform poor communities into <strong>raves</strong></button></a>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>    
  </div>
	<div class="white">
    <div class="division">
       <img src="{{ asset('img/tornamesa-01.png') }}" alt="" width="100%" class="center-block tornamesa" >
     </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
            <h1 class="text-dj visible-lg">Help us convince all the Dj's around the world to get involve.</h1>
            <h2 class="text-dj visible-sm visible-md">Help us convince all the Dj's around the world to get involve.</h2>
            <h3 class="text-dj visible-xs bg-imagen">Help us convince all the Dj's around the world to get involve.</h3>
          </div>  
            
        </div>
        <div class="row">
        		<div class="col-xs-12 ">
        			<p class="text-left text-estandar">*Invite your favorite DJ by</p>
        		</div>
        		
            <div class="col-xs-12 col-sm-12 col-lg-6 col-lg-offset-3">
              <div class="col-sm-4">
                <img src="{{ asset('img/fb-dj.png') }}" alt="DJ Brithday" width="100%" class="center-block margin-bottom-lg" >
              </div>
              <div class="col-sm-4">
                <a href="http://ctt.ec/2To8h" target="_blank">
                  <img src="{{ asset('img/tw-dj.png') }}" alt="DJ Brithday" width="100%" class="center-block margin-bottom-lg" >
                </a>
              </div>
              <div class="col-sm-4">
                <img src="{{ asset('img/ig-dj.png') }}" alt="DJ Brithday" width="100%" class="center-block margin-bottom-lg" >
              
              </div>
               
            </div>
        </div>
        
        
      </div>
  </div>
  <div class="bg_dj"></div>
@stop


@section('script')
  <script src="{{ asset('js/script_animate.js') }}"></script>
@stop