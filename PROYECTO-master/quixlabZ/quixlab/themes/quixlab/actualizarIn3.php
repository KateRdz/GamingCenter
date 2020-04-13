<?php  
    
     $link = new mysqli("localhost","root","","revolution");
     $salida = "";
     
    if(isset($_POST['consulta'])){
        $q = $link->real_escape_string($_POST['consulta']);
        $sql = "select id, nombre, apellidos, fecha_nacimiento, genero, telefono, correo,monedas FROM gamers WHERE id = ".$q.";";
        
    }

    $resultado = $link -> query($sql);
    echo (mysqli_error ($link));

    if($resultado -> num_rows > 0){
        $salida.= " <div class='modal-body' id='formularioo'> "

                  
                      ;

                    while ($ver = $resultado -> fetch_assoc()) {
                        $salida.=" 
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Nombre</label> 
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm' id='nom' value='".$ver['nombre']."'' ><br> 
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Apellidos</label>
                        <div class='col-sm-10'>
                             <input type='text' class='form-control form-control-sm'  id='ap' value='".$ver['apellidos']."''><br> 
                        </div>
                    </div>
                        <label for='resultados'>Fecha de nacimiento</label>
                        <input type='text'class='form-control form-control-sm' id='fn' value='".$ver['fecha_nacimiento']."''><br>
                           
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Genero</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='gen' value='".$ver['genero']."''><br>
                        </div>
                    </div>    
                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Telefono</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='tel' value='".$ver['telefono']."''><br>
                        </div>
                    </div>    
                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Correo</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='cr' value='".$ver['correo']."''><br>
                        </div>
                    </div>

                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Monedas</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='mn' value='".$ver['monedas']."''><br>
                        </div>
                    </div>
                  
                    
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

