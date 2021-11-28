<?php

//$enlace =  mysql_connect('localhost', 'id18022994_dbadmin', 'CatF0x_P@55word');

$mysqli = new mysqli('localhost', 'id18022994_dbadmin', 'CatF0x_P@55word', 'id18022994_cf_testers');

if ($mysqli -> connect_errno) {
    echo "No se pudo conectar al servidor: " . $mysqli -> connect_error;
    exit();
}

// Consulta Mysql
$query = 'SELECT * FROM `Reportes` ORDER BY ID DESC';

if ($result = $mysqli -> query($query)) {

?>

<table class="table-info">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>Fecha</th>
			<th>App</th>
			<th>Tipo</th>
			<th>Tester</th>
			<th>Reporte</th>
		</tr>
		</thead>
<?php 




while ($reporte = $result -> fetch_object()) {?>
<tr>
	<td><?php print $reporte->ID ?></td>
    <td><?php print $reporte ->Fecha ?></td>
    <td><?php print $reporte ->App ?></td>
    <td><?php print $reporte ->Tipo ?></td>
    <td><?php print $reporte ->Tester ?></td>
    <td><?php print $reporte ->Reporte ?></td>
	</tr>	
<?php } 
$result -> free_result();
}
$mysqli -> close();
?>
</table>