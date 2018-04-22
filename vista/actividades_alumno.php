<?php
include "menu.php";
//include "../controller/controller_recursos.php";
include "../controller/controller_recursos2.php";


?>
	<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 contenido" id="contenido">
		<h1>Evaluacion continua </h1>
		<a href="manual.html#evaluacion_actividades" align="right" target="_blank"><button class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Manual de ayuda"><span class="icon-question"></span></button></a>
		<?php 
		

		//echo"{$_SESSION['curso']}/Parcial {$_SESSION['parcial']}";
		//echo($_SESSION['clave']);
		//manager_curso($_SESSION['curso'],$_SESSION['parcial']);
		echo "<br><h4>{$_GET['matricula']} / {$_GET['n']} {$_GET['ap']} {$_GET['am']}</h4>";

		actividades_alumno_calificacion($_SESSION['curso'],$_GET['matricula'],$_SESSION['parcial'])
		
		?>			
		<!--<input type="text" name="input" id="tabu"></input>-->
		
		</div>
			 <div class="modal fade" id="examp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h5 class="modal-title" id="exampleModalLongTitle">Competencias genericas</h5>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		        </div>
		            <div class="modal-body">
		        	    
		              <div id="mensaje"></div>
		            </div>
		            <div class="modal-footer">
		            </div>
		      </div>
		    </div>
		  </div>


		  <div class="modal fade" id="dis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h5 class="modal-title" id="exampleModalLongTitle">Competencias diciplinares</h5>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		        </div>
		            <div class="modal-body">
		        	    
		              <div id="mensajee"></div>
		            </div>
		            <div class="modal-footer">
		            </div>
		      </div>
		    </div>
		  </div>

		    <div class="modal fade" id="pro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h5 class="modal-title" id="exampleModalLongTitle">Competencias disciplinares</h5>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		        </div>
		            <div class="modal-body">
		        	    
		              <div id="mensajeee"></div>
		            </div>
		            <div class="modal-footer">
		            </div>
		      </div>
		    </div>
		  </div>



	<!--final de menu php-->		
</div>
</div>
<script type="text/javascript" src="../resource/js/calif.js"></script>
<script type="text/javascript" src="../resource/js/descripcion_competencias.js"></script>
<script src="https://unpkg.com/sticky-table-headers"></script>
<script type="text/javascript">


$(document).ready(function(){
$('table').stickyTableHeaders();
});

</script>
</body>
</html>