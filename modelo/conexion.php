<?php
class conexion{
  static public function conectar(){
        $link=new PDO("mysql:host=localhost;dbname=webservice",
        "root",
        "12345"
    );
    $link->exec("set names utf8"); 
      return $link;
    }
}
?>