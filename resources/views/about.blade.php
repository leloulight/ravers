@extends('layouts.default')

@section('content')
    
  <div class="bg_about"></div>
  
	<div class="white">
    <div class="container">
      <div class="row margin-top-lg margin-bottom-lg">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        	<h2 class="text-center ">MISSION</h2>
					
      		<p class="text-center text-estandar margin-center">Our mission is fund projects of water, hygiene and sanitation worldwide. Bringing free water refill for every community in need.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        	<h2 class="text-center ">VISION</h2>

       		<p class="text-center text-estandar margin-center">Our vision is to make every community in need like a rave, where free water refill is everywhere.</p>
       </div>
      </div>
    </div>
  </div>
	<div class="blue">
    <div class="container">
      <div class="row margin-bottom-lg">
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
        		<img src="{{ asset('img/ema.jpg')}}" alt="flag" width="30%" class="center-block">
        	</div>
        	<div class="col-xs-6">
        		<img src="{{ asset('img/ocn.jpg')}}" alt="flag" width="30%" class="center-block">
        	</div>
        </div>
      </div>
    </div>   
@stop