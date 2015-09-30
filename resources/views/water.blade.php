@extends('layouts.default')

@section('content')
    
    <div class="bg_water">
        <div class="container">
            
        </div>
    </div>
    <div class="blue">
        <div class="container">
            <div class="row">
            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="{{ asset('img/gota.png') }}" alt="Water Planet" width="60%" class="center-block vertical" >
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <h2 class="toilet text-left visible-lg">Planet Water</h2>
                    <h3 class="toilet text-left visible-sm visible-md">Planet Water</h3>
                    <h3 class="toilet text-left visible-xs">Planet Water</h3>
                    
                    <p class="text-justify texto-blanco margin-bottom-lg">This planet and all who inhabit in it, are made by water, since 71% of our surface (oceans, rivers, glaciers), 70% of our bodies and even what we eat, wear and do. In short words the water is hidden even in our thoughts. <br><br>Of this 71%:  97% is salt (oceans) and the remaining 3% (drinkable) distribute it in:     Agriculture 70%  - 22% industry - 8% to cover our basic needs. <br><br>100 years ago, big cities like Rotterdam, London, Montereal, Paris, New York, Buenos Aires, Shanghai, Tokyo, Chicago, and Hong Kong were centers infectious diseases. The death rate in children was the same that exists today in Africa. In general, water and sanitation reforms were those that allowed humans to progress forward.</p>
                    
                </div>
                
                 
            </div>
        </div>
    </div>
   	
   	<div class="white">
      <div class="container">
        <h2 class="text-center">Current Crisis</h2>
        <h5 class="text-center title-green">“More people have a cellphone than a toilet”</h5>
        
        <div class="row">
        		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        			<p class="text-center text-estandar">A glass of water, a shower and a toilet are 3 things that 1 in 9 people have no access on this planet. 2.5 billion people lack access to improve their sanitary facilities, while 786 million of them lack access to drinking water.</p>
        		</div>
        		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        			 <img src="{{ asset('img/mapa.png') }}" alt="Water Planet" width="100%" class="center-block margin-bottom-lg" >
        		</div>
        </div>
        <div class="row">
        	<div class="col-xs-12 col-md-12 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1">
        		<p>"Africa - 345 million people without access to drinking water"</p>
        	</div>
        	<div class="col-xs-12 col-md-12 col-md-2 col-lg-2">
        		<p>"Latin América and Caribbean 52 millions"</p>
        	</div>
        	<div class="col-xs-12 col-md-12 col-md-2 col-lg-2">
        		<p>"Developed Countries 13 millions"</p>
        	</div>
       		<div class="col-xs-12 col-md-12 col-md-2 col-lg-2">
        		<p>"South west and central Asia  196 millions"</p>
       		</div>
       		<div class="col-xs-12 col-md-12 col-md-2 col-lg-2">
        		<p>"South East, East Asia and Oceania 200 millions"</p>
       		</div>
        </div>
      </div>
    </div>

    <div class="green">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <h2 class="toilet text-left visible-lg">Negative Impact</h2>
            <h3 class="toilet text-left visible-sm visible-md">Negative Impact</h3>
            <h3 class="toilet text-left visible-xs">Negative Impact</h3>
            
            <p class="text-justify texto-blanco margin-bottom-lg text-estandar">
            - "Lack of involvement of people cause 50% of projects fail"
            <br>- People can live without food for a month but not more than a week without water.
            <br>- More than 3.4 million people die each year from problems related to hygiene because of the misuse of water. About 99% of deaths occur in developing countries. 
            <br>- An estimated 1.5 million children under 5 die from diarrhea worldwide, that means 4,100 children per day (172 per hour - 3 per minute)
            <br>- Lack of access to clean water and sanitation kills children at a rate equivalent of a jumbo jet crashing every four hours. The water and sanitation  crisis claims more lives through disease than any war claims through guns</p>  
          </div> 
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <img src="{{ asset('img/negative.png') }}" alt="Water Planet" width="60%" class="center-block vertical margin-bottom-lg" >
          </div>   
        </div>
      </div>
    </div>

    <div class="white">
      <div class="container">
        <h2 class="text-center">Positive Impact</h2>
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        		<img src="{{ asset('img/21p.png') }}" alt="Water Planet" width="70%" class="center-block margin-top-lg margin-bottom-lg" >
        		<p class="text-center margin-bottom-lg text-estandar">Clean water alone can reduce water – related deaths by 21%</p>
					</div>
        	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        		<img src="{{ asset('img/37p.png') }}" alt="Water Planet" width="70%" class="center-block margin-top-lg margin-bottom-lg" >
        		<p class="text-center margin-bottom-lg text-estandar">Clean water alone can reduce water – related deaths by 37%</p>
					</div>
        	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        		<img src="{{ asset('img/35p.png') }}" alt="Water Planet" width="70%" class="center-block margin-top-lg margin-bottom-lg" >
        		<p class="text-center margin-bottom-lg text-estandar">Clean water alone can reduce water – related deaths by 35%</p>
					</div>

        	<div class="col-xs-12 panel panel-default text-center">
        		<p class="text-center text-estandar">Invest in improving access to safe water contributes to economic growth. For every $ 1 invested the World Health Organization (WHO) estimates a return of $ 3- $ 34 US dollars to the global economy.</p>
        		<button type="button" class="btn btn-success btn-lg btn-custom">Donate</button>
        	</div>
        
        </div>
        
      </div>
    </div>

@stop