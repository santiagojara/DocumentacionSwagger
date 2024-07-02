<?php
include_once("conexion.php");
class crudG{
    public static function guardarEstudiante(){
        $cedula = $_POST["cedula"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        $objeto = new Conexion();
        $conectar = $objeto -> conectar();

        $insertarSql = "INSERT INTO estudiante (cedula, nombre, apellido, direccion, 
        telefono) VALUES('$cedula','$nombre','$apellido','$direccion','$telefono')";
        $resultado = $conectar -> prepare($insertarSql);
        $resultado -> execute();

       // $dato = array (
         //   "cedula"=>$cedula,
           // "nombre"=>$nombre,
            //"apellido"=>$apellido,
            //"direccion"=>$direccion,
            //"telefono"=> $telefono
    //);
        echo json_encode($_POST);
       /*  echo json_encode($resultado); */
       /*  $conectar -> commit(); */
    }
}

?>