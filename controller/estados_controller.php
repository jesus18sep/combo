<?php

require_once '../model/estado.php';

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="'. $row['id_estado'] . '">' . $row['estado'] . '</option>' . "\n";
}
