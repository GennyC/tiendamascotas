<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluir archivo CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            padding: 20px;
        }
        .video-container {
            padding: 20px;
            width: 100%;
        }
        .responsive-iframe {
            position: relative;
            padding-bottom: 56.25%; /* Relación de aspecto 16:9 */
            height: 0;
            overflow: hidden;
        }
        .responsive-iframe iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include "modulos/header.php"; ?>
    <?php include "modulos/navegation.php"; ?>

    <section style="padding: 20px;">
        <h1>Contáctanos</h1>
        <p>¿Tienes alguna pregunta o comentario? ¡Escríbenos!</p>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <!-- Columna del Formulario -->
                <td style="width: 50%; vertical-align: top; padding-right: 20px;">
                    <div class="form-container">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div>
                                <label for="name">Nombre:</label>
                                <input type="text" placeholder="Ingresa tu nombre" id="name" name="name" required>
                            </div>
                            <div>
                                <label for="email">Correo electrónico:</label>
                                <input type="text" id="email" name="email" required>
                            </div>
                            <div>
                                <label for="message">Mensaje:</label>
                                <textarea id="message" name="message" required></textarea>
                            </div>
                            <div>
                                <button type="submit" name="submit" value="Send">Enviar</button>
                            </div>
                        </form>
                                <!-- Botón de WhatsApp -->
        <div style="margin-top: 20px; text-align: center;">
            <h3>O contáctanos por WhatsApp</h3>
            <a href="https://wa.me/1234567890?text=Hola%20tengo%20una%20consulta" 
               target="_blank"
               style="display: inline-block; background-color: #25D366; color: white; 
                      padding: 10px 20px; border-radius: 5px; text-decoration: none;
                      margin-top: 10px;">
               <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" 
                    alt="WhatsApp" 
                    style="width: 20px; vertical-align: middle; margin-right: 8px;">
               Enviar mensaje por WhatsApp
            </a>
        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Incluir el archivo de controlador de formularios
                            require_once "control/formularios.php";

                            // Llamar al método ctrlregistro para procesar el formulario
                            $registro = ctrlformulario::ctrlregistro();

                            // Mostrar mensaje de éxito si se recibió "recibido"
                            if ($registro == "recibido") {
                                echo '<script>
                                            if (window.history.replaceState){
                                                window.history.replaceState(null, null, window.location.href);
                                            }
                                          </script>';
                                echo "El mensaje ha sido enviado correctamente";
                            }
                        }
                        ?>
                    </div>
                </td>
                
<!-- Columna del Video -->
<td style="width: 50%; vertical-align: top;">
    <div class="video-container" style="max-width: 1080px;">
        <h2>Cómo contactarnos</h2>
        <div class="responsive-iframe" style="padding-bottom: 177.78%;"> <!-- Relación 1920/1080 = 1.7778 (vertical) -->
            <iframe width="1080" height="1920" 
                    src="https://app.heygen.com/embeds/888ca18a39734731a4bb1fdae8f3499e" 
                    title="Reproductor de video HeyGen"
                    frameborder="0"
                    style="max-width: 100%;"
                    allow="autoplay; encrypted-media" 
                    allowfullscreen="false">
            </iframe>
        </div>
    </div>
</td>
            </tr>
        </table>
    </section>
</body>
</html>