<?php 

class Teste2 extends classePai
{
	public $nome = 'leandro';
	
	public function metodo2()
	{
		$this->nome;
	}
}

//$objeto2 = new ClassePai;
class classePai 
{
	public $sobrenome = 'souza';
	
	public function metodo3()
	{
		$this->sobrenome;
	}
}

$objeto= new Teste2;
$objeto2 = new ClassePai;




var_dump($objeto);
echo "<br>";
var_dump($objeto2);


 ?>