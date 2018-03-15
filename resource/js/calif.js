
window.onload=function(){
var pos=window.name || 0;
window.scrollTo(0,pos);
}
window.onunload=function(){
window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
}


$(document).ready(function()
{
  var i;

   $('body').on('click', 'form', function(){
    
    var i=$(this).attr('id');
  
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
 
   return error;
}

function limpiar()
{
     $("#form")[0].reset();
      
}