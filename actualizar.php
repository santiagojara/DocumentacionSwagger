<?php
class CRUDU {
    public static function ActualizarEstudiante(
        $cedula, $nombre, $apellido, $direccion, $telefono) {
        include_once("conexion.php");
        $obj = new conexion();
        $conectar = $obj->Conectar();

        $sql = "UPDATE estudiante SET nombre = :nombre, apellido = :apellido, 
                direccion = :direccion, telefono = :telefono WHERE cedula = :cedula";
        $resultado = $conectar->prepare($sql);

        // Bind parameters to prevent SQL injection
        $resultado->bindParam(':nombre', $nombre);
        $resultado->bindParam(':apellido', $apellido);
        $resultado->bindParam(':direccion', $direccion);
        $resultado->bindParam(':telefono', $telefono);
        $resultado->bindParam(':cedula', $cedula);

        // Try to execute the query and handle errors
        try {
            $resultado->execute();
            echo json_encode(['success' => true, 'message' => 'Student updated successfully.']);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Error updating student: ' . $e->getMessage()]);
        }
    }
}
?>
