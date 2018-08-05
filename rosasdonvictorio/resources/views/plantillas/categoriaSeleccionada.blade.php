@extends('layouts.base')

@section('content')
@include('layouts.buscadorArreglos')

<section class="categoriasFlores">
        <div class="container">
            <div class="row ">
                  <div class="col-md-3">
                       <!--menu categorias -->
                       @include('layouts.menuCategorias')
                       <!--fin menu categorias -->
                      
                  </div>
                  <!--slider -->
                  <div class="col-md-9">
                    <div class="sli-container">
                        <ul id="sli" class="sli-wrapper">
                            @foreach($sliders as $slider)

                            @if($slider->id == 1)
                            <li class="currento"> 
                            @else
                            <li>
                            @endif
                            
                            
                                <img src="/img/arreglos/slider/{{$slider->imagen}}" class="img-responsive" alt="Slider Imagen 1">
                                <div class="caption">
                                    <h3 class="caption-title">{{$slider->nombre}}</h3>
                                    <p> {{$slider->descripcion}}</p>
                                    
                                </div>
                            </li>  
                            @endforeach                            
                        </ul>
                        <ul class="sli-controls" id="sli-controls">
                            
                        </ul>
                        
                    </div>
                      
                  </div>

                  <!-- -->                 
            </div>
            <div class="row">
               <!-- arreglos de la respectiva categoria seleccionada -->
                  <div class="col-md-12">
                   
                     <div class="col-md-12">
                          <div class="row ordenar-arreglos">
                            <div class="col-md-7">
                                <h5><strong>Floristeria Colors</strong>/{{$nombre}}</h5>
                            </div>
                            <!--
                            <div class="col-md-5">
                                <h5><strong>Ordenar por: </strong><a href="">Todos</a>|<a href="">Menos precio</a>|<a href="">Mayor precio</a></h5>
                            </div>
                            -->
                            
                          </div>
                     </div>
                    <div class=" row col-md-12">
                       <!--listado de arreglos de la categoria seleccionada -->

                            <!-- un arreglo -->

                            @foreach($products as $product)
                             <!-- un arreglo -->
                              <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                                  <div class="service-desc text-center">
                                    <img src="/img/arreglos/{{$product->imagen}}" class="img-responsive">
                                          <h3><strong>{{$product->nombre}}</strong> </h3>

                                          @if($product->prices->isEmpty())
                                          <h3>SIN PRECIO</h3>

                                          @else
                                            <h3>${{number_format($product->prices->first()->precio)}}</h3>
                                          @endif  
                                         

                                      <div class="ver-boton">
                                         <a href="/arregloSeleccionado/{{$product->id}}" class="btn-ver form-control">VER</a>
                                      </div>  
                                  </div>
                                  
                              </div>
                            <!-- fin un arreglo -->

                             @endforeach
                           
                           
                    <!--fin listado de arreglos de la categoria seleccionada  -->
                    </div>
                                         
                  </div>

                  <!-- fin arreglos de la respectiva categoria seleccionada -->
            </div>
            
        </div>
        
    </section>
    <section class="div-descuento">
        <div class="row">
             <div class="col-md-12 text-center"> 
                        <h2>
                            Otros clientes también estan Buscando Arreglos Florales.
                        </h2>
                        <p>
                            Aprovecha ahora y separa tu regálo.!
                        </p>
                      
            </div>
            
        </div>
        
    </section>
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                @foreach($productosRandom as $productoRandom)
                 <!-- un arreglo -->
                    <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/{{$productoRandom->imagen}}" class="img-responsive">
                              <h3><strong>{{$productoRandom->nombre}}</strong></h3>
                              <h4>${{number_format($productoRandom->prices->first()->precio)}}</h4>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/{{$productoRandom->id}}" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                @endforeach
                 
                   
                                         
                </div>
            </div>
        </div>
    </div>

@stop