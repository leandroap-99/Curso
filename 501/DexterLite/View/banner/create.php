	
	<h1>Novo Banner</h1><br>
		
       <form action="" method="POST">
	
	<div class="form-group">
		<label for="nome">Nome</label>
		<input class="form-control" id="nome" name="nome" placeholder="Nome" required>
	</div>
	
	<div class="form-group">
		<label for="descricao">Descrição</label>
		<input class="form-control" id="descricao" name="descricao" placeholder="Descrição" required>
	</div>
	
	<div class="form-group">
		<label for="url">Url</label>
		<input class="form-control" id="url" name="url" placeholder="Url" required>
	</div>
	
	<button class="btn btn-primary">Criar</button>
	
</form>

<?php


if ($_POST){

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$url = $_POST ['url'];
	/*$conexao = new PDO ('pgsql:host = localhost;dbname = dexter_lite','dexter','123456');*/

	$query = $conexao->prepare('INSERT INTO banners (nome,descricao,url) VALUES (:nome,:descricao,:url)');

	$novobanner = [
	':nome'=>$nome,
	':descricao'=>$descricao,
	':url'=>$url
	];
if ($query->execute($novobanner)){
		header('location:?route=banners');
	}else
	{
		echo "erro ao inserir o banner";
	}

}