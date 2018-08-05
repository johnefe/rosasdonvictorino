@extends('layouts.adminBase')


@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">MULTIMEDIA</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
    </div>
</div>
<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">MI VIDEO EN LA PAGINA AYUDA</h4> 
        </div>
        <div class="content">

        {!!Form::model($video,['route'=>['multimedia.update',$video->id],'method'=>'PUT'])!!}

        <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        {!!Form::label('link_video','Link Video: ')!!}
                        {!!Form::text('link',null,['class'=>'form-control','placeholder'=>'link video'])!!}

                        </div>
                    </div>
                </div>
           <button type="submit" class="btn btn-info btn-fill pull-right">ACTUALIZAR</button>
                <div class="clearfix"></div>

        {!!Form::close()!!}

        </div>
    </div>
</div>

 @foreach($sliders as $slider)
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">{{$slider->ruta}}</h4>
              
        </div>
        <div class="content">
            <!-- aqui inicia el formulario de crear nuevo post -->
            {!!Form::model($slider,['route'=>['sliders.update',$slider->id],'method'=>'PUT','files'=>true])!!}

                <div class="row">                                      
                    <div class="col-md-12">
                        <div class="form-group">

                            {!!Form::label('nombre','Nombre: ')!!}
                            {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}

                        </div>
                    </div>
                </div>
                <!-- para poner la imagen -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                           {!!Form::file('imagen',['class'=>'form-control','id'=>'files'])!!} 
                            
                      
                        </div>
                                                          
                    </div>
                    <div class="col-md-6">
                      <div class="form-group text-center"  id="list">
                        <img src="/img/arreglos/slider/{{$slider->imagen}}" style="width: 500px;" class="img-responsive">

                      </div>
                    </div>
                </div>
            <!--fin para poner la imagen, cuando termines borras -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!!Form::label('Descripción')!!}
                            {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Texto del slider','rows'=>'5'])!!}  
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">guardar</button>
                <div class="clearfix"></div>
            {!!Form::close()!!}
            <!-- aqui finaliza el formulario de crear post -->
        </div>
    </div>
</div>

  @endforeach

@stop