<?php
    include_once "../connect_db.php";

    $id = $_POST['id'];
    $imagen = $_FILES['imagen'];

    $contenidoImagen = addslashes(file_get_contents($imagen['tmp_name']));

    $consulta = "UPDATE juegos SET imagen = '$contenidoImagen' WHERE id = '$id'";

    $resultado=mysqli_query($link, $consulta);

    echo "<script>window.location.href ='visualizar.php'</script>"
?>