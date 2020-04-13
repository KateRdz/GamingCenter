<?php  
	
	 $link = new mysqli("localhost","root","","reportes_padres");
	 $salida = "";
	 $sql = "SELECT a.nombre AS nombreA, g.grupo,  t.nombre AS nombreT , t.correo, (SELECT COUNT(fecha) FROM faltas f WHERE f.id_alumno = a.id) AS faltas 
				 FROM alumnos a INNER JOIN grupos g ON a.id_grupo = g.id INNER JOIN tutores t ON a.id_tutor = t.id_tutor;";

	if(isset($_POST['consulta'])){
		$q = $link->real_escape_string($_POST['consulta']);
		$sql = "SELECT a.nombre  AS nombreA, g.grupo, t.nombre  AS nombreT , t.correo, (SELECT COUNT(fecha) FROM faltas f WHERE f.id_alumno = a.id) AS faltas
				 FROM alumnos a INNER JOIN grupos g ON a.id_grupo = g.id INNER JOIN tutores t ON a.id_tutor = t.id_tutor WHERE  a.nombre LIKE '%".$q."%' OR g.grupo LIKE '%".$q."%'";
		
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
                            <th>Nombre del alumno</th>
                            <th>Grupo</th>
                            <th>Total de faltas</th>
                            <th>Tutor</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                    	$salida.="<tr>
                                    <td>".$ver['nombreA']."</td>
                                    <td>".$ver['grupo']."</td>
                                    <td>".$ver['faltas']."</td>
                                    <td>".$ver['nombreT']."</td>
                                    <td>".$ver['correo']."</td> 
                                    <td><button type='button' class='btn btn-outline-info fa fa-paper-plane font-18 align-middle mr-2' border-radius='20px'
                                     onclick='correo(".$ver['correo'].");'>
                                	</td>
                                </tr>";
                    }
                    $salida.="</tbody></table>";
	} else {
		$salida.= "vacio";

	}
	echo $salida;
	$link -> close();
?>