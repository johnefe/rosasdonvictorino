                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!!Form::label('Tamaño')!!}
                            {!!Form::text('tamaño',null,['class'=>'form-control','placeholder'=>'Nombre del tamaño del producto, ej: Grande, mediano, pequeño, 12 rosas, 6 rosas, etc'])!!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        	{!!Form::label('Precio')!!}
							{!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Valor del producto, ej: 50000,70000, etc'])!!}
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        	{!!Form::label('Producto','Escoge el producto')!!}
							{!!Form::select('product_id',$products,null,['class'=>'form-control'])!!}	

                        </div>
                    </div>
                </div>