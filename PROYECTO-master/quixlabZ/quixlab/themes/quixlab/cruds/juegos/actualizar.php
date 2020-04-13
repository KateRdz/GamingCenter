<?php  
	include_once "../connect_db.php";
	 
    $salida = "";
	 
	if(isset($_GET['consulta'])){
		$q = $link->real_escape_string($_GET['consulta']);
		$sql = "SELECT id, nombre, ruta, imagen
        FROM juegos
        WHERE id = $q;";
	}

    $resultado = $link -> query($sql);
	echo (mysqli_error ($link));

	if($resultado -> num_rows > 0){
        $salida.= " <form class='mt-5 mb-5 login-input' enctype='multipart/form-data' action='_actualizar.php' method='POST'> 
                    <div class='modal-body' id='formularioo'> ";
                    while ($ver = $resultado -> fetch_assoc()) {
                        $salida.="
                        <div class='form-group row'>
                            <label for='resultados' class='col-sm-2 col-form-label'>ID</label> 
                            <div class='col-sm-10'>
                                <input readonly='readonly' type='text' class='form-control form-control-sm' name='id' value='".$ver['id']."''><br> 
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='resultados' class='col-sm-2 col-form-label'>Nombre</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control form-control-sm'  name='n' value='".$ver['nombre']."''><br>
                            </div>
                        </div> 
                        <div class='form-group row'>
                            <label for='resultados' class='col-sm-2 col-form-label'>Imagen</label>
                            <div class='col-sm-10'>
                                    <div class='form-group'>
                                        <input type='file' class='form-control'  placeholder='Imagen' name='imagen' required>
                                    </div>
                                    
                            </div>
                        </div>
                        ";
                    }
                    $salida.="
                    </div>
                    <div class='modal-footer'>
                        <button class='btn login-form__btn submit w-100'>Guardar</button>
                    </div>
                    </form>";
                    $salida.="<script>
                                function guard(id){
                                    let p = document.getElementById('n').value
                                    let s = document.getElementById('r').value

                                    window.location.href = '_actualizar.php?id='+id+'&nombre='+n+'&ruta='+r;
                                };
                            </script>";
	} else {
		$salida.= "vacio";
	}
	
	echo $salida;
	$link -> close();
?>

