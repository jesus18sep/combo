<?php

$estado = $_POST['estado'];
$conexion = mysqli_connect("127.0.0.1","root","","db_combo");
$conexion->set_charset('utf8');
$query = $conexion->query("SELECT * FROM tbl_municipios WHERE id_estado = $estado");

?>