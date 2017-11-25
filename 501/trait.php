<?php 
session_start();
trait logtrait
{

	private function salvarLog($log_line)
	{		
		if(!isset($_SESSION['log'])) 
		{
			$_SESSION['log'] = '';
		}

		$_SESSION['log'] = $_SESSION['log'].$log_line.'<br>';
		
	}
	public function exibirlog()
	{
		return $_SESSION['log'];
	}

}
class math
{

}
class conta extends math
{
use logtrait;

public function soma ($a,$b)
{
	$log_line = "$a + $b<br>";
	$this->salvarLog($log_line);
	return $a + $b;
}
public function subtracao ($a,$b)
{
$log_line = "$a - $b<br>";
	$this->salvarLog($log_line);
	return $a - $b;
}
}
$slog = new conta;
echo $slog->soma(5,5);
echo $slog->subtracao(10,5);
echo $slog->exibirlog();
 session_destroy();
 ?>