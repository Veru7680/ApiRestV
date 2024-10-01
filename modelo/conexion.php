<?php
class conexion{
    public static function conectar(){
        $usuario="root";
        $db="apirest1";
        $pass="";
        $host= "localhost";

        $link=new PDO("mysql:host=".$host.";dbname=".$db, $usuario,$pass);
        $link->exec("set names utf8");

    }
}

?>