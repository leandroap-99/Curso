<?php
echo "<pre>";

$tamanhoArray = 5;
$numeros = array();

for ($i=0; $i < $tamanhoArray; $i++) { 
	$numeros[] = mt_rand(0,10);
}
function geraraleatorio ($tam = 5,$num1 = 0, $num2 = 10){
	for ($i=0;$i < tamanho; $i++){
	$numeros [] = mt_rand($num1,$num2);
	}
	return $numeros;

}
echo "<br>";
function isPar ($array){
	foreach ($array as $key => $value) {
if ($value % 2 == 0)
	$pares [] = $value;

	}
}
return $pares;






?>