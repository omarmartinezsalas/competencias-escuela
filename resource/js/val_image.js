$(document).ready(function(){

  $('#simg').click(function(e){
     

    e.preventDefault();
    $(this).attr('style','background-color:red;');
	var archivo = $("#img_up").val();
	var extensiones = archivo.substring(archivo.lastIndexOf("."));
	var form =  $(this).attr("form");
	var ff=$("#formf");
	if(extensiones != ".jpg" && extensiones != ".png")
	{
    	alert("El archivo  " + extensiones + "no es válido");
	}else
	{
		$(this).unbind('click').click()
		//$('#simg').submit();
		//submitForm(form);
		//alert("send");
	}
    	
    
   });
  	$("#mensaje").hide();

$('#enviar_pass').click(function(e){
     

    e.preventDefault();
    $('#origin').text('');
    $('#mcontra').text('');
    $('#mcontra2').text('');
  if (valido()) 
  {
    $(this).unbind('click').click();

  }
      
    
   });




});
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
      url: "../controller/controller_profesor.php?accion=foto",
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
      
      $('#mensaje').html(r);
      //eso es todo
        
   });
  

}
function valido()
{
  var re = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/)
  var error=true;
  if (re.test($('#original').val()) == false )
   {
      $('#origin').text('Caracteres(6), almenos 1 mayuscula, 1 munuscula, 1 numero');
     
      error=false;
   }
    if (re.test($('#pass').val()) == false )
   {
      $('#mcontra').text('Caracteres(6), almenos 1 mayuscula, 1 munuscula, 1 numero');
     
      error=false;
   }
    if ($('#pass').val() != $('#pass2').val())
   {
      $('#mcontra2').text('Contraseñas no coinciden');
     
      error=false;
   }
   return error;
}