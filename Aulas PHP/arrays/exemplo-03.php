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

print_r($pessoas[0]['nome']);

?>