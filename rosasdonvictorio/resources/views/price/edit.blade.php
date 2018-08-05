@extends('layouts.adminBase')

@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">EDITAR PRECIO</h4>
            <p class="category">www.floristeriaColors.com</p>

        </div>
        <div class="content">
        	{!!Form::model($price,['route'=>['precios.update',$price->id],'method'=>'PUT'])!!}
        		@include('price.forms.formPrice')
                {!!Form::submit('Guardar',['class'=>'btn btn-info btn-fill pull-right'])!!}
                <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>



@stop