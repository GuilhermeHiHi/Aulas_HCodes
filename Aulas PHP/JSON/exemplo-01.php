<?php

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Guilherme',
	'idade' => 29
));

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 17
));

echo json_encode($pessoas);

?>