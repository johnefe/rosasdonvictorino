@extends('layouts.base')

@section('content')
     
      
      <!-- seccion 1  -->

        <section id="facts" class="facts">
            <div class="parallax-overlay">
                <div class="container"><br><br><br><br><br><br>
                <br>
                   <div class="row">
                        <div data-wow-duration="1000ms" class="wow slideInLeft animated col-md-6 col-md-offset-3 text-center">
                            <h3>Somos la Floristeria más importante de <strong>Colombia</strog></h3>
                        </div><br><br><br>
                        <div class="col-md-6 col-md-offset-3 col-xs-12 text-center btn-en">
                            <a href="/arreglos" class="btn-entrada text-center">REALIZA TU ARREGLO FLORAL!</a>
                        </div>   <br><br><br>
                        <div data-wow-duration="1000ms" class="wow slideInLeft animated col-md-6 col-md-offset-3 text-center">
                            <h3>
                            <strong>Garantizamos el mejor precio con la más alta calidad y diseño.</strong>
                            </h3>
                        </div><br><br><br>                     
                   </div>
                                        
                </div>
            </div>
        </section>

      <!-- fin seccion 1-->

@include('layouts.categorias')

@include('layouts.trespasos')

      <!-- formas de pago -->
        <section id="" class="formasPago">
            <div class="container">
                <div class="row" >

                    <div class="col-md-6 col-md-offset-3">
                        <img src="img/medios.png" class="img-responsive">
                    </div>
                    <!--<div class="col-md-5 newsletter">
                        <h3>NEWSLETTER</h3>
                        <p>
                            Suscribete a nuestro newsletter y recibe importantes descuentos!
                        </p><br>
                        <input type="text" name="" placeholder="Tu correo electrónico">
                        <button class="btnsusc">Suscribirse</button>
                    </div>-->
                </div>
            </div>

        </section>


      <!--fin formas de pago -->

        <section id="slider" class="sliderO">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- End Indicators bullet -->              
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- single slide -->
                    <div class="item active">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated texto">Floristería Colors tiene todo lo que tu deseas expresar, con su gran variedad de productos he logrado sorprender a mis seres queridos. Gracias a FLoristería Colors por brindar productos de excelente calidad.</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated">Juan Carlos Pantoja</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                    <!-- single slide -->
                    <div class="item">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated texto">Es un gusto tener una floreria como la de ustedes para atendernos a las personas que estamos lejos de nuestros seres amados, les doy mil gracias el ramo de rosas llego en el momento y fecha indicado.</h3>
                            <p data-wow-duration="500ms" class="wow slideInRight animated">Jorge Luis Viveros</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                      <!-- single slide -->
                    <div class="item">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated texto">Encantada con los arreglos florales que compre para el dia de la mujer, son muy hermosos y llegaron a mis destinatarias en muy buenas condiciones y a la hora acordada. Gracias FLoristería Colors.</h3>
                            <p data-wow-duration="500ms" class="wow slideInRight animated">Luisa Fernanda Muñoz</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                    
                      
                </div>
                <!-- End Wrapper for slides -->
                
            </div>
        </section>
    
       
        
           
       



@stop