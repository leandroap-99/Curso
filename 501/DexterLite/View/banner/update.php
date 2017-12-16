
	<h1>Novo Banner</h1><br>
		
       <form action="" method="POST">
	
	<div class="form-group">
		<label for="nome">Nome</label>
		<input class="form-control" id="nome" name="nome" placeholder="Nome" value="<?=$banner[0]['nome']?>">
	</div>
	
	<div class="form-group">
		<label for="descricao">Descrição</label>
		<input class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="<?=$banner[0]['descricao']?>">
	</div>
	
	<div class="form-group">
		<label for="url">Url</label>
		<input class="form-control" id="url" name="url" placeholder="Url" value="<?=$banner[0]['url']?>">
	</div>
	
	<button class="btn btn-primary">Editar</button>
	
</form>
<?php 
if ($_POST){
$query = $conexao->prepare('UPDATE banners SET nome = :nome ,descricao = :descricao, url = :url where id = :id');
$banner = [
':nome'=>$_POST['nome'],
':descricao'=>$_POST['descricao'],
':url'=>$_POST['url'],
':id'=>$banner[0]['id'],

];
$query->execute($banner);
if ($query->execute($banner)){
		header('location:?route=banners');
	}else
	{
		echo "erro ao atualizar o banner";
	}




}




 ?>

