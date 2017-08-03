<?php 
include('agenda.php');
if(isset($_POST['submit'])){

	if($_POST['action'] == 'insert'){
		$nom = $_POST['nombre'];
		$dom = $_POST['domicilio'];
		$tel = $_POST['telefono'];
		$com = $_POST['comentarios'];
		$agenda= new Agenda($nom,$dom,$tel,$com);
		$agenda = $agenda->insert();
	}


	if($_POST['action'] == 'update'){
		//print_r($_POST);
		$nom = $_POST['nombre'];
		$dom = $_POST['domicilio'];
		$tel = $_POST['telefono'];
		$com = $_POST['comentarios'];
		$id = $_POST['id'];
		$agenda= new Agenda($nom,$dom,$tel,$com,$id);
		$agenda = $agenda->update();
	}
}	
 ?>
