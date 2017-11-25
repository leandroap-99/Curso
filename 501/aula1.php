<?php
Class Teste
{

	public $nome = 10;

	public function metodo ()
	{
		echo $this->nome;
	}

}


$objeto = New Teste();

//echo "$objeto->propriedade";

echo $objeto->metodo();

