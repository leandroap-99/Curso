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
		echo "<h1> Banners </h1>";
		$conexao = new PDO ('pgsql:host = localhost;dbname = dexter_lite','dexter','123456');
		$banners = $conexao->query('SELECT * FROM banners');
		$banners = $banners->fetchall(PDO::FETCH_ASSOC);
			echo "<table class = 'table table-striped'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>id</th>";
			echo "<th>Nome</th>";
			echo "<th>descricao</th>";
			echo "<th>url</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
		foreach ($banners as $banner){
			
			echo "<tr>";
			echo '<td>'.$banner['id'].'</td>';
			echo '<td>'.$banner['nome'].'</td>';
			echo '<td>'.$banner['descricao'].'</td>';
			echo '<td>'.$banner['url'].'</td>';
			echo "</tr>";
			
		}
		echo "</tbody>";
			echo "</table>";
		break;
		case 'inserir_banner':
	
		?>
		
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
	$conexao = new PDO ('pgsql:host = localhost;dbname = dexter_lite','dexter','123456');

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