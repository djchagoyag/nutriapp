<?php
session_start();
require_once "../Data/DbCrud.php";


error_reporting(0);
header('Content-type: application/json; charset=utf-8');


$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request = (array) $request;
  
  $actual               = $request['padecimiento_actual'];
  $respiratorias        = $request['respiratorias'];
  $gastrointestinales   = $request['gastrointestinales'];
  $tratamiento_actual   = $request['tratamientoActual'];
  $desparacitaciones    = $request['desparacitaciones'];
  $cirugias             = $request['cirugias'];

  $acido                = $request['acido'];
  $calculo              = $request['calculo'];
  $cancer               = $request['cancer'];
  $diabetes             = $request['diabetes'];
  $ecv                  = $request['ecv'];
  $dislipidemias        = $request['dislipidemias'];
  $hipertension         = $request['hipertension'];
  $otro                 = $request['otro'];

  $id_usuario = $_SESSION["id_usuario"];

  $estado     = $_SESSION["estado"];



  function guardarPersonales($inf,$id_enfer,$id_usua) {


    $datos          = get_object_vars($inf);


    $id_enfermedad  = $id_enfer;
    $sintoma        = $datos['sintoma'];
    $opcion         = $datos['opcion'];

    $datos = array(
        "id_usuario"    => $id_usua,
        "id_enfermedad" => $id_enfermedad,
        "sintoma"       => $sintoma,
        "opcion"        => $opcion
    );

    $insert = new DbCrud();
    $response = $insert->save("antecedentes_personales", $datos);
    }

    function guardarFamiliares($inf,$id_enf,$id_usua) {


    $datos          = get_object_vars($inf);



    $familiar        = $datos['familiar'];
    $opcion         = $datos['opcion'];

    $datos = array(
        "id_usuario"    => $id_usua,
        "id_enfermedad" => $id_enf,
        "familiar"      => $familiar,
        "opcion"        => $opcion
    );

    $insert = new DbCrud();
    $response = $insert->save("antecedentes_familiares", $datos);
}
function recuperar_guardarFamiliares($inf) {


    $datos          = get_object_vars($inf);
    $id_usuario     = $datos['id_usuario'];
    $id             = $datos['id'];
    $id_enfermedad  = $datos['id_enfermedad'];
    $familiar        = $datos['familiar'];
    $opcion         = $datos['opcion'];

    $datos = array(
        "id_usuario"    => $id_usuario,
        "id_enfermedad" => $id_enfermedad,
        "familiar"      => $familiar,
        "opcion"        => $opcion
    );

    $insert = new DbCrud();
    $response = $insert->save("antecedentes_familiares", $datos, "id", $id);
}

function recuperar_guardarPersonales($inf) {


    $datos          = get_object_vars($inf);
    $id_usuario     = $datos['id_usuario'];
    $id             = $datos['id'];
    $id_enfermedad  = $datos['id_enfermedad'];
    $sintoma        = $datos['sintoma'];
    $opcion         = $datos['opcion'];

    $datos = array(
        "id_usuario"    => $id_usuario,
        "id_enfermedad" => $id_enfermedad,
        "sintoma"       => $sintoma,
        "opcion"        => $opcion
    );

    $insert = new DbCrud();
    $response = $insert->save("antecedentes_personales", $datos, "id", $id);
}

  if($estado == 1){

    guardarPersonales($actual,1,$id_usuario);
    guardarPersonales($respiratorias,3,$id_usuario);
    guardarPersonales($gastrointestinales,2,$id_usuario);
    guardarPersonales($tratamiento_actual,4,$id_usuario);
    guardarPersonales($desparacitaciones,5,$id_usuario);
    guardarPersonales($cirugias,6,$id_usuario);

    guardarFamiliares($diabetes,7,$id_usuario);
    guardarFamiliares($hipertension,8,$id_usuario);
    guardarFamiliares($ecv,9,$id_usuario);
    guardarFamiliares($dislipidemias,10,$id_usuario);
    guardarFamiliares($acido,11,$id_usuario);
    guardarFamiliares($cancer,12,$id_usuario);
    guardarFamiliares($calculo,13,$id_usuario);
    guardarFamiliares($otro,14,$id_usuario);


  }
  if($estado == 2){

//=======Personales========
recuperar_guardarPersonales($actual);
recuperar_guardarPersonales($respiratorias);
recuperar_guardarPersonales($gastrointestinales);
recuperar_guardarPersonales($tratamiento_actual);
recuperar_guardarPersonales($desparacitaciones);
recuperar_guardarPersonales($cirugias);
//======Familiares============
recuperar_guardarFamiliares($acido);
recuperar_guardarFamiliares($calculo);
recuperar_guardarFamiliares($cancer);
recuperar_guardarFamiliares($diabetes);
recuperar_guardarFamiliares($ecv);
recuperar_guardarFamiliares($dislipidemias);
recuperar_guardarFamiliares($otro);
recuperar_guardarFamiliares($hipertension);




}
/*
if ($response == null) {
    //echo "No se insertaron los datos a la DB";
} else {

    //echo "Datos insertados correctamente";
}*/
?>