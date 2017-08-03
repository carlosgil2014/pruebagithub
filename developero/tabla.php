<table>
<th>nombre</th>
<th>domicilio</th>
<th>telefono</th>
<th>comentarios</th>
<th>editar</th>
<th>eliminar</th>
<?php 
	$agenda = Agenda::ningunDato();
	$datos = $agenda->select();
	while($row = $datos->fetch_array()){
		echo '<tr>';
		echo '<td>',$row['nombre'],'</td>';
		echo '<td>',$row['domicilio'],'</td>';
		echo '<td>',$row['telefono'],'</td>';
		echo '<td>',$row['comentario'],'</td>';
		echo "<td> <a href=\"index.php?action=editar&&id=$row[id]\">Editar</a> </td>";
		echo "<td> <a href=\"index.php?action=eliminar&&id=$row[id]\">Eliminar</a> </td>";
		echo '</tr>';
	}
 ?>
 </table>