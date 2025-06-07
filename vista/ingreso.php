<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ingresar Usuarios</title>
</head>
<?php include "modulos/header.php"; ?>
<?php include "modulos/navegation.php"; ?>

<body>

<section>
    <form method="POST">
        <input type="email" name="ingresoEmail" id="email" placeholder="Ingrese su Email" required>
        <input type="password" name="ingresoPassword" id="password" placeholder="Ingrese su contraseña" required>
        <button type="submit" name="submit" value="Send">Enviar</button>
    </form>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["ingresoEmail"];
    $password = $_POST["ingresoPassword"];

    if ($email === "abc@gmail.com" && $password === "12345") {

        $_SESSION["validarIngreso"] = "OK";

        echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
                window.location = "index.php?axn=mensajes";
              </script>';
    } else {
        echo "El correo y contraseña no coinciden con nuestros registros.";
    }
}
?>

</body>
<?php include "modulos/footer.php"; ?>

</html>
