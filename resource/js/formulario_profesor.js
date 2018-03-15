/*
*Funcion Javascript para enviar formularios sin recargar la página mediante ajax
*/

/* "escuchamos" el click en el botón con id "submit" solo si ya se ha cargado la página*/
$(document).ready(function()
{
   $('#clave').focusin(function()
   {
      $('#mclave').text('');
   });

   $('#nombre').focusin(function()
   {
      $('#mnombre').text('');
   });

   $('#ap').focusin(function()
   {
      $('#map').text('');
   });

   $('#am').focusin(function()
   {
      $('#mam').text('');
   });

   $('#correo').focusin(function()
   {
      $('#mcorreo').text('');
   });

   $('#pass').focusin(function()
   {
      $('#mcontra').text('');
   });

   $('#pass2').focusin(function()
   {
      $('#mcontra2').text('');
   });
   

});
$(function(){
   $('#boton').click(function(e){
      //alert('dfgdfgdfg');
      //evitamos la carga de la página
      e.preventDefault();
      var form = $(this).attr("form");
      if (valido()) 
      {
         //recogemos el id del formulario a enviar
         //var form = $(this).attr("form");
         //llamamos a la función que contendrá el llamado ajax dándole como argumento el id del formulario
         submitForm(form);
          limpiar();

      }
   });
});

//fuera de la carga de la página, creamos la función que recibe el id del formulario a enviar.

function submitForm(form){
   //recogemos el "action" a donde se enviarán los datos mediante "POST" 
   var action = $("form" + form).attr("action");
   //ahora recogemos los datos de los controles que hayamos definido y los serializamos como un formulario con Javascript
   var datos = $("form").serialize();
   //recogemos la posicion actual del id "mensaje" esto para que al recibir la respuesta de PHP se haga scroll hasta alli para mostrarlo correctamente.
   var mensaje = document.getElementById('mensaje').offsetTop - 20;
   
   //enviamos los datos mediante Ajax con la función de Jquery que nos facilita esta tarea
   
   $.ajax({
      //url a enviar
      url: '../controller/controller_profesor.php?accion=agregar',
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
   }).done(function(r){
      //hacemos scroll hasta el id "mensaje"
      $('body, html').animate({
         scrollTop: mensaje
      }, 700);
      //imprimimos con HTML el mensaje recibido
      $('#mensaje').html(r);
      //eso es todo
        
   });
  

}
function valido()
{
  var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

  var re = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/)
  var error=true;
  if ($('#clave').val().trim().length<7) 
  {
      $('#mclave').text('8 caracteres');
      $('#clave').addClass('error');
      error=false;
  }
 if($('#nombre').val().trim().length<2) 
  {
      $('#mnombre').text('llena este campo');
      $('#nombre').addClass('error');
      error=false;      
  }
   if ($('#ap').val().trim().length<2) 
  {
      $('#map').text('llena este campo');
      $('#ap').addClass('error');
      error=false;      
  }
   if ($('#am').val().trim().length<2) 
   {
      $('#mam').text('llena este campo');
      $('#am').addClass('error');
      error=false;
   }
   if (caract.test($('#correo').val()) == false)
   {
      $('#mcorreo').text('Escribe un coreo electronico');
      $('#correo').addClass('error');
      error=false;
   }
    if (re.test($('#pass').val()) == false )
   {
      $('#mcontra').text('Caracteres(6), almenos 1 mayuscula, 1 munuscula, 1 numero');
      $('#pass').addClass('error');
      error=false;
   }
    if ($('#pass').val() != $('#pass2').val())
   {
      $('#mcontra2').text('Contraseñas no coinciden');
      $('#pass2').addClass('error');
      error=false;
   }
   return error;
}
function limpiar()
{
     $("#form")[0].reset();
      
}