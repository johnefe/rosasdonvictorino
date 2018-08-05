@extends('layouts.adminBase')


@section('content')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}</div>

@endif


<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">MIS PRECIOS REGISTRADOS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    
                    <th>Producto</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </thead>

                @foreach($prices as $price)
				<tbody>
					<tr>
						
						<td>{{$price->product->nombre}}</td>
						<td>{{$price->tamaño}}</td>
						<td>{{$price->precio}}</td>
						<td>
							<a href="/admin/precios/{{$price->id}}/edit" class="btn btn-success"><span class="fa fa-pencil fa-1x"></span></a>

		 					{!!Form::open(['route'=>['precios.destroy',$price->id],'method'=>'DELETE'])!!}
								<button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>

							{!!Form::close()!!}

						</td>
						
					</tr>
				</tbody>

				@endforeach

            </table>

        </div>
    </div>
</div>
@stop