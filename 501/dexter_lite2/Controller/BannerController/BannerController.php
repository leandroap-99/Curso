<?php

namespace Controller\BannerController;
use Model\BannerModel\BannerModel as Banner;
use src\Conexao as Conexao; 
use src\MensagemTrait as Mensagem;
use Repository\BannerRepository\BannerRepository;

class BannerController {

	use Mensagem;

	public static function read($id = null) {
		$result = BannerRepository::select($id);
		if(is_null($id)){
			$banners = [];

			foreach ($result as $banner) {
				$banners[] = new Banner(
					$banner['nome'],
					$banner['descricao'],
					$banner['url'],
					$banner['id']
				);
			}
			return $banners;

		} else {
			
			return new Banner($result['nome'], $result['descricao'], $result['url'], $result['id']);
		}
	}
	

	public static function create() {
		if (!empty($_POST['nome']) && !empty($_POST['url'])){

			$banner = new Banner(
				$_POST['nome'],
				$_POST['descricao'],
				$_POST['url']
			);

			if (BannerRepository::insert($banner) ){
				header ('Location: ?route=banners');
			}else {
				echo "Erro ao adicionar banner!.";
			}
		}
	}

	public static function delete() {
		if( !empty( $_POST['delete'] ) ) 
		{

		if (BannerRepository::delete() ){
				header ('Location: ?route=banners');
			}else {
				echo "Erro ao adicionar banner!.";
			}


		}

		return BannerController::read($_GET['id']);
	}

	public static function update() {

		if( !empty( $_POST['nome'] ) && !empty( $_POST['url'] ) ) {

			$banner = new Banner(
				$_POST['nome'],
				$_POST['descricao'],
				$_POST['url'],
				$_GET['id']
			);

			$conexao = Conexao::getInstance();
			$query = $conexao->prepare('UPDATE banners SET nome=:nome, descricao=:descricao, url=:url WHERE id=:id');

			$data = [
				':nome' => $banner->getNome(),
				':descricao' => $banner->getDescricao(),
				':url' => $banner->getUrl(),
				':id' => $banner->getId(),
			];

			if( $query->execute($data) ) {
				self::saveMessage([
					'text' => 'Banner atualizado com sucesso!',
					'class' => 'success'
				]);

				header('Location: ?route=banners');
			} else {
				$_SESSION['msg'] = [
					'text' => 'Banner atualizado com sucesso!',
					'class' => 'success'
				];
			}
		}
		return BannerController::read($_GET['id']);
	}
}