@extends('layouts.base')


@section('content')
<section class="loguin-Usuario">
    <div class="container">
        <div class="row"><br><br>
        <h2>MI CUENTA</h2>
                <hr>
            <div class="col-md-4 col-xs-11 col-sm-5 formu">
                 <form  method="POST" action="/login" >
                 {{ csrf_field() }}
                        <h3>Iniciar Sesión</h3><br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <h5>Correo electrónico: <strong>*</strong></h5>
                           <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                              @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <h5>Contraseña: <strong>*</strong></h5>
                           <input id="password" type="password" class="form-control" name="password" required>

                           @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>
                        <div class="form-group">
                           
                           <input type="submit" name="" class="btn btn-primary" value="Iniciar Sesión">
                        </div>
                        <div class="form-group">
                        <br><br><br><br><a href="">¿Olvidaste tu contraseña?</a>
                        </div>
                    </form>               
              
            </div>
            
            <div class="col-md-4 col-xs-11 col-sm-6 formu">
               <form  method="POST" action="/registro" >
                 {{ csrf_field() }}
                        <h3>¿Aún no estas resgistrado?</h3><br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <h5>Correo electrónico: <strong>*</strong></h5>
                           <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                           @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <h5>Contraseña: <strong>*</strong></h5>
                           <input id="password" type="password" class="form-control" name="password" required>

                           @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                           <div class="form-group">
                           <input type="submit" name="" class="btn btn-primary" value="Aceptar Registro">
                           </div>
                        <div class="form-group">
                        <br><br><br><br>
                        <a href=""><strong>Terminos y condiciones.</strong></a>
                        </div>
                </form> 
            </div>
            <div class="col-md-3 col-xs-11 informacion">
                <div class="row">
                    <div class="col-md-12 text-center informacion-titulo">
                        <h3>Por cada compra realizada recibes puntos que puedes utilizar para pagar tu proximo arreglo. </h3>
                    </div>
                    <div class="col-md-12 text-center informacion-sec1">
                        <h3>¿Cómo funciona?</h3>
                        <p>1. Resgistrate en nuestra Página.</p>
                        <p>2. Realiza una compra desde tu cuenta.</p>
                        <p>3. Por cada compra, recibes puntos dependiendo del valor de la compra realizada.</p>
                        <p>4. Cada punto ganado equivale a $1 peso.( 1 COP)</p>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
    
</section>

@stop