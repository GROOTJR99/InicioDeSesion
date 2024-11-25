<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <form action="IniciarSesion.php" method = "post">
        <h1>INICIAR SESION</h1>
        <hr>
        <?php
        if(isset($_GET['error'])){
            ?>
            <p class = "error">
            <?php
            echo $_GET ['error']
            ?>
            </p>
            <?php
        }
        ?>

        <hr>
    <i class="bi bi-person-fill"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="bi bi-shield-lock-fill"></i>
        <label>Password</label>
        <input type="password" name="Clave" placeholder="Clave">
        <hr>

        <button type="submit">Iniciar Sesion</button>
        <a href="CrearCuenta.php"> Crear Cuenta</a>

    </form>
</body>
</html>