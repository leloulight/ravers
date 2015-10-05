@extends('layouts.default')

@section('content')
    <div class="homepage-hero-module">
        <div class="video-container">
            
            <div class="title-container">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 " >
                  <h2 class="textvideo visible-lg">International Ravers Charity represents the EDM Community worldwide to help in solving one of the most critical problems on the planet today: Water Scarcity in Developing Countries</h2>
                  <h3 class="textvideo visible-sm visible-md">International Ravers Charity represents the EDM Community worldwide to help in solving one of the most critical problems on the planet today: Water Scarcity in Developing Countries</h3>

                  <h3 class="textvideo visible-xs">International Ravers Charity represents the EDM Community worldwide to help in solving one of the most critical problems on the planet today: Water Scarcity in Developing Countries</h3>
                </div>

                <div class="col-xs-12 text-center margin-bottom-lg margin-top-lg">
                  <button type="button" class="btn btn-success btn-lg textvideo">WATCH THE VIDEO</button>
                </div>
            </div>
            
            <div class="filter"></div>
            
            <video autoplay loop class="fillWidth hidden-xs">
                <source src="{{ asset('video/heroes_short.mp4') }}" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
            
            <div class="poster hidden">
                <img src="{{ asset('img/videoframe.jpg')}}" alt="">
            </div>

        </div>
    </div>


    <div class="c_programs">
        <div class="container">
            <h2 class="text-center title-white margin-top">Our <strong>charity</strong> programs</h2>
            <div class="row margin-top-lg margin-bottom-lg">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="title-white text-center" >Water accesibility program</h4>
                    <video controls poster="img/videoframe.jpg" width="100%" class="center-block shadow">
                        <source src="video/heroes_hd_final.mp4" type="video/mp4">
                    </video>
                    <h4 class="title-white text-center">This program aims are bring free water refill for every community in need.</h4>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="title-white text-center" >Sanitation & hygiene program</h4>
                    <video controls poster="img/videoframe1.jpg" width="100%" class="center-block shadow">
                        <source src="video/warriors.mp4" type="video/mp4">
                    </video>
                    <h4 class="title-white text-center">The dignity  of a toilet, sink and a shower must be for everyone!</h4>
                </div>
                <div class="col-xs-12 text-center margin-top-lg ">
                    <a href="{{ route('donate' )}}"><button type="button" class="btn btn-success btn-lg btn-custom">Donate</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="yellow">
        <div class="container">
            <h2 class="text-center title-white margin-top-lg"><strong>How</strong> we invest your <strong>Donations</strong></h2>
            <div class="row margin-bottom-lg">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="title-white text-center" >EXPLORE</h3>
                    <img src="{{ asset('img/explore.png') }}" alt="Explore" width="70%" class="center-block" >
                    <h4 class="title-white text-center">We explore new causes to make strategic alliance with organizations working more than 2 years in the field.</h4>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="title-white text-center" >CHARITIES</h3>
                    <img src="{{ asset('img/billete.png') }}" alt="Charities" width="70%" class="center-block" >
                    <h4 class="title-white text-center">Our team analyze their projects and once approved we proceed to fund and maintain over time.</h4>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="title-white text-center" >KANDI TRADE</h3>
                    <img src="{{ asset('img/isologo.png') }}" alt="Kandi Trade" width="70%" class="center-block" >
                    <h4 class="title-white text-center">Yes...<br>WE CAN DO ANYTHING!!!</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="white margin-bottom">
        <div class="container">
            <h2 class="text-center title-green margin-top-lg"><strong>Donate</strong> the same amount of<strong> water</strong> that <br>you <strong>drink</strong> in your last <strong>rave.</strong><br>(<small class="from">from</small> $0.50 per liter)</h2>
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
                    <h4 class="title-green text-center"><strong class="hashtag">#iRavers</strong> Lorem ipsum dolor sit amet, consectetur  beatae.</h4>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{ asset('img/profile2.png') }}" alt="Charities" width="70%" class="center-block" >
                    <h4 class="title-green text-center"><strong class="hashtag">#iRavers</strong> Lorem ipsum dolor sit amet, consectetur  beatae.</h4>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{ asset('img/profile3.png') }}" alt="Candy Trade" width="70%" class="center-block" >
                    <h4 class="title-green text-center"><strong class="hashtag">#iRavers</strong> Lorem ipsum dolor sit amet, consectetur  beatae.</h4>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 margin-bottom-lg">
                    <img src="{{ asset('img/profile4.png') }}" alt="Candy Trade" width="70%" class="center-block" >
                    <h4 class="title-green text-center"><strong class="hashtag">#iRavers</strong> Lorem ipsum dolor sit amet, consectetur  beatae.</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-6">
                    <h2 class="toilet text-left visible-lg">It wouldn't be possible to make a rave with no toilets or sinks. Would you like to join us in providing the dignity of a toilet for those people in developing countries</h2>
                    <h3 class="toilet text-left visible-sm visible-md">It wouldn't be possible to make a rave with no toilets or sinks. Would you like to join us in providing the dignity of a toilet for those people in developing countries</h3>
                    <h3 class="toilet text-left visible-xs">It wouldn't be possible to make a rave with no toilets or sinks. Would you like to join us in providing the dignity of a toilet for those people in developing countries</h3>
                    <div class="col-xs-12 text-center margin-bottom">
                        <button type="button" class="btn btn-success btn-lg ">Help a Warrior</button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <img src="{{ asset('img/toilet.jpg') }}" alt="Toilet Dignity" width="100%" class="center-block" >
                </div>
                 
            </div>
        </div>
    </div>

@stop