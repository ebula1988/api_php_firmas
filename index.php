<?php

require_once('db.php');

$query = "select * from tblfirmas"
$resultado = ObtenerRegistros($query)

print_r($resultado);


?>