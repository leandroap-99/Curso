<!DOCTYPE html>
<html lang = "pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Documento</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
</head>
<body>

<div class="container">

<?php 
require 'src/conexao.php';
$conexao = conect::getinstance();
/*class verifica
{
public function verificador()
{
	if ($_GET == null){
		header.location 'home.php';
	}
}

}
*/
if (!isset($_GET['route'])){
	$_GET['route'] = 'home';
}

switch ($_GET['route']){
	case 'home':
		echo "<h1>Home</h1>";
		break;

	case 'banners':
		$banners = $conexao->query('SELECT * FROM banners');
		$banners = $banners->fetchall(PDO::FETCH_ASSOC);
		require "View/banner/read.php";
		break;
		case 'inserir_banner':
		require "View/banner/create.php";

break;



	case 'clientes':
		echo "<h1> Clientes </h1>";
		$conexao = new PDO ('pgsql:host = localhost;dbname = dexter_lite','dexter','123456');
		$clientes = $conexao->query('SELECT * FROM clientes');
		$clientes = $clientes->fetchall(PDO::FETCH_ASSOC);
		echo '<pre>';
		foreach ($clientes as $cliente){
			echo "NOME: ".$cliente['nome_razao'];
			echo "<br>";
		}
		break;
	default:

	break;

}



 ?>
 </div>
 </body>
</html>