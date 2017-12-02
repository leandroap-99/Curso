<?php 

class BannerController {
public static function read($id = null){
	$conexao = conexao::getinstance();
	if(is_null($id)){
		$requisicao = $conexao->query('SELECT * FROm banners');
		return $requisicao->fetchALL();
	}else{
		$requisicao = $conexao->prepare("SELECT * FROM banners WHERE id = :id");
		$checkid = [
	':id'=>1,
	
	];
		$conexao->execute($checkid);
		return $requisicao->fetch();
	}
}

}




 ?>