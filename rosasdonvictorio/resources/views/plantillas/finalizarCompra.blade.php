@extends('layouts.base')

@section('content')

<section class="resumenCarrito">
    <div class="container"><br><br><br><br><br>
        <div class="row">
            <!--Datos comprador y destinatario -->
            <div class="col-md-7">
             {!!Form::open(['route'=> 'cart', 'method'=>'POST'])!!}
                <div class="col-md-12">
                   
                    <!--info comprador -->

                    
                    <p></p>
                    <div class="info-final col-md-6 col-sx-12">
                        <div class="col-md-12 info-final-titulo text-center">
                            <h4><strong>DATOS QUIEN RECIBE</strong></h4>
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Nombre:</strong>{{$dataCart["nombresDestinatario"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Dirección:</strong>{{$dataCart["direccionDestinatario"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Teléfono:</strong>{{$dataCart["telefonoDestinatario"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Fecha:</strong>{{$dataCart["fechaEntrega"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Mensaje:</strong>{{$dataCart["mensaje"]}}</h5>  
                        </div>  
                    </div>
                    <!--fin info comprador -->

                    <!--info destinatario -->
                    <div class="info-final col-md-5 col-sx-12">
                        <div class="col-md-12 info-final-titulo text-center">
                            <h4><strong>DATOS QUIEN ENVÍA</strong></h4>
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Nombre:</strong>{{$dataCart["nombresComprador"]}} {{$dataCart["apellidosComprador"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Correo:</strong>{{$correo}}</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Teléfono:</strong>{{$dataCart["celularComprador"]}}</h5>  
                        </div>
                        <div class="col-md-12">
                         
                        </div>   
                    </div>
                  
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="radio">
                        <h4>Acumularas <strong>5500 puntos</strong> por esta Compra</h4>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                     <h4> Aceptamos pagos con tarjeta de crédito o debito </h4>
                </div>
                <div class="col-md-10 col-md-offset-1 text-center">
                   
                    <img src="\img\pasgos.png" class="img-responsive">
                </div> 
                @php 
               // $time = strtotime($dataCart["fechaEntrega"]);
               // $newformat = date('Y-m-d',$time);
              //  echo $dataCart["fechaEntrega"];
               // echo $newformat;
              //  echo $time;

                @endphp     
                             
                
                            
            </div>
            <!--*********************************************-->
            
            <!--carrito de compras -->
            <div class="col-md-5 resumenCarrito-detalles">
                <div class="col-md-12 text-center"><br>
                    <h3><strong>RESUMEN DE TU COMPRA</strong></h3><br>
                </div>
                <div class="col-md-12" id="canasta" name="canasta">
                <!-- un detalle-->
                  <div class="row">
                    <H4 id="mensajeVacio"></H4>
                                            
                  </div>

                  <hr>
                  <!--fin un detalle -->
                </div>
                <div class="col-md-12 text-center">
                    <h2>SUBTOTAL:<strong id="subtotalCarrito">0</strong></h2><br>
                </div>
            </div>
            <!--fin carrito de compras -->
            <div class=" col-md-6 col-md-offset-3">

                <!--

                <form id="frm_botonePayco" name="frm_botonePayco" method="post" action="https://secure.payco.co/checkout.php"> 
                    <input name="p_cust_id_cliente" type="hidden" value="16496">
                    <input name="p_key" type="hidden" value="8fe89b3f8a86da50e018e44f05b85ad0a2b59b45">
                    <input name="p_id_invoice" type="hidden" value="">
                    <input name="p_description" type="hidden" value=" Rosas en jarrón impresionista">
                    <input name="p_currency_code" type="hidden" value="COP">
                    <input name="p_amount" id="p_amount" type="hidden" value="100000.00">
                    <input name="p_tax" id="p_tax" type="hidden" value="0">
                    <input name="p_amount_base" id="p_amount_base" type="hidden" value="0">
                    <input name="p_test_request" type="hidden" value="FALSE">
                    <input name="p_url_response" type="hidden" value=""> 
                    <input name="p_url_confirmation" type="hidden" value=""> 
                    <input name="p_signature" type="hidden" id="signature"  value="4fbb35f5a108e1e8f2788e7febe05b86" />
                    <input name="idboton" type="hidden" id="idboton"  value="3352" />  
                    <input type="image" id="imagen" src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/boton_carro_de_compras_epayco6.png" />
                </form>
            -->
                
                    <input type="submit" name="" class="btn btn-primary form-control" value="PAGAR AHORA"> 
            </div> 

            {!!Form::close()!!}   
        </div>

        
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){

            $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {

            $.ajax({
                type: "GET",
                url: "/dataCart",
                success:function(dataCart) {
                    console.log("aqui fue")
                    console.log(dataCart);

                }
            });
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
                

                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayCarrito.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-md-offset-1 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayCarrito[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<br>';

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
                                '<div class="col-md-2 col-md-offset-1  col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayFinal[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<br>';

                            $( "#canasta" ).append(inserta);
                    }
                } 


        }
    });
    
/*---------------------------------------------------*/

document.getElementById("car").innerHTML="";
}
</script>
@stop