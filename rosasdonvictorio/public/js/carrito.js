
var cantidadArreglo=0;
var arrayCarrito = [];
var arrayFinal={};
//var objeto = { "idObjeto":null, "nombreObjeto": null,"valorObjeto": null, "cantidadObjeto": null,"tamaño":null,"imagen":null};
 
function verCarrito(arrayCarrito){


    $("#LookCar").click(function(arrayCarrito){
        /*pa el subtotal*/
       // alert("loca")
                    var subTotal=0;
                    for(i=0; i<arrayCarrito.length;i++){
                        var subt=(arrayCarrito[i].cantidadObjeto)*arrayCarrito[i].valorObjeto;
                        subTotal=subTotal+subt;
                    }
                    

                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayCarrito.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayCarrito[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }


                    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
                    /*fin subtotal*/

        $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {
            
             arrayCarrito = data;
             arrayFinal = arrayCarrito;
            var cantidadProductosEnCarrito=0;
            var puntosr=0;
                for(i=0;i<arrayFinal.length;i++){
                     cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayFinal[i].cantidadObjeto;
                    puntosr=puntosr+(arrayFinal[i].cantidadObjeto*arrayFinal[i].valorObjeto);

                }
            var puntos = puntosr/100;
            document.getElementById("puntos").innerHTML=puntos;
            /*pa el subtotal*/
            var subTotal=0;
            for(i=0; i<arrayFinal.length;i++){
                var subt=(arrayFinal[i].cantidadObjeto)*arrayFinal[i].valorObjeto;
                subTotal=subTotal+subt;
            }
            document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
            /*fin subtotal*/
             console.log(arrayCarrito)
                if(cantidadProductosEnCarrito==0){
            
                    document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                }else{
                    console.log(arrayFinal)
                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayFinal.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayFinal[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }
                } 


        }
    });


});
/*---------------------------------------------------*/
$("#LookCar2").click(function(arrayCarrito){
        /*pa el subtotal*/
        //alert("loca")
                    var subTotal=0;
                    for(i=0; i<arrayCarrito.length;i++){
                        var subt=(arrayCarrito[i].cantidadObjeto)*arrayCarrito[i].valorObjeto;
                        subTotal=subTotal+subt;
                    }
                    if (subTotal==0) {
                       document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                    }

                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayCarrito.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayCarrito[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }


                    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
                    /*fin subtotal*/

        $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {
            
            arrayCarrito = data;
            arrayFinal = arrayCarrito;
            var cantidadProductosEnCarrito=0;
            var puntosr=0;
                for(i=0;i<arrayFinal.length;i++){
                     cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayFinal[i].cantidadObjeto;
                    puntosr=puntosr+(arrayFinal[i].cantidadObjeto*arrayFinal[i].valorObjeto);

                }
     

            /*pa el subtotal*/
            var subTotal=0;
            for(i=0; i<arrayFinal.length;i++){
                var subt=(arrayFinal[i].cantidadObjeto)*arrayFinal[i].valorObjeto;
                subTotal=subTotal+subt;
            }
            document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
            /*fin subtotal*/
             console.log(arrayCarrito)
                if(cantidadProductosEnCarrito==0){
            
                    document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                }else{
                    console.log(arrayFinal)
                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayFinal.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayFinal[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }
                } 


             }
        });
    });


/*--------------------------*/
    var subTotal=0;
        for(i=0; i<arrayCarrito.length;i++){
            var subt=(arrayCarrito[i].cantidadObjeto)*arrayCarrito[i].valorObjeto;
            subTotal=subTotal+subt;
        }

  if (subTotal==0) {
        document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
        document.getElementById("btn-modales").innerHTML='<a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a>';
       
    }else{
        document.getElementById("btn-modales").innerHTML='<a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a>'+
            '<a href="/resumenCompra" class="btn btn-primary">Confirmar Compra</a>';
       

        
    }
/*--------------------------*/
}




function AgregarProducto(){
    
    var band=0;
    //aqui en codigo arreglo esta estatico faltaria ir por el codigo real 
    var codigoArreglo=parseInt(document.getElementById("cc").value);
    var valorProducto=document.getElementById("valorProducto").value;
    var cantidadProducto=document.getElementById("cantidadProducto").value;
    var img=document.getElementById("img").value;
    var nombreProducto=document.getElementById("nombreProducto").value;
    var selectBox = document.getElementById("selectTamaño");
    var selectBox1 = selectBox.options[selectBox.selectedIndex].text;
    /* remplazamos las (,) de valorProducto por vacio */
    var patron = /,/g,
    nuevoValor    = "",
    nuevaCadena = valorProducto.replace(patron, nuevoValor);
    
    /*aqui ya tengo el valor del arreglo x la cantidad seleccionada */
    var valorXcantidad=parseInt(nuevaCadena)*parseInt(cantidadProducto);
 
    //datos del nuevo arreglo a registrar
    var idObjeto=codigoArreglo;
    var nombreObjeto = nombreProducto; 
    var valorObjeto = parseInt(nuevaCadena);
    var cano = parseInt(cantidadProducto);  

   //averiguamos si ya hay un producto agregado    
    if(arrayCarrito.length==0){
        //Insertamos objeto en Array:
        arrayCarrito.push(

            {  
                "idObjeto":idObjeto,
                "nombreObjeto": nombreObjeto,
                "valorObjeto": valorObjeto,
                "cantidadObjeto": cano,
                "tamaño":selectBox1,
                "imagen":img
            });  
    }
    else
    {
        if (arrayCarrito.length>0) {
            
            for (var i=0;i< arrayCarrito.length; i++){

            
                if (arrayCarrito[i].tamaño==selectBox1 && arrayCarrito[i].idObjeto==idObjeto) {
                    var t=cano;
                    var k=arrayCarrito[i].cantidadObjeto;
                    arrayCarrito[i].cantidadObjeto=t+k;
                    band=0;
                }
                else{
                    
                    band=band+1;
                    
                }
             
            }
            if (band>0) {

                    
                    var cantidadPro=document.getElementById("cantidadProducto").value;
                    var tt=parseInt(cantidadPro);
                    arrayCarrito.push(
                    
                    {  
                        "idObjeto":idObjeto,
                        "nombreObjeto": nombreObjeto,
                        "valorObjeto": valorObjeto,
                        "cantidadObjeto": tt,
                        "tamaño":selectBox1,
                        "imagen":img
                    }); 

                    band=0; 
            }


        }
    }



    /*--------------------------------------------------------*/     
    arrayFinal=arrayCarrito;
    ActualizarVS();
    var cantidadProductosEnCarrito=0;
    var puntosr=0;
        for(i=0;i<arrayFinal.length;i++){
            cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayFinal[i].cantidadObjeto;
            puntosr=puntosr+(arrayFinal[i].cantidadObjeto*arrayFinal[i].valorObjeto);

        }
    var puntos = puntosr/100;
    document.getElementById("puntos").innerHTML=puntos;
    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;  
    mensaje();    


  if (cantidadProductosEnCarrito==0) {
        document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
        document.getElementById("btn-modales").innerHTML='<a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a>';
       
    }else{
        document.getElementById("btn-modales").innerHTML='<a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a>'+
            '<a href="/resumenCompra" class="btn btn-primary">Confirmar Compra</a>';
       

        
    }
       

}
/*----------------------------------------------------------------------------------*/
function agregarDetalle(cod){

    var band=0;
    var nombreDetalle= document.getElementById("nombreDetalle"+cod).value;
    var tamaño=document.getElementById("tamDeta").value;
    var valorDetalle =document.getElementById(cod).value;
    var cantidadDetalle=document.getElementById("cantidadDetalle"+cod).value;
    var urlimagen=document.getElementById("img"+cod).value;
    var valor =parseInt(valorDetalle)*parseInt(cantidadDetalle);    

   //datos del nuevo arreglo a registrar
    var idObjeto=cod;
    var nombreObjeto= nombreDetalle; 
    var valorObjeto= parseInt(valorDetalle);
    var cantidadObjeto=parseInt(cantidadDetalle);
    var tamaño= tamaño;
    var imagen=urlimagen;
     
    //averiguamos si ya hay un producto agregado
    
    if(arrayCarrito.length==0){
        //Insertamos objeto en Array:
        arrayCarrito.push(

            {  
                "idObjeto":idObjeto,
                "nombreObjeto": nombreObjeto,
                "valorObjeto": valorObjeto,
                "cantidadObjeto": cantidadObjeto,
                "tamaño":tamaño,
                "imagen":imagen
            });  
    }
    else
    {
                   
            for (var i=0;i< arrayCarrito.length; i++){

            
                if (arrayCarrito[i].idObjeto==idObjeto) {
                    var t=cantidadObjeto;
                    var k=arrayCarrito[i].cantidadObjeto;
                    arrayCarrito[i].cantidadObjeto=t+k;
                   band=0;
                }
                else{
                    
                    band=band+1;

                    //alert("bandera si no es igual:"+band)
                }
             
            }


            if (band==arrayFinal.length) {

                    //alert(selectBox1);
                    var cantidadPro=document.getElementById("cantidadProducto").value;
                    var tt=parseInt(cantidadPro);
                    arrayCarrito.push(
                    
                    {  
                        "idObjeto":idObjeto,
                        "nombreObjeto": nombreObjeto,
                        "valorObjeto": valorObjeto,
                        "cantidadObjeto": cantidadObjeto,
                        "tamaño":tamaño,
                        "imagen":imagen
                    }); 

                    band=0; 
            }
    }     
    console.log("Array despues de añadir este objeto: ");
    arrayFinal=arrayCarrito;
    console.log(arrayFinal);
    ActualizarVS()
    
    var cantidadProductosEnCarrito=0;
    var puntosr=0;
        for(i=0;i<arrayFinal.length;i++){
            cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayFinal[i].cantidadObjeto;
            puntosr=puntosr+(arrayFinal[i].cantidadObjeto*arrayFinal[i].valorObjeto);

        }
    var puntos = puntosr/100;
    document.getElementById("puntos").innerHTML=puntos;
    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;  
    mensaje(); 
    document.getElementById("btn-modales").innerHTML='<a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a>'+
            '<a href="/resumenCompra" class="btn btn-primary">Confirmar Compra</a>';
       
}

function quitarProducto(idOb,valors){
    arrayFinal=arrayCarrito;
    var cantidadProductosEnCarrito=0;
        for(i=0;i<arrayFinal.length;i++){
            cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayFinal[i].cantidadObjeto;
           
        }

    //aqui en codigo arreglo esta estatico faltaria ir por el codigo real 
    var codigoArreglo=idOb;
    var valorProducto=valors;
    /* codigo para eliminar un producto del arrayCarrito*/

    /*for*/
    for (var i = 0; i < arrayFinal.length; i++) {

        /*primer if si el codigo del producto coincide*/
        if (arrayFinal[i].idObjeto==codigoArreglo) {

            /*segundo if si el valor del producto coincide*/
            if (arrayFinal[i].valorObjeto==valorProducto) {

                /*tecer if si esa cantidad es mayor que 1*/
                if (arrayFinal[i].cantidadObjeto>1) {

                    arrayFinal[i].cantidadObjeto=arrayFinal[i].cantidadObjeto-1
                    cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
                    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;

                    /*pa el subtotal*/
                    var subTotal=0;
                    for(i=0; i<arrayFinal.length;i++){
                        var subt=(arrayFinal[i].cantidadObjeto)*arrayFinal[i].valorObjeto;
                        subTotal=subTotal+subt;
                    }

                    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
                    /*fin subtotal*/
                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayFinal.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayFinal[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }
                    
                }/*end if si la cantidad es mayor que 1*/
                else{

                    arrayFinal[i].cantidadObjeto=arrayFinal[i].cantidadObjeto-1
                    cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
                   
                    arrayCarrito.splice(i,1);

                    /*pa el subtotal*/

                    var subTotal=0;
                    for(i=0; i<arrayFinal.length;i++){
                        var subt=(arrayFinal[i].cantidadObjeto)*arrayFinal[i].valorObjeto;
                        subTotal=subTotal+subt;
                    }
                    if (subTotal==0) {
                       document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                    }

                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayFinal.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayFinal[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }


                    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
                    var puntos = subTotal/100;
                    document.getElementById("puntos").innerHTML=puntos;
                    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
                    /*fin subtotal*/

                }
            }/*end segundo if valor coincide*/
            
        } /*end si es igual al codigo */
    }/*end for*/
    
    /*pa el subtotal*/
    
                    var subTotal=0;
                    for(i=0; i<arrayCarrito.length;i++){
                        var subt=(arrayCarrito[i].cantidadObjeto)*arrayCarrito[i].valorObjeto;
                        subTotal=subTotal+subt;
                    }
                    

                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayCarrito.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayCarrito[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }
                    if (subTotal==0) {
                       document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                       document.getElementById("btn-modales").innerHTML='<a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a>'+
            '';
      
                    }


                    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
                    var puntos = subTotal/100;
                    document.getElementById("puntos").innerHTML=puntos;
                    /*fin subtotal*/

    //console.log("Array despues de eliminar el prodcuto: ");
    ActualizarVS()
    //console.log(arrayCarrito);
    activarBoton(cantidadProductosEnCarrito);

}

function quitarDetalle(cod){
    var cantidadProductosEnCarrito=0;
    


    var valorDetalle =document.getElementById(cod).value;
    var cantDe=document.getElementById("cantDe"+cod).value;  
    var codDeatlle= cod;
    for (var i = 0; i < arrayCarrito.length; i++) {

      if (arrayCarrito[i].idObjeto == codDeatlle) {

            if(arrayCarrito[i].cantidadObjeto>1){
                var k=arrayCarrito[i].cantidadObjeto;
                arrayCarrito[i].cantidadObjeto=k-1;
            }
            else{
                arrayCarrito.splice(i,1);
            }
        }   
    }
    console.log("Array despues de eliminar el detalle: ");
    ActualizarVS()
      var puntosr=0;
        for(i=0;i<arrayCarrito.length;i++){
            
            puntosr=puntosr+(arrayCarrito[i].cantidadObjeto*arrayCarrito[i].valorObjeto);
        }
    var puntos = puntosr/100;
    document.getElementById("puntos").innerHTML=puntos;
    activarBoton(cantidadProductosEnCarrito);

}


/* script para colocar el precio de un arreglo segun el tamño*/
function changeFunc() {
    var selectBox = document.getElementById("selectTamaño");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    document.getElementById("valorProducto").value=selectedValue;
    document.getElementById("precioT").innerHTML=selectedValue;
    var selectBox1 = selectBox.options[selectBox.selectedIndex].text;
    
}

/*js para el objeto que aparece y desaparece*/

function mensaje(){
    $("#addcirculo").fadeIn();
    $("#addcirculo").fadeOut(1900);

}

function ActualizarVS(){
    //console.log(JSON.stringify(arrayCarrito));

    $.ajax({
        type: "POST",
        url: "/carroVS",
        data: JSON.stringify(arrayCarrito),
        contentType: "json",
        processData: false,
        success:function(data) {
             
        } 
    });
        
}

$(document).ready(function(){

    $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {
           
             arrayCarrito = data;
             arrayFinal = arrayCarrito;
             var cantidadProductosEnCarrito=0;
                for(i=0;i<arrayCarrito.length;i++){
                cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayCarrito[i].cantidadObjeto;
                }
            if (cantidadProductosEnCarrito===0) {
                arrayCarrito=[];
                verCarrito(arrayCarrito);
                console.log(arrayCarrito);
            }else{
                arrayCarrito = data;
                arrayFinal = arrayCarrito;
                verCarrito(arrayCarrito);
                //alert("si hay")
                //console.log(arrayCarrito)
                 var cantidadProductosEnCarrito=0;
            var puntosr=0;
                for(i=0;i<arrayFinal.length;i++){
                     cantidadProductosEnCarrito=cantidadProductosEnCarrito+arrayFinal[i].cantidadObjeto;
                    puntosr=puntosr+(arrayFinal[i].cantidadObjeto*arrayFinal[i].valorObjeto);

                }
            
            }
            document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
            //console.log(arrayFinal);
        }
    });

});
function activarBoton(cantidadProductosEnCarrito){

    if (cantidadProductosEnCarrito==0) {
        document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
        document.getElementById("boton-final").innerHTML="<a href='/arreglos' class='btn btn-primary form-control'>REGRESAR</a>"
        }else{

        document.getElementById("boton-final").innerHTML="<a href='/finalizarCompra' class='btn btn-primary form-control'>CONTINUAR CON LA COMPRA</a>"
        }

}