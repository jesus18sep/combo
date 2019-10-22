<?php

$parroquia = $_POST['municipio'];
$conexion = mysqli_connect("127.0.0.1","root","","db_combo");
$conexion->set_charset('utf8');
$query = $conexion->query("SELECT * FROM tbl_parroquias WHERE id_municipio = $parroquia");

?>