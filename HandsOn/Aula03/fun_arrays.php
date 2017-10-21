<?php 

echo "<pre>";
$pessoas = [
	[
		'nome' => 'Lucas Marques',
		'idade' => 24,
		'profissao' => 'Programador'
	],
	[
		'nome' => 'Mateus Marques',
		'anos' => 22,
		'profissao' => 'Programador'
	]
];

// print_r($pessoas);

// foreach ($pessoas as $pessoa) {

// 	if (array_key_exists('idade', $pessoa)) {
// 	echo 'Existe a chave idade';
// 	echo "<br>";
// 	} else {
// 		echo 'Não existe a chave';
// 		echo "<br>";
// 	}
// }

// foreach ($pessoas as $pessoa) {
// 	$chave = array_search('Lucas Marques', $pessoa);
// 	echo $chave;
// }

// $letras = array('a','b','c');

// $chave = array_search('b', $letras);

// echo $chave;


// $estados = ['MG', 'SP', 'RJ', 'SP'];

// $estados = array_unique($estados);

// // print_r($estadosUnicos);
// print_r($estados);

$estados = ['MG', 'SP', 'RJ', 'SP'];

// if (in_array('mg', $estados)) {
// 	echo 'Encontrei MG';
// }


$qtdEstados = count($estados);
$qtdPessoas = count($pessoas);

echo $qtdEstados;
echo "<br>";
echo $qtdPessoas;