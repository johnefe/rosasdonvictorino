@extends('layouts.adminBase')


@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            <h4 class="title">LISTADO VENTAS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    
                    <th>Fecha venta</th>
                    <th>ID Carrito</th>
                    <th>Cliente</th>
                    <th>Valor</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                <!--inicio un movimiento-->
                @foreach($carts as $cart) 
                    <tr>
                        <td>{{$cart->fecha_compra}}</td>
                        <td>{{$cart->id}}</td>
                        <td>{{$cart->client->nombres}} {{$cart->client->apellidos}}</td>
                        <td>{{number_format($cart->total_carrito())}}</td>
                        <td>
                        @if($cart->was_payed)
                            Cancelado
                        @else
                         No Cancelado

                        @endif

                        </td>
                        <td>
                         @if($cart->was_payed)
                            <a href="#info" data-type="zoomin" id="btn-ver{{$cart->id}}" onclick="verbtn({{$cart->id}})" class="btn btn-success">ver</a>
                        @else
                          <a href="#info" data-type="zoomin" id="btn-ver{{$cart->id}}" onclick="verbtn({{$cart->id}})" class="btn btn-danger">ver</a>

                        @endif
                        
                           
                            
                        </td>
                    </tr>
                @endforeach
                   
                <!-- finr un movimiento -->      
                </tbody>
            </table>

        </div>
    </div>
</div>

@foreach($carts as $cart) 

<div class="overlay-container" id="o{{$cart->id}}">
        <div class="window-container zoomin card" id="w{{$cart->id}}">
            <span class="fa fa-times-circle-o fa-2x" id="close{{$cart->id}}"></span><br>
        <div class="pp">
            <div class="header text-center">
                    <h4 class="title">CARRITO DE COMPRAS # {{$cart->id}} </h4>
                </div>  
            <hr>
            <!-- ****************************************************** -->
            <div class="col-md-8 col-md-offset-2 text-left">
                  <!-- un producto -->
                    <div class="row">
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Imagen</th>
                                    <th>Categoria</th>
                                    <th>Nombre</th>
                                    <th>Valor</th>
                                   
                                </thead>
                                <tbody>
                                <!--inicio un movimiento-->
                                @foreach($cart->details as $detail) 

                                    <tr>
                                        <td>
                                            <img class="img-responsive" style="width: 50px;" src="/img/arreglos/{{$detail->product->imagen}}">
                                        </td>
                                        <td>{{$detail->product->nombre}}</td>
                                        <td>{{$detail->tamano}}</td>
                                        <td>{{number_format($detail->precio)}}</td>
                                    </tr>
                                @endforeach
                                   
                                <!-- finr un movimiento --> 
                                       
                                
                                </tbody>
                            </table>

                        </div>
                        <!--DETALLES DEL COMPRADOR -->
                        <hr>
                        <div class="row">
                        <div class="col-md-12"><label>DATOS COMPRADOR</label></div>
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>NOMBRES Y APELLIDOS:</label>
                                </div>
                                <div class="col-md-6">
                                    {{$cart->client->nombres}} {{$cart->client->apellidos}}
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>IDENTIFICACION:</label>
                                </div>
                                <div class="col-md-6">
                                    {{$cart->client->identificacion}} 
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>TELÉFONO:</label>
                                </div>
                                <div class="col-md-6">
                                    {{$cart->client->telefono}} 
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                        </div>
                        <!--FIN DETALLES DEL COMPRADOR -->
                        <!--DETALLES DEL DESTINATARIO -->
                        <hr>
                        <div class="row">
                        <div class="col-md-12"><label>DATOS DESTINATARIO</label></div>
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>NOMBRE Y APELLIDOS:</label>
                                </div>
                                <div class="col-md-6">
                                    {{$cart->para}}
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>DIRECCIÓN:</label>
                                </div>
                                <div class="col-md-6">
                                     {{$cart->direccion}}
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>TELÉFONO:</label>
                                </div>
                                <div class="col-md-6">
                                     {{$cart->telefono}}
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>FECHA DE ENTREGA:</label>
                                </div>
                                <div class="col-md-6">
                                     {{$cart->fecha_entrega}}
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>MENSAJE TARJETA:</label>
                                </div>
                                <div class="col-md-8">
                                 {{$cart->mensaje}}
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>OBSERVACIÓN:</label>
                                </div>
                                <div class="col-md-8">
                                     {{$cart->observacion}}
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                        </div>
                        <!--FIN DETALLES DEL DESTINATARIO -->
                        <div class="col-md-9 col-md-offset-2 text-center">
                            <h4><strong>TOTAL: {{number_format($cart->total_carrito())}}</strong></h4>
                        </div>
                        @if(!$cart->was_payed)

                        <div class="col-md-9 col-md-offset-2 text-center">
                        {!!Form::model($cart,['route'=>['cart.update',$cart->id],'method'=>'PUT'])!!}
                        <input type="hidden" name="was_payed" value="1">
                        
                        {!!Form::submit('Confirmar Compra',['class'=>'btn btn-danger'])!!}
                            {!!Form::close()!!}
                        
                           
                        </div>
                           
                        @else
                        

                        @endif
                        
                    </div> 
                <!-- fin un producto --> 
            </div>     
            <!--******************************************************* -->
        </div>
                
            
        </div>
        
</div>

@endforeach
<!-- un carrito-->

<!-- fin un carrito  -->

<!-- ******************************************************************* -->
<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
    <script type="text/javascript" src="/assets/js/demo.js"></script>
@stop