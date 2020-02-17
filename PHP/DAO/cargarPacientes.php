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

 //$pagina = "1";
 $por_pagina = "15";
$sel = new DbCrud();
//$pacientes = $sel->select("usuarios");// todos loa usuario
$numPacientes = $sel->select("usuarios",null,null,"pacientes");
$nuevo = array();
$nuevo =$numPacientes[0];
$cuantos = $nuevo["pacientes"];

$total_paginas = ceil( $cuantos / $por_pagina );




		if( $pagina > $total_paginas ){
			$pagina = $total_paginas;
		}


		$pagina -= 1;  // 0
		$desde   = $pagina * $por_pagina; // 0 * 20 = 0

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
$datos = $sel->select("usuarios",null,null,null,"$desde","$por_pagina",null);

//print_r($datos);

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

//print_r($respuesta);
echo $json;



//$json = json_encode($numPacientes);

//var_dump($numPacientes->pacientes); 


/*//$pacientes->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
//$pacientes->setFetchMode(PDO::FETCH_CLASS ,'Usuario', array('id','nombre','apellido_paterno','apelido_materno','edad','celular','estatura','id_rol'));

//var_dump($pacientes);

$arregloPacientes = array();

while ($paciente = $pacientes->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario'){

array_push($arregloPacientes)

}*/


//$json = json_encode($pacientes);
//echo "numero de usuarios";
//echo $numPacientes;



//echo $json;

?>