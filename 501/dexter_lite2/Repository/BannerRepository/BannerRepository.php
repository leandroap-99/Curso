<?php 
namespace Repository\BannerRepository;

use src\Conexao as Conexao;
class BannerRepository {
public function select ($id){

	$conexao = Conexao::getInstance();
	if(is_null( $id )) {
		$requisicao = $conexao->query('SELECT * FROM banners ORDER BY id');
		$result = $requisicao->fetchAll(\PDO::FETCH_ASSOC);
		return $result;
	} else {
		$requisicao = $conexao->query("SELECT * FROM banners WHERE id = $id");
		$result = $requisicao->fetch(\PDO::FETCH_ASSOC);
		return $result;
	}

}

public function insert ($banner)
{
	$conexao = Conexao::getInstance();

		$query = $conexao->prepare('INSERT INTO banners (nome, descricao, url) VALUES (:nome, :descricao, :url)');

		$data = [
			':nome'=> $banner->getNome(),
			':descricao'=> $banner->getDescricao(),
			':url'=> $banner->getUrl()
		];

		if( $query->execute($data) ) {
			header('Location: ?route=banners');
		} else {
			echo "Erro ao adicionar banner!.";
		}
	return $query->execute($data);
}

public function update ($data){
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

	return BannerController::read($_GET['id']);
}






public function delete (){
{
			$conexao = Conexao::getInstance();
			$query = $conexao->prepare('DELETE FROM banners WHERE id=:id');

			$banner = [
				':id'=> $_GET['id']
			];

			if( $query->execute($banner) ) {
				header('Location: ?route=banners');
			} else {
				echo "Erro ao deletar banner!.";
			}

}







}




}




 ?>