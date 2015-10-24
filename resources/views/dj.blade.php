@extends('layouts.default')

@section('content')
	<div class="white">
      <div class="container">
        <h2 class="text-pink visible-lg"><strong>DJ</strong> BIRTHDAYS <strong>CHALLENGE</strong></h2>
        <h3 class="text-pink visible-sm visible-md"><strong>DJ</strong> BIRTHDAYS <strong>CHALLENGE</strong></h3>
				<h3 class="text-pink visible-xs bg-imagen"><strong>DJ</strong> BIRTHDAYS <strong>CHALLENGE</strong></h3>
        
        <div class="row">
        		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        			<p class="text-center text-estandar">The Raver's International Birthday Challenge is about engaging DJ and their fans to gift their birthday to the greater good of providing free water around the world, just like at our raves. Whether you are a famous DJ or an Enthusiastic Raver, you can get involved by subscribing and inviting your friends, family, and fans to participate for your birthday. <br>Together, our birthdays will transform communities in poverty into rave. Free water refills and clean water everywhere!</p>
        		</div>
        		<div class="col-xs-12">
        			 <img src="{{ asset('img/tornamesa-01.png') }}" alt="DJ Brithday" width="4%" class="center-block margin-bottom-lg" >
        		</div>
        </div>
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        		<p class="text-center margin-center-lg">If you're a DJ and you want to suppor our causes subscribe and we send you details of how it works and how to subscribe to our calendar.</p>
        		<p class="pink text-center texto-lg">Subscribe with <br>your email</p>
        	</div>
        	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        		<p class="text-center margin-center-lg">If you're a fan and you would  love to give a gift to your favorite DJ on the day of his birthday, help him to help as many people as possible. Subscribe if you like the idea and help us to convince them to participate in this great project.</p>
        		<p class="pink text-center texto-lg">Sign a <br>petition.</p>
        	</div>
        	<div class="col-xs-12">
        			 <img src="{{ asset('img/tornamesa-01.png') }}" alt="DJ Brithday" width="4%" class="center-block margin-bottom-lg" >
        		</div>
        </div>
        
      </div>
  </div>
  <div class="bg_dj"></div>
@stop