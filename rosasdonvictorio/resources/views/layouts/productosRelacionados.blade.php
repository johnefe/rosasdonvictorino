<section class="arreglos-relacionados text-center">
    <h3>PRODUCTOS SIMILARES A TU BUSQUEDA</h3>
</section>
<section class="relacionados">
            <div class="container">
                <div class="row">                                       
                   <div class="col-md-10 col-md-offset-1">
                   @foreach($productosRandom as $product)

                      <!-- un arreglo -->
                    <div class="col-md-3 wow fadeInLeft" data-wow-duration="100ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/{{$product->imagen}}" class="img-responsive">
                              <h3><strong>{{$product->nombre}}</strong></h3>
                              <h3>{{number_format($product->prices->first()->precio)}}</h3>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/{{$product->id}}" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                    @endforeach
                  <!-- fin un arreglo -->
                  
                  <!-- fin un arreglo -->
                   </div>
                
                   
                </div>
            </div>

</section>