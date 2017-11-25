<?php 
interface Ingrediente
{
		public function getpreco();
}
		abstract class IngredienteBasico implements Ingrediente
{
		protected $pai;

		public function __construct (Ingrediente $pai)
{
		$this->pai = $pai;

}


}
class cafe implements ingrediente
{
		public function getpreco(){
		echo "O café custa R$1.20.<br>";
		return 1.2;
}
}
class leite extends IngredienteBasico
{

		public function getpreco(){
		echo "O leite custa um adicional de R$ 0.45 <br>";
		return $this->pai->getpreco() + 0.45;
	}
}
class chocolate extends IngredienteBasico
{
public function getpreco(){
	echo "O chocolate custa um adicional de R$ 1.00<br>";
	return $this->pai->getpreco() + 1.00;
}
}





$cafe = new Cafe();
$leite = new leite($cafe);
$cafefinal = new chocolate($leite);
echo "Preco Final R$".$cafefinal->getpreco();


 ?>