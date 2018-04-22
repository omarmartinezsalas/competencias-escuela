<?php
include "menu.php";
include "../controller/controller_recursos.php";
?>

<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
	<h1>Registro curso</h1>
		<a href="manual.html#registrar_curso" align="right" target="_blank"><button class="btn btn-warning"><span class="icon-question"></span></button></a>
	<form name="registro_grupo" method="post" action="../controller/controller_curso.php?accion=agregar">
		
		<label>Materia</label><br>
		<?php materias();?><br>
		<label>Grupo</label><br>
		<?php grupos();?><br> 
		

		<!--<label>Profesor</label><br>-->
		<input name="profesor" type="hidden" maxlength="30" placeholder="" value="<?php echo $_SESSION['clave'];?>" required readonly> </input><br>
		<br>
		<button type="submint" class="btn btn-primary" id="boton">Registrar</button>
	</form>

	<div class="alert alert-success" role="alert" id="mensaje">
  		Espere... No cierre ni recarge la pagina
	</div>

</div>


	<!--final de menu php-->		
</div>
</div>
<script type="text/javascript" src="../resource/js/ajax_registra_curso.js"></script>
</body>
</html>