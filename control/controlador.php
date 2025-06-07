<?php
//inicia uhna clase
class MvcController{
    //la clase tiene una fucion publica que llene la plantilla
    public function plantilla(){
        //include muestra el archivo que esta en la carpeta vista
        include "vista/plantilla.php";
    }
    public function enlacespaginascontrol(){
        // Verifica si el parámetro "axn" está presente en $_GET
        if(isset($_GET["axn"])) {
            // Si "axn" está presente en $_GET, lo asigna a la variable $enlacescontrol
            $enlacescontrol = $_GET["axn"];
        }
            else{
                $enlacescontrol="inicio.php";  
                 }
            
                // este echo se debe visualizae en la section de la plantilla
                //echo $enlacescontrol; (se elimina)
            $respuesta=EnlacesPaginas::EnlacesPaginasModel($enlacescontrol);
                include $respuesta;
        }
    }
?>