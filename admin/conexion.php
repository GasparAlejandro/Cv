<?php
// $conexion = mysqli_connect("localhost", "", "", "sme");
$conexion = mysqli_connect("localhost", "root", "", "SME");

// $conexion = mysqli_connect("localhost", "admin.sme", "BDs3m3sp2016", "sme");
// if ($conexion) {
// 	echo "conectado";
// }else{
// 	echo "no conectado";
// }

mysqli_set_charset($conexion,"utf8");
?>