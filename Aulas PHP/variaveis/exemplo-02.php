<?php 
/* Comentario em varias linhas; */
$anoNascimento = 1990;
//Comentario em apenas uma linha;

$nome1 = "Guilherme";

$sobrenome = "Ramos Teixeira";

$nomeCompleto  = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

echo "<br/>";

unset($nomeCompleto);
//Unset destrui a memoria;
if(isset($nomeCompleto))
//Isset para saber se a variavel existe;
echo $nomeCompleto;

?>