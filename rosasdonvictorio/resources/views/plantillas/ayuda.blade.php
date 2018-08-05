@extends('layouts.base')

@section('content')
<!--seccion 2 -->
<section id="facts3" class="facts3">
    <div class="parallax-overlay2">
        <div class="container"><br><br>
            <div class="col-md-10 col-md-offset-1">
                <div class="sec-titles text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">                      
                    <p class="sec-titles">¡Siempre estamos a tu Disposición!</p>
                </div>
            </div>             
        </div>
    </div>
</section>
<!-- fin seccion2 -->


<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left faq-h3">
                <h3><strong>FAQ</strong> Preguntas Frecuentes</h3>
            </div>
            <div class="col-md-6">
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
            <!--video promocional -->
            <div class="col-md-6 fq-video">
                <iframe  height="315" src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
                
            </div>
            <!--fin video promocional -->
        </div>
    </div>
</section>
@include('layouts.trespasos')
@stop



