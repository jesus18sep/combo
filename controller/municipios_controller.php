<?php

require_once '../model/municipio.php';

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_municipio']. '">' . $row['municipio'] . '</option>' . "\n";
}