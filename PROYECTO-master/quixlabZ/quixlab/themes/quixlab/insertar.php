<?php
  
 require("connect_db.php");
     
   if($_SERVER['REQUEST_METHOD']=='POST'){

  // if(isset($_POST["val-username"])!="" and $_POST["val-phoneus"]!="" and $_POST["val-suggestions"]!="" and $_POST['val-skill']!="" and $_POST['val-skill2']!=""){

    $nombre = $_POST["val-username"];
    $apellidos = $_POST["val-apellidos"];
    $fecha = $_POST["val-fecha"];
    $genero1 = $_POST["gender"];

    $telefono = $_POST["val-phoneus"];
    $email = $_POST["val-email"];
    $nombreusuario = $_POST["val-nametag"];
    $file = addslashes(file_get_contents($_FILES['image']["tmp_name"]));


  
       
        $consulta = "INSERT INTO gamers(nombre,apellidos,fecha_nacimiento,genero,telefono,correo,namer_tag,foto) VALUES ('$nombre', '$apellidos','$fecha','$genero1','$telefono','$email','$nombreusuario','$file')";
      
         $resultado=mysqli_query($link, $consulta);



       
}
    
?>







