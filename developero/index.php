<?php 
	/*include ('config/Conexion.php');
	$db = new Conexion();*/
	include('agenda.php');
	$datos = array('nombre'=>'','domicilio'=>'','telefono'=>'','comentario'=>'','id'=>'');
	$accion= 'insert';
	include('get.php');
//se cambio desde github pero no se debe hacer en la web
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="post.php" method="post">
 		<input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="nombre" required="required">
 		<input type="text" name="domicilio" value="<?php echo $datos['domicilio']; ?>" placeholder="calle y numero" required="required">
 		<input type="number" name="telefono" value="<?php echo $datos['telefono']; ?>" placeholder="telefono" required="required">
 		<textarea name="comentarios" required="required"> <?php echo $datos['comentario']; ?> </textarea>

 		<input type="hidden" name="id" value="<?php echo $datos['id']; ?>">
 		<input type="hidden" name="action" value="<?php echo $accion; ?>">
 		<input type="submit" name="submit" value="enviar">
 	</form>
 	<?php include('tabla.php') ?>
 </body>
 </html>
