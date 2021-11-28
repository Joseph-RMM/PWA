<?php
$mysqli = new mysqli('localhost', 'id18022994_dbadmin', 'CatF0x_P@55word', 'id18022994_cf_testers');
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

//Verificar que el usuario exista
$query = 'SELECT * FROM `Usuarios` WHERE Username = "'.$_POST["user"].'"';

if ($result = $mysqli -> query($query)) {
    $row_cnt = $result->num_rows;

    if ($row_cnt > 0) {
        
        $sql = "INSERT INTO `Reportes` (`App`, `Tipo`, `Tester`, `Reporte`)
        VALUES ('".$_POST["appname"] . "', '".$_POST["tipo"] . "', '".$_POST["user"] . "','".$_POST["detalles"] . "')";

        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        $result->close();
    }
}
$mysqli->close();
?>