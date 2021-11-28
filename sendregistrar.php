<?php
$mysqli = new mysqli('localhost', 'id18022994_dbadmin', 'CatF0x_P@55word', 'id18022994_cf_testers');
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$sql = "INSERT INTO `Usuarios` (`Username`, `Email`, `Password`) 
VALUES ('".$_POST["user"] . "', '".$_POST["email"] . "', '".$_POST["pass"] . "')";

if ($mysqli->query($sql) === TRUE) {
  echo "Cuenta creada";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>