<?php  
    
     $link = new mysqli("localhost","root","","revolution");
     $salida = "";
     
    if(isset($_POST['consulta'])){
        $q = $link->real_escape_string($_POST['consulta']);
        $sql = "select id,fecha,hora,horas,id_consola,id_juego,id_jugador,total,descripcion from rentas WHERE id = ".$q.";";
        
    }

    $resultado = $link -> query($sql);
    echo (mysqli_error ($link));

    if($resultado -> num_rows > 0){
        $salida.= " <div class='modal-body' id='formularioo'> "

                  
                      ;

                    while ($ver = $resultado -> fetch_assoc()) {
                        $salida.=" 
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Fecha</label> 
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm' id='fc' value='".$ver['fecha']."'' ><br> 
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Hora</label>
                        <div class='col-sm-10'>
                             <input type='text' class='form-control form-control-sm'  id='hr' value='".$ver['hora']."''><br> 
                        </div>
                    </div>
                        <label for='resultados'>Horas Rentadas</label>
                        <input type='text'class='form-control form-control-sm' id='hrs' value='".$ver['horas']."''><br>
                           
                    <div class='form-group row'>
                        <label for='resultados' class='col-sm-2 col-form-label'>Consola Rentada</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='idcon' value='".$ver['id_consola']."''><br>
                        </div>
                    </div>    
                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Juego</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='idjue' value='".$ver['id_juego']."''><br>
                        </div>
                    </div>    
                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Jugador</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='idjug' value='".$ver['id_jugador']."''><br>
                        </div>
                    </div>

                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Total</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='tl' value='".$ver['total']."''><br>
                        </div>
                    </div>


                    <div class='form-group row'>
                       <label for='resultados' class='col-sm-2 col-form-label'>Descripcion</label>
                        <div class='col-sm-10'>
                            <input type='text' class='form-control form-control-sm'  id='des' value='".$ver['descripcion']."''><br>
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

