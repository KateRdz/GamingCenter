 <?php 
 	 $link = new mysqli("localhost","root","","revolution");
	 $salida = "";
     if(isset($_POST['id'])){
         $var = $link->real_escape_string($_POST['id']);     
      }
            $query2 = "SELECT p.nombre as nombre from consolas c inner join plataformas p on c.id_plataforma = p.id  where c.id=".$var.";";   
       ///  echo  $var;
        // echo  $query2;
        
         $resultado = mysqli_query($link, $query2);
 

	if($resultado -> num_rows > 0){
		$ver = $resultado -> fetch_assoc();
		// echo "RESULTADO  " . $ver['monedas'];
		$salida.= $ver['nombre'];
	
	}

	echo $salida;
	$link -> close();
 ?>

