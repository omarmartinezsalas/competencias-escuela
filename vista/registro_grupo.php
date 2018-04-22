<?php
include "admin.php";
?>

<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
	<form name="registro_grupo" method="post" action="../controller/controller_grupo.php?accion=agregar">
		<h1>Registro grupo</h1>
		<label>Clave</label><br>
		<input class="form-control form-control-lg" name="clave" type="text" maxlength="13" placeholder="201-2017-2018" required></input><br>
		<label>Turno</label><br>
		<select class="form-control" name="turno">
			<option value="matutino" selected>Matutino</option>
			<option value="vespertino">Vespertino</option>
		</select>
		<br>
		<label>Carrera</label><br>
		<input class="form-control form-control-lg" name="carrera" type="text" maxlength="30" placeholder="" required></input><br>

		<label>Ciclo escolar</label><br>
		<input class="form-control form-control-lg" type="text" name="ciclo" maxlength="9" placeholder="2017-2018" required></input><br>
		
		<button type="submint" class="btn btn-primary">Registrar</button>
	</form>
</div>
<!--final de menu php-->		
</div>
</div>

</body>
</html>