<?php
session_start();
$_SESSION["id_usuario"] = $_GET["id"];
$_SESSION["estado"];
require_once "../Data/DbCrud.php";

error_reporting(0);
header('Content-type: application/json; charset=utf-8');


$desayuno = array(
    "frutas" => 0,
    "verduras" => 0,
    "lacteos" => 0,
    "carnes" => 0,
    "leguminosas" => 0,
    "azucares" => 0,
    "cereales" => 0,
    "aceites" => 0
);
$colacion1 = array(
    "frutas" => 0,
    "verduras" => 0,
    "lacteos" => 0,
    "carnes" => 0,
    "leguminosas" => 0,
    "azucares" => 0,
    "cereales" => 0,
    "aceites" => 0
);
$comida = array(
    "frutas" => 0,
    "verduras" => 0,
    "lacteos" => 0,
    "carnes" => 0,
    "leguminosas" => 0,
    "azucares" => 0,
    "cereales" => 0,
    "aceites" => 0
);
$colacion2 = array(
    "frutas" => 0,
    "verduras" => 0,
    "lacteos" => 0,
    "carnes" => 0,
    "leguminosas" => 0,
    "azucares" => 0,
    "cereales" => 0,
    "aceites" => 0
);
$cena = array(
    "frutas" => 0,
    "verduras" => 0,
    "lacteos" => 0,
    "carnes" => 0,
    "leguminosas" => 0,
    "azucares" => 0,
    "cereales" => 0,
    "aceites" => 0
);


$idPac = $_SESSION["id_usuario"];
$_SESSION["id_usuario"] = $idPac;

$sel = new DbCrud();

$dist        =   $sel->select("asig_grupo",null,null,null,null,null,null,null,$idPac);

$distribucion = $dist[0];



$frutas = $distribucion['frutas'];
$verduras = $distribucion['verduras'];
$cereales = $distribucion['cereales'];
$lacteos = $distribucion['lacteos'];
$leguminosas = $distribucion['leguminosas'];
$aceites = $distribucion['aceites'];
$azucares = $distribucion['azucares'];
$carnes = $distribucion['carnes'];

$datos = array(
    'frutas' => $frutas,
    'verduras' => $verduras,
    'lacteos' => $lacteos,
    'leguminosas' => $leguminosas,
    'azucares' => $azucares,
    'cereales' => $cereales,
    'aceites' => $aceites,
    'carnes' => $carnes
);
//$datos = array('distribucion'         => $distribucion );
$iterator = new ArrayIterator($datos);

foreach ($iterator as $key => $value) {
    $repetir = (int) $value;

    for ($i = 1; $i <= $repetir; $i++) {

        $asignacion = rand(0, 100);


        if (($asignacion > 0) && ($asignacion <= 30)) {

            $valorActual = (int) $desayuno["$key"];

            $inc = $valorActual + 1;
            $aux = array($key => $inc);

            $desayuno = array_replace($desayuno, $aux);

            unset($valorActual);
        } elseif (($asignacion > 30) && ($asignacion <= 40)) {

            $valorActual = (int) $colacion1["$key"];

            $inc = $valorActual + 1;
            $aux = array($key => $inc);

            $colacion1 = array_replace($colacion1, $aux);

            unset($valorActual);
        } elseif (($asignacion > 40) && ($asignacion <= 65)) {

            $valorActual = (int) $comida["$key"];

            $inc = $valorActual + 1;
            $aux = array($key => $inc);

            $comida = array_replace($comida, $aux);

            unset($valorActual);
        } elseif (($asignacion > 65) && ($asignacion <= 75)) {

            $valorActual = (int) $colacion2["$key"];

            $inc = $valorActual + 1;
            $aux = array($key => $inc); 

            $colacion2 = array_replace($colacion2, $aux);

            unset($valorActual);
        } elseif (($asignacion > 75) && ($asignacion <= 100)) {

            $valorActual = (int) $cena["$key"];

            $inc = $valorActual + 1;
            $aux = array($key => $inc);

            $cena = array_replace($cena, $aux);

            unset($valorActual);
        }
    }
}
	$respuesta = array(
        'desayuno'  => $desayuno,
        'colacion1' => $colacion1,
        'comida'    => $comida,
        'colacion2' => $colacion2,
        'cena'      => $cena);



$json = json_encode($respuesta);
echo $json;
?>