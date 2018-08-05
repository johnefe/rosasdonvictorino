@extends('layouts.base')


@section('content')
 <!-- seccion 1  -->

        <section id="blog" class="blog">
            <div class="parallax-overlays">
                <div class="container">
               
                   <div class="row ">
                        <div class="col-md-12 text-center"><br>
                            <h2>NUESTRO BLOG FLORAL</h2>
                        </div><br>


                     <!--un post -->   
                     @foreach($articles as $article)
                     <div class="col-md-10 col-md-offset-1 post-floral ">
                        <div class="col-md-12 text-center">
                            <h3><strong>{{$article->titulo}}</strong></h3>
                        </div>
                        
                        <div class="col-md-3 img-post">
                            <img src="/img/arreglos/{{$article->imagen}}" class="img-responsive ">
                        </div>
                        <div class="col-md-9 texto-blog">
                            <p>
                            {{$article->descripcion}}
                            </p>
                        </div>
                        
                    </div> 

                     @endforeach
                    
                                        
                   </div>
                                        
                </div>
            </div>
        </section>
      <!-- fin seccion 1-->

@stop
