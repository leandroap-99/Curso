<?php  
$conexao = new PDO ('pgsql:host = localhost;dbname = pdo2','dexter','123456');

$query = $conexao->prepare('INSERT INTO alunos (nome,sobrenome,email) VALUES (:nome,:sobrenome,:email)');
$pessoa = [
':nome'=>'sidnei',
':sobrenome'=>'Magal',
':email'=>'sidnei@mail.com'
];
$query->execute($pessoa);

//var_dump($alunos);


?>