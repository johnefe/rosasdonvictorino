<!-- aqui inicia el formulario de crear nuevo post -->
    <div class="row">                                      
        <div class="col-md-12">
            <div class="form-group">
            	{!!Form::label('Nombre producto:')!!}
            	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre producto'])!!}
            </div>
        </div>
    </div>
    <div class="row">                                      
        <div class="col-md-6">
            <div class="form-group">
            	{!!Form::label('Categoria','Categoria: ')!!}
				{!!Form::select('category_id',$categories,null,['class'=>'form-control'])!!}	
            </div>
        </div>
        <div class="col-md-6">
        	<div class="form-group">
            	{!!Form::label('Escoge una imagen')!!}
				{!!Form::file('imagen',['class'=>'form-control'])!!}	
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
