<!-- categorias -->
      <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="sec-sub-title text-center wow fadeInRight animated " data-wow-duration="500ms">
                        <p>LOS MAS VENDIDOS </p>
                        <h5>Aquellos que han enamorado a nuestros clientes</h5>
                    </div>
                    <!-- un arreglo -->
                     @foreach($masVendidos as $producto)
                     <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/{{$producto->imagen}}" class="img-responsive">
                              <h3><strong>{{$producto->nombre}}</strong></h3>

                              @if($producto->prices->isEmpty())
                                <h3>SIN PRECIO</h3>
                              @else
                                <h3>${{number_format($producto->prices->first()->precio)}}</h3>
                              @endif  
 
                              
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/{{$producto->id}}" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                      @endforeach

                  <!-- fin un arreglo -->
                    

                     
                          <div class="col-md-4 col-md-offset-4">
                            <div class="btn-categorias">
                                <a href="/arreglos">VER TODOS LOS ARREGLOS</a>
                            </div>
                        </div>
                       
                    <div class="col-md-12 text-center">
                     <hr><h3>"Con Floristería Colors expresas tus sentimientos."</h3><hr>
                    </div>
                </div>
            </div>
        </section>

      <!-- fin categorias -->