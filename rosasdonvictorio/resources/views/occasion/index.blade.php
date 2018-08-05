@extends('layouts.adminBase')


@section('content')


<div class="col-md-6">
<div class="col-md-12">

    <div class="card">
        <div class="header">
            <h4 class="title">REGISTRAR OCASIÓN</h4>
            <p class="category">www.floristeriaColors.com</p>

        </div>
        <div class="content">
             {!!Form::open(['route'=> 'ocasiones.store', 'method'=>'POST'])!!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        {!!Form::label('Nombre ocasión:')!!}
                        {!!Form::text('ocasion',null,['class'=>'form-control','placeholder'=>'Escribe el nombre de la ocasión'])!!}
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
                <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="">
    <div class="card">
        <div class="header">
            <h4 class="title">OCASIONES REGISTRADAS</h4>
                    </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    
                </thead>
                <tbody>

                <!--inicio una categoria -->
                @foreach($ocasiones as $ocasion)
                 <tr>
                        <td>{{$ocasion->ocasion}}</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                @endforeach
                   
                <!-- fin una categoria-->
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="header">
            <h4 class="title">ADICIONAR PRODUCTO A OCASIÓN</h4>

        </div>
        <div class="content">
        <script>
    $(document).ready(function(){
        $('#occasion_id').change(function(){
            $.get('/dropdown/'+$(this).val(),
            function(data) {
                console.log(data)
                $.get('/productos',function(productos){
                    $('#checkboxes').empty();
                    $.each(productos, function(key, element) {
                        if(BuscarProducto(data,element)) {
                            console.log("encontrado")

                            $('#checkboxes').append(' <label for="one" class="form-control"> <input type="checkbox" onclick="javascript:validar(this);" id="'+element.id+'" checked="" /> '+ element.nombre + '</label>');
                            
                          
                        }
                        else {
                              $('#checkboxes').append(' <label for="one" class="form-control"> <input type="checkbox" onclick="javascript:validar(this);" id="'+element.id+'" /> '+ element.nombre + '</label>');
                              console.log("no encontrado")
                        }
                    });

                   /* $.each(data, function(key, element) {
                    $('#checkboxes').append(' <label for="one" class="form-control"> <input type="checkbox" id="" /> '+ element.nombre + '</label>');
                    });*/



                 });//cierra get Productos      
                
            });//ciera funcion y get dropdown
        });//cierra funcion change
    });  
    function BuscarProducto(productos,producto){
        var retorno = false;


        productos.forEach(function (k, index, productos){
            console.log("el k")
            console.log(k.id)
            console.log(producto.id)
            
            if(k.id == producto.id) {
                console.log("lo encontro")
                retorno = true;
               
            }

        });
        return retorno;


    }   
</script>

             
              
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group text-center">

                        <h3>Listas vinculadas</h3>

                        {{ Form::open() }}
                        {!!Form::label('Ocasion','Escoge la ocasion:')!!}
                            {!!Form::select('occasion_id',$occasions,null,['class'=>'form-control', 'id' =>'occasion_id' ])!!}  
                        <br>
                        {{ Form::close()}}
                        </div>

                        <div class="form-group">
                            <form>
                              <div class="multiselect">
                                <div class="selectBox "  onclick="showCheckboxes()" >
                                  <select class="form-control">
                                    <option>{!!Form::label('Product','Escoge el producto')!!}</option>
                                  </select>
                                  <div class="overSelect"></div>
                                </div>
                                <div id="checkboxes">
                                  
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                     
                </div>

                <!--<button type="submit" class="btn btn-info btn-fill pull-right">ADICIONAR</button>-->
                <div class="clearfix"></div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
    var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function validar(obj){
    if(obj.checked==true){
        var array = {"product_id":parseInt(obj.id),"occasion_id":parseInt($( "#occasion_id" ).val()),"operacion":"post"}
        console.log(obj.id);
        console.log($( "#occasion_id" ).val());
        console.log(array);
        console.log(JSON.stringify(array))
        

        $.ajax({
            type: "POST",
            url: "/ocasionproducto",
            data: JSON.stringify(array),
            contentType: "json",
            processData: false,
            success:function(data) {
                console.log(data);
            },
            error: function(error){
                console.log(error);

            }
        });

        //alert("si");
    }else{
        //elimina
        var array = {"product_id":parseInt(obj.id),"occasion_id":parseInt($( "#occasion_id" ).val()),"operacion":"delete"}
        $.ajax({
            type: "POST",
            url: "/ocasionproducto",
            data: JSON.stringify(array),
            contentType: "json",
            processData: false,
            success:function(data) {
                console.log(data);
            },
            error: function(error){
                console.log(error);

            }
        });
       
    }
}
</script>
@stop