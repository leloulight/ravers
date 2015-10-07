@extends('layouts.default')

@section('content')
    
  <div class="bg_about"></div>
  
	<div class="white">
    <div class="container">
      <div class="row margin-top-lg margin-bottom-lg">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        	<h2 class="text-center ">MISSION</h2>
					
      		<p class="text-center text-estandar margin-center">Our mission is to fund projects of water, hygiene and sanitation worldwide. Bringing free water refills for every community in need.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        	<h2 class="text-center ">VISION</h2>

       		<p class="text-center text-estandar margin-center">Our vision is to make every community in need like a rave, with free water refills is everywhere.</p>
       </div>
      </div>
    </div>
  </div>
	<div class="blue">
    <div class="container">
      <div class="row margin-bottom-lg" id="team">
      	<h2 class="textvideo visible-lg">MEET OUR STAFF</h2>
        <h3 class="textvideo visible-sm visible-md">MEET OUR STAFF</h3>
        <h3 class="textvideo visible-xs">MEET OUR STAFF</h3>
      	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
          <p class="title-white text-center"><strong>Oscar Centurion</strong><br>CEO/Founder</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
          <p class="title-white text-center"><strong>Julio Nuñez</strong><br>CFO</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
          <p class="title-white text-center"><strong>Luis Abanto</strong><br>CIO</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
          <p class="title-white text-center"><strong>Jose Felix de la Puente</strong><br>Marketing Director</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
          <p class="title-white text-center"><strong>Carlos Perez</strong><br>Media Manager</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
          <p class="title-white text-center"><strong>Luis Centurion</strong><br>Key relationship manager ASIA</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
          <p class="title-white text-center"><strong>Diego Rabanal</strong><br>Key relationship USA/AFRICA</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
          <p class="title-white text-center"><strong>Heyler Fernandez</strong><br>Graphic Designer</p>
        </div>
      </div>
  	</div>
  </div>   
  

  <div class="white">
    <div class="container">
      <h2 class="text-center">Alliances</h2>
      
      <div class="row margin-bottom-lg">
      	<div class="col-xs-6">
      		<a href="http://ema-global.org/" target="_blank"><img src="{{ asset('img/ema.jpg')}}" alt="Electronic Music Alliance" width="30%" class="center-block"></a>
      	</div>
      	<div class="col-xs-6">
      		<a href="http://www.otracosa.org/" target="_blank"><img src="{{ asset('img/ocn.jpg')}}" alt="Otra Cosa Network" width="30%" class="center-block"></a>
      	</div>
      </div>
    </div>
  </div>  

  <div class="yellow">
  	<div class="container">
	    <div class="row margin-bottom-lg">
	    	
	      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <h2 class="raver-text text-left visible-lg">VOLUNTEERING</h2>
          <h3 class="raver-text text-left visible-sm visible-md">VOLUNTEERING</h3>
          <h3 class="raver-text text-left visible-xs">VOLUNTEERING</h3>
          
          <p class="text-justify margin-bottom-lg">When you volunteer, you agree to give your time, labor, and skills as a means of helping someone else, Volunteering is a great way for a foreigner to fully immerse himself/herself into global reality and to work with local people to make a positive change in their lives. <br><br>Just let us know what kind of continent you'd like to travel and which type of causes want to support. Then different organizations may contact you and give you information about their aid programs.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	        <img src="{{ asset('img/volunteers-01.png') }}" alt="Volunteers" width="60%" class="center-block vertical" >
	      </div>
	    </div>
	    <div class="col-xs-12 text-left margin-bottom-lg ">
	        <a href="{{ route('volunteers') }}"><button type="button" class="btn btn-primary btn-lg btn-custom">Be a volunteer,</button></a>
	    </div>
		</div>
  </div> 
@stop