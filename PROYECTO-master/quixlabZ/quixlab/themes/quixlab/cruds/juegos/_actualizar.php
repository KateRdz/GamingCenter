<?php
  include_once "../connect_db.php";

  $id = $_POST['id'];
  $nombre = $_POST['n'];
  $imagen = $_FILES['imagen'];

  $contenidoImagen = addslashes(file_get_contents($imagen['tmp_name']));

  $target_path = "imagenes/";
  $target_path = $target_path . basename( $imagen['name'] ); 

  if(move_uploaded_file($imagen['tmp_name'], $target_path)) {
    echo "El archivo ".  basename( $imagen['name']). 
    " ha sido subido";
  } else{
    echo "Ha ocurrido un error, trate de nuevo!";
  }

  $consulta = "UPDATE juegos SET nombre = '$nombre', ruta = '$target_path', imagen = '$contenidoImagen' WHERE id = '$id'";

  $resultado=mysqli_query($link, $consulta);

  echo "<script>window.location.href ='visualizar.php'</script>"
?>