@extends('layouts.default')

@section('content')
  <div class="white">
    <div class="container">
      <div class="row">
        <!-- New Task Form -->
        <div class="col-sm-12 margin-top-lg margin-bottom-xlg">
          <form action="/task" method="POST" class="form-horizontal">
              {{ csrf_field() }}

              <!-- Task Name -->
              <div class="col-sm-6 col-sm-offset-3">
                <p>
                  {{ $user }} <br>
                  Para que disfrutes al 100% la experiencia de la plataforma necesitamos que registres un e-mail válido. <br>
                  De esta manera podremos darte una mejor atención, enviarte notificaciones del curso, avisarte cuando esté disponible el examen de certificación y algunas sorpresas que tendremos para tí. 
                </p>
              </div>
              <div class="form-group col-sm-12">
                  <label for="emailInput" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-6">
                      <input type="text" name="emailInput" id="emailInputId" class="form-control" placeholder="@ Email">
                  </div>
              </div>
              
              <!-- Add Task Button -->
              <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-6">
                      <button type="submit" class="btn btn-success">
                          <i class="fa fa-plus"></i>Agregar Email
                      </button>
                  </div>
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>  
@stop