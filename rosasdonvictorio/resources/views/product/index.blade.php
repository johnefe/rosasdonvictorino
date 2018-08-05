@extends('layouts.adminBase')




@section('content')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}</div>

@endif

<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            <h4 class="title">MIS PRODUCTOS REGISTRADOS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width ">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </thead>

                <!--inicio un producto -->
                @foreach($products as $product)
				<tbody>
					<td>{{$product->nombre}}</td>
					<td>{{$product->category->name}}</td>
					<td>{{$product->descripcion}}</td>
					<td><img class="img-responsive" src="/img/arreglos/{{$product->imagen}}">
                    </td>

					<td>
					<a href="/admin/productos/{{$product->id}}/edit" class="btn btn-success"><span class="fa fa-pencil fa-1x"></span></a>
					

		 			{!!Form::open(['route'=>['productos.destroy',$product->id],'method'=>'DELETE'])!!}
					<button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>

					{!!Form::close()!!}

					</td>
				</tbody>
				@endforeach

            </table>

        </div>
    </div>
</div>


@stop