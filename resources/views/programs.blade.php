@extends('layouts.default')

@section('content')
    
  <div class="bg_programs">
  	<div class="container ">
      <div class="col-xs-12 ">
          <h2 class="text-program visible-lg"><strong>HOW</strong> WE <strong>WORK</strong></h2>
          <h3 class="text-program visible-sm visible-md"><strong>HOW</strong> WE <strong>WORK</strong></h3>
					<h3 class="text-program visible-xs bg-imagen"><strong>HOW</strong> WE <strong>WORK</strong></h3>
          
      </div>
      <div class="col-xs-10 col-sm-10 col-md-8 col-lg-6">
      	<p class="text-standar texto-lg texto-blanco">We invest the money we raise into organizations with more than 2 years of experience developing water projects around the world. Our team works closely to ensure that every dollar is accounted for and then provides reports back to our donors.</p>
      </div>
		</div>
  </div>
  <div class="green">
    <div class="container ">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 margin-bottom-lg">
          <h3 class="textvideo visible-lg"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBERS OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVAL WORLDWIDE.</strong></h3>
          <h4 class="textvideo visible-sm visible-md"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBERS OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVAL WORLDWIDE.</strong></h4>
					<h4 class="textvideo visible-xs bg-imagen"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBERS OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVAL WORLDWIDE.</strong></h4>
          <h2 class="text-center texto-blanco" id="warriors">WE CAN DO ANITHING?</h2>
      </div>
      <div class="row margin-top-lg margin-bottom-lg">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="title-white text-center" >Water accesibility program</h4>
                    <video controls poster="img/videoframe.jpg" width="80%" class="center-block shadow">
                        <source src="video/heroes_hd.mp4" type="video/mp4">
                    </video>
                    <p class="title-white text-justify margin-center margin-top">- This program will help to build wells and also water filters for those communities and schools who have pipes already installed. <br>- For the schools in ppor communities we will build "free water refill areas" whit "elkay water filers" and we also contribute to eradicate the pollution by plastic bottles day by day. <br>- Water hand filters will be distribute in the schools whit no pipes.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="title-white text-center" >Sanitation & hygiene program</h4>
                    <video controls poster="img/videoframe1.jpg" width="80%" class="center-block shadow">
                        <source src="video/warriors.mp4" type="video/mp4">
                    </video>
                    <p class="title-white text-justify margin-center margin-top">- This program will build ecologic toilets and sinks in communities in poverty. <br>- The ecologic toilets generate fertilizer for the community crops (with a family of 6 is estimated to generate 5 bags of fertilizer per year) and generate better hygiene which therefore generates better habits and better human beings. <br>- There are more cellphones than toilets now a days, did you know that?</p>
                </div>
                <div class="col-xs-12 text-center margin-top-lg ">
                    <a href="{{ route('donate' )}}"><button type="button" class="btn btn-danger btn-lg btn-custom">Donate</button></a>
                </div>
            </div>
		</div>
  </div>
	<div class="white">
      <div class="container">
        <h2 class="text-blue visible-lg"><strong>Where</strong> we <strong>work.</strong></h2>
        <h3 class="text-blue visible-sm visible-md"><strong>Where</strong> we <strong>work.</strong></h3>
				<h3 class="text-blue visible-xs bg-imagen"><strong>Where</strong> we <strong>work.</strong></h3>
        
        <div class="row">
        		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        			<p class="text-center text-estandar">Our aims are to help as many people as we can around the world. now we're working on the alliances of the organizations that need our support. join us!</p>
        		</div>
        		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        			 <img src="{{ asset('img/mapablue.png') }}" alt="" width="100%" class="center-block margin-bottom-lg" >
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