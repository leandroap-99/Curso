<?php  
$conexao = new PDO ('pgsql:host = localhost;dbname = pdo2','dexter','123456');

$query = $conexao->prepare('DELETE FROM alunos WHERE id = :id');
$pessoa = [
':id'=>'1'
];
$query->execute($pessoa);

//var_dump($alunos);


?>