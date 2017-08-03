<?php  
if( (isset($_GET['action'])) && (isset($_GET['id'])) && (($_GET['action'] == 'editar')) ){
$id= $_GET['id'];
$agenda = Agenda::soloId($id);
$array = $agenda->selectId();
$datos = $array->fetch_array();

$accion = 'update';
}

if( (isset($_GET['action'])) && (isset($_GET['id'])) && (($_GET['action'] == 'eliminar')) ){
$id= $_GET['id'];
$agenda = Agenda::soloId($id);
$array = $agenda->delete();
}

?>
