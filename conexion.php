<?php
class Conexion {

    public static function conectar(){
        define("host","localhost");
        define("db","quinto");
        define("user","root");
        define("psw", "");
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
        try {
            $conexion = new PDO("mysql:host=".host.";dbname=".db,user,psw, $opc);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error en la conexion ".$e ->getMessage();
        }
       
   
    }

}


?>