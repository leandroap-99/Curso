<?php 

include_once 'dados.php';

function verificaUsuario($dados,$usuarios){
	

	if (!isset($dados['email'])) {
		return false;
	}
	if (!isset($dados['senha'])) {
		return false;
	}

	foreach ($usuarios as $usuario) {
		if (($dados['email'] == $usuario['email']) && ($dados['senha'] == $usuario['senha'])) {
			
			session_start();
			$_SESSION['logado'] = true;
			$_SESSION['usuario'] = $usuario['nome'];

			return true;
		}
	}
}