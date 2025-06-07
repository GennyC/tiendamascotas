<?php
class EnlacesPaginas {
    public static function EnlacesPaginasModel($enlacesmodel) {

        // Check if the selected option corresponds to a valid page
        if ($enlacesmodel == "editar" ||
          $enlacesmodel == "salir" ||
          $enlacesmodel == "mensajes" ||
          $enlacesmodel == "ingreso" ||
            $enlacesmodel == "about" ||
            $enlacesmodel == "contact" ||
            $enlacesmodel == "dog" ||
            $enlacesmodel == "cat" ||
            $enlacesmodel == "fish" ||
            $enlacesmodel == "other") {
            $module = "vista/".$enlacesmodel.".php";
        } else if($enlacesmodel == "index")
        {
          $module ="vista/inicio.php";   
        } 
        else {
         $module ="vista/inicio.php"; 
        }
return $module;
}
}
?>