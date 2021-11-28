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
        <h3>Buscar por app</h3>
        <input type="text" id="txtAppName" class="txt">
        <button onclick="getAppReports()" class="btn">Buscar</button>
        <div id="divTabla"></div>
        <script src="reports.js"></script>
    </div> 
</body>
</html>