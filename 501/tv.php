<?php 
interface televisao
{
public function aumentaVolume ();
public function diminuiVolume ();
public function trocaCanal($novocanal);
public function liga ();
public function desliga ();


}
class Tv implements televisao
{
	private $volume = 10;
	private $volumeMax = 10;
	private $volumeMin = 8;
	private $canal = 5 ;
	private $canais = array(2,4,5,7,9,11,13,16,30);
	private $estado  = 'OFF';


	public function aumentaVolume()
	{
	++$this->volume;
	echo "<p>Aumentando o volume para : { =$this->volume}</p>";
	if ($this->volume>$this->volumeMax)
		{
	echo "Volume muito alto";
	}elseif ($this->volume<$this->volumeMin)
	{
		echo "volume muito baixo";
	}
	else{
	echo "Troca de volume ok";
	}
	}
	public function diminuiVolume () {
	--$this->volume;
	echo "<p>Diminuindo volume para: {$this->volume}</p>";
	if ($this->volume>$this->volumeMax)
		{
	echo "Volume muito alto";
	}elseif ($this->volume<$this->volumeMin)
	{
		echo "volume muito baixo";
	}
	else{
	echo "Troca de volume ok";
	}

	}
	public function trocacanal($novocanal) {
	$this->canal = $novocanal;
	echo "<p> Novo Canal: {$this->canal}</p>";
	if (in_array($novocanal,$this->canais)){
	echo "Troca de canal bem sucedida";
	}else
	{
		echo "Canal náo existe";
	}

		
	}
	public function liga()
	{
	$this->estado = 'ON';
	echo "<p> A TV ligou </p";
	}
	public function desliga ()
	{
	$this->estado = 'OFF';
	echo "<p> A TV desligou</p>";

	}

	}
$Tv = new Tv();
$Tv->liga();
$Tv->aumentaVolume();
$Tv->diminuiVolume();
$Tv->diminuiVolume();
$Tv->diminuiVolume();
$Tv->diminuiVolume();
$Tv->trocaCanal(7);


 ?>