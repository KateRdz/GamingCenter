 <?php 
 	 $link = new mysqli("localhost","root","","revolution");

	 $salida = "";
     if(isset($_POST['id'])){
         $var = $link->real_escape_string($_POST['id']);     
      }
            $query2 = "SELECT monedas from gamers where id=".$var.";";   
       ///  echo  $var;
        // echo  $query2;
        
         $resultado = mysqli_query($link, $query2);
 

	if($resultado -> num_rows > 0){
		$ver = $resultado -> fetch_assoc();
		// echo "RESULTADO  " . $ver['monedas'];
		$salida.= $ver['monedas'];
	
	}

	echo $salida;
	$link -> close();
 ?>
  <?php 
 	/* $link2 = new mysqli("localhost","root","","revolution1");

	 $salida = "";
     if(isset($_POST['id'])){
         $var = $link2->real_escape_string($_POST['id']);     
      }
            $query2 = "SELECT precio from dulceria where id=".$var.";";   
       ///  echo  $var;
        // echo  $query2;
        
         $resultado = mysqli_query($link2, $query2);
	if($resultado -> num_rows > 0){
		$ver = $resultado -> fetch_assoc();
		// echo "RESULTADO  " . $ver['monedas'];
		$salida.= $ver['precio'];
	}
	echo $salida;
	$link2 -> close();*/
 ?>