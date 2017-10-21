<!DOCTYPE html>
<html>
<head>
	<title>500</title>
</head>
<body>

<h1 style="" class = "">Meu Formulario:</h1>

<form action="#" method="POST">
	<p>
		<label>Nome:</label>
		<input type="text" name="nome" placeholder='Lucas'>
	</p>
	<p>
		<label>Email:</label>
		<input type="email" placeholder="email@email.com" name="email">
	</p>
	<p>
		<label>Senha:</label>
		<input type="password" name="senha">
	</p>

	<input type="submit" value="Enviar">

</form>

<?php 

if ($_POST) {

	if ($_POST['nome'] == '') {
		echo 'Nome Inválido <br>';
	}
	var_dump($_POST);
// 	echo $_POST['nome'] . '<br>';
// 	echo $_POST['email'];
}

var_dump($_GET);
	

 ?>

</body>
</html>
