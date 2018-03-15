$(document).ready(function(){
   var clave=0;
   $('#tab').on('click', 'button', function(){
     
       clave=$(this).attr('id');
       $('#txt').attr("value",clave); 
       descripcion(clave);
       descripcion_d(clave);
       descripcion_p(clave);
    });

});
function hola()
{
alert('gjgjgjgjhghjghjghjghjghjghjghjghjghjghjghjghjghjghjghj');
}
function descripcion(clave)
{
   var datos=clave;
   $.ajax({
      //url a enviar
      url: '../controller/controller_generica.php?accion=buscar&clave='+clave,
      //el tipo GET o POST en nuestro caso POST
      type: 'POST',
      //evitamos el cacheo de los datos
      cache: false,
      //evitamos que el JS procese los datos
      proccessData: false,
      //definimos los datos a enviar, nosotros ya los tenemos definidos en la variable "datos"
      data: datos
      //cuando se recibe la respuesta se activa el siguiente trozo de código
      //la r que recibe la funcion de callback es "response" que viene del script PHP
   }).done(function(rr){
      //hacemos scroll hasta el id "mensaje"
     
      //imprimimos con HTML el mensaje recibido
      $('#mensaje').html(rr);
      //eso es todo
   });
}
function descripcion_d(clave)
{
   var datos=clave;
   $.ajax({
      //url a enviar
      url: '../controller/controller_diciplinar.php?accion=buscar&clave='+clave,
      //el tipo GET o POST en nuestro caso POST
      type: 'POST',
      //evitamos el cacheo de los datos
      cache: false,
      //evitamos que el JS procese los datos
      proccessData: false,
      //definimos los datos a enviar, nosotros ya los tenemos definidos en la variable "datos"
      data: datos
      //cuando se recibe la respuesta se activa el siguiente trozo de código
      //la r que recibe la funcion de callback es "response" que viene del script PHP
   }).done(function(rr){
      //hacemos scroll hasta el id "mensaje"
     
      //imprimimos con HTML el mensaje recibido
      $('#mensajee').html(rr);
      //eso es todo
   });
}
function descripcion_p(clave)
{
   var datos=clave;
   $.ajax({
      //url a enviar
      url: '../controller/controller_profesional.php?accion=buscar&clave='+clave,
      //el tipo GET o POST en nuestro caso POST
      type: 'POST',
      //evitamos el cacheo de los datos
      cache: false,
      //evitamos que el JS procese los datos
      proccessData: false,
      //definimos los datos a enviar, nosotros ya los tenemos definidos en la variable "datos"
      data: datos
      //cuando se recibe la respuesta se activa el siguiente trozo de código
      //la r que recibe la funcion de callback es "response" que viene del script PHP
   }).done(function(rr){
      //hacemos scroll hasta el id "mensaje"
     
      //imprimimos con HTML el mensaje recibido
      $('#mensajeee').html(rr);
      //eso es todo
   });
}