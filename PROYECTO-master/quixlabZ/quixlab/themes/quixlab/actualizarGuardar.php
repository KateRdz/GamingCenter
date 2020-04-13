<?php  
	
	 $link = new mysqli("localhost","root","","revolution");
	 $salida = "";
	// $sql = "SELECT id,nombre,apellidos,fecha_nacimiento,genero,telefono,correo,namer_tag FROM gamers";

	if(isset($_POST['id'])){
		$q = $link->real_escape_string($_POST['id']);
		$nombre =  $link->real_escape_string($_POST['n']);
		$apellidos =  $link->real_escape_string($_POST['a']);
		$fecha_na =  $link->real_escape_string($_POST['f']);
		$genero =  $link->real_escape_string($_POST['g']);
		$telefono =  $link->real_escape_string($_POST['t']);
		$correo =  $link->real_escape_string($_POST['c']);
	    $monedas =  $link->real_escape_string($_POST['m']);


	//	$nam_tag =  $link->real_escape_string($_POST['nt']);

		if(empty($fecha_na)){
			echo "f nula ";
			$fecha_na = 'null';
			echo $fecha_na;
			$sql = "UPDATE gamers Set nombre = '".$nombre."', apellidos = '".$apellidos."', fecha_nacimiento = ".$fecha_na.", genero =  '".$genero."', telefono =  '".$telefono."', correo =  '".$correo."', monedas =  '".$monedas."' WHERE id = ".$q.";";
		}else if(empty($genero)){
			echo "g vacia ";
			$genero = 'null';
			echo $genero;
			$sql = "UPDATE gamers Set nombre = '".$nombre."', apellidos = '".$apellidos."', fecha_nacimiento = '".$fecha_na."', genero =  ".$genero.", telefono =  '".$telefono."', correo =  '".$correo."' , monedas =  '".$monedas."'  WHERE id = ".$q.";";
		}else{
			$sql = "UPDATE gamers Set nombre = '".$nombre."', apellidos = '".$apellidos."', fecha_nacimiento = '".$fecha_na."', genero =  '".$genero."', telefono =  '".$telefono."', correo =  '".$correo."' , monedas =  '".$monedas."'  WHERE id = ".$q.";";
		}

		
		echo $sql;
	}

	$resultado = $link -> query($sql);
	if($resultado){
		return "Guardado";
	}
	echo (mysqli_error ($link));

	echo $salida;
	$link -> close();
?>
