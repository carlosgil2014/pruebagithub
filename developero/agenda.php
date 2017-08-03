<?php 
include ('config/Conexion.php');
	
class Agenda
{
protected $nombre;
protected $domicilio;
protected $telefono;
protected $comentarios;
protected $id;
	//id vacio si no se le manda parametro
	function __construct($nom,$dom,$tel,$com,$id = '')
	{
$this->nombre = $nom;
$this->domicilio = $dom;
$this->telefono = $tel;
$this->comentarios = $com;
$this->id = $id;		
	}

	static function ningunDato(){
		//retorna una instancia
		return new self('','','','','');
	}

	static function soloId($id){
		//retorna una instancia
		return new self('','','','',$id);
	}


	public function insert(){
		$db = new Conexion();

		$sql = "INSERT INTO `contactos` 
		(`nombre`, `domicilio`, `telefono`, `comentario`) 
		VALUES ('$this->nombre','$this->domicilio','$this->telefono','$this->comentarios');";
		if($db->query($sql)){
			header('location: index.php?res=insertado');
		}else{
			header('location: index.php?res=error');
		}
	}

	public function update(){
		$db = new Conexion();

		$sql = "UPDATE `contactos` SET `nombre`='$this->nombre',`domicilio`='$this->domicilio',`telefono`='$this->telefono',`comentario`='$this->comentarios' WHERE `id` = $this->id";
		//echo "sql = ", $sql;
		if($db->query($sql)){
			header('location: index.php?res=editado');
		}else{
			header('location: index.php?res=error');
		}
	}

	public function delete(){
		$db = new Conexion();

		$sql = "DELETE FROM `contactos` WHERE `id` = $this->id";
		if($db->query($sql)){
			header('location: index.php?res=eliminado');
		}else{
			header('location: index.php?res=error');
		}
	}

	public function selectId(){
		$db= new Conexion();
		$sql = "SELECT * FROM `contactos` WHERE `id`=$this->id";
		$result = $db->query($sql);
		return $result;
	}

	public function select(){
		$db= new Conexion();
		$sql = "SELECT * FROM `contactos`";
		$result = $db->query($sql);
		return $result;
	}
}
 ?>