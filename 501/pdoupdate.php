<?php  
$conexao = new PDO ('pgsql:host = localhost;dbname = pdo2','dexter','123456');

$query = $conexao->prepare('UPDATE alunos SET nome = :nome where id = :id');
$pessoa = [
':nome'=>'novonome',
':id'=>'2'
];
$query->execute($pessoa);

//var_dump($alunos);


?>