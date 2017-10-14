<?php
$nomes = ['Lucas','Joao','Marcos','Leandro'];
$encontrado = array_filter($nomes, function ($nome){
if ($nome=='Lucas'){
	return $nome;
}


	});
var_dump ($encontrado);