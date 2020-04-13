<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $nombre = $_POST["val-username"];
    $correo2 = $_POST["correo"];
    $telefono = $_POST["val-phoneus"];

  
       
      $consulta = "INSERT INTO consolas(plataforma,cantidad,serial) VALUES ('$nombre', '$correo2', '$telefono')";
      
     $resultado=mysqli_query($link, $consulta);
    
}
    
?>







