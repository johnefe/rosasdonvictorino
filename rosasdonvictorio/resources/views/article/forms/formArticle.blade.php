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
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                        {!!Form::label('Escoge una imagen')!!}
                                           {!!Form::file('imagen',['class'=>'form-control'])!!} 
                                            
                                      
                                        </div>
                                                                          
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group text-center"  id="list">
                                        <img src="/img/arreglos/{{$article->imagen}}" style="width: 500px;" class="img-responsive">

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