@extends('layouts.base')

@section('content')
<section class="cuentaUsuario">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cUsuario-1">
                <div class="col-md-6 text-left">
                    <h4>Bienvenido:<strong>{{$user->email}}</strong></h4>
                </div>
                <div class="col-md-6  btn-salir">
                    <!--formulario para cerrar sesión -->
                    <form action="/logout" method="POST"> 
                    {{ csrf_field() }}
                        <input type="submit" name="" value="Salir">
                    </form>
                    <!--fin formulario para cerrar sesión -->
                </div>
            </div>
            <!-- -->
            <div class="col-md-12">
                <div class="col-md-4  text-center">
                    <div class="item-panel">                      
                        <span class="fa fa-plus fa-3x"></span>
                        <h4><a href="/arreglos">NUEVA COMPRA</a></h4>
                        <p>
                            Regala felicidad a una persona Hoy.!
                            Ven y escoge el mejor regalo.
                        </p>
                    </div>
                    
                </div>
                <div class="col-md-4 text-center">
                    <div class="item-panel">
                       <span class="fa fa-list fa-3x"></span>
                         <h4><a href="#responsivess" data-toggle="modal">MIS COMPRAS</a></h4>
                        <p>
                            Toda la información de tus compras
                            realizadas Aquí.
                        </p>
                    </div>
                    
                </div>
                <div class="col-md-4  text-center">
                    <div class="item-panel">
                        <span class="fa fa-id-card-o fa-3x"></span>
                        <h4><a href="#modalDatos" data-toggle="modal">MIS DATOS</a></h4>
                        <p>
                            Desde aquí pordrás ver y editar toda 
                            tu información personal.
                        </p>
                    </div>
                    
                </div>

            </div>    
            <!-- -->
            <div class="col-md-12">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <div class="item-panel">
                         <span class="fa fa-star fa-3x"></span>
                        <h4><a href="#misPuntos" data-toggle="modal">MIS PUNTOS</a></h4>
                        <p>
                            Entra y mira tus puntos de recompensa.
                        </p>
                    </div>
                    
                </div>
                <div class="col-md-4  text-center">
                    <div class="item-panel">
                        <span class="fa fa-info-circle fa-3x"></span>
                        <h4><a href="#ayuda" data-toggle="modal">¿NECESITAS AYUDA?</a></h4>
                        <p>
                            FAQ Preguntas Frecuentes
                        </p>
                    </div>
                    
                </div>
            </div>
            <!-- -->
        </div>
        
    </div>
    
</section>
<!-- VENTANA MODAL MIS COMPRAS -->
<div id="responsivess" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
            <h3>MIS COMPRAS REALIZADAS</h3>
          <div class="col-md-10 col-md-offset-1">
            <!-- un detalle-->
            @if($user->client)
              @foreach($user->client->carts as $carrito)

                @foreach($carrito->details as $detail)
                    <div class="row">
                        <hr>
                            <div class="col-md-3">
                                <h5>{{$carrito->fecha_compra}}</h5>
                            </div>
                            <div class="col-md-4">
                                <h5>{{$detail->product->nombre}}</h5>
                            </div>
                            <div class="col-md-5">
                                <h5>{{$detail->precio}}</h5>
                            </div>
        
                        <hr>
                    </div>
                @endforeach
              @endforeach
            @endif

          


          
            
            <!--fin un detalle -->
            <!-- un detalle-->

            
            <!--fin un detalle -->

          </div>
     </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
        </div>
  </div>
 
</div>

<!-- FIN VENTANA MODAL MIS COMPRAS-->

<!--VENTANA MODAL DATOS DEL USUARIO -->
<div id="modalDatos" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
    <div class="modal-body text-center">
    @if($user->client)

    {!!Form::model($user->client,['route'=>['clientes.update',$user->client->id],'method'=>'PUT'])!!}
            <!--aqui comienza el form --> 
            @include('plantillas.formCliente')
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
                {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
            </div>
            <!--aqui termina el form --> 
        {!!Form::close()!!}

    @else

    <!--<form method="POST" name="" id="">-->
    {!!Form::open(['route'=> 'clientes.store', 'method'=>'POST'])!!}
            <!--aqui comienza el form --> 
            @include('plantillas.formCliente')

            <div class="modal-footer">

                <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
                <!--<button type="button" class="btn btn-primary">Guardar</button>-->
                 {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
            </div>
            <!--aqui termina el form --> 
        <!--</form>-->
        {!!Form::close()!!}
    @endif 
    
        
    </div>
 
</div>


<!-- FIN VENTANA MODAL DATOS DEL USUARIO -->

<!-- VENTANA MODAL MIS PUNTOS-->
<div id="misPuntos" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center puntosRedimir">
            
          <div class="col-md-6 col-md-offset-3">
           <h4><strong>Tu eliges</strong> como <strong>redimir</strong> tus <strong>puntos</strong></h4>
          </div>
          <div class="col-md-10 col-md-offset-1 puntosRedimir-titulo">
            <h3>Usa tus puntos como Dinero</h3>
            </div>
        <div class="col-md-4 col-md-offset-4">
         <img src="/img/redimir.png" class="img-responsive">
        </div>
     </div>
     <div class="row">
         <div class="col-md-12 info-puntosRedimir">
             <p>
                 Debes tener mínimo <strong>5.000 puntos</strong> acumulados para poder redimir.
                 <strong>Únicamente</strong> el cliente Titular de la cuenta puede redimir los puntos.
             </p>
         </div>
     </div>
     <div class="col-md-12 puntosRedimir-titulo">
         <h4>Tienes <strong>10.300 puntos</strong></h4>
     </div>
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cerrar</button>
            <!--<button type="button" class="btn btn-primary">Confirmar Compra</button>-->
        </div>
  </div>
 
</div>
<!--FIN VENTANA MODAL MIS PUNTOS -->

<!--VENTANA MODAL AYUDA -->
<div id="ayuda" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <h3>FAQ Preguntas Frecuentes</h3>
        </div>
        
        <div class="col-md-12">
            <div class="">
                <!-- -->
                <ul id="accordion2" class="accordion2">
                    <li>
                        <div class="link">¿Cómo comprar?
                            <i class="fa fa-chevron-down">
                            </i>
                        </div>
                        <ul class="submenu2">
                             <p>Entregamos a domicilio tu Arreglo Floral, sigue estos sencillos pasos:</p>

                            <p class="text-left"><span class="fa fa-star fa-1x "></span>
                                Haz click en el botón "REALIZA TU ARREGLO FLORAL"
                            </p>
                            <p class="text-left"><span class="fa fa-star fa-1x "></span>
                                Selecciona la foto de tu producto favorito.
                            </p>
                            <p class="text-left"><span class="fa fa-star fa-1x "></span>
                                Puedes agregar un detalle a tu arreglo floral.
                            </p>
                            <p class="text-left"><span class="fa fa-star fa-1x "></span>
                                Llena los datos solicitados en el formulario, verifica toda la información y selecciona tu forma de pago.
                            </p>
                            <p>Es fácil, rápido y seguro.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">¿Cuáles son las formas de pago?
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Aceptamos tarjetas de crédito y débito Visa, Master Card, American Express, Diners, Discover y PayPal.</p>
                            
                            <img src="/img/medios.png" class="img-responsive">
                        
                        </ul>
                    </li>
                    <li>
                        <div class="link">¿Es segura mi compra?
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Absolutamente 100%, trabajamos con la codificación estándar SSL (Secure Sockets Layer) esto significa que cuando escribes información personal (tu nombre, información sobre tu tarjeta de crédito y otros), la misma queda completamente codificada hasta que llega al servidor seguro.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">¿Cuál es su politica de reposición?
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Nuestros productos son cuidadosamente diseñados por expertos floristas con flores frescas y artículos seleccionados, (las fotos son una referencia) podrá tener cambios según la disponibilidad e interpretación del florista para mantener al máximo nuestro standard de calidad total y frescura.</p>
                            <h4>
                            <strong>Floristería Colors</strong> te asegura la mayor eficacia y seguridad para tus entregas. 
                            </h4>

                        </ul>
                    </li>
                    <li>
                        <div class="link">¿Puedo enviar un Arreglo anónimo?
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Sí, aceptamos pedidos anónimos, al momento de llenar tu mensaje haz click en “Pedido Anónimo” Recuerda completar el pedido con tus datos y teléfonos reales (estos NO serán informados al destinatario ni a nadie) recuerda que por seguridad verificamos todas las ordenes.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">¿La acumulación de puntos tiene un límite?
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>La acumulación si tiene límite, el monto de acumulación en el año calendario (01 de enero al 31 de diciembre del año) será máximo de ochocientos mil (800.000) puntos. Al momento de alcanzar dicho monto el sistema no permitirá la acumulación de puntos adicionales.</p>
                        </ul>
                    </li>
                </ul>
                <!-- -->
            </div>  
        </div> 

    </div>
   
    
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cerrar</button>
        </div>
  </div>
 
</div>

<!--FIN VENTANA MODAL AYUDA -->
@stop