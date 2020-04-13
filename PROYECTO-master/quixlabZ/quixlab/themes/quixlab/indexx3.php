<?php  
    
     $link = new mysqli("localhost","root","","revolution");
     $salida = "";
     $sql = "select id,nombre,apellidos,fecha_nacimiento,genero,telefono,correo, monedas from gamers";

    if(isset($_POST['consulta'])){
        $q = $link->real_escape_string($_POST['consulta']);
        $sql = "select id,nombre,apellidos,fecha_nacimiento,genero,telefono,correo,monedas from gamers WHERE nombre LIKE '%".$q."%'";
        
    }

    $resultado = $link -> query($sql);
    echo (mysqli_error ($link));

    if($resultado -> num_rows > 0){
        $salida.= "<table class='table table-xs mb-0'>
                     <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Fecha Nacimiento</th>
                            <th>Género</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Monedas</th>




                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                        $salida.="<tr>
                                    <td>".$ver['id']."</td>
                                    <td>".$ver['nombre']."</td>
                                    <td>".$ver['apellidos']."</td>                                
                                    <td>".$ver['fecha_nacimiento']."</td>
                                    <td>".$ver['genero']."</td>
                                    <td>".$ver['telefono']."</td>
                                    <td>".$ver['correo']."</td>
                                    <td>".$ver['monedas']."</td>

                               
                                     <td><button type='button' class='btn btn-primary'  data-toggle='modal' data-target='#modal' value='".$ver['id']."' onclick='act(".$ver['id'].");'> Actualizar
                                    </td>
                                    <td><button type='button' value='".$ver['id']."' id='eliminar' onclick='preg(".$ver['id'].");' class='btn btn-danger'>Eliminar
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

