<?php

class ctrlformulario {

    
    static public function ctrlseleccionregistro($item, $valor) {
        $tabla = "contact";
        $respuesta = modeloformularios::mdlseleccionregistro($tabla, $item, $valor);
        return $respuesta; 
    }
    
    static public function ctrlregistro() {
        if(isset($_POST["name"])) {
            $tabla = "contact";
            $datos = array(
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "message" => $_POST["message"]
            );

            $respuesta = modeloformularios::mdlregistro($tabla, $datos);
            return $respuesta;
        }
    }

    public function ctrlactualizarregistro($datos) {
        if (isset($datos["name"])) {
            $tabla = "contact";
            $datos = array(
                "ID" => $_POST["ID"],
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "message" => $_POST["message"]
            );
            $respuesta = modeloformularios::mdlseleccionregistro($tabla, $datos,null); 
            return $respuesta;
        }
    }
}







   /* public function ctrlingreso() {
        if (isset($_POST["ingresoEmail"]) && isset($_POST["ingresoPassword"])) {
            $email = $_POST["ingresoEmail"];
            $password = $_POST["ingresoPassword"];
    
            $respuesta = modeloformularios::mdlseleccionregistro(null, $email, $password);
    
            if ($respuesta["email"] === "abc@gmail.com" && $respuesta["password"] === "12345") {
                $_SESSION["validarIngreso"] = "OK";
    
                echo '<script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                        window.location = "index.php?pagina=mensajes";
                      </script>';
            } else {
                echo "El correo y contraseña no coinciden con nuestros registros.";
            }
        }
    }*/
    
    
    
    
    
    

 /* public function ctrlingreso() {
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];
            
            $respuesta = modeloformularios::mdlseleccionregistro($tabla, $item, $valor);
    
            // Uncomment for debugging
            // echo '<pre>'; print_r($respuesta); echo '</pre>';
    
            if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                $_SESSION["validarIngreso"] = "OK";
    
                echo '<script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                        window.location = "index.php?pagina=inicio";
                      </script>';
            } else {
                echo "El correo y contraseña no coinciden con nuestros registros.";
            }
        }
    }*/
    
    
   

?>
