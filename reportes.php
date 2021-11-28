<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="manifest" href="manifest.json">
    <title>Reportes</title>
</head>
<body>
    <?php include_once "header.php" ?> 
    <div class="content">
        <h1>Reportes</h1>
        <h3>Añade tu reporte</h3>
        <table>
            <tr>
                <td>App:</td>
                <td><input type="text" id="txtApp" class="txt"></td>
            </tr>
            <tr>
                <td>Tipo de reporte:</td>
                <td><input type="text" id="txtTipo" class="txt"></td>
            </tr>
            <tr>
                <td>Tester:</td>
                <td><input type="text" id="txtEmail" class="txt"></td>
            </tr>
            <tr>
                <td>Detalles:</td>
                <td><textarea name="txtDetalles" id="txtDetalles" cols="30" rows="5"></textarea></td>
            </tr>
        </table>
        <button onclick="sendReport()" class="btn">Enviar</button>
        <br>
        <h3>Buscar por app</h3>
        <input type="text" id="txtAppName" class="txt">
        <button onclick="getAppReports()" class="btn">Buscar</button>
        
        <br>
        <div id="divTabla"></div>
        <script src="reports.js"></script>
    </div> 
</body>
</html>