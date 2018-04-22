<?php
if (!isset($_GET['idusuario']) || !isset($_GET['idusuario']) ||  !isset($_GET['clave_p'])) 
{
	header("location: ../index.php");
}else
{
	$clave=$_GET['idusuario'];
    $token=$_GET['token'];
    $clave_p=$_GET['clave_p'];
   // echo "{$clave}<br>{$token}<br>{$clave_p}";

    include "../model/profesor.php";
    $pro=new profesor();
    $valido=$pro->aceptar_cambio_password($token,$clave_p);

    if ($valido==0)//0=acepta   1=error
    {
 

?>


<html>
<head>
	<title>Recupera contraseña
	</title>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="../resource/css/formularios.css">
	<link rel="stylesheet" href="../resource/icon/style.css">

	<script src="../resource/js/jquery-3.2.1.min.js"></script>
	<script src="../resource/js/popper.js"></script>
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<script src="../resource/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
<h4 align="center">Cambiar contraseña</h4>
			<form name="contra" method="post" action="../controller/controller_profesor.php?accion=cambiapassemail">
				
				<center>
				<label>Nueva contraseña: <input id="pass" type="password" name="nueva"></input></label><br>
				<label id="mcontra" style="color:red;"></label><br>
				<label>Repite nueva contraseña: <input id="pass2" type="password" name="confirma"></input></label><br>
				<label id="mcontra2" style="color:red;"></label><br>
				
				<input type="hidden" name="clave" value="<?php echo"{$clave_p}"; ?>"></input>

				<button name="enviar_pass" id="enviar_pass" class="btn btn-primary">Enviar</button></center>
			</form>




<script type="text/javascript">
	$(document).ready(function()
	{
   $('#pass').focusin(function()
   {
      $('#mcontra').text('');
      console.log("limpia");
   });

   $('#pass2').focusin(function()
   {
      $('#mcontra2').text('');
   });
   
   $(function(){
   $('#enviar_pass').click(function(e){
      //alert('dfgdfgdfg');
      //evitamos la carga de la página
      console.log("boton presionado");
      e.preventDefault();
      var form = $(this).attr("form");
      if (valido()) 
      {
         //recogemos el id del formulario a enviar
         //var form = $(this).attr("form");
         //llamamos a la función que contendrá el llamado ajax dándole como argumento el id del formulario
        $(this).unbind('click').click();
         

      }else{alert("no valido");}
   });
});

});

	

function valido()
{
  var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

  var re = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/)
  var error=true;

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


</script>
</body>
</html>
<?php

   
    }else{
    	echo "<div class='alert alert-danger' role='alert'>
  		<strong>Error</strong>Hay algun error.
		</div><br>
		<a href='../index.php'>Regresar a pagina principal</a>";
    	exit("");
    }
}

?>