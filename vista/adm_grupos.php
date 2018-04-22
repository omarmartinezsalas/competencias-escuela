<?php
include "admin.php";
include "../controller/controller_adm.php";
?>

<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
	<h1>Grupos</h1>
	Ciclo escolar:
	<form name="" method="post" action="adm_grupos.php">
		<?php
		list_ciclo_escolar();
		?>
		<button class="btn btn-primary">Buscar</button>
	</form>


	<?php
	if (isset($_POST['ciclo'])) 
	{
		grupos($_POST['ciclo']);
	}
	
	
	?>



</div>

<!--final de menu php-->		
</div>
</div>

</body>
</html>