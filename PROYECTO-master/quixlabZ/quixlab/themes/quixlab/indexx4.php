<?php  
    
     $link = new mysqli("localhost","root","","revolution");
     $salida = "";
     $sql = "select id,fecha,hora,horas,id_consola,id_juego,id_jugador,total,descripcion from rentas";

    if(isset($_POST['consulta'])){
        $q = $link->real_escape_string($_POST['consulta']);
        $sql = "select id, fecha,hora,horas,id_consola,id_juego,id_jugador,total,descripcion from rentas WHERE id LIKE '%".$q."%'";
        
    }

    $resultado = $link -> query($sql);
    echo (mysqli_error ($link));

    if($resultado -> num_rows > 0){
        $salida.= "<table class='table table-xs mb-0'>
                     <thead>
                        <tr>
                            <th>id</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Horas</th>
                            <th>Consola</th>
                            <th>Juego</th>
                            <th>Jugador</th>
                            <th>Total</th>
                            <th>Descripcion</th>




                        </tr>
                    </thead>
                    <tbody>";

                    while ($ver = $resultado -> fetch_assoc()) {
                        $salida.="<tr>
                                    <td>".$ver['id']."</td>
                                    <td>".$ver['fecha']."</td>
                                    <td>".$ver['hora']."</td>                                
                                    <td>".$ver['horas']."</td>
                                    <td>".$ver['id_consola']."</td>
                                    <td>".$ver['id_juego']."</td>
                                    <td>".$ver['id_jugador']."</td>
                                    <td>".$ver['total']."</td>

                                    <td>".$ver['descripcion']."</td>
                               
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

