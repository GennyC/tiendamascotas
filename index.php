<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="vista/images/webicon.png" type="image/icon type">

</head>
<?php // controlador formlario

require_once "control/controlador.php";
require_once "modelo/model.php";
require_once "control/formularios.php";
require_once "modelo/modeloformularios.php";




        // Include the requested page based on the URL parameter
        $mvc = new MvcController();
        $mvc->plantilla();
        ?>

</html>
