@extends('layouts.adminBase')

@section('content')
	@include('alerts.request')
	
	<div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">EDITAR PRODUCTO</h4>
                                  <p class="category">www.floristeriaColors.com</p>
                            </div>
                            <div class="content">

                            {!!Form::model($product,['route'=>['productos.update',$product->id],'method'=>'PUT', 'files'=>true])!!}

                               <div class="row">                                      
                                  <div class="col-md-12">
                                      <div class="form-group">
                                        {!!Form::label('Nombre producto:')!!}
                                        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre producto'])!!}
                                      </div>
                                  </div>
                              </div>
                                <!-- para poner la imagen -->
                                <div class="col-md-6">
                                      <div class="form-group">
                                        {!!Form::file('imagen',['class'=>'form-control'])!!}  
                                    </div>
                                            
                                </div>
                                <div class="row">
                                    <!--<div class="col-md-6">
                                        <div class="form-group ">
                                            <input type="file" id="files" class="form-control" name="files[]" />
                                            
                                      
                                        </div>
                                                                          
                                    </div>-->
                                    <div class="col-md-6">
                                      <div class="form-group text-center"  id="list">
                                        <img src="/img/arreglos/{{$product->imagen}}" style="width: 500px;" class="img-responsive">

                                      </div>
                                    </div>
                                </div>
                                <!--fin para poner la imagen, cuando termines borras comentarios -->
                                <div class="row">                                      
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          {!!Form::label('Categoria','Categoria: ')!!}
                                    {!!Form::select('category_id',$categories,null,['class'=>'form-control'])!!}  
                                        </div>
                                    </div>
                                    
                                </div>
                                    
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                      {!!Form::label('Descripción')!!}
                                      {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Aqui decribe el producto','rows'=>'5'])!!}  
                                      </div>
                                  </div>
                               </div>
                               <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar</button>
                                <div class="clearfix"></div>
                              {!!Form::close()!!}
                              </div>
                            </div>
<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="img-responsive" style="width: 60%; margin-left: 20%;" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
</script>
@stop
