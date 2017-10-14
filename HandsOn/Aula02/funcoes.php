<?php
echo "<pre>";
$num = 9;
$num1 = 5;
$num2 = 8;
function isParorImpar ($num) {
if ($num % 2 == 0) {
	return "PAR";

}
else {
	return "IMPAR";
}
}
echo isParorImpar (2);
echo "<hr>";

function isMaior ( $num1,$num2){
	$maior;
if (num1 > num2){
	$maior = $num1;
	}else if ($num2 > $num1){
$maior = $num2;
	} else { maior [ 'iguais'];}

return $maior;

}
$resultado = isParorImpar ($num);
echo $resultado;
echo "<br>";
echo $num;
echo "<hr>";
echo isMaior(10,10);
