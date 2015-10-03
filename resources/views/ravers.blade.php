@extends('layouts.default')

@section('content')
    
  <div class="bg_ravers"></div>
  <div class="green">
    <div class="container ">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 margin-bottom-lg">
          <h2 class="textvideo visible-lg">WE ALL  TOGETHER CAN MAKE A WORLD BETTER</h2>
          <h3 class="textvideo visible-sm visible-md">WE ALL  TOGETHER CAN MAKE A WORLD BETTER</h3>
					<h3 class="textvideo visible-xs bg-imagen">WE ALL  TOGETHER CAN MAKE A WORLD BETTER</h3>
          <p class="text-center text-standar texto-blanco margin-bottom-lg">If we say that  the internet  pushed the development of this culture, we are not wrong, but if we look beyond our "Smartphones" we can realize that this culture and this industry grew of hand long before the internet and mobile devices were affordable worldwide. It grew thanks to easy access to water both for drinking and hygiene for use in bathrooms.</p>
      </div>
		</div>
  </div>
	
	<div class="yellow">
  	<div class="container">
  	    <div class="row margin-bottom-lg">
  	    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  	        <img src="{{ asset('img/wedm.png') }}" alt="Water EDM" width="60%" class="center-block vertical" >
  	      </div>
  	      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <h2 class="raver-text text-left visible-lg">Water for the EDM seed</h2>
            <h3 class="raver-text text-left visible-sm visible-md">Water for the EDM seed</h3>
            <h3 class="raver-text text-left visible-xs">Water for the EDM seed</h3>
            
            <p class="text-justify margin-bottom-lg">As we already know in early 70´s, countries like USA and UK, etc  where  the EDM industry was growing, lacked of water scarcity and illness related. 
						<br><br>Water plays a huge role in the festival scene, as the safety of both attendees and the  environment is a legitimate concern. As the festival industry continually develops into the multi-billion dollar industry it has become, its environmental impact has spiraled out of control.</p>
          </div>
  	    </div>
  		</div>
  	</div>	

  	<div class="white">
      <div class="container">
        <h2 class="text-center">Average population</h2>
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
       			<p class="text-center text-estandar">According to the annual report in a study DANCEONOMICS between the ages of 20-34 years in 27 countries has grown tremendously this culture, we are a community of almost 40 MILLION RAVERS</p>
        	</div>
        </div>
        
        <div class="row">
        	<!-- Carousel ================================================== -->
    	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    	      <div class="carousel-inner" role="listbox">
    	        <div class="item active">
    	          <div class="container">
    	            <div class="carousel-caption">
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/USA.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>63.9 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Brazil.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>31.3 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/United-kingdom.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>12.3 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Germany.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>14.6 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Canada.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>7.0 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/France.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>11.7 mill.</p>
    	              </div>
    	            </div>
    	          </div>
    	        </div>
    	        <div class="item">
    	          <div class="container">
    	            <div class="carousel-caption">
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Italy.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>10.9 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Japan.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>23.0 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Spain.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>9.8 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Australia.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>4.8 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Russia.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>4.0 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Netherlands.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>3.0 mill.</p>
    	              </div>
    	            </div>
    	          </div>
    	        </div>
    	        <div class="item">
    	          <div class="container">
    	            <div class="carousel-caption">
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Mexico.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>27.3 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/India.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>247.1 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/South-korea.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>10.8 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Belgium.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>2.0 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Czech-Republic.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>2.3 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Sweden.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>1.7 mill.</p>
    	              </div>
    	            </div>
    	          </div>
    	        </div>
    	        <div class="item">
    	          <div class="container">
    	            <div class="carousel-caption">
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/China.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>7.9 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Chile.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>1.5 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Turkey.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>3.4 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Denmark.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>0.9 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Norway.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>0.9 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/New-zealand.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>0.8 mill.</p>
    	              </div>
    	            </div>
    	          </div>
    	        </div>
    	        <div class="item">
    	          <div class="container">
    	            <div class="carousel-caption">
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/Argentina.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>0.6 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/United-arab-emirates.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>0.8 mill.</p>
    	              </div>
    	              <div class="col-xs-2">
    	              	<img src="{{ asset('img/flag/South-africa.png')}}" alt="flag" width="100%">
    	              	<p class="text-center">Population<br>0.8 mill.</p>
    	              </div>
    	            </div>
    	          </div>
    	        </div>
    	      </div>
    	    </div><!-- /.carousel -->
        </div>
      </div>
    </div> 

    <div class="blue">
      <div class="container">
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <h2 class="water text-left visible-lg">How much water we drink?</h2>
            <h3 class="water text-left visible-sm visible-md">How much water we drink?</h3>
            <h3 class="water text-left visible-xs">How much water we drink?</h3>
            <p class="text-justify texto-blanco margin-bottom-lg">According MayoClinic.org is estimated that women should consume 2.2 liters of water daily, while it is estimated that men should consume about three liters a day. Most festivals sell plastic water bottles 20 fluid ounces (equivalent to 0591 liters), which means that every raver should drink at least four bottles of water each day. <br><br>A study at the Glastonbury Festival of water consumed, said they had a total audience of 730,000 in five days. Glastonbury uses 10,000 m3 during the event. So 10000000 (Lts) / 730000 (Hearing) = 13.69 l / 4 nights of festival = 3.4 liters of water every day or 6 bottles of water each day festival</p>
          </div>
	        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	          <img src="{{ asset('img/water.png') }}" alt="Water Planet" width="60%" class="center-block vertical" >
	        </div>
      	</div>
    	</div>
    </div>   
  
		<div class="green">
      <div class="container">
      	<div class="row">
	        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 margin-bottom-lg">
	          <h2 class="textvideo_no_bottom visible-lg">Our environmental impact <br><small>*Recyclables</small></h2>
	          <h3 class="textvideo_no_bottom visible-sm visible-md">Our environmental impact <br><small>*Recyclables</small></h3>
						<h3 class="textvideo_no_bottom visible-xs bg-imagen">Our environmental impact <br><small>*Recyclables</small></h3>
	          <p class="text-center text-standar texto-blanco margin-bottom-lg">A raver consume on average 6 bottles per day, multiplied by 4 days = 24 plastic bottles by raver. <br>This multiplied by the total population of each event is a shocking number of plastic bottles.</p>
	      	</div>
      	</div>
      	<div class="row">
      		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
      			<img src="{{ asset('img/r1.png') }}" alt="Transport" width="80%" class="center-block">
      			<p class="text-center texto-blanco">6.74 liters of water are used for the production and transport of 1lt. Bottled water</p>
      		</div>
      		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
      			<img src="{{ asset('img/r2.png') }}" alt="Bottle" width="80%" class="center-block">
      			<p class="text-center texto-blanco">Consumers bounce at least 24 BILLION away plastic bottles annually in the US alone</p>
      		</div>
      		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
      			<img src="{{ asset('img/r3.png') }}" alt="Truck" width="80%" class="center-block">
      			<p class="text-center texto-blanco">Every week nearly 37,800 18-wheelers are on the way to the delivery of water through the US emitting harmful pollutants in the air</p>
      		</div>
      		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
      			<img src="{{ asset('img/r4.png') }}" alt="Barril" width="80%" class="center-block">
      			<p class="text-center texto-blanco">17,000 barrels of oil are only used for the production of plastic bottles within the US.</p>
      		</div>
      	</div>
      	<div class="row margin-bottom-lg">
      		<div class="col-xs-1"><img src="{{ asset('img/bottle.png') }}" alt="Barril" width="30%" class="center-block"></div>
      		<div class="col-xs-10"><p class="text-center texto-blanco margin-top">1 BOTTLE WITH WATER IS 2000 TIMES MORE EXPENSIVE THAN A GLASS WITH WATER !!!</p></div>
      		<div class="col-xs-1"><img src="{{ asset('img/bottle.png') }}" alt="Barril" width="30%" class="center-block"></div>
      	</div>
        
      </div>
    </div> 
    <div class="white">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <h2 class="text-left visible-lg">Non-recyclable Waste <br><br><small>TENTS</small></h2>
            <h3 class="text-left visible-sm visible-md">Non-recyclable Waste <br><br><small>TENTS</small></h3>
            <h3 class="text-left visible-xs">Non-recyclable Waste <br><br><small>TENTS</small></h3>
            
            <p class="text-justify margin-bottom-lg text-estandar">Each year tens of thousands of tents and other camping goods are discarded by festival goers worldwide. On average 1 in 5 tents are left outdoors. If we talk only 10 of the most popular festivals, where a number of not less than 100,000 people attending tents totaling 1,000,000 of which 100,000 are abandoned. <br>
            <br>1 tent = $ 30.00 * 100,000 (abandoned) = $ 3,000,000
						<br>1 tent = 4 kg of waste * 100,000 = 400,000 tons of waste.
						<br>The equivalent: 1,000,000 beers / weight of 100 elephants</p>  
          </div> 
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <img src="{{ asset('img/carpa.png') }}" alt="Tents" width="60%" class="center-block vertical margin-bottom-lg" >
          </div>
    		</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <img src="{{ asset('img/piles.png') }}" alt="Tents" width="60%" class="center-block  margin-top-lg margin-bottom-lg" >
          </div>
    			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <h2 class="text-left visible-lg"><small>BATTERIES (PILES)</small></h2>
            <h3 class="text-left visible-sm visible-md"><small>BATTERIES (PILES)</small></h3>
            <h3 class="text-left visible-xs"><small>BATTERIES (PILES)</small></h3>
            
            <p class="text-justify margin-bottom-lg text-estandar">As we know, at a festival is essential cell phone use for various reasons and the lack of electricity in the camps opted for the resource easier to charge our cell. <br>
            <br>1 alkaline battery pollutes at least 175,000 liters of water.
            <br>1 Battery botton pollutes at least 600,000 liters of water.
            <br>Each raver used at least one box of 20 batteries in each festival, imagine how much we are polluting the environment?</p>  
          </div> 
          <div class="col-xs-12 text-center">
        		<a href="{{ route('donate') }}"><button type="button" class="btn btn-success btn-lg btn-custom">Make a Kandi Trade</button></a>
        	</div>
    		</div>

    	</div>
    </div>
    
@stop