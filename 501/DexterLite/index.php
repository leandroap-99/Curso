
<?php 
require 'autoloader.php';
session_start ();	
use Controller\Bannercontroller\Bannercontroller as Bannercontroller;
use src\view as view;
/*require 'src/Conexao.php';
require 'Controller/Bannercontroller/bannercontroller.php';
$conexao = conexao::getinstance();*/
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

	/*if (isset($_GET['id'])){
		$banners = Bannercontroller::read($_GET['id']);
	}else {
		$banners = Bannercontroller::read();
	}
		require "View/banner/read.php";*/
		view::render(Bannercontroller::read(), "View/Banner/Read.php");
		break;
	case 'inserir_banner':
		require "View/banner/create.php";

break;
case 'delete_banner';
require "View/banner/delete.php";
break;
case 'update_banner';
$banner = Bannercontroller::read($_GET['id']);
require "View/banner/update.php";
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