<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="vista/images/webicon.png" type="image/icon type">

</head>

<body>
<?php 
//include "modulos/header.php";
   include "vista/navegation.php";
   include "vista/header.php";
         // include "modulos/home.php";
     //     include "modulos/footer.php";
    ?>


    <!-- Include the footer or any other common elements -->
   
        <?php
        // Include the requested page based on the URL parameter
        $mvc = new MvcController();
        $mvc->enlacespaginascontrol();
        ?>
        <?// controlador formlario


?>
        


</body>
</html>
