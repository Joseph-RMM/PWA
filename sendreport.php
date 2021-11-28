<?php
$mysqli = new mysqli('localhost', 'id18022994_dbadmin', 'CatF0x_P@55word', 'id18022994_cf_testers');
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$sql = "INSERT INTO `Reportes` (`App`, `Tipo`, `Tester`, `Reporte`)
VALUES ('".$_POST["appname"] . "', '".$_POST["tipo"] . "', '".$_POST["email"] . "','".$_POST["detalles"] . "')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>