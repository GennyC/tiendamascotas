<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Example</title>
    <!-- Include your CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
</head>

<body>
    
    <?php include "modulos/header.php"; ?>
    <section style="width: 100%; background-color: #ffffff;">
        <nav>
            <ul style="list-style-type: none; padding: 0; margin: 0; text-align: center;">
            <li style="display: inline-block;"><a href="index.php">Salir</a></li>
        </nav>
    </section>

    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $usuarios=ctrlformulario::ctrlseleccionregistro($item,$valor);
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    echo "<td>".$usuario["ID"]."</td>";
                    echo "<td>".$usuario["name"]."</td>";
                    echo "<td>".$usuario["email"]."</td>";
                    echo "<td>".$usuario["message"]."</td>";
                    echo "<td>".$usuario["date"]."</td>";
                    echo '<td>
                    <form action="vista/editar.php" method="GET">
                        <input type="hidden" name="id" value="'.htmlspecialchars(urlencode($usuario['ID'])).'">
                        <input type="submit" value="Edit">
                    </form>
                </td>';
                echo "</tr>"; 

                }
                ?>
            </tbody>
        </table>
    </div>
   
    <?php include "modulos/footer.php"; ?>
     

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-5B43VcUwZOBgp/d2AqwPzD9NdMcpALRHH7NUdhy4HhOZZ4bUySBKRt8wU26KX06H" crossorigin="anonymous"></script>
</body>
</html>
