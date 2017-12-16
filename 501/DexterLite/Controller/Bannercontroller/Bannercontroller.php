<?php 

namespace Controller\Bannercontroller;
use src\Conexao as conexao;

class BannerController {
	public static function read($id = null){
		$conexao = conexao::getinstance();
		if(is_null($id)){
			$requisicao = $conexao->query('SELECT * FROm banners order by id asc');
			return $requisicao->fetchAll();
		}else{
			$requisicao = $conexao->prepare("SELECT * FROM banners WHERE id = :id");
			$checkid = [
				':id'=> $id,
			];
			$requisicao->execute($checkid);
			return $requisicao->fetchAll();
		}
	}

	public static function update ($id = null) {






	}

}