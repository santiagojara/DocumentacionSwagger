<?php
include_once("conexion.php");



class crudE
{
    public static function eliminarEstudiante($cedula)
    {
        $objeto = new Conexion();
        $conectar = $objeto->conectar();
        /* parse_str(file_get_contents("php://input"), $data); */
      /*   $cedula1 = $data["cedula"]; */
        /*     $cedula = $_POST["cedula"]; */
        $borrarSql = "DELETE FROM estudiante WHERE cedula = '$cedula'";
        $resultado = $conectar->prepare($borrarSql);
        $resultado->execute();
        $dato = "Eliminado";
        echo json_encode($dato);
    }
}




?>