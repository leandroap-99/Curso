<?php

	$query = $conexao->prepare('DELETE FROM banners WHERE id = :id');

	$deletebanner = [
	':id'=>$_GET['id']
	
	];
if ($query->execute($deletebanner)){
		header('location:?route=banners');
	}else
	{
		echo "erro ao excluir o banner";
	}

