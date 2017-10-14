<?php
echo "<pre>";
$tamanho = 10;
$numero = array ();

for ($i = 0;$i <$tamanho; $i++) {
$numero[] = mt_rand(0,10);
echo $i;
echo "<br>";
}
echo "<hr>";
for ($i = 0; $i<$tamanho;$i++){
	echo $numero[$i].',';
	echo "<br>";
}
echo "<hr>";
foreach ($numero as $chave => $valor){

	echo $chave.'='.$valor.',';
}
echo "<hr>";
$num = 9;
if ($num % 2 != 0) {
echo $num;
}
echo "<hr>";
foreach ($numero as $key => $value)
	{ if ($value % 2 != 0)
echo $value . ',';
}
	