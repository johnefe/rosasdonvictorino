@extends('layouts.admin')

@section('content')
	@include('alerts.request')

	<div class="col-md-8 col-md-offset-2">
    	<div class="card">
        	<div class="header">
            	<h4 class="title">REGISTRAR CATEGORIA</h4>
            	<p class="category">www.floristeriaColors.com</p>

        	</div>
        <div class="content">

		{!!Form::model($category,['route'=>['categorias.update',$category->id],'method'=>'PUT'])!!}
			@include('category.forms.formCategory')

		{!!Form::submit('Actualizar',['class'=>'btn btn-info btn-fill pull-right'])!!}
		 <div class="clearfix"></div>
		{!!Form::close()!!}

		</div>
    </div>
</div>


@stop