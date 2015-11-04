@extends('layouts.default')

@section('content')
    <div class="yellow">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 margin-top-lg margin-bottom-xlg">
                    <form action="/task" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="col-sm-6 col-sm-offset-3">
                            <h3 class="texto-blanco text-uppercase">{{ $user }}</h3>
                            <p class="text-justify texto-blanco">Para que disfrutes al 100% la experiencia de la plataforma necesitamos que registres un e-mail válido.<br>De esta manera podremos darte una mejor atención, enviarte notificaciones del curso, avisarte cuando esté disponible el examen de certificación y algunas sorpresas que tendremos para tí.</p>
                            <input type="text" name="email" id="email" class="form-control" placeholder="@ Email">
                            <input type="hidden" name="name" id="name" class="form-control" value="{{ $user }}">
                            <input type="hidden" name="id" value="{{ $id }}">
                            <br>
                            <button type="submit" class="btn btn-success">Agregar Email</button>
                            <br/>
                            <img src="{{ asset('img/isologo.png') }}" width="40%" alt="" class="center-block img-responsive"/>
                            <h2 class="text-center texto-blanco text-uppercase">international ravers charity</h2>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop