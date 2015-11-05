@extends('layouts.default')

@section('content')

<div class="alert" id="alerta">
  
  </div>
  <div class="prueba">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="cerrar" id="cerrar"><button class="btn btn-primary">X</button></div>
        <div class="mensaje">
          <p class="text-justify">Ravers International Charity is aware of the importance of keeping information on each artist always well protected. So we will  work with "Classy.org" on for this project.  And thus not only you can ask for gifts to your fans,  you can also collect donations if you celebrate  your birthday  throwing a private party. <br>
          <br>If you like the idea and want to know more, you can send us an email to <a href="mailto:mybirthday@internationalravers.org">MyBirthday@internationalravers.org </a>and we will send you detailed information of the steps to subscribe to our calendar, our strategy and our campaigns to promote your cause in social networks. <br>
          <br>Together we will transform communities in need into raves, with free water refills everywhere.</p>
        </div>

      </div>
  </div>
</div>
</div>
 <div class="bg_dj1">
    <div class="container ">
      <div class="col-xs-12 margin-top-lg margin-bottom-lg">
          <img src="{{ asset('img/djch.png') }}" alt="" class="center-block visible-md visible-lg" width="100%">
          <img src="{{ asset('img/djch-r.png') }}" alt="" class="center-block visible-xs visible-sm" width="100%">
      </div>
      <div class="col-xs-10 col-sm-10 col-md-8 col-lg-10 col-lg-offset-1 margin-top-lg visible-md visible-lg">
        <p class="text-standar texto-lg texto-blanco text-center txt-dj margin-top-lg ">The International Ravers - <span><img src="img/djch.png" alt="" class="img-text"></span> - is about engaging DJ and their fans to gift their birthday to the greater good of providing clean water around the world, just like at our raves. Whether you are a famous DJ or an enthusiastic Beginner, you can get involved by subscribing and inviting your friends, family, and fans to participate for your birthday.</p>        
      </div>
      <div class="col-xs-12 col-sm-12 margin-top-lg visible-xs visible-md">
        <p class="text-standar texto-lg texto-blanco text-center text-shadow txt-dj-r margin-top-lg ">The International Ravers <span><img src="img/djch.png" alt="" class="img-text-r"></span> <br>is about engaging DJ and their fans to gift their birthday to the greater good of providing clean water around the world, just like at our raves. Whether you are a famous DJ or an enthusiastic Beginner, you can get involved by subscribing and inviting your friends, family, and fans to participate for your birthday.</p>        
      </div>
    </div>
  </div>  
  <div class="rosa">
    <canvas class="animate" id="confeti"></canvas>
    <div class="division visible-md visible-lg">
      <img src="{{ asset('img/tornamesa-01.png') }}" alt="" width="100%" class="center-block tornamesa" >
    </div>
    <div class="division-r  visible-xs visible-sm">
      <img src="{{ asset('img/tornamesa-01.png') }}" alt="" width="100%" class="center-block tornamesa" >
    </div>
    <div class="container">
      <div class="row margin-bottom-lg" id="team">

        <h2 class="textdj visible-lg">Which kind of birthday  wishes the DJs can ask?</h2>
        <h3 class="textdj visible-sm visible-md">Which kind of birthday  wishes the DJs can ask?</h3>
        <h3 class="textdj visible-xs">Which kind of birthday  wishes the DJs can ask?</h3>
        <div class="col-xs-12 col-sm-12 col-lg-6 col-lg-6 visible-md visible-lg">
          <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4 col-lg-8 col-lg-offset-4">
            <div class="card center-block" id="card1">
              <p class="title-white text-justify text-content-dj p_hidden " id="text-card1">There is thousands of water well projects stalled because other organizations run out funds. Let's help fulfill those water projects with your gifts</p>
              <img src="{{ asset('img/wells.jpg') }}" id="img-card1" alt="Explore" width="100%" class="center-block" >
              <p class="title-white text-center text-title-dj" id="title-card1">Build Wells <br> + <br> water purifers.</p>
              
            </div>
          </div>
          
          
          <!--  -->
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-6 col-lg-6 visible-md visible-lg ">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
            <div class="card center-block" id="card2">
              <p class="title-white text-justify text-content-dj p_hidden " id="text-card2">With elkay water filters we can build free water refill stations on the poorest schools in developing countries</p>
              <img src="{{ asset('img/elkay.jpg') }}" id="img-card2" alt="Explore" width="100%" class="center-block" >
              <p class="title-white text-center text-title-dj" id="title-card2">Free water refill stations.</p>
             </div>
          </div>  
        </div>
        <div class="row sliderbody visible-xs visible-sm">
          <!-- Swiper -->
              <div class="swiper-container">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="col-xs-12 col-sm-12 col-lg-6 col-lg-6">
                                  <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4 col-lg-8 col-lg-offset-4">
                                    <div class="card center-block" id="card1">
                                      <p class="title-white text-justify text-content-dj p_hidden " id="text-card1">There is thousands of water well projects stalled because other organizations run out funds. Let's help fulfill those water projects with your gifts</p>
                                      <img src="{{ asset('img/wells.jpg') }}" id="img-card1" alt="Explore" width="100%" class="center-block" >
                                      <p class="title-white text-center text-title-dj" id="title-card1">Build Wells <br> + <br> water purifers.</p>
                                      
                                    </div>
                                  </div>
                                  
                                  
                                  <!--  -->
                                </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="col-xs-12 col-sm-12 col-lg-6 col-lg-6 ">
                                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                                    <div class="card center-block" id="card2">
                                      <p class="title-white text-justify text-content-dj p_hidden " id="text-card2">With elkay water filters we can build free water refill stations on the poorest school in developing countries</p>
                                      <img src="{{ asset('img/elkay.jpg') }}" id="img-card2" alt="Explore" width="100%" class="center-block" >
                                      <p class="title-white text-center text-title-dj" id="title-card2">Free water refill stations.</p>
                                     </div>
                                  </div>  
                                </div>
                      </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
              </div>
        </div>
      </div>
    </div>    
  </div>
  <div class="black" id="fire">
    <!-- <canvas id="canvas-1" class="animate_fire visible-md visible-lg"></canvas> -->
    <canvas id="canvas" class="animate_fire-r "></canvas>
    
    <div class="division visible-md visible-lg">
      <img src="{{ asset('img/tornamesa-01.png') }}" alt="" width="100%" class="center-block tornamesa" >
    </div>
    <div class="division-r  visible-xs visible-sm">
      <img src="{{ asset('img/tornamesa-01.png') }}" alt="" width="100%" class="center-block tornamesa" >
    </div>
    <div class="container">
      <div class="row margin-bottom-lg" id="team">
        <h2 class="textdj visible-md visible-lg ">How will work this Project?</h2>
        <h3 class="textdj visible-xs visible-sm  margin-top">How will work this Project?</h3>
        
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 visible-md visible-lg">
          <p class="title-white text-center">Pledge your birthday.</p>
          <img src="{{ asset('img/1.png') }}" alt="Explore" width="60%" class="center-block" >
          <p class="title-white text-justify text-step-dj">Subscribe to our DJ Birthday Calendar and choose a cause that you would like to help. Then share your pledge to your fans around the world in social network to make this a serious agreement.</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 visible-md visible-lg">
          <p class="title-white text-center">Start a Campaing.</p>
          <img src="{{ asset('img/2.png') }}" alt="Explore" width="60%" class="center-block" >
          <p class="title-white text-justify text-step-dj">When your birthday is near, we'll remind you to start a fundraising page. Whether you want to raise funds through gifts or a private birthday event and the tickets are donations, you can do it independently in our platform or with the full cooperation of our team.</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 visible-md visible-lg">
          <p class="title-white text-center">Celebrate your birthday.</p>
          <img src="{{ asset('img/3.png') }}" alt="Explore" width="60%" class="center-block" >
          <p class="title-white text-justify text-step-dj">While you have a wonderful day our team works hard in promoting your cause around the world. After this day, our team will show you how grateful are your fans with you.</p>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 margin-top-lg visible-md visible-lg">
          <p class="title-white text-center">What's the challenge?</p>
          <img src="{{ asset('img/4.png') }}" alt="Explore" width="60%" class="center-block" >
          <p class=" title-white text-justify text-step-dj">After to show our entire EDM community how many kids have clean because of your birthday gifs, let's take the challenge of double your birthday gifs for the next year.</p><br>
          <p class="title-white text-center text-step-dj">We will help with that!!!</p>
        </div>
        <div class="row sliderbody visible-xs visible-sm">
          <div class="swiper-container">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="col-xs-12">
                      <p class="title-white text-center">Pledge your birthday.</p>
                      <img src="{{ asset('img/1.png') }}" alt="Explore" width="60%" class="center-block" >
                      <p class="title-white text-justify text-step-dj">Subscribe to our DJ Birthday Calendar and choose a cause that you would like to help. Then share your pledge to your fans around the world in social network to make this a serious agreement.</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="col-xs-12">
                      <p class="title-white text-center">Start a Campaing.</p>
                      <img src="{{ asset('img/2.png') }}" alt="Explore" width="60%" class="center-block" >
                      <p class="title-white text-justify text-step-dj">When your birthday is near, we'll remind you to start a fundraising page. Whether you want to raise funds through gifts or a private birthday event and the tickets are donations, you can do it independently in our platform or with the full cooperation of our team.</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="col-xs-12">
                      <p class="title-white text-center">Celebrate your birthday.</p>
                      <img src="{{ asset('img/3.png') }}" alt="Explore" width="60%" class="center-block" >
                      <p class="title-white text-justify text-step-dj">While you have a wonderful day our team works hard in promoting your cause around the world. After this day, our team will show you how grateful are your fans with you.</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="col-xs-12">
                      <p class="title-white text-center">What's the challenge?</p>
                      <img src="{{ asset('img/4.png') }}" alt="Explore" width="60%" class="center-block" >
                      <p class=" title-white text-justify text-step-dj">After to show our entire EDM community how many kids have clean because of your birthday gifs, let's take the challenge of double your birthday gifs for the next year.</p><br>
                      <p class="title-white text-center text-step-dj">We will help with that!!!</p>
                    </div>
                  </div>
              </div>
              <!-- Add Pagination -->
              <!-- <div class="swiper-pagination"></div> -->
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 text-center margin-bottom margin-top-lg visible-md visible-lg">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="col-sm-2">
              <div class=" text-boton "><p class="text-right">Let's</p></div>
            </div>
            <div class="col-sm-10 margin-bottom-lg">
              
                <button type="button" id="transform" class="btn btn-success btn-lg transform">Transform poor communities into <strong>raves</strong></button>
            </div>
            
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 text-center margin-bottom margin-top-lg visible-xs visible-sm">
          <div class="col-xs-12">
            <div class="col-xs-2">
              <div class="text-boton-r "><p class="text-right">Let's</p></div>
            </div>
            <div class="col-xs-9 margin-bottom">
              
                <button type="button" id="transform" class="btn btn-success transform">Transform poor <br>communities into <strong>raves</strong></button>
            </div>
            
          </div>
        </div>
      </div>
    </div>    
  </div>
	<div class="white-r">
    <div class="division visible-md visible-lg">
      <img src="{{ asset('img/tornamesa-01.png') }}" alt="" width="100%" class="center-block tornamesa" >
    </div>
    <div class="division-r-3  visible-xs visible-sm">
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
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/internationalravers/photos/a.982511528459308.1073741829.796053617105101/985282161515578/?type=3" target="popup" onClick="window.open(this.href, this.target, 'width=450,height=450'); return false;">
                <img src="{{ asset('img/fb-dj.png') }}" alt="DJ Brithday" width="100%" class="center-block margin-bottom-lg" > 
                </a>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="https://twitter.com/intent/tweet?text=%40intRavers%20%23InternationalRavers%20%23DJBirthday%20%23NonProfit%20pic.twitter.com%2FbAawmOSUHS&source=intRavers&related=intRavers" target="popup" onClick="window.open(this.href, this.target, 'width=450,height=250'); return false;">
                  <img src="{{ asset('img/tw-dj.png') }}" alt="DJ Brithday" width="100%" class="center-block margin-bottom-lg" >
                </a>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="https://instagram.com/p/8fAGxOTLQ1/" target="popup" onClick="window.open(this.href, this.target, 'width=450,height=450'); return false;">
                  <img src="{{ asset('img/ig-dj.png') }}" alt="DJ Brithday" width="100%" class="center-block margin-bottom-lg" >
                </a>
              </div>
               
            </div>
        </div>
        
        
      </div>
  </div>
  <div class="bg_dj"></div>
@stop


@section('script')
  <script src="{{ asset('js/script_animate.js') }}"></script>
  <!-- Swiper JS -->
  <script src="{{ asset('js/swiper.min.js') }}"></script>
  <script>
  $(document).ready(function(){
    $('#card1').mouseover(function(evento){
      $('#img-card1').fadeOut(150);
      $('#title-card1').fadeOut(150);
      $('#text-card1').delay(300).fadeIn(150);
    });
    $('#card1').mouseleave(function(evento){
      $('#img-card1').delay(300).fadeIn(150);
      $('#title-card1').delay(300).fadeIn(150);
      $('#text-card1').fadeOut(300);
    });
    $('#card2').mouseover(function(evento){
      $('#img-card2').fadeOut(300);
      $('#title-card2').fadeOut(300);
      $('#text-card2').delay(300).fadeIn(300);
    });
    $('#card2').mouseleave(function(evento){
      $('#img-card2').delay(300).fadeIn(300);
      $('#title-card2').delay(300).fadeIn(300);
      $('#text-card2').fadeOut(300);
    });

    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 4500,
        autoplayDisableOnInteraction: false
    });

    $('.transform').click(function(){
        $('#alerta').fadeTo(300,0.8);
        $('.prueba').fadeIn(300);
        // if($('#alerta'))
    });
    $('#cerrar').click(function(){
        $('#alerta').fadeOut(300);
        $('.prueba').fadeOut(300);
        // if($('#alerta'))
    });
  });
  </script>
@stop