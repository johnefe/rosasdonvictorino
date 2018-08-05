@extends('layouts.adminBase')

@section('content')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}</div>

@endif
@if(Session::has('error'))

<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('error')}}</div>

@endif



<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">MIS CATEGORIAS REGISTRADAS</h4>
                    </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                    
                </thead>
                @foreach($categories as $category)

				<tbody>
					<td>{{$category->name}}</td>
					<td>{{$category->category_type->name}}</td>
					<td>
					<a href="/admin/categorias/{{$category->id}}/edit" class="btn btn-success"><span class="fa fa-pencil fa-1x"></span></a>

					{!!Form::open(['route'=>['categorias.destroy',$category->id],'method'=>'DELETE'])!!}
						
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