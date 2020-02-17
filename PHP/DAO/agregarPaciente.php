<?php
session_start();
require_once "../Data/DbCrud.php";
require_once "../Modelo/Usuario.php";

error_reporting(0);
header('Content-type: application/json; charset=utf-8');


$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request = (array) $request;

$nombre      = $request['nombre'];
$paterno     = $request['apellido_paterno'];
$materno     = $request['apellido_materno'];
$edad     	 = $request['edad'];
$estatura 	 = $request['estatura'];
$correo   	 = $request['email'];
$celular  	 = $request['celular'];
$escolaridad = $request['escolaridad'];
$estado_civil = $request['estado_civil'];


$usuario = new Usuario($nombre, $paterno, $materno, $edad, $correo, $celular, $estatura, 1,$escolaridad,$estado_civil);


$datos = $usuario->convertirAArreglo();
//var_dump($datos);
$insert = new DbCrud();
$response = $insert->save("usuarios", $datos);



if ($response == null) {
    //echo "No se insertaron los datos a la DB";
} else {

    //echo "Datos insertados correctamente";
}
?>