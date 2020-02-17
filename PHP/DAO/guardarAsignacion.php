<?php
session_start();
require_once "../Data/DbCrud.php";


error_reporting(0);
header('Content-type: application/json; charset=utf-8');


$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request = (array) $request;

$cadera 		 = $request['cadera'];
$cintura 		 = $request['cintura'];
$complexion 	 = $request['complexion'];
$edad_metabolica = $request['edad_metabolica'];
$gct 			 = $request['gct'];
$grasa           = $request['grasa'];
$imc             = $request['imc'];
$kilocalorias    = $request['kilocalorias'];
$morfologia      = $request['morfologia'];
$muneca          = $request['muneca'];
$peso            = $request['peso'];
$morfologia      = $request['morfologia'];
$musculo		 = $request['porciento_musculo'];
$presion 		 = $request['presion'];
$pulso		     = $request['pulso'];
$id_usuario		 = $_SESSION[id_usuario];


 $datos = array(

 	'id_usuario'		=> $id_usuario,
    'cintura'    		=> $cadera,
    'complexion'    	=> $cintura,
    'edad_metabolica'   => $edad_metabolica,
    'gct_porciento'    	=> $gct,
    'grasa_visceral'    => $grasa,
    'imc'    			=> $imc,
    'kilocalorias'    	=> $kilocalorias,
    'muñeca'    		=> $muneca,
    'peso'    			=> $peso,
    'musculo_porciento' => $musculo,
    'morfologia'    	=> $morfologia,
    'pulso'    			=> $pulso,
    'presion'    		=> $presion
);


$insert = new DbCrud();
$response = $insert->save("historial_indicadores", $datos);



?>