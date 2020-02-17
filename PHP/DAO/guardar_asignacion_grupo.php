<?php
session_start();
require_once "../Data/DbCrud.php";


error_reporting(0);
header('Content-type: application/json; charset=utf-8');


$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request = (array) $request;

$id_usuario = $_SESSION["id_usuario"];  

  $frutas        = $request['frutas'];
  $verduras      = $request['verduras'];
  $cereales      = $request['cereales'];
  $carnes        = $request['carnes'];
  $leguminosas   = $request['leguminosas'];
  $azucares      = $request['azucares'];

  $lacteos       = $request['lacteos'];
  $aceites       = $request['aceites'];



    $datos = array(
        "id_usuario"     => $id_usuario,
        "frutas"         => $frutas,
        "verduras"       => $verduras,
        "lacteos"        => $lacteos,
        "carnes"         => $carnes,
        "leguminosas"    => $leguminosas,
        "azucares"       => $azucares,
        "cereales"       => $cereales,
        "aceites"        => $aceites
     );

    $insert = new DbCrud();
    $response = $insert->save("asig_grupo", $datos);



if ($response == null) {
    //echo "No se insertaron los datos a la DB";
} else {

    //echo "Datos insertados correctamente";
}
?>