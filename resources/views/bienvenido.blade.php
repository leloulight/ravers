@extends('layouts.default')

@section('content')
    <div class="yellow">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 margin-top-lg margin-bottom-xlg">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h3 class="texto-blanco text-uppercase">Welcome {{ $user }}</h3>
                        <p class="text-justify texto-blanco">We are working to provide you the best experience and keep you informed of our progress. <br>Thank you for registering with us
                        </p>
                        <br>
                        <img src="{{ asset('img/isologo.png') }}" width="40%" alt="" class="center-block img-responsive"/>
                        <h2 class="text-center texto-blanco text-uppercase">international ravers charity</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop