<?php
require_once "../Data/DbCrud.php";
require_once "../Modelo/Usuario.php";
error_reporting(0);
header('Content-type: application/json; charset=utf-8');

if(isset($_GET["pag"]))
{
	$pagina= $_GET["pag"];
}else{

	$pagina = 1;
}

$nombre= $_GET["nombre"];
 $no = (string) $nombre;

$por_pagina = "15";
$sel = new DbCrud();
$numPacientes = $sel->select("usuarios",null,null,"pacientes",null,null,null,null,null,null,null,null,"\"$nombre\"");

$nuevo = array();
$nuevo =$numPacientes[0];
$cuantos = $nuevo["pacientes"];

$total_paginas = ceil( $cuantos / $por_pagina );

		if( $pagina > $total_paginas ){
			$pagina = $total_paginas;
		}


		$pagina -= 1; 
		$desde   = $pagina * $por_pagina; 

		if( $pagina >= $total_paginas-1 ){
			$pag_siguiente = 1;
		}else{
			$pag_siguiente = $pagina + 2;
		}

		if( $pagina < 1 ){
			$pag_anterior = $total_paginas;
		}else{
			$pag_anterior = $pagina;
		}

$paginacion = new DbCrud();
$datos = $sel->select("usuarios",null,null,null,"$desde","$por_pagina",null,null,null,null,null,"$nombre");

	$arrPaginas = array();
		for ($i=0; $i < $total_paginas; $i++) { 
			array_push($arrPaginas, $i+1);
		}

		$respuesta = array(
				'err'     		=> false, 
				'conteo' 		=> $cuantos,
				'usuarios' 		=> $datos,
				'pag_actual'    => ($pagina+1),
				'pag_siguiente' => $pag_siguiente,
				'pag_anterior'  => $pag_anterior,
				'total_paginas' => $total_paginas,
				'paginas'	    => $arrPaginas
				);

$json = json_encode($respuesta);

echo $json;

?>