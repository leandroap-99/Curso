<?php
echo "<pre>";
$cursos = [
'PHP'=> [
'Iniciante'=> 500,
'intermediario'=> 501,
'Avancado'=> 502],
'LINUx' => [
'Iniciante' => 450,
'Intermediario'=> 451,
'Avancado'=> 452
];
foreach ($cursos as $tipo=>$curso){
	var_dump ($curso['Avancado']);
}
