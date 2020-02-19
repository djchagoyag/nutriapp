<?php
session_start();
require_once "../Data/DbCrud.php";


error_reporting(0);
header('Content-type: application/json; charset=utf-8');


$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request = (array) $request;
  
  $piel           = $request['piel'];
  $ojos           = $request['ojos'];
  $boca           = $request['boca'];
  $cabello        = $request['cabello'];
  $unas           = $request['unas'];
  $lengua         = $request['lengua'];

  $alergia        = $request['alergias'];
  $mareos         = $request['mareos'];
  $cabeza         = $request['cabeza'];
  $aversion       = $request['aversion'];
  $gustos         = $request['gustos'];
  $intolerancia   = $request['intolerancia'];
  $articulacion   = $request['articulacion'];

   $estado     = $_SESSION["estado"];
   $id_usuario = $_SESSION["id_usuario"];


  function recuperar_guardarSigno($inf) {


    $datos          = get_object_vars($inf);

    $id             = $datos['id'];
    $id_usuario     = $datos['id_usuario'];
    $nivel          = $datos['nivel'];
    $id_signo       = $datos['id_signo'];
    $lugar          = $datos['lugar'];
    $sintoma        = $datos['sintoma'];

    $datos = array(
        "id_usuario"     => $id_usuario,
        "nivel"          => $nivel,
        "id_signo"       => $id_signo,
        "lugar"          => $lugar,
        "sintoma"        => $sintoma
    );

    $insert = new DbCrud();
    $response = $insert->save("signos_clinicos", $datos, "id", $id);
}

function guardarSigno($inf,$id_usua,$id_sig) {


    $datos          = get_object_vars($inf);

 
    
    $nivel          = $datos['nivel'];

    $lugar          = $datos['lugar'];
    $sintoma        = $datos['sintoma'];

    $datos = array(
        "id_usuario"     => $id_usua,
        "nivel"          => $nivel,
        "id_signo"       => $id_sig,
        "lugar"          => $lugar,
        "sintoma"        => $sintoma
    );

    $insert = new DbCrud();
    $response = $insert->save("signos_clinicos", $datos);
}




if($estado == 1){

guardarSigno($piel,$id_usuario,1);
guardarSigno($ojos,$id_usuario,2);
guardarSigno($boca,$id_usuario,3);
guardarSigno($unas,$id_usuario,6);
guardarSigno($lengua,$id_usuario,4);
guardarSigno($cabello,$id_usuario,5);
guardarSigno($alergia,$id_usuario,7);
guardarSigno($mareos,$id_usuario,8);
guardarSigno($cabeza,$id_usuario,9);
guardarSigno($aversion,$id_usuario,10);
guardarSigno($gustos,$id_usuario,11);
guardarSigno($intolerancia,$id_usuario,12);
guardarSigno($articulacion,$id_usuario,13);


}
if($estado == 2){


recuperar_guardarSigno($piel);
recuperar_guardarSigno($ojos);
recuperar_guardarSigno($boca);
recuperar_guardarSigno($unas);
recuperar_guardarSigno($lengua);
recuperar_guardarSigno($cabello);
recuperar_guardarSigno($alergia);
recuperar_guardarSigno($mareos);
recuperar_guardarSigno($cabeza);
recuperar_guardarSigno($aversion);
recuperar_guardarSigno($gustos);
recuperar_guardarSigno($intolerancia);
recuperar_guardarSigno($articulacion);



}  




/*
if ($response == null) {
    //echo "No se insertaron los datos a la DB";
} else {

    //echo "Datos insertados correctamente";
}*/
?>