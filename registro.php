<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="manifest" href="manifest.json">
    <title>Registro</title>
</head>
<body>
    <?php include_once "header.php" ?>
    <div class="content">
        <h1>Registro</h1>
        <h3>Únete a nuestro equipo de testers</h3>
        <table>
            <tr>
                <td>Usuario:</td>
                <td><input type="text" id="txtUser" class="txt"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" id="txtEmail" class="txt"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" id="txtPass" class="txt"></td>
            </tr>
        </table>
        <button class="btn" onclick="sendRegistro()">Registrarme</button>
        <div id="divInfo"></div>
    </div>
    <script src="registro.js"></script>
</body>
</html>