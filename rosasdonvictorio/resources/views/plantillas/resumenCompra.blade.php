@extends('layouts.base')

@section('content')

<section class="resumenCarrito">
    <div class="container"><br><br><br><br><br>
    {!!Form::open(['route'=> 'dataCart', 'onsubmit'=>'return verificarDatos()', 'method'=>'POST'])!!}
        <div class="row">
            <!--Datos comprador y destinatario -->
            <div class="col-md-7">
            
            
            <!--datos comrador -->
                <div class="date-comprador col-md-12">
                <h4>1. Datos del comprador.</h4>
                @if($cliente)
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group date-user">

                            <input type="text" name="nombresComprador" class="form-control" placeholder="Nombres Completos" id="nombresComprador" value="{{$cliente->nombres}}">
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group date-user">
                            <input type="text" name="apellidosComprador" id="apellidosComprador" class="form-control" placeholder="Apellidos" value="{{$cliente->apellidos}}">
                        </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group date-user">
                              <input type="text" name="identificacionComprador" id="identificacionComprador" class="form-control" placeholder="ID/C.c" value="{{$cliente->identificacion}}">
                           </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group date-user">
                            <input type="text" name="celularComprador"  id="celularComprador" class="form-control" placeholder="Teléfono" value="{{$cliente->celular}}">
                        </div> 
                    </div>
                </div>
                    
                       
                        
                      
                @else
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group date-user">

                            <input type="text" name="nombresComprador"  id="nombresComprador" class="form-control" placeholder="Nombres Completos" value="">
                        </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group date-user">
                               <input type="text" name="apellidosComprador" id="apellidosComprador" class="form-control" placeholder="Apellidos" value="">
                        </div> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group date-user">
                            <input type="text" name="identificacionComprador" id="identificacionComprador" class="form-control" placeholder="ID/C.c">
                        </div> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group date-user">
                               <input type="text" name="celularComprador" id="celularComprador" class="form-control" placeholder="Teléfono" value="">
                        </div> 
                    </div>   
                </div>                    
                @endif   
                </div>
            <!--fin datos comrador -->
            <!--datos Destinatario -->
                <div class=" col-md-12 date-comprador">
                    <div class="row">
                        <h4>2. Datos del destinatario.</h4>
                    </div>
                        
                    <div class="row">
                        <div class="col-md-12 ">
                           <div class="form-group date-user">
                               <input type="text" name="nombresDestinatario" id="nombresDestinatario" class="form-control" placeholder="Nombres Completos">
                           </div> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 ">
                           <div class="form-group date-user">
                               <input type="text" name="direccionDestinatario" id="direccionDestinatario" class="form-control" placeholder="Dirección. ej: Calle 21 # 24-63 Centro">
                           </div> 
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                           <div class="form-group date-user">
                               <input type="text" name="telefonoDestinatario" class="form-control" id="telefonoDestinatario" placeholder="Teléfono">
                           </div> 
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12 ">
                           <div class="form-group date-user jf-date">
                               <input type="text" name="fechaEntrega" id="fechaEntrega" class="form-control" placeholder="Fecha de entrega">
                           </div>
                        </div> 
                    </div>                       
                       
                    
                </div>
               
                <!--fin datos destinatario -->
                <div class="date-comprador col-md-12">
                <h4>3. Escribe el mensaje para tu destinatario.</h4>
                     <div class="col-md-12">
                        <div class="form-group">
                            <textarea name = "mensaje" placeholder="Escribe aquí tu mensaje" id="texta" class="form-control" ></textarea>
                        </div>
                        
                     </div>
                </div>
                <div class="date-comprador col-md-12">
                    <h4>3. Escribe una observación a tu compra.</h4>
                     <div class="col-md-12">
                        <textarea name = "observacion" placeholder="hora de entrega, si deseas que tu entrega se haga con remitente anónimo, sugerencia  tu arreglo, etc." id="textObservacion" class="form-control"></textarea>
                     </div>
                </div>
                <div class="col-md-12">
                    <a>¿Necesitas ayúda con tu mensaje? Escoge una ocasión, copia y pega.</a><br>
                    <div class="col-md-2">
                    <a href="#Amor" data-toggle="modal"><span class="fa fa-tag fa-1x"></span> <strong>Amor</strong></a>
                    </div>
                    <div class="col-md-2">
                    <a href="#Amistad" data-toggle="modal"><span class="fa fa-tag fa-1x"></span> <strong>Amistad</strong></a>
                    </div>
                    <div class="col-md-3">
                    <a href="#Agradecimiento" data-toggle="modal"><span class="fa fa-tag fa-1x"></span> <strong>Agradecimiento</strong></a>
                    </div>
                    <div class="col-md-3">
                    <a href="#Cumpleaños" data-toggle="modal"><span class="fa fa-tag fa-1x"></span> <strong>Cumpleaños</strong></a>
                    </div>
                    <div class="col-md-3">
                    <a href="#Aniversario" data-toggle="modal"><span class="fa fa-tag fa-1x"></span> <strong>Aniversario</strong></a>
                    </div>
                    <div class="col-md-3">
                    <a href="#Condolencias" data-toggle="modal"><span class="fa fa-tag fa-1x"></span> <strong>Condolencias</strong></a>
                    </div>
                    <div class="col-md-3">
                    <a href="#Graduaion" data-toggle="modal"><span class="fa fa-tag fa-1x"></span> <strong>Graduaión</strong></a>
                    </div>
                    
                </div>
                
            
                
            </div>
            <!--fin Datos comprador y destinatario -->

            <!--carrito de compras -->
            <div class="col-md-5 resumenCarrito-detalles">
                <div class="col-md-12 text-center">
                    <h3><strong>CARRITO DE COMPRAS</strong></h3><br>
                </div>
                <div class="col-md-12 text-center" id="canasta" name="canasta">
                <!-- un detalle-->
                  <div class="row">
                    <H4 id="mensajeVacio"></H4>
                                            
                  </div>

                  <hr>
                  <!--fin un detalle -->
                </div>
                <div class="col-md-12 text-center">
                    <h2>SUBTOTAL:<strong id="subtotalCarrito">0</strong></h2>
                </div>
                
            </div>

            <!--fin carrito de compras -->
        </div>
        <div class="row">
            <div class=" col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1" id="boton-final">
        
            </div>
            
        </div>
        {!!Form::close()!!}
    </div>
</section>
<!--ventanas modales de mensajes -->
<!--VENTANA MODAL MENSAJES DE AMOR -->
<div id="Amor" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <h3>MENSAJES DE AMOR</h3>
        </div>
        
        <div class="col-md-12">
            <div class="">
                <!-- -->
                <ul id="accordion2" class="accordion2">
                    <li>
                        <div class="link">Enamorad@
                            <i class="fa fa-chevron-down">
                            </i>
                        </div>
                        <ul class="submenu2">
                             <p>Con haber conseguido sacarte una sonrisa, me conformo.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">felicitar por un cumpleaños
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Feliz cumpleaños a la persona que se transformo en lo mas importante de mi vida.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">para soñar con la/el amad@
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Yo nunca supe que tenía un sueño, hasta que ese sueño fuiste Tú.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Para el día de la madre
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>El dia de la madre existe, gracias a mamis como Tu. Te amo mamá.</p>
                            

                        </ul>
                    </li>
                    <li>
                        <div class="link">amor con un ramo de rosas
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Si tuviese una rosa cada vez que pienso en ti, estaría siempre paseando por un jardín. </p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Besos y palabras de amor
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>A esa sonrisa tuya, le falta uno de mis besos.</p>
                        </ul>
                    </li>
                </ul>
                <!-- -->
            </div>  
        </div> 

    </div>
   
    
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
            
        </div>
  </div>
 
</div>

<!--FIN VENTANA MODAL MENSAJES DE AMOR -->

<!--VENTANA MODAL MENSAJES DE AMISTAS -->
<div id="Amistad" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <h3>MENSAJES DE AMISTAD</h3>
        </div>
        
        <div class="col-md-12">
            <div class="">
                <!-- -->
                <ul id="accordion3" class="accordion2">
                    <li>
                        <div class="link">Para un amigo verdadero y sincero
                            <i class="fa fa-chevron-down">
                            </i>
                        </div>
                        <ul class="submenu2">
                             <p>Los amigos se cuentan dos veces: en las buenas a ver cuántos son y en las malas a ver cuántos quedan, siempre has estado ahí cuando los he contado.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Un verdadero amigo
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Un verdadero amigo como tú puede ver el dolor en mis ojos, mientras que los demás se dejan engañar por mi sonrisa.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">para soñar con la/el amad@
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Yo nunca supe que tenía un sueño, hasta que ese sueño fuiste Tú.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Un millón de amigos
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Tener un millón de amigos no es una maravilla, una maravilla es tener un amigo que esté contigo, cuando millones están en tu contra.</p>
                            

                        </ul>
                    </li>
                    <li>
                        <div class="link">Amistad honesta y desinteresada
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Un amigo es oro puro, dos amigos piedras preciosas y si llegas a tener tres amigos, has encontrado un verdadero tesoro. </p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">El valor de la amistad y los amigos
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Cuando te duela mirar hacia atrás y tengas miedo de mirar adelante, puedes mirar a tu lado y encontrarás que tu mejor amigo estará allí.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">La verdadera amistad
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>La verdadera amistad no se trata de ser inseparables, sino de poder estar separados sin que nada cambie.</p>
                        </ul>
                    </li>
                </ul>
                <!-- -->
            </div>  
        </div> 

    </div>
   
    
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
            
        </div>
  </div>
 
</div>

<!--FIN VENTANA MODAL MENSAJES DE AMISTAD -->

<!--VENTANA MODAL MENSAJES DE AGRADECIMIENTO -->
<div id="Agradecimiento" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <h3>MENSAJES DE AGRADECIMIENTO</h3>
        </div>
        
        <div class="col-md-12">
            <div class="">
                <!-- -->
                <ul id="accordion4" class="accordion2">
                    <li>
                        <div class="link">agradecido contigo
                            <i class="fa fa-chevron-down">
                            </i>
                        </div>
                        <ul class="submenu2">
                             <p>Estoy muy agradecido contigo por la amistad que me brindas. En todo este tiempo he llegado a conocerte más y por eso es que te considero como un hermano. ¡Que viva la amistad!</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">expresarte mi agradecimiento por todo
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Siempre digo que es mejor demostrar los sentimientos en vez de solo decirlos, pero creo que no está demás enviarte este mensaje para expresarte mi agradecimiento por todo. Eres esa clase de amigos que nunca falla.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">para soñar con la/el amad@
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Yo nunca supe que tenía un sueño, hasta que ese sueño fuiste Tú.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">un listado para agradecerte
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Si tuviera que hacer un listado para agradecerte por todo lo que haces por mí, creo que nunca acabaría. Así que lo resumo diciéndote gracias por tu valiosa amistad. Con nuestros momentos buenos y malos, te quiero mucho, amiga de mi corazón.</p>
                            

                        </ul>
                    </li>
                    <li>
                        <div class="link">Tu amistad
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Tu amistad es algo de mucho valor para mí, te admiro mucho y estoy agradecida con Dios por haber puesto en mi camino a una persona tan especial como tú. </p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">porque eres mi mejor amig@
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Las locuras, las salidas y las conversaciones se vuelven memorables porque eres mi mejor amig@ y créeme que sin ti me sentiría triste y sola. Gracias por comprenderme y por estar a mi lado en las buenas y en las malas.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Qué bueno es tener amigos como tú
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Qué bueno es tener amigos como tú que me han ayudado a salir de los momentos difíciles que he pasado en esta vida. Nunca voy cansarme de agradecerte por tu amistad incondicional.</p>
                        </ul>
                    </li>
                </ul>
                <!-- -->
            </div>  
        </div> 

    </div>
   
    
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
            
        </div>
  </div>
 
</div>

<!--FIN VENTANA MODAL MENSAJES DE AGRADECIMIENTO -->

<!--VENTANA MODAL MENSAJES DE CUMPLEAÑOS-->
<div id="Cumpleaños" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <h3>MENSAJES DE CUMPLEAÑOS</h3>
        </div>
        
        <div class="col-md-12">
            <div class="">
                <!-- -->
                <ul id="accordion5" class="accordion2">
                    <li>
                        <div class="link">Un día lindo!
                            <i class="fa fa-chevron-down">
                            </i>
                        </div>
                        <ul class="submenu2">
                             <p>¡Feliz cumpleaños, espero que tengas un día lindo! Fuiste, eres y serás la alegría de todos tus seres queridos.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">¡Feliz cumpleaños, querid@ amig@!
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>¡Feliz cumpleaños, querid@ amig@! Que este día sea el más genial que hayas tenido durante el año, que lo pases en grande y que recibas muchos lindos regalos.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Amigo mío
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Amigo mío, desde la distancia te mando un enorme abrazo y mis felicitaciones en tu cumpleaños. ¡Que Dios te de licencia para hacer realidad todos tus sueños.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">¡Muchas felicidades!
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Cumpleaños es una celebración que se realiza sólo una vez al año, así que no puedes negarte a celebrarlo al lado de todos nosotros en una divertida fiesta. ¡Muchas felicidades!</p>
                            

                        </ul>
                    </li>
                    <li>
                        <div class="link">¡Feliz cumpleaños, amigo!
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Eres una persona muy buena y tienes sueños son muy nobles, por eso no debes dejar de esforzarte por hacerlos realidad, verás que Dios te recompensará tarde o temprano. ¡Feliz cumpleaños, amigo!</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Con todo mi cariño
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Daría lo que fuera por poder estar a tu lado para darte un gran abrazo y felicitarte personalmente, pero mientras tanto te envío este saludo con todo mi cariño. ¡Feliz cumpleaños!</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Eres una persona extraordinaria
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Eres una persona extraordinaria y estoy muy agradecido con Dios por otorgarte otro año más de vida. ¡Felicidades!</p>
                        </ul>
                    </li>
                </ul>
                <!-- -->
            </div>  
        </div> 

    </div>
   
    
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
            
        </div>
  </div>
 
</div>

<!--FIN VENTANA MODAL MENSAJES DE CUMPLEAÑOS -->

<!--VENTANA MODAL MENSAJES DE ANIVERSARIO-->
<div id="Aniversario" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <h3>MENSAJES DE ANIVERSARIO</h3>
        </div>
        
        <div class="col-md-12">
            <div class="">
                <!-- -->
                <ul id="accordion6" class="accordion2">
                    <li>
                        <div class="link">Aniversario de pareja
                            <i class="fa fa-chevron-down">
                            </i>
                        </div>
                        <ul class="submenu2">
                             <p>Mi amor, qué inmensa alegría es que el día de hoy nos encontremos celebrando otro aniversario. Nuestra historia de amor es fantástica y tú eres la persona que toda mi vida había estado buscando, por eso sé que te amaré por siempre.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Sorpresas lindas preparadas para ti
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Tengo algunas sorpresas lindas preparadas para ti y deseo que sean de tu agrado. Amor mío, gracias por estos 12 meses llenos de tanto amor y por cada una de las experiencias maravillosas que he vivido a tu lado.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Siento que te amo
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Es tan lindo este amor que me siento muy afortunado por todas las vivencias que paso a tu lado. Siento que te amo con todo mi corazón y hoy, que cumplimos otro año más de relación, te deseo todo lo mejor. ¡Te adoro!</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">¡Feliz aniversario, amor de mi vida!
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Sin darnos cuenta a pasado otro año más y al hacer un balance podemos ver que todo ha sido positivo porque aún los pequeños inconvenientes que hemos tenido nos han ayudado a estar más unidos. ¡Feliz aniversario, amor de mi vida!</p>
                            

                        </ul>
                    </li>
                    <li>
                        <div class="link">¡Eres la mujer a quien amo!
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>“Eres la mujer a quien amo con toda mi alma y estoy muy contento porque hoy es nuestro primer aniversario. Deseo que te guste mucho todo lo que he preparado para festejar a lo grande la llegada de este día.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Me siento muy feliz
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Cariño, estar contigo es la bendición más grande de mi vida y me siento muy feliz porque hoy cumplimos otro año de relación. Te aseguro que por siempre te haré sentir muy feliz y que cada día de mi vida voy a dedicarlo a amarte.</p>
                        </ul>
                    </li>
                   
                </ul>
                <!-- -->
            </div>  
        </div> 

    </div>
   
    
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
            
        </div>
  </div>
 
</div>

<!--FIN VENTANA MODAL MENSAJES DE ANIVERSARIO -->
<!--VENTANA MODAL MENSAJES DE CONDOLENCIAS-->
<div id="Condolencias" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <h3>MENSAJES DE CONDOLENCIAS</h3>
        </div>
        
        <div class="col-md-12">
            <div class="">
                <!-- -->
                <ul id="accordion7" class="accordion2">
                    <li>
                        <div class="link">Fallecimiento de un hijo
                            <i class="fa fa-chevron-down">
                            </i>
                        </div>
                        <ul class="submenu2">
                             <p>Siento mucho que estés pasando por esta experiencia que tal vez es uno de las más difíciles de soportar para un ser humano. Ruego al Señor que te brinde el consuelo de que tu familia necesita para que puedan recuperarse de esta pérdida irreparable.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Aceptar la pérdida
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Es una situación complicada aceptar la pérdida de un ser querido. Te debes sentir afligido y con el corazón adolorido. Recuerda que no es más que una breve despedida, porque pronto todos estaremos con esa persona, y sonreiremos como siempre</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Adiós mamá..!
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Recibir la noticia de un fallecimiento nunca es fácil, sobre todo sí es un ser muy querido y más aún sí es una madre quien perdemos. Ella es tu ejemplo, y el hecho que no esté físicamente entre nosotros no quiere decir que no sea quien guíe tus pasos</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Adiós amigo.
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>La pérdida de un buen amigo es una experiencia extremadamente dolorosa. Los amigos son la familia que nos encontramos en el camino, y los cuidamos como hermanos, y perderlos es algo muy triste. Hoy descansa y goza de mucha paz</p>
                            

                        </ul>
                    </li>
                    <li>
                        <div class="link">Mis condolencias
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Quiero que sepas de mis condolencias. Me aflige mucho lo que estás pasando y he venido a brindarte mi apoyo, siempre incondicional hacia tu persona. Nunca nos alejamos, sin embargo hoy necesitamos estar más cerca aún</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Debes ser muy fuerte
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Nadie sabe en qué momento pasará esto, no hay receta para estar preparado para perder a alguien. Debes ser muy fuerte, Dios nos da consuelo y nos prepara un lugar especial cuando dejemos este mundo</p>
                        </ul>
                    </li>
                   
                </ul>
                <!-- -->
            </div>  
        </div> 

    </div>
   
    
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
            
        </div>
  </div>
 
</div>

<!--FIN VENTANA MODAL MENSAJES DE CONDOLENCIAS -->

<!--VENTANA MODAL MENSAJES DE GRADUACION-->
<div id="Graduaion" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <h3>MENSAJES DE GRADUACIIÓN</h3>
        </div>
        
        <div class="col-md-12">
            <div class="">
                <!-- -->
                <ul id="accordion8" class="accordion2">
                    <li>
                        <div class="link">En esta fecha tan especial
                            <i class="fa fa-chevron-down">
                            </i>
                        </div>
                        <ul class="submenu2">
                             <p>En esta fecha tan especial para tu vida, deseo felicitarte de una forma muy singular, admiro realmente mucho este logro tuyo y estoy seguro que es fruto del esfuerzo que hiciste por llegar hasta aquí, continúa tu camino como hasta ahora, vas excelente y ten la seguridad que continuarán llegando las mejores cosas a tu vida. Un fuerte abrazo.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Estamos más que orgullosos de ti
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Este punto sólo lo alcanzan los persistentes, los triunfadores, los fuertes, por esa razón hoy puedes sentirte dichoso de este logro, continúa recogiendo frutos con tu esfuerzo, estamos más que orgullosos de ti, eres un modelo a seguir….</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Felicidades
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Felicidades, hoy has alcanzado un escalón más en tu vida, uno muy significativo, tal vez el más grande para ti, hoy es día de festejar, de gozar, tal como lo soñaste todo este tiempo, te felicito de verdad y te deseo mucha inteligencia, de acá en adelante para que tus decisiones sean las mejores en tu vida, estás destinado al éxito. Un abrazo.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Felicitaciones en tu día.
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Felicitaciones en tu día,  lograste asumir el reto, con responsabilidad, madurez y entrega, como los grandes, sabías que la cosecha al final estaba repleta de éxitos y lo conseguiste, estás acá como uno de los mejores, sabes que la frontera es el cielo, bienvenido al mundo laboral, bienvenidos los retos y sueños, te felicito por ser el mejor.</p>
                            

                        </ul>
                    </li>
                    <li>
                        <div class="link">El sueño de verte como universitario graduado
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Toda la familia se junta hoy contenta de observar como se cumple el sueño de verte como universitario graduado, parece que fue sólo ayer cuando empezaste tu carrera universitaria, ya acabas una nueva fase, ya das comienzo a la vida laboral, de madurez, de mayores responsabilidades y todos estamos muy contentos con eso y estamos seguros que eres el mejor.  Te felicitamos, estamos contigo en la buenas y en las malas en el final de esta fase y en el comienzo de este otro nuevo andar.</p>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Felicidades en tu grado
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <ul class="submenu2">
                            <p>Llegaste hasta acá pues siempre has usado los talentos que Dios te ha regalado hijo mío, sabes que eres bendecido con ellos, que Dios derrame sobre ti gran sabiduría para que continúes edificando tu andar. Felicidades en tu grado.</p>
                        </ul>
                    </li>
                   
                </ul>
                <!-- -->
            </div>  
        </div> 

    </div>
   
    
     
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">Cancelar</button>
            
        </div>
  </div>
 
</div>

<!--FIN VENTANA MODAL MENSAJES DE CONDOLENCIAS -->

<script type="text/javascript">
    $(document).ready(function(){

            $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {
            console.log("carrito en el resumen")
             arrayCarrito = data;
             arrayFinal = arrayCarrito;
             var cantidadProductosEnCarrito=0;
                for(i=0;i<arrayCarrito.length;i++){
                cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayCarrito[i].cantidadObjeto;
                }
            if (cantidadProductosEnCarrito===0) {
                arrayCarrito=[];
                verCarritos(arrayCarrito);
                console.log(arrayCarrito);
            }else{
                arrayCarrito = data;
                arrayFinal = arrayCarrito;
                verCarritos(arrayCarrito);
                //alert("si hay")
                console.log(arrayCarrito)
            }
            document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
            //console.log(arrayFinal);
        }
    });
    });
/*--------------------------------------------------------*/

                    
    function verCarritos(arrayCarrito){
        /*pa el subtotal*/
       // alert("loca")
                    var subTotal=0;
                    for(i=0; i<arrayCarrito.length;i++){
                        var subt=(arrayCarrito[i].cantidadObjeto)*arrayCarrito[i].valorObjeto;
                        subTotal=subTotal+subt;
                    }
                    if (subTotal==0) {
                       document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                       document.getElementById("boton-final").innerHTML="<a href='/arreglos' class='btn btn-primary form-control'>REGRESAR</a>"
                    }else{
                        document.getElementById("boton-final").innerHTML="<input  type='submit' class='btn btn-primary form-control' value='continuar con la compra'/>";
                    }

                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayCarrito.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayCarrito[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }


                    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
                    /*fin subtotal*/

        $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {
            
             arrayCarrito = data;
             arrayFinal = arrayCarrito;
             var cantidadProductosEnCarrito=0;
                for(i=0;i<arrayFinal.length;i++){
                cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayFinal[i].cantidadObjeto;
                console.log("array");
                }
            /*pa el subtotal*/
            var subTotal=0;
            for(i=0; i<arrayFinal.length;i++){
                var subt=(arrayFinal[i].cantidadObjeto)*arrayFinal[i].valorObjeto;
                subTotal=subTotal+subt;
            }
            document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
            /*fin subtotal*/
             console.log(arrayCarrito)
                if(cantidadProductosEnCarrito==0){
            
                    document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                }else{
                    console.log(arrayFinal)
                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayFinal.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayFinal[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }
                } 


        }
    });
    
/*---------------------------------------------------*/

document.getElementById("car").innerHTML="";
}

function verificarDatos(){
    var ok = true;
    var msg = "faltan datos por escribir. Completalos:\n";

    var nombresComprador = document.getElementById("nombresComprador").value;
    var apellidosComprador = document.getElementById("apellidosComprador").value;
    var identificacionComprador = document.getElementById("identificacionComprador").value;
    var celularComprador = document.getElementById("celularComprador").value;
    

    var nombresDestinatario = document.getElementById("nombresDestinatario").value;
    var direccionDestinatario = document.getElementById("direccionDestinatario").value;
    var telefonoDestinatario = document.getElementById("telefonoDestinatario").value;
    var fechaEntrega = document.getElementById("fechaEntrega").value;
    var texta = document.getElementById("texta").value;
    var textObservacion = document.getElementById("textObservacion").value;

    if (nombresComprador=="" || apellidosComprador=="" || identificacionComprador=="" || celularComprador=="") {

        
           // mensajeDatos();
           ok = false;
    }
    if (nombresDestinatario=="" || direccionDestinatario=="" || telefonoDestinatario=="" || fechaEntrega=="" || texta=="" || textObservacion=="" ) {
            
            ok = false;
            //mensajeDatos();
    }

    if(ok == false)
    alert(msg);
    return ok;
    


}

function mensajeDatos(){

  $("#alerta").fadeIn();   
}
function cerrarAlerta(){
    $("#alerta").fadeOut(1900);
}

</script>
<div class="add-circulo2" id="alerta">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Faltan datos por llenar, por favor completalos.</h2>
            <input type="button" value="cerrar" class="btn btn-danger form-control" onclick="cerrarAlerta()" >
        </div>
    </div>        
</div>
@stop