<?php
if (isset($_GET["ID"])) {
    $item = "ID";
    $valor = $_GET["ID"];
    $usuario = ctrlformulario::ctrlseleccionregistro($item, $valor);
}

$ID = isset($usuario["ID"]) ? $usuario["ID"] : '';
echo "ID: $ID"; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Update</title>
    <!-- Include your CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "modulos/header.php"; ?>
    <?php include "modulos/navegation.php"; ?>

    <section style="padding: 20px;">
    <h1>Contact Us</h1>
    <p>Have a question or comment? Reach out to us!</p>
    <form method="POST" action="" enctype="multipart/form-data">
    <div>
        <label for="ID">ID:</label><br>
        <span><?php echo htmlspecialchars($ID); ?></span>
    </div>
        <!-- Display the ID retrieved from the URL in a readonly input field -->

        <div>
            <label for="name">Name:</label><br>
            <input type="text" placeholder="Insert name" id="name" name="editname" value="<?php echo htmlspecialchars($usuario["name"]); ?>" required>
        </div>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" placeholder="Insert email" id="email" name="editemail" value="<?php echo htmlspecialchars($usuario["email"]); ?>" required>
        </div>
        <div>
            <label for="message">Message:</label><br>
            <textarea id="message" placeholder="Insert message" name="editmessage" required><?php echo htmlspecialchars($usuario["message"]); ?></textarea>
        </div>
        <div>
            <button type="submit" name="submit" value="Send">Update</button>
        </div>
    </form>
</section>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Incluir el archivo de controlador de formularios
        require_once "control/formularios.php";

        // Llamar al método ctrlregistro para procesar el formulario
        $registro = ctrlformulario::ctrlactualizarregistro($datos);

        // Mostrar mensaje de éxito si se recibió "recibido"
        if ($registro == "recibido") {
            echo '<script>
                        if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                      </script>';
            echo "El usuario ha sido registrado correctamente";
        }
    }
    ?>
</body>
</html>
