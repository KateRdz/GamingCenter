<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    
    $gamer= $_POST["val-jugado"];
    //$total=$_POST["val-monedas"];
    $dulceria=$_POST["val-jugador"];

        $consulta = "UPDATE compras_realizadas cp, gamers g, dulceria d  SET g.monedas=g.monedas+d.recompensa  WHERE cp.id_gamer = g.id AND cp.id_dulceria = d.id";
         $resultado2=mysqli_query($link, $consulta);       
}
    
?>







