<?php
require '../model/competencia_generica.php';

if(!isset($_GET['accion']))
{
	$accion='ver';
}else
{
$accion=$_GET['accion'];
}




switch($accion)
{
	
	case 'ver':
	$clase_generic=new competencia_generica();
	$consult=$clase_generic->vertodo();


	echo"<select name='clave_competencia'>";

	 while ($ro = mysqli_fetch_row($consult)) {
	 			echo"<option value='{$ro[0]}'>{$ro[0]}</option>";
                
           }
           echo"</table>";
	break;
	$clase_generic=null;
	


}


?>