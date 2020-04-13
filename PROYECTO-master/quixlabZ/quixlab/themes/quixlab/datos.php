<?php

 require("connect_db.php");

$idAlumno2=$_POST['idAlumno'];


$sql="SELECT correo FROM tutores t, alumnos a where t.id_tutor=a.id_tutor and a.id='$idAlumno2'";

$result=mysqli_query($link,$sql);

$cadena="<label>Correo del Tutor</label> <select id='lista2' name='lista'>";

while($ver=mysqli_fetch_row($result)){
	$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[0]).'<option>';

}
echo $cadena."</select>"



?>