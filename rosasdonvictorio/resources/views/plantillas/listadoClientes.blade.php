@extends('layouts.adminBase')


@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">LISTADO CLIENTES</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>

                    
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Puntos</th>
                    <th>asignar</th>
                    <th>Acción</th>
                
                   
                </thead>
                <tbody>
                @foreach($clientes as $cliente)

              
                <tr>

                       
                        <td>{{$cliente->nombres}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->direccion}}</td>
                        
                        <td>{{$cliente->celular}}</td>
                        <td>
                        @php

                            $collection = collect($cliente->points);
                            echo $collection->sum("puntos");
                                
                                //echo $fecha->format('d/m');
                        @endphp

                        </td>
                        <td>
                            {!!Form::open(['route'=> 'points.store', 'method'=>'POST'])!!}
                                 {!!Form::text('puntos',null,['class'=>'form-control','placeholder'=>'Puntos'])!!}
                                 {!!Form::hidden('client_id',$cliente->id)!!}
                                 {!!Form::hidden('tipo',1)!!}

                                {!!Form::submit('Asignar',['class'=>'btn btn-info btn-fill pull-right'])!!}
                                <div class="clearfix"></div>
                            {!!Form::close()!!}
                            <!--<input type="text" class="form-control" name="" placeholder="Puntos">
                        <input type="submit" class="btn btn-primary" value="asignar" name="">-->
                        </td>
                        <td>
                            {!!Form::open(['route'=> 'points.store', 'method'=>'POST'])!!}
                                 {!!Form::text('puntos',null,['class'=>'form-control','placeholder'=>'Puntos'])!!}
                                 {!!Form::hidden('client_id',$cliente->id)!!}
                                 {!!Form::hidden('tipo',2)!!}

                                {!!Form::submit('Redimir',['class'=>'btn btn-info btn-fill pull-right'])!!}
                                <div class="clearfix"></div>
                            {!!Form::close()!!}
                        </td>

                </tr>

                @endforeach

                
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="header">
            <h4 class="title">PROXIMO CUMPLEAÑOS</h4>
            
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Fecha Nac.</th>
                    <th>Teléfono</th>
                   
                </thead>
                <tbody>
                <!--inicio un cliente-->
                @foreach($cumples as $cliente)
                <tr>
                        <td>{{$cliente->nombres}} {{$cliente->apellidos}}</td>
                        <td>
                        @php
                        
                        
                        $fecha = DateTime::createFromFormat('Y-m-d', $cliente->cumpleanos);
                        echo $fecha->format('d/m');
                        @endphp
                       
                        </td>
                        <td>{{$cliente->celular}}</td>
                </tr>

                @endforeach
                    
                <!-- finr un cliente -->
                <!--inicio un cliente-->
                   
                <!-- finr un cliente -->
                
                </tbody>
            </table>

        </div>
    </div>
</div>

@stop