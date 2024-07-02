<?php

include_once "seleccionar.php";
include_once "guardar.php";
include_once "delete.php";
include_once "actualizar.php";
$opc =$_SERVER["REQUEST_METHOD"];
switch ($opc){
    case "GET":
  //  $resultado="tu estas en un GET";
    crud::obtenerEstudiantes();
    //crduBC::buscar();
    break;
   // echo($resultado);
    case "POST":
    crudG::guardarEstudiante();
    break;
    case "DELETE":
    $var = $_GET["cedula"];
    crudE:: eliminarEstudiante($var);
    break;
    case "PUT":
     // Leer los datos de la solicitud PUT
     parse_str(file_get_contents("php://input"), $put_vars);

     // Obtener los datos del estudiante a actualizar
     $cedula = $put_vars["cedula"];
     $nombre = $put_vars["nombre"];
     $apellido = $put_vars["apellido"];
     $direccion = $put_vars["direccion"];
     $telefono = $put_vars["telefono"];
     
     // Llamar a la función para actualizar el estudiante
     CRUDU::ActualizarEstudiante($cedula, $nombre, $apellido, $direccion, $telefono);
    break;


}
?>

