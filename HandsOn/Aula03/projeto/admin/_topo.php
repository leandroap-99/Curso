<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<?php include_once '../include/funcs.php'; ?>
	<?php 

	session_start();

	if (!$_SESSION['logado']) {
		header('Location: ../login.php');
	}
	

	 ?>

</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="collapse navbar-collapse">
  <ul class="nav navbar-nav">
  	<li><a href="index.php">HOME</a></li>
  	<li><a href="servicos.php">SERVIÇOS</a></li>
  	<li><a href="contato.php">CONTATO</a></li>
  	<li><a href="logout.php">LOGOUT</a></li>
  </ul>
  </div>
</nav>

<div class="container">