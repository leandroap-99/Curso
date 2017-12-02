<?php  
$conexao = new PDO ('pgsql:host = localhost;dbname = dexter_lite','dexter','123456');

$banners = $conexao->query('SELECT * FROM banners');
$banners = $banners->fetchall(PDO::FETCH_ASSOC);
echo '<pre>';
foreach ($banners as $banner){
	echo "NOME: ".$aluno['nome']." SOBRENOME: ".$aluno['sobrenome']." EMAIL: ".$aluno['email'];
	echo "<br>";


}
