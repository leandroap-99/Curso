<?php

require 'autoloader.php';

session_start();

use Controller\BannerController\BannerController as BannerController;
use src\MensagemTrait as Mensagem;
use src\View as View;

$msg = Mensagem::hasMessage();

// Verificar se existe a rota
// senão colocar para rota da home
if( !isset( $_GET['route'] ) ) {
	$_GET['route'] = 'home';
}

// Switch-case das rotas
switch ( $_GET['route'] ) {
	case 'home':
		echo "<h1>Home</h1>";
		break;
	case 'banners':

		View::render(BannerController::read(), "View/Banner/Read.php");

		//$banners = ( isset( $_GET['id'] ) ) ? BannerController::read( $_GET['id'] ) : BannerController::read();
		//require "View/Banner/Read.php";
		break;
	case 'banners/create':
		require "View/Banner/Create.php";
		if( !empty( $_POST['nome'] ) && !empty( $_POST['url'] ) ) {
			BannerController::create();
		}
		break;
	case 'banners/delete':
		/*$banner = BannerController::read( $_GET['id'] );
		require "View/Banner/Delete.php";
		if( !empty( $_POST['delete'] ) ) {
			BannerController::delete();
		}*/
		View::render(BannerController::delete(), "View/Banner/Delete.php");
		break;
	case 'banners/update':
		/*$banner = BannerController::read( $_GET['id'] );
		require "View/Banner/Update.php";
		if( !empty( $_POST['nome'] ) && !empty( $_POST['url'] ) ) {
			BannerController::update();
		}*/
		View::render(BannerController::update(), "View/Banner/Update.php");
		break;

	default:
		# code...
		break;
}

?>

</div>
</body>
</html>