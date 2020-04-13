<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $jugador=$_POST["val-jugador"];
    $fecha=date("Y-m-d"); 
    $hora =date("H:i:s");
    $consola = $_POST["val-consola"];
    $horas = $_POST["hora"];
    $precioc = $_POST["val-precioC"];
    $precio = $_POST["val-precio"];
    $total= $_POST["val-total"];
    $monedass= $_POST["val-monedasA"];

  
       
        $consulta = "INSERT INTO rentas(fecha,hora,horas,id_consola,id_juego,id_jugador,total) VALUES ('$fecha','$hora','$horas','$consola',2,'$jugador','$total')";
      
         $resultado=mysqli_query($link, $consulta);
header('Location:url');

 
$sql="UPDATE gamers SET monedas=monedas+'$monedass' WHERE id='$jugador'";
         $resultado2=mysqli_query($link, $sql);


}
    
?>







