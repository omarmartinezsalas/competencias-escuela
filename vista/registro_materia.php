<?php
include "admin.php";
?>

<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
	<form name="registro_grupo" method="post" action="../controller/controller_materia.php?accion=agregar">
		<h1>Registro materia</h1>
		<label>Clave</label><br>
		<input class="form-control form-control-lg" name="clave" type="text" maxlength="10" placeholder="10 caracteres" required></input><br>
		<label>Nombre</label><br>
		<input class="form-control form-control-lg" name="nombre" type="text" maxlength="50" placeholder="20 caracteres" required></input><br>
		<br>
		<label>Creditos</label><br>
		<input class="form-control form-control-lg" name="creditos" type="number" max="99" min="1" placeholder="" required></input><br>

	
		
		<button type="submint" class="btn btn-primary" name="agregar">Registrar</button>
	</form>
</div>
<!--final de menu php-->		
</div>
</div>

</body>
</html>