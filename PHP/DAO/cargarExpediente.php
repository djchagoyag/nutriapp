<?php
session_start();
$_SESSION["id_usuario"] = $_GET["id"];
$_SESSION["estado"];
require_once "../Data/DbCrud.php";
require_once "../Modelo/Usuario.php";
error_reporting(0);
header('Content-type: application/json; charset=utf-8');



/*
if(isset($_GET["id"]))
{

	$idPac = $_SESSION["id_usuario"];

}else{


	$idPac = 1;
}*/

$idPac = $_SESSION["id_usuario"];
$_SESSION["id_usuario"] = $idPac;

$sel = new DbCrud();

$datosPersonales 		= 	$sel->select("usuarios",null,null,null,null,null,$idPac);

$antecedentesFamiliares =	$sel->select("antecedentes_familiares",null,null,null,null,null,null,$idPac);

$antecedentesPersonales =	$sel->select("antecedentes_personales",null,null,null,null,null,null,$idPac);

$signos_clinicos 		=	$sel->select("signos_clinicos",null,null,null,null,null,null,$idPac);

$historialIndicadores 	=	$sel->select("historial_indicadores",null,null,null,null,null,null,$idPac);

$asignacionGrupo 		=	$sel->select("asig_grupo",null,null,null,null,null,null,null,$idPac);


if((count($antecedentesPersonales) > 1) and (count($signos_clinicos) > 1)){

	$estado = 2; 
	$_SESSION["estado"] = $estado;
}else{
	$estado = 1;
	$_SESSION["estado"] = $estado;
}



$respuesta = array(
				'datosPersonales'		  => $datosPersonales,
				'antecedentes_personales' => $antecedentesPersonales,
				'antecedentes_familiares' => $antecedentesFamiliares,
				'signos_clinicos'         => $signos_clinicos,
				'historial_indicadores'	  => $historialIndicadores,
				'asignacionGrupo'	      => $asignacionGrupo  );






$json = json_encode($respuesta);






echo $json;

?>