<?php  
	
	 $link = new mysqli("localhost","root","","revolution");
	 $salida = "";
	 $sql = "select c.id as id,c.id_plataforma,c.serial, p.nombre from consolas c inner join plataformas p on c.id_plataforma=p.id";

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "select c.id as id,c.id_plataforma,c.serial as serial, p.nombre as nombre from consolas c inner join plataformas p on c.id_plataforma=p.id WHERE id LIKE '%".$q."%'";
		
	}
	$resultado = $link -> query($sql);
	echo (mysqli_error ($link));
/*	$resultado = $conn->query($sql);
	if (!$resultado) {
    trigger_error('Invalid query: ' . $conn->error);
	}*/
	if($resultado -> num_rows > 0){
		$salida.= "<table class='table table-xs mb-0'>
					 <thead>
					 	<tr>
                            <th>id</th>
                            <th>Plataforma</th>
                            <th>serial</th>
                          
                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.="<tr>
                                    <td>".$ver['id']."</td>
                                    <td>".$ver['nombre']."</td>
                                    <td>".$ver['serial']."</td>
                                  
                                    <td><button type='button' value='".$ver['id']."' id='eliminar' onclick='preg(".$ver['id'].");' class='btn btn-primary'>Eliminar
                                    </td>
                                   <td><input type='checkbox' name='keyToDelete' value='".$ver['id']."'</td>
                                </tr>";
                    }
                    $salida.="</tbody></table>";
	} else {
		$salida.= "vacio";

	}
	echo $salida;
	$link -> close();
?>