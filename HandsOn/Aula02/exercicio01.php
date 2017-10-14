<?php 

echo "<pre>";

$tamanhoArray = 5;
$numeros = array();

for ($i=0; $i < $tamanhoArray; $i++) { 
	$numeros[] = mt_rand(0,10);
}

var_dump($numeros);

for ($i=0; $i < $tamanhoArray; $i++) { 
	echo $numeros[$i] . ',';
}

echo "<hr>";

foreach ($numeros as $chave => $valor) {
	echo $chave . '=' .$valor . ',';
}


echo "<hr>";
echo $numeros[0];
echo "<hr>";
echo $numeros[$tamanhoArray - 1];
echo "<hr>";

for ($i=0; $i < $tamanhoArray; $i++) { 
	if ($numeros[$i] % 2 == 0) {
		echo $numeros[$i] . ',';
	}
}
echo "<br>";
foreach ($numeros as $key => $value) {
	if ($value % 2 == 0) {
		echo $value . ',';
	}
}
echo "<hr>";
for ($i=0; $i < $tamanhoArray; $i++) { 
	if ($numeros[$i] % 2 != 0) {
		echo $numeros[$i] . ',';
	}
}
echo "<br>";
foreach ($numeros as $key => $value) {
	if ($value % 2 != 0) {
		echo $value . ',';
	}
}
echo "<hr>";
$maior = $numeros[0];
for ($i=0; $i < $tamanhoArray; $i++) { 
	if ($numeros[$i] > $maior) {
		$maior = $numeros[$i];
	}
}
echo $maior;
echo "<br>";
$maior = $numeros[0];
foreach ($numeros as $key => $value) {
	if ($value > $maior) {
		$maior = $value;
	}
}
echo $maior;
echo "<hr>";

$menor = $numeros[0];
for ($i=0; $i < $tamanhoArray; $i++) { 
	if ($numeros[$i] < $menor) {
		$menor = $numeros[$i];
	}
}
echo $menor;
echo "<br>";
$menor = $numeros[0];
foreach ($numeros as $key => $value) {
	if ($value < $menor) {
		$menor = $value;
	}
}
echo $menor;
echo "<hr>";
