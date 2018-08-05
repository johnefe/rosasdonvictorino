@extends('layouts.adminBase')

@section('content')
	@include('alerts.request')
	
	<div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NUEVO PRODUCTO</h4>
                                  <p class="category">www.floristeriaColors.com</p>
                            </div>
                            <div class="content">
                            {!!Form::open(['route'=> 'productos.store', 'method'=>'POST','files' => true])!!}
                            	 @include('product.forms.formProduct')
                           	 <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
    <div class="clearfix"></div>
                           	{!!Form::close()!!}
                            </div>
                        </div>
                    </div>
@stop