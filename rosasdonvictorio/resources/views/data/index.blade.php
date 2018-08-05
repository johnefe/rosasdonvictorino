@extends('layouts.adminBase')

@section('content')
@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}</div>

@endif

    <div class="col-md-8">
    

                        <div class="card">
                            <div class="header">
                                <h4 class="title">EDITAR MI INFORMACIÓN</h4>
                            </div>
                            <div class="content">
                                {!!Form::model($data,['route'=>['datos.update',$data->id],'method'=>'PUT'])!!}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Empresa</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="www.floristeríaColors.com">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" placeholder="Username" value="Floristeria Flowers">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo Electrónico</label>
                                                <input name="email" type="email" class="form-control" placeholder="Email" value="{{$data->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <input name="ciudad" type="text" class="form-control" placeholder="Ciudad" value="{{$data->ciudad}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input name="direccion" type="text" class="form-control" placeholder="Dirección" value="{{$data->direccion}}">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Teléfono</label>
                                                <input name="telefono" type="text" class="form-control" placeholder="Teléfono" value="{{$data->telefono}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input name="celular" type="text" class="form-control" placeholder="Celular" value="{{$data->celular}}">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar Información</button>
                                    <div class="clearfix"></div>
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
    <!-- se muestra un resumen de la info registrada o actualizada -->                
    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="/img/flor.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="/img/logo.jpg" alt="..."/>

                                      <h4 class="title">Floristería Colors<br />
                                         <small>{{$data->direccion}}</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> {{$data->telefono}} <br>
                                                    {{$data->celular}} <br>
                                                    San Juan de Pasto 
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="https://www.facebook.com/Floristeria-Colors-826542960800106/?fref=ts" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>
<!--link para facebook -->
<div class="col-md-4">
    <div class="card">
        <div class="header">
            <h4 class="title">FACEBOOK</h4>
           
        </div>
        <div class="content">
        {!!Form::model($data,['route'=>['datos.update',$data->id],'method'=>'PUT'])!!}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Link Facebook</label>
                        <input type="tetxt" class="form-control" placeholder="link facebook" name="facebook" value="{{$data->facebook}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">ACTUALIZAR</button>
            <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
<!--fin link para facebook -->
<!--link para instagram -->
<div class="col-md-4">
    <div class="card">
        <div class="header">
            <h4 class="title">INSTAGRAM</h4>
           
        </div>
        <div class="content">
        {!!Form::model($data,['route'=>['datos.update',$data->id],'method'=>'PUT'])!!}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Link Instagram</label>
                        <input type="tetxt" class="form-control" placeholder="link Instagram" name="instagram" value="{{$data->instagram}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">ACTUALIZAR</button>
            <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
<!--fin link para instagram -->
<!--link para skype -->
<div class="col-md-4">
    <div class="card">
        <div class="header">
            <h4 class="title">TWITTER</h4>
           
        </div>
        <div class="content">
        {!!Form::model($data,['route'=>['datos.update',$data->id],'method'=>'PUT'])!!}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Link Twitter</label>
                        <input type="tetxt" class="form-control" placeholder="link Twitter" name="youtube" value="{{$data->youtube}}" >
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">ACTUALIZAR</button>
            <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
<!--fin link para Skype -->
<!--link para Pinterest -->
<div class="col-md-4">
    <div class="card">
        <div class="header">
            <h4 class="title">PINTEREST</h4>
           
        </div>
        <div class="content">
        {!!Form::model($data,['route'=>['datos.update',$data->id],'method'=>'PUT'])!!}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Link Pinterest</label>
                        <input type="tetxt" class="form-control" placeholder="link Pinterest" name="pinterest" value="{{$data->pinterest}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">ACTUALIZAR</button>
            <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
<!--fin link para Pinterest -->
@stop
