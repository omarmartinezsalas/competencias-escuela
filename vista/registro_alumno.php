<?php
include "menu.php";
include "../controller/controller_recursos.php";
?>

<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
	<form name="registro_alumno" method="post" action="../controller/controller_alumno.php?accion=agregar">
		<h1>Registro alumno</h1>
		<label>Clave</label><br>
		<input class="form-control form-control-lg" name="clave" type="text" maxlength="30" placeholder="" class="" required ></input><br>
		<label>Nombre</label><br>
		<input class="form-control form-control-lg" name="nombre" type="text" maxlength="30" placeholder="" required></input><br>
		<label>Apellido paterno</label><br>
		<input class="form-control form-control-lg" name="a_paterno" type="text" maxlength="30" placeholder="" required></input><br>
		<label>Apellido materno</label><br>
		<input class="form-control form-control-lg" name="a_materno" type="text" maxlength="30" placeholder="" required></input><br>
		<label>Sexo</label><br>
		<select class="form-control " name="sexo">
			<option value="f">femenino</option>
			<option value="m">masculino</option>

		</select>
		<br>
		<label>Fecha de nacimiento</label><br>
		<input class="form-control form-control-lg" name="fecha" type="date" placeholder="" required></input><br>
		<label>Grupo</label><br>
		<?php
		grupos();
		?>

		<br>
		<button type="submint" class="btn btn-success">Registrar</button>
	</form>
</div>

<!--final de menu php-->		
</div>
</div>

</body>
</html>