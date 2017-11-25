<?php 
class caneta
{
private static $durabilidade = "6";
private static $numcanetas = 0;
private $cor;
public function __construct ($cor){
	$this->cor=$cor;
	self::$numcanetas++;
}

public function getcor()
{
	return $this->cor;
}
public function getdurabilidade()
{
return self::$durabilidade;
}
public function setdurabilidade($durabilidade){
self::$durabilidade = $durabilidade;

}
public static function getnumcanetas()
{
	return self::$numcanetas;
}
}

$canetaazul = new caneta ('azul');
echo $canetaazul->getcor();
echo "<br>";
echo $canetaazul->getdurabilidade();
echo "<br>";
echo $canetaazul->getnumcanetas();
echo "<br>";
$canetavermelha = new caneta ('Vermelha');
echo $canetavermelha->getcor();
echo "<br>";
echo $canetavermelha->getdurabilidade();
echo "<br>";
echo $canetavermelha->getnumcanetas();





 ?>
