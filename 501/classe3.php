<?php 
interface FreteStrategy
{

public function calcular ($km);

}
class EntregaNormal implements FreteStrategy
{
	public $preco_normal = 2;
	
	public function calcular($km)
	{
		return $km * $this->preco_normal;
	}
}

//$objeto2 = new ClassePai;
class  EntregaRapida implements FreteStrategy
{
	public $preco_rapida = 5;
	
	public function calcular($km)
	{
		return $km * $this->preco_rapida;
	}
}
class  EntregaVIP implements FreteStrategy
{
	public $preco_vip = 8;
	
	public function calcular($km)
	{
		return $km * $this->preco_vip;
	}
}
class Pedido
{
	private $FreteStrategy;
	public function __construct(FreteStrategy $FreteStrategy)
	{
		$this->FreteStrategy = $FreteStrategy;
	}
	public function calcularTotalPedido()
	{

		$totalPedido = 0;
		return $totalPedido += $this->freteStrategy->calcular();
	}





}

$tipoFrete = 'frete_expresso';
if ($tipoFrete === 'frete_normal'){
	$freteStrategy = new EntregaNormal();
}
elseif ($tipoFrete==='frete_expresso'){
$freteStrategy = New EntregaRapida();

}
elseif ($tipoFrete==='frete_turbo'){
$freteStrategy = New EntregaVIP();

}
$pedido = new pedido($freteStrategy);
echo "Total Pedido - R$ {$pedido->calcularTotalPedido()} reais";



echo "<hr>";
$normal = new EntregaNormal();
$rapida = new EntregaRapida ();
$vip = new EntregaVIP();
echo "O valor de 5 km na entrega normal fica ". $normal->calcular(5)."<br>";
echo "O  valor de 5km na entrega rápida fica " .$rapida->calcular(5)."<br>";
echo "O valor de 5km na entrega VIP fica ".$vip->calcular(5);