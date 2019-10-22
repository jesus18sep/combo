<?php

require_once '../model/parroquia.php';

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_parroquia']. '">' . $row['parroquia'] . '</option>' . "\n";
}

 