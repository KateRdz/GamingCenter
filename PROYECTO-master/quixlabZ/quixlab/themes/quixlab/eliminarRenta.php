<?php  
	
	 $link = new mysqli("localhost","root","","revolution");
	 $salida = "";
	 $sql = "select id,fecha,hora,horas,id_consola,id_juego,id_jugador,total,descripcion from rentas";

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "delete from rentas where id = ".$q.";";
    
	}

	$resultado = $link -> query($sql);
	echo (mysqli_error ($link));

	echo $salida;
	$link -> close();
?>

