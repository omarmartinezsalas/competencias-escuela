<?php
include "menu.php";
include "../controller/controller_recursos.php";


?>
	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">



		<h1>Selecciona curso</h1>

		<form method="POST" name="selecciona" action="../controller/sesion.php?accion=selecciona_curso">
		Selecciona el curso
		<?php     
		cursos_select($_SESSION['clave']);
		?>			<br>
		<button name="boton" class="btn btn-primary large">Registrar</button>
		</form>
	</div>


	<!--final de menu php-->		
</div>
</div>

</body>
</html>