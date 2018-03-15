<?php
include "../controller/controller_recursos.php";
include "menu.php";

?>

	
		<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
			<div class="contenido" style="height: auto;">
				<h1>Bienvenido</h1>
				<?php     
				cursos($_SESSION['clave']);
				?>			
			</div>
		</div>
	</div>
</div>

</body>
</html>