<?php
include "admin.php";
include "../controller/controller_recursos.php";
?>

<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
	<h1>Registro alumno</h1>
	<form name="registro_alumno" enctype="multipart/form-data" method="post" action="../controller/controller_alumno.php?accion=agregar_csv">
		<label for="imagen">Archivo scv:</label>

			<input class="btn btn-success" type="file" name="archivo" accept=".csv"  size="1000" required/>
	   		
		<br>
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