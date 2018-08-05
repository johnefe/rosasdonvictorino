<div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        	{!!Form::label('Nombre categoria')!!}
							{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la categoria'])!!}
                        </div>
                    </div>
                </div>

                <div class="row">                                      
                	<div class="col-md-12">
            			<div class="form-group">
            			{!!Form::label('Tipo','Tipo de Categoria: ')!!}
						{!!Form::select('category_type_id',$category_types,null,['class'=>'form-control'])!!}	
            			</div>
        			</div>
				</div>