@extends('layouts.default')

@section('content')
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
            <source src="video/heroes_short.mp4" type="video/mp4">
            
        </video>
    </div>
    <div class="video">
        <div class="container">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                <h2 class="textvideo visible-lg">International Ravers Charity represents the EDM COMMUNITY worldwide facing the main problem in this planet now a days: WATER  SCARCITY IN DEVELOPING COUNTRIES</h2>
                <h3 class="textvideo visible-sm visible-md">International Ravers Charity represents the EDM COMMUNITY worldwide facing the main problem in this planet now a days: WATER  SCARCITY IN DEVELOPING COUNTRIES</h3>

                <h3 class="textvideo visible-xs bg-imagen">International Ravers Charity represents the EDM COMMUNITY worldwide facing the main problem in this planet now a days: WATER  SCARCITY IN DEVELOPING COUNTRIES</h3>

            </div>

            <div class="col-xs-12 text-center">
                <button type="button" class="btn btn-success btn-lg textvideo">WATCH THE VIDEO</button>
            </div>

        </div>
    </div>
   

@stop