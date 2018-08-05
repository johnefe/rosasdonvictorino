@extends('layouts.adminBase')

@section('content')
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NUEVO POST FLORAL</h4>
                                  <p class="category">www.floristeriaColors.com</p>
                            </div>
                            <div class="content">
                                <!-- aqui inicia el formulario de crear nuevo producto -->
                                {!!Form::open(['route'=> 'articulos.store', 'method'=>'POST','files' => true])!!}
                                 
                                 <!-- aqui inicia el formulario de crear nuevo post -->
    <div class="row">                                      
        <div class="col-md-12">
            <div class="form-group">
                {!!Form::label('Titulo:')!!}
                {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>' Titulo '])!!}
            </div>
        </div>
    </div>
    <!--  
    <div class="row">  

        <div class="col-md-6">
            <div class="form-group">
               {!!Form::label('Escoge una imagen')!!}
                {!!Form::file('imagen',['class'=>'form-control'])!!}
            </div>
                                            
        </div>
    </div>-->
    <!-- para poner la imagen del articulo a editar -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                        {!!Form::label('Escoge una imagen')!!}
                                           {!!Form::file('imagen',['class'=>'form-control'])!!} 
                                            
                                      
                                        </div>
                                                                          
                                    </div>

                                </div>
                                <!--fin para poner la imagen, cuando termines borras comentarios -->
                                    
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            {!!Form::label('Descripción')!!}
            {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Aqui decribe el producto','rows'=>'5'])!!}    
            </div>
        </div>
    </div>






                             <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
    <div class="clearfix"></div>
                            {!!Form::close()!!}
                                </form>
                                <!-- aqui finaliza el formulario de crear nuevo producto -->
                            </div>
                        </div>
                    </div>

@stop