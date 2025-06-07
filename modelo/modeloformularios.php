<?php
require_once "conexion.php";

class modeloformularios {
    static public function mdlregistro($tabla, $datos) {
        $declaracion = conexion::conectar()->prepare("INSERT INTO $tabla (name, email, message) VALUES (:name, :email, :message)");
        // :name, :email, :message are placeholders
        $declaracion->bindParam(":name", $datos["name"], PDO::PARAM_STR);
        $declaracion->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $declaracion->bindParam(":message", $datos["message"], PDO::PARAM_STR);

        if ($declaracion->execute()) {
            return "recibido";
        } else {
            print_r(conexion::conectar()->errorInfo());
            return "error";
        }

        $declaracion = null;
    }

    /*static public function mdlseleccionregistro($tabla, $item, $valor) {
        if ($item != null && $valor != null) {
            $declaracion = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :valor ORDER BY DATE(date) DESC");
            $declaracion->bindParam(":valor", $valor, PDO::PARAM_STR);
        } else {
            $declaracion = conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY DATE(date) DESC");
        }

        $declaracion->execute();
        return $declaracion->fetchAll();

        $declaracion = null;
    }
*/

static public function mdlseleccionregistro($tabla, $item, $valor) {
    if ($item != null && $valor != null) {
        $declaracion = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :valor");
        $declaracion->bindParam(":valor", $valor, PDO::PARAM_STR);
        $declaracion->execute();
        return $declaracion->fetch();
    } else {
        $declaracion = conexion::conectar()->prepare("SELECT * FROM $tabla");
        $declaracion->execute();
        return $declaracion->fetchAll();
    }
}

static public function mdlactualizarregistro($tabla, $datos) {
    $declaracion = conexion::conectar()->prepare("UPDATE $tabla SET name = :name, email = :email, message = :message WHERE ID = :ID");

    $declaracion->bindParam(":ID", $datos["ID"], PDO::PARAM_INT);
    $declaracion->bindParam(":name", $datos["name"], PDO::PARAM_STR);
    $declaracion->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $declaracion->bindParam(":message", $datos["message"], PDO::PARAM_STR);

    if ($declaracion->execute()) {
        return "actualizado";
    } else {
        return "error";
    }

    $declaracion = null;
}

    
    
    
}
?>
