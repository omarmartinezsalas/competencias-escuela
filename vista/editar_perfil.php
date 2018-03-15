<?php
include "menu.php";
include "../controller/controller_recursos.php";
include "../controller/datos_perfil.php";

?>
	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
		<h1>Edita perfil</h1>
		<form id="formf" action="../controller/controller_profesor.php?accion=foto" enctype="multipart/form-data" method="post">
			<center>
	   		<label for="imagen">Imagen:</label>
	   		<input class="btn btn-success" id="img_up" name="img_up"  type="file" accept="image/*" size="500" required/>
	  	
	   		<?php
	   		echo" <input type='hidden' name='clave' value='{$_SESSION['clave']}'>";
	   		?>
	    	<input id="simg" class="btn btn-primary" name="submit" type="submit" value="Guardar"/></center>
			</form> 
			<div id="mensaje"></div>
			<hr><!--//////////////////////////////////////////////////////////////////////////////-->
			<h4 align="center">Cambiar datos</h4>
			<form name="edita_profesor" method="post" action="../controller/controller_profesor.php?accion=editar">
		
			<?php
			echo "<input type='hidden' value='".$_SESSION['clave']."' name='clave'></input>";
			entradas_datos($_SESSION['clave']);

			?>
			<br>

			<center><button type="submit" class="btn btn-primary">Guardar</button></center>
			</form>
			<br>
			<hr><!--//////////////////////////////////////////////////////////////////////////////-->

			<h4 align="center">Cambiar contraseña</h4>
			<form name="contra" method="post" action="../controller/controller_profesor.php?accion=pass">
				<?php
				echo "<input type='hidden' value='".$_SESSION['clave']."' name='clave'></input>";
				?>
				<center><label>Contraseña actual: <input type="password" name="actual" id="original"></input></label><br>
				<label id="origin" style="color:red;"></label><br><br><br>
				<label>Nueva contraseña: <input id="pass" type="password" name="nueva"></input></label><br>
				<label id="mcontra" style="color:red;"></label><br>
				<label>Repite nueva contraseña: <input id="pass2" type="password" name="confirma"></input></label><br>
				<label id="mcontra2" style="color:red;"></label><br>
				<button name="enviar_pass" id="enviar_pass" class="btn btn-primary">Enviar</button></center>
			</form>
		
	</div>


	<!--final de menu php-->		
</div>
</div>
<script type="text/javascript" src="../resource/js/val_image.js"></script>
</body>
</html>