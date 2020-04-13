<?php  
    
     $link = new mysqli("localhost","root","","revolution");
     $salida = "";
     
    if(isset($_POST['consulta'])){
        $q = $link->real_escape_string($_POST['consulta']);
        $sql = "select c.id as id,c.id_plataforma as,c.serial as serial, p.nombre as nombre from consolas c inner join plataformas p on c.id_plataforma=p.id WHERE id = ".$q.";";
        
    }

    $resultado = $link -> query($sql);
    echo (mysqli_error ($link));

    if($resultado -> num_rows > 0){
        $salida.= " <div class='modal-body' id='formularioo'> "

                  
                      ;

                    while ($ver = $resultado -> fetch_assoc()) {
                        $salida.=" 
                  
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Plataforma</label>
                        <div class='col-sm-10'>
                             <input type='text' class='form-control form-control-sm'  id='pl' value='".$ver['nombre']."''><br> 
                        </div>
                    </div>
                        <label for='resultados'>Serial</label>
                        <input type='text'class='form-control form-control-sm' id='sr' value='".$ver['serial']."''><br>
                           
                  
                    
                        ";
                    }
                    $salida.="
                     </div>
                    <div class='modal-footer'>
                        <button type='button' value='".$q."' onclick='guard(".$q.");' class='btn btn-primary btn-sm'>Guardar</button>
                    </div>"
                    ;
    } else {
        $salida.= "vacio";

    }
    
    echo $salida;
    $link -> close();
?>

