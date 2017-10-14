<?php 

echo "<pre>";

$tamanhoArray = 5;
$numeros = [];

// MONTANDO ARRAY
for ($i=0; $i < $tamanhoArray; $i++) { 
	$numeros[] = mt_rand(0,10);
}

//------------------------------------------------------
// TODOS
foreach ($numeros as $numero) {
	echo $numero . ",";
}

echo "<hr>";
// TODOS
for ($i=0; $i < $tamanhoArray; $i++) { 
	echo $numeros[$i] . ",";
}

echo "<hr>";
//------------------------------------------------------
// PRIMEIRO do ARRAY
echo $numeros[0];

echo "<hr>";
// ÚLTIMO do ARRAY

echo $numeros[$tamanhoArray - 1];

echo "<hr>";
//------------------------------------------------------
// PARES
foreach ($numeros as $numero) {

	if ($numero % 2 == 0) {
		echo $numero . ",";
	}
	
}

echo "<hr>";

//------------------------------------------------------
// PARES

for ($i=0; $i < $tamanhoArray; $i++) {
	if ($numeros[$i] % 2 == 0) {
		echo $numeros[$i] . ",";
	 } 
	
}

echo "<hr>";
//------------------------------------------------------
// ÍMPARES
foreach ($numeros as $numero) {

	if ($numero % 2 != 0) {
		echo $numero . ",";
	}
	
}

echo "<hr>";
//------------------------------------------------------
// ÍMPARES

for ($i=0; $i < $tamanhoArray; $i++) {
	if ($numeros[$i] % 2 != 0) {
		echo $numeros[$i] . ",";
	 } 
	
}

echo "<hr>";
//------------------------------------------------------
// MAIOR
$maior = $numeros[0];

foreach ($numeros as $numero) {
		if ($numero > $maior) {
			$maior = $numero;
		}
}
echo $maior;

echo "<hr>";

// MAIOR
$maior = $numeros[0];

for ($i=0; $i < $tamanhoArray; $i++) {
	if ($numeros[$i] > $maior) {
	 	$maior = $numeros[$i];
	 } 
}

echo $maior;

echo "<hr>";
//------------------------------------------------------
// MENOR
$menor = $numeros[0];

foreach ($numeros as $numero) {
		if ($numero < $menor) {
			$menor = $numero;
		}
}
echo $menor;

echo "<hr>";

// MENOR

$menor = $numeros[0];

for ($i=0; $i < $tamanhoArray; $i++) {
	if ($numeros[$i] < $menor) {
	 	$menor = $numeros[$i];
	 } 
}

echo $menor;
echo "<hr>";
//------------------------------------------------------

// ORDEM CRESCENTE

for ($i=0; $i < $tamanhoArray; $i++) {
	for ($j= $i+1; $j < $tamanhoArray; $j++) { 
			
		if ($numeros[$i] > $numeros[$j]) {
			$temp = $numeros[$i];
			$numeros[$i] = $numeros[$j];
			$numeros[$j] = $temp;
		}
	}	
}

// TODOS
foreach ($numeros as $numero) {
	echo $numero . ",";
}

echo "<hr>";

sort($numeros);
foreach ($numeros as $numero) {
	echo $numero . ",";
}

echo "<hr>";

//------------------------------------------------------

// ORDEM DECRESCENTE

for ($i=0; $i < $tamanhoArray; $i++) {
	for ($j= $i+1; $j < $tamanhoArray; $j++) { 
			
		if ($numeros[$i] < $numeros[$j]) {
			$temp = $numeros[$i];
			$numeros[$i] = $numeros[$j];
			$numeros[$j] = $temp;
		}
	}	
}

// TODOS
foreach ($numeros as $numero) {
	echo $numero . ",";
}

echo "<hr>";

rsort($numeros);
foreach ($numeros as $numero) {
	echo $numero . ",";
}