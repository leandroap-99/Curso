<?php 
class classepai
{

	protected static $nome = 'ClassePai';
	public function peganome(){
		return static::$nome;
	}
}
class classefilha extends classepai
{
	protected static $nome = 'ClasseFilha';
	

}

echo classefilha::peganome();
echo "<br>";
echo ClassePai::peganome();


 ?>