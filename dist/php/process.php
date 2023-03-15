<?php

$mysqli = mysqli_connect("localhost", "root", "", "systemsolutions");
if (mysqli_connect_errno($mysqli)) {
	echo "<script>alert('Fallo al conectar con la Base de datos: Por favor comunicarse con el equipo desarrollador. #301')</script>" . mysqli_connect_error();
	exit;
}
// else{
// 	echo "<script>alert(' Esta conectado ')</script>";
// }

?>