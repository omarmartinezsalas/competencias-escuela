<?php
include "menu.php";
if(!isset($_SESSION['curso']))
{
	//header("location: wellcome.php");exit;
	echo"<br><center><a href='wellcome.php'><button type='button' class='btn btn-primary'>Selecciona un curso</button></a></center>";exit;
}
?>

	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido">
		<h1>Competencias Genericas</h1>
		<!--<form id="form-registro" name="competencias" method="POST" action="../controller/controller_generica.php?accion=agregar">
			<label>Clave</label><br>
			<input type="text" placeholder="CG1" name="clave" maxlength="5" ></input><br>
			<label>Descripción</label><br>
			<input type="text" placeholder="maximo 300 caracteres" name="descripcion" maxlength="300"  size="50" > </input> <br>
			<label>Categoria</label><br>

			<select name="categoria" id="categoria">
 			<option value="participa con responsabilidad en la sociedad" selected>participa con responsabilidad en la sociedad</option>
  			<option value="trabaja en forma colaborativa">trabaja en forma colaborativa</option>
  			<option value="aprende de forma autonoma">aprende de forma autonoma</option>
  			<option value="se expresa y comunica">se expresa y comunica</option>
  			<option value="se autodetermina y cuida de si">se autodetermina y cuida de si</option>
  			<option value="piensa critica y reflexivamente">piensa critica y reflexivamente</option>
			</select> <br>
			
			<button id="submit" class="btn-primary" type="submit" form-id="form-registro">Registrar</button>
		</form>-->
		<!--<div class="container" id="app">                    lista con datos json
			<pre>
			{{$data | json}}
			</pre>
			<ul>
				<li>
					<input type="text" v-model="buscar"></input>
				</li>
				<li v-for="item in searchUsers"> 
					{{item.clave}}{{item.des}}<a href='prueba.php?value='>{{item.cat}}</a>
				</li>
			</ul>
		</div>-->
		<?php
		include ("../controller/controller_generica.php");
		?>
		

	</div>
	<!--final de menu php-->		

</div>

<!--<script src="../resource/js/generica_filtro.js"></script>-->
</body>
</html>
