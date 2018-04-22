$(document).ready(function(){

var com=0;
var casilla;
var descripcion;
	$("#addgenerica").click(function()
	{
			$("#generica").attr("disabled", false);
			$("#generica").attr("style", "border-color:green;");
         casilla=$("#generica");
			descripcion=$("#descripcion_generica1");
	});
   $("#addgenerica2").click(function()
   {
         $("#generica2").attr("disabled", false);
         $("#generica2").attr("style", "border-color:green;");
         casilla=$("#generica2");
         descripcion=$("#descripcion_generica2");
         
   });
   $("#addgenerica3").click(function()
   {
         $("#generica3").attr("disabled", false);
         $("#generica3").attr("style", "border-color:green;");
         casilla=$("#generica3");
         descripcion=$("#descripcion_generica3");
         
   });
	$("#quitgenerica").click(function()
		{
			$("#generica").attr("disabled", true);
			$("#generica").attr("style", "border-color:red;");
		
	});
   $("#quitgenerica").click(function()
      {
         $("#generica").attr("disabled", true);
         $("#generica").attr("style", "border-color:red;");
      
   });
   $("#quitgenerica2").click(function()
      {
         $("#generica2").attr("disabled", true);
         $("#generica2").attr("style", "border-color:red;");
      
   });
   $("#quitgenerica3").click(function()
      {
         $("#generica3").attr("disabled", true);
         $("#generica3").attr("style", "border-color:red;");
      
   });
   //----------------------------------primarias-------arriba
	$("#adddiciplinar").click(function()
	{
			$("#diciplinar").attr("disabled", false);
			$("#diciplinar").attr("style", "border-color:green;");
			casilla=$("#diciplinar");
         descripcion=$("#descripcion_disciplinar1");
	});
	$("#quitdiciplinar").click(function()
		{
			$("#diciplinar").attr("disabled", true);
			$("#diciplinar").attr("style", "border-color:red;");
		    
	});

      $("#adddiciplinar2").click(function()
   {
         $("#diciplinar2").attr("disabled", false);
         $("#diciplinar2").attr("style", "border-color:green;");
         casilla=$("#diciplinar2");
         descripcion=$("#descripcion_disciplinar2");
   });
   $("#quitdiciplinar2").click(function()
      {
         $("#diciplinar2").attr("disabled", true);
         $("#diciplinar2").attr("style", "border-color:red;");
      
   });
   //------------------------------------------

	$("#addprofesional").click(function()
	{
			$("#profesional").attr("disabled", false);
			$("#profesional").attr("style", "border-color:green;");
	        casilla=$("#profesional");
         descripcion=$("#descripcion_profesional1");
   });
	$("#quitprofesional").click(function()
		{
			$("#profesional").attr("disabled", true);
			$("#profesional").attr("style", "border-color:red;");
	});

   $("#addprofesional2").click(function()
   {
         $("#profesional2").attr("disabled", false);
         $("#profesional2").attr("style", "border-color:green;");
         casilla=$("#profesional2");
         descripcion=$("#descripcion_profesional2");
   });
   $("#quitprofesional2").click(function()
      {
         $("#profesional2").attr("disabled", true);
         $("#profesional2").attr("style", "border-color:red;");
         
   });
//-------------------busquedas-------------------
	$("#add_com").click(function(e){
		e.preventDefault();
     	var form = $(this).attr("form_com");
         submitForm(form);
	});

	$("#add_diciplinar").click(function(e){
		e.preventDefault();
     	var form = $(this).attr("form_diciplinar");
         diciplinar(form);
	});

	$("#add_profesional").click(function(e){
		e.preventDefault();
     	var form = $(this).attr("form_profesional");
         profesional(form);
	});
//-------------add casilla------------------------------------------------------
	$('#exampleModalLong').on('click', 'button', function(){
    com=$(this).attr('id');

   
     //------------
    $(this).attr('class','btn btn-danger');

    $("#exampleModalLong").modal('hide');
   //----------------

   casilla.attr("value", com);
    descripcion.attr("value",$(this).attr('value'));

  	});
//-----------------add casilla diciplinar--------------------------
      $('#modaldiciplinar').on('click', 'button', function(){
    dic=$(this).attr('id');
   des=$(this).attr('value');
     //------------
    $(this).attr('class','btn btn-danger');

    $("#modaldiciplinar").modal('hide');
   //----------------

   casilla.attr("value", dic);
   descripcion.attr("value",$(this).attr('value'));

   });
//agrega clave a profesional
      $('#modalprofesional').on('click', 'button', function(){
    dic=$(this).attr('id');
    
    //------------
    $(this).attr('class','btn btn-danger');

    $("#modalprofesional").modal('hide');
   //----------------

    casilla.attr("value", dic);
    descripcion.attr("value",$(this).attr('value'));
   });




});

function boleano(b)
{
   var regresa;
   if (b==true) 
   {
      regresa=false;
   }else
   {
      if (b==false) 
      {
         regresa=true;
      }
   }
   return regresa;
}


function submitForm(form)
{
   //recogemos el "action" a donde se enviarán los datos mediante "POST" 
   var action = $("form" + form).attr("action");
   //ahora recogemos los datos de los controles que hayamos definido y los serializamos como un formulario con Javascript
   var datos = $("form").serialize();
   //recogemos la posicion actual del id "mensaje" esto para que al recibir la respuesta de PHP se haga scroll hasta alli para mostrarlo correctamente.
   var mensaje = document.getElementById('mensajeg').offsetTop - 20;
   
   //enviamos los datos mediante Ajax con la función de Jquery que nos facilita esta tarea
   
   $.ajax({
      //url a enviar
      url: '../controller/controller_add_generica_act.php?clase=generica',
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
         scrollTop: mensajeg
      }, 700);
      //imprimimos con HTML el mensaje recibido
      $('#mensajeg').html(r);
      //eso es todo
   });
}

function diciplinar(form)
{
   //recogemos el "action" a donde se enviarán los datos mediante "POST" 
   var action = $("form" + form).attr("action");
   //ahora recogemos los datos de los controles que hayamos definido y los serializamos como un formulario con Javascript
   var datos = $("form").serialize();
   //recogemos la posicion actual del id "mensaje" esto para que al recibir la respuesta de PHP se haga scroll hasta alli para mostrarlo correctamente.
   var mensaje = document.getElementById('mensajed').offsetTop - 20;
   
   //enviamos los datos mediante Ajax con la función de Jquery que nos facilita esta tarea
   
   $.ajax({
      //url a enviar
      url: '../controller/controller_add_generica_act.php?clase=diciplinar',
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
      $('body, html').animate({
         scrollTop: mensajed
      }, 700);
      //imprimimos con HTML el mensaje recibido
      $('#mensajed').html(rr);
      //eso es todo
   });
}
function profesional(form)
{
   //recogemos el "action" a donde se enviarán los datos mediante "POST" 
   var action = $("form" + form).attr("action");
   //ahora recogemos los datos de los controles que hayamos definido y los serializamos como un formulario con Javascript
   var datos = $("form").serialize();
   //recogemos la posicion actual del id "mensaje" esto para que al recibir la respuesta de PHP se haga scroll hasta alli para mostrarlo correctamente.
   var mensaje = document.getElementById('mensajep').offsetTop - 20;
   
   //enviamos los datos mediante Ajax con la función de Jquery que nos facilita esta tarea
   
   $.ajax({
      //url a enviar
      url: '../controller/controller_add_generica_act.php?clase=profesional',
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
   }).done(function(rrr){
      //hacemos scroll hasta el id "mensaje"
      $('body, html').animate({
         scrollTop: mensajep
      }, 700);
      //imprimimos con HTML el mensaje recibido
      $('#mensajep').html(rrr);
      //eso es todo
   });
}