<?php

 class conta
{
	public $nroconta;
	public $titular;
	public $saldo = 0;
	

	public function saldosconta ($titular, $saldoinicial = 0)

	{
		$this->titular = $titular;
		$this->saldo = saldoinicial;
		


	}

	public final function sacar()
	{
		
	}
	
}

class corrente extends conta
{
	public $chequeespecial = 500;

	public function sacar ($valor){
		return $this->chequeespecial-$valor;
	}




}

class poupanca extends conta
{

	public $rendimentos = 0.01;
	public  function depositar ($valor){

		return $valor + ($this->rendimentos * $valor);

	}

}

$poup = new poupanca();
$corrent = new corrente();
echo $corrent->sacar(100);
echo "<br>";
echo $poup->depositar(500);
$conta = new conta();
//var_dump($conta);


 