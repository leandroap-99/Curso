<?php  
$conexao = new PDO ('pgsql:host = localhost;dbname = pdo2','dexter','123456');

$alunos = $conexao->query('SELECT * FROM alunos');
$alunos = $alunos->fetchall(PDO::FETCH_ASSOC);
echo '<pre>';
foreach ($alunos as $aluno){
	echo "NOME: ".$aluno['nome']." SOBRENOME: ".$aluno['sobrenome']." EMAIL: ".$aluno['email'];
	echo "<br>";


}

//var_dump($alunos);


?>